<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class GuestController extends Controller
{
    
    public function index()
    {
        $guests = Guest::with('companions')->get()  ;

        $guests->each(function ($guest) {
            $guest->companions_adult = $guest->companions->where('age', '>=', 18)->count();
            $guest->companions_children = $guest->companions->where('age', '<', 18)->count();
        });

        return view('guest.index',
        [
            'guests' => $guests
        ]);
    }

    public function show(Request $request, int $id){
        $guest = Guest::findOrFail($id);

        $companions = $guest->companions;
        $companionsCount = $companions->count();
        

        return view('guest.show', [
            'guest' => $guest,
            'companionsCount' => $companionsCount,
            'companions' => $companions,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:225',
            'phone' => 'required|integer',
        ]);

        try {
            Guest::create([
                'wedding_id' => 1,
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'rsvp_token' => Str::random(32),
                'rsvp_status' => 'pending',
            ]);

            Log::channel('activity')->info(auth()->user()->name . " added a new guest ({$request->name})");

            return redirect()->back()->with('success', 'Convidado adicionado.');
        } catch (\Throwable $e) {
            Log::channel('activity')->error(auth()->user()->name . " failed to add guest ({$request->name}): " . $e->getMessage());

            return redirect()->back()->with('error', 'Erro ao adicionar convidado.');
        }
    }

    public function delete(int $id) : JsonResponse
    {
        $guest = Guest::find($id);

        if (!$guest) {
            return response()->json(['success' => false, 'message' => 'Convidado não encontrado'], 404);
        }

        $guestName = $guest->name;
        try {
            $guest->delete();

            Log::channel('activity')->info(auth()->user()->name . " deleted guest ({$guestName})");

            return response()->json(['success' => true]);
        } catch (\Throwable $e) {
            Log::channel('activity')->error(auth()->user()->name . " failed to delete guest ({$guestName}): " . $e->getMessage());

            return response()->json(['success' => false, 'message' => 'Erro ao excluir convidado'], 500);
        }
    }

    public function getTokenGuest( int $id)
    {
        $guest = Guest::find($id);

        dd($guest->rsvp_token);
    }

    

}

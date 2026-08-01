<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class GuestController extends Controller
{
    
    public function index()
    {
        $guests = Guest::all();

        return view('guest.index',
        [
            'guests' => $guests
        ]);
    }

    public function store(Request $request)
    {   
        $request->validate([
            'name' => 'required|string|max:225',
            'email' => 'required|string|max:225',
            'phone' => 'required|integer',
        ]);

        $guestSave = Guest::create([
            'wedding_id' => 1,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'rsvp_status' => 'pending',
        ]);

        return redirect()->back()->with('success', 'Convidado adicionado.');
    }

    public function delete($id) : JsonResponse
    {
        $guest = Guest::find($id);

        if (!$guest) {
            return response()->json(['success' => false, 'message' => 'Convidado não encontrado'], 404);
        }

        $guest->delete();

        return response()->json(['success' => true]);
    }

    

}

<?php

namespace App\Http\Controllers;

use App\Models\Companion;
use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class CompanionController extends Controller
{

    public function show(Request $request, $id)
    {
        $companion = Companion::findOrFail($id);

        return view('guest.show', [
            'companion' => $companion,
        ]);
    }

    public function store(Request $request, int $id)
    {
        $guest = Guest::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:225',
            'age' => 'required|string',
        ]);

        try{
            $companion = Companion::create([
                'guest_id' => $id,
                'name' => $request->name,
                'age' => $request->age,
            ]);

            Log::channel('activity')->info('Companion created', [
                'companion_id' => $request->id,
                'companion_name' => $request->name,
                'guest_id' => $id,
                'guest_name' => $guest->name,
                'user_id' => auth()->id(),
                'user_name' => auth()->user()?->name,
            ]);

            return redirect()->back()->with('success', 'Acompanhante salvo com sucesso.');

        }catch(\Throwable $e){
            Log::channel('activity')->error('Failed to create companion', [
                'error' => $e->getMessage(),
                'user_id' => auth()->id(),
                'user_name' => auth()->user()?->name,
            ]);

            return redirect()->back()->with('error', 'Ocorreu um erro ao adicionar um acompanhante. Tente novamente mais tarde.');
        }
    }

    public function delete(Companion $companion)
    {
        $companion->delete();

        Log::channel('activity')->info('Companion Deleted', [
                'companion_id' => $companion->id,
                'companion_name' => $companion->name,
                'guest_id' => $companion->guest->id,
                'guest_name' => $companion->guest->name,
                'wedding_id' => $companion->guest->wedding_id,
                'user_id' => auth()->id(),
                'user_name' => auth()->user()?->name,
            ]);


        return back()->with('success', 'Acompanhante removido com sucesso.');
    }

}
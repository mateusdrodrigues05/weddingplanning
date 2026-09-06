<?php

namespace App\Http\Controllers\invite;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Models\Guest;
use App\Models\Companion;

class InviteController extends Controller
{

    // public function index( Guest $guest)
    // {
    //     return view('invite.invite', [
    //         'guest' => $guest,
    //     ]);
    // }

    public function store(Request $request, Guest $guest)
    {
        $validated = $request->validate([
            'guest_has_allergy' => 'boolean',
            'guest_allergy_description' => 'nullable|string',
            'companions' => 'array',
            'companions.*.name' => 'required|string|max:255',
            'companions.*.age_bracket' => 'required|in:under3,under12,over12',
            'companions.*.has_allergy' => 'boolean',
            'companions.*.description' => 'nullable|string',
        ]);

        $data = $request->all();
        //$companions = $data['companions'] ?? [];
        //$allergies = $data['allergies'] ?? [];

        //Update MainGuest Data
        if($data['guest_has_allergy'] == 0){
            $guest->update([
                'rsvp_status' => 'confirmed',
            ]);
        }else{
            $guest->update([
                'rsvp_status' => 'confirmed',
                'allergies' => $data['guest_allergy_description']
            ]);
        }


        $guest->companions()->delete();

        //Update Companions Data
        foreach($data['companions'] as $companion){
            Companion::create([
                'guest_id' => $guest->id,
                'name' => $companion['name'],
                'age' => $companion['age_bracket'],
                'has_allergies' => $companion['has_allergy'] ?? false,
                'allergies' => $companion['description'] ?? null,
            ]);
        }
        
        return redirect()->route('invite.show', $guest);
    }

    public function show(Guest $guest)
    {
        return match ($guest->rsvp_status) {
            'pending'   => view('invite.invite', ['guest' => $guest]),
            'confirmed' => view('invite.confirmed', ['guest' => $guest]),
            'declined'  => view('invite.declined', ['guest' => $guest]),
            default     => abort(404),
        };
    }

}

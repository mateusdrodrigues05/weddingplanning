<?php

namespace App\Http\Controllers\invite;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Models\Guest;
use App\Models\Companion;

use function PHPUnit\Framework\isEmpty;

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
        if ($guest->rsvp_status !== 'pending') {
            abort(403, 'Este convite já foi respondido.');
        }

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
        $companions = $data['companions'] ?? [];
        // Determine contact field based on type
        $contactData = $data['contact_type'] === 'email'
            ? ['email' => $data['contact_value']]
            : ['phone' => $data['contact_value']];
        $nameGuest = $data['guest_name'];

        
        //Update MainGuest Data
        if($data['guest_has_allergy'] == 0){
            $guest->update(array_merge([
                'name' => $nameGuest,
                'rsvp_status' => 'confirmed',
            ], $contactData));
        }else{
            $guest->update(array_merge([
                'name' => $nameGuest,
                'rsvp_status' => 'confirmed',
                'allergies' => $data['guest_allergy_description']
            ], $contactData));
        }

        $guest->companions()->delete();
        
        //Update Companions Data
        foreach($companions as $companion){
            Companion::create([
                'guest_id' => $guest->id,
                'name' => $companion['name'],
                'age' => $companion['age_bracket'],
                'has_allergies' => $companion['has_allergy'] ?? false,
                'allergies' => $companion['description'] ?? null,
            ]);
        }
        
        
        
        return response()->json([
            'success' => true,
            'redirect' => route('invite.show', $guest->rsvp_token),
        ]);
    }

    public function show(Guest $guest)
    {
        $response = match ($guest->rsvp_status) {
            'pending'   => response()->view('invite.invite', ['guest' => $guest]),
            'confirmed' => response()->view('invite.confirmed', ['guest' => $guest]),
            'declined'  => response()->view('invite.declined', ['guest' => $guest]),
            default     => abort(404),
        };

        return $response->header('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0')
                    ->header('Pragma', 'no-cache');
    }
}

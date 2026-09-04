<?php

namespace App\Http\Controllers\invite;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class InviteController extends Controller
{

    public function index()
    {
        return view('invite.invite');
    }

    public function store(Request $resquest)
    {
        $data = $resquest->all();
        //main Guest
        $guest = [
            'name' => $data['guest_name'],
            'contact_type' => $data['contact_type'],
            'contact_value' => $data['contact_value'],
        ];

        $companions = $data['companions'] ?? [];
        $allergies = $data['allergies'] ?? [];

        dd($guest, $companions, $allergies);
    }

}
<?php

namespace App\Http\Controllers;

use App\Models\Companion;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class CompanionController extends Controller
{

    public function show(Request $request, $id){
        $companion = Companion::findOrFail($id);

        return view('guest.show', [
            'companion' => $companion,
        ]);
    }

}
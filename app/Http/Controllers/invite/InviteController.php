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

}
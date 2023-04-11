<?php

namespace App\Http\Controllers;

use App\Models\User;

class MainController extends Controller
{

    public function index(User $user)
    {
        return view('welcome', compact('user'));
    }
}

<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function __invoke()
    {
        $user = User::find(auth()->id());

        $vacations = Auth::user()->vacations()->get();
        return view('users.index', compact('vacations','user'));
    }
}

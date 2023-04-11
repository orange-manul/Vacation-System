<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Vacation;

class ShowController extends Controller
{
    public function __invoke()
    {
        $user = User::find(auth()->id());
        $vacations = Vacation::where('user_id', auth()->id())->get();
        return view('users.show', compact('user', 'vacations'));
    }
}

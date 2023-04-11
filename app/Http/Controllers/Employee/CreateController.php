<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\Vacation\StoreRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CreateController extends Controller
{
    public function __invoke()
    {
        $user = User::find(auth()->id());
        $vacation = Auth::user()->vacations()->get();

        return view('users.create', compact('user', 'vacation'));
    }
}

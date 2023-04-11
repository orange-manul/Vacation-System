<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Vacation;

class EditController extends Controller
{
    public function __invoke($id)
    {
        $vacation = Vacation::find($id);
//        dd($vacation->start_date);
        $vacations = Vacation::where('user_id', auth()->id())->get();
        $user = User::findOrFail(auth()->id());
        return view('users.edit', compact('vacations', 'user' , 'vacation'));
    }
}

<?php

namespace App\Http\Controllers\Managers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Vacation;

class ShowController extends Controller
{
    public function __invoke($id)
    {

        $user = User::findOrFail($id);

        $vacations = Vacation::where('user_id', $id)->get();
        $vacation = Vacation::findOrFail($id);

        return view('managers.show', compact('user','vacation', 'vacations'));
    }
}

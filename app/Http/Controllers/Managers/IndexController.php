<?php

namespace App\Http\Controllers\Managers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Vacation;

class IndexController extends Controller
{
    public function __invoke(User $user)
    {
        $users = User::with(['vacations' => function ($query) {
            $query->orderBy('start_date', 'desc');
        }])
            ->orderBy('last_name')
            ->paginate(10);

        $vacations = $user->vacations;
        return view('managers.index', compact('users', 'vacations'));
    }

}

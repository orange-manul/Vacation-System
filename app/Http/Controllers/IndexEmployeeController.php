<?php

namespace App\Http\Controllers;

use App\Models\User;

class IndexEmployeeController extends Controller
{
    public function __invoke()
    {
//        $users = User::with('vacations')->paginate(10);
        $users = User::with(['vacations' => function ($query) {
            $query->orderBy('start_date', 'desc');
        }])
            ->orderBy('last_name')
            ->paginate(10);

        return view('index', compact('users'));
    }
}

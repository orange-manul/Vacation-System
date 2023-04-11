<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\Vacation\StoreRequest;
use App\Models\Vacation;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $user_id = auth()->id();

        Vacation::create([
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'user_id' => $user_id,
        ]);
        return redirect()->route('user.index')->with('Vacation request submitted successfully!');
    }
}

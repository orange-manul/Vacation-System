<?php

namespace App\Http\Controllers\Managers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Managers\Vacation\UpdateRequest;
use App\Models\User;
use App\Models\Vacation;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, $id)
    {
        $validated = $request->validated();

        $vacation = Vacation::find($id);
        $vacation->vacation_status = $request->vacation_status;
        $vacation->save();

        return redirect()->route('managers.index', compact('vacation'))->with('success', 'Status updated successfully!');
    }
}

<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\Vacation\UpdateRequest;
use App\Models\Vacation;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, $id)
    {
        $request->validated();

        $vacation = Vacation::findOrFail($id);
        if ($vacation->user_id !== auth()->id()) {
            abort(403);
        }

        if (!$vacation->canBeEdited()) {
            return response()->json([
                'message' => 'The vacation status cannot be changed as it has already been approved or rejected.'
            ], 400);
        }

        $vacation->start_date = $request->input('start_date');
        $vacation->end_date = $request->input('end_date');

        // Проверяем, был ли уже изменен статус отпуска
        if ($vacation->vacation_status !== 'approved' && $vacation->vacation_status !== 'rejected') {
            $vacation->vacation_status = 'pending';
            $vacation->save();
        }

        return redirect()->route('user.index');
    }

}

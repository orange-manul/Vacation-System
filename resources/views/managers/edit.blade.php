@extends('layouts.template')

@section('content')
    <div class="ml-3 mt-3">
        <form action="{{ route('managers.vacation.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group w-25">
                <label for="vacation_status">Vacation status</label>
                <select class="form-control" id="vacation_status" name="vacation_status">
                    <option value="pending" {{ $user->vacation_status === 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="approved" {{ $user->vacation_status === 'approved' ? 'selected' : '' }}>Approved</option>
                    <option value="rejected" {{ $user->vacation_status === 'rejected' ? 'selected' : '' }}>Rejected</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection

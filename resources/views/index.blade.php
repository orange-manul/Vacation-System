@extends('layouts.index')
@php
    use Carbon\Carbon;
@endphp

@section('content')
    <div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Ф.И.О</th>
                <th scope="col">Дата начала отпуска</th>
                <th scope="col">Дата окончания отпуска</th>
                <th>Статус</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                @foreach($user->vacations as $vacation)
                    <tr>
                        <td>{{ $user->middle_name }} {{ $user->first_name }} {{ $user->last_name }}</td>
                        <td>{{ \Carbon\Carbon::parse($vacation->start_date)->format('d.m.Y') }}</td>
                        <td>{{ \Carbon\Carbon::parse($vacation->end_date)->format('d.m.Y') }}</td>
                        <td>{{ $vacation->vacation_status }}</td>
                    </tr>
                @endforeach
            @endforeach
            </tbody>
        </table>
    </div>
    {{ $users->links('pagination::bootstrap-4') }}
@endsection

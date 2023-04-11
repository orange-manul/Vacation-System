@extends('layouts.template')
@php
    use Carbon\Carbon;
@endphp

@section('content')
    <table class="table w-100">
        <thead>
        <tr>
            <th scope="col">ФИО</th>
            <th scope="col">Дата начала отпуска</th>
            <th scope="col">Дата окончания отпуска</th>
            <th>Статус</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            @foreach($user->vacations as $vacation)
                <tr>
                    <td>
                        <a href="{{ route('managers.vacation.show', $user->id) }}">
                            {{ $user->first_name }} {{ $user->middle_name }} {{ $user->last_name }}
                        </a>
                    </td>
                    <td>{{ \Carbon\Carbon::parse($vacation->start_date)->format('d.m.Y') }}</td>
                    <td>{{ \Carbon\Carbon::parse($vacation->end_date)->format('d.m.Y') }}</td>
                    <td>{{ $vacation->vacation_status }}</td>
                </tr>
            @endforeach
        @endforeach
        </tbody>
    </table>
    {{ $users->links('pagination::bootstrap-4') }}
@endsection

@extends('layouts.employeetemplate')
@php
    use Carbon\Carbon;
@endphp

@section('content')
    <table class="table w-100">
        <thead>
        <tr>
            <th scope="col">Дата начала отпуска</th>
            <th scope="col">Дата окончания отпуска</th>
            <th scope="col">Действие</th>
            <th scope="col">Статус</th>
        </tr>
        </thead>
        <tbody>
        <td>
        </td>
        <td>
        <tbody>
            @foreach($user->vacations as $vacation)
                <tr>
                        <td>{{ \Carbon\Carbon::parse($vacation->start_date)->format('d.m.Y') }}</td>
                    <td>{{ \Carbon\Carbon::parse($vacation->end_date)->format('d.m.Y') }}</td>
                    <td>
                    <a href="{{ route('user.edit', $user->id) }}">
                        <i class="fas fa-edit fa-lg"></i>
                    </a>
                    </td>
                    <td>
                        {{ $vacation->vacation_status }}
                    </td>
                </tr>
            @endforeach
        <td></td>
        </tbody>

    </table>
@endsection

@extends('layouts.template')

@php
    use Carbon\Carbon;
@endphp

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content mt-3">
        <div class="container-fluid ml-3 d-flex align-items-center">
            <!-- Small boxes (Stat box) -->
            {{ $user->first_name }} {{ $user->middle_name }} {{ $user->last_name }}
        </div><!-- /.container-fluid -->
        <div class="card-body">
            <div class="">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th></th>
                        <th>Дата</th>
                        <th>Статус</th>
                        <th>Действие</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($vacations as $vacation)
                        <tr>
                            <td>Начало и Конец отпуска</td>
                            <td>{{ \Carbon\Carbon::parse($vacation->start_date)->format('d.m.Y') }}
                                - {{ \Carbon\Carbon::parse($vacation->end_date)->format('d.m.Y') }}</td>
                            <td>{{ $vacation->vacation_status }}</td>
                            <td><a href="{{ route('managers.vacation.edit', [$user->id, $vacation->id]) }}"><i class="fas fa-edit"></i></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- /.content-header -->

    <!-- Main content -->

    <!-- /.content -->
@endsection

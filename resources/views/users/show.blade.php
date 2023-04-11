@extends('layouts.employeetemplate')

@section('content')
        <!-- Content Header (Page header) -->
        <section class="content mt-3" >
            <div class="container-fluid ml-3 d-flex align-items-center" >
                <!-- Small boxes (Stat box) -->
                Пользователь
                <a href="{{ route('user.edit', $user->id) }}" class="text-success ml-3 mr-3"> <i class="fas fa-edit"></i></a>
            </div><!-- /.container-fluid -->
            <div class="card-body">
                <div class="row-cols-3">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <th scope="col">Ф.И.О</th>
                        <th>Начало и Конец отпуска</th>
                        <th>Cтатус</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{ $user->middle_name }} {{ $user->first_name }} {{ $user->last_name }}</td>
                        </tr>
                        <tr>
                            <td>Начало и Конец отпуска</td>
                            <td>{{ $vacation->start_date }} - {{ $vacation->end_date }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>{{ $vacation->vacation }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
@endsection

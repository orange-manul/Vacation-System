@extends('layouts.employeetemplate')
@section('content')
    <div class="ml-4">
        <h1>Отпуск</h1>
        <form action="{{ route('user.update', $user->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="form-group w-25"><label for="start_date">Выберите дату начала отпуска:</label>
                <label for="start_date">Дата начала отпуска:</label>
                <input type="date" name="start_date" id="start_date" class="form-control" value="{{ old('start_date', $vacation->start_date ?? '')}}">
                <script>
                    const startDateInput = document.querySelector('#start_date');
                    startDateInput.addEventListener('input', function() {
                        const minDate = new Date().toISOString().split('T')[0];
                        if (this.value < minDate) {
                            this.value = minDate;
                        }
                    });
                </script>
                @error('start_date')
                {{ $message }}
                @enderror
            </div>
            <div class="form-group w-25">
                <label for="end_date">Дата окончания отпуска:</label>
                <input type="date" name="end_date" id="end_date" class="form-control"
                       max="{{ date('d-m-Y', strtotime('+1 year')) }}" value="{{ old('start_date', $vacation->start_date ?? '')}}">
                @error('end_date')
                {{ $message }}
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </form>
    </div>
@endsection

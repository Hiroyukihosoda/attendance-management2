@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/date.css') }}">
@endsection

@section('content')
<div class="date__content">
    <div class="date__header">{{ $now_format }}</div>

    <div class="todo-table">

        <div class="todo-table__inner">

            <div class="todo-table__row">
                <div class="todo-table__item">
                    <div class="update-form__item">
                    <h3>名前</h3>
                    </div>

                    <div class="update-form__item">
                    <h3>勤務開始</h3>
                    </div>

                    <div class="update-form__item">
                    <h3>勤務終了</h3>
                    </div>

                    <div class="update-form__item">
                    <h3>休憩時間</h3>
                    </div>

                    <div class="update-form__item">
                    <h3>勤務時間</h3>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @foreach ($stampings as $stamping)
    <div class="todo-table">
        <div class="todo-table__inner">
            <div class="todo-table__item">
                <div class="update-form__item">
                    <h3>{{ $user->name }}</h3>
                </div>

                <div class="update-form__item">
                    <h3>{{ $stamping['work_start_time'] }}</h3>
                </div>

                <div class="update-form__item">
                    <h3>{{ $stamping['work_end_time'] }}</h3>
                </div>

                <div class="update-form__item">
                    <h3>{{ $stamping['break_start_time'] }}</h3>
                </div>

                <div class="update-form__item">
                    <h3>{{ $stamping['break_end_time'] }}</h3>
                </div>

            </div>
        </div>

    </div>
    @endforeach
</div>




<footer class="footer">
    <div class="footer__inner">
    <a>
        Atte, inc.
    </a>
    </div>
</footer>

@endsection
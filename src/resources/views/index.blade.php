@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="attendance__alert">

</div>

<div class="attendance__content">
  <div class="login-form__heading">
    <h2>{{ $user->name }}さん お疲れ様です!</h2>
  </div>

  <div class="attendance__panel">
    <form class="attendance__button" action="/work_start" method="post">
      @csrf
      <input type="hidden" name="work_start_time" value="{{ now() }}">
      <button class="attendance__button-submit" type="datetime-local" name="work_start_time">勤務開始</button>
    </form>

    <form class="attendance__button" action="/work_end" method="post">
      @csrf
      <input type="hidden" name="work_start_time" value="{{ now() }}">
      <button class="attendance__button-submit" type="submit">勤務終了</button>
    </form>
  </div>

  <div class="attendance__panel">
    <form class="attendance__button" action="/break_start" method="post">
      @csrf
      <button class="attendance__button-submit" type="submit">休憩開始</button>
    </form>

    <form class="attendance__button" action="/break_end" method="post">
      @csrf
      <button class="attendance__button-submit" type="submit">休憩終了</button>
    </form>
</div>
</div>

  <footer class="footer">
    <div class="footer__inner">
      <a>
        Atte, inc.
      </a>
    </div>
  </footer>

@endsection
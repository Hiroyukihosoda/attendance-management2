@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/date.css') }}">
@endsection

@section('content')

<div class="date__content">
    <h1>{{ \Carbon\Carbon::now()->format("Y/m/d") }}</h1>
</div>



<footer class="footer">
    <div class="footer__inner">
    <a>
        Atte, inc.
    </a>
    </div>
</footer>

@endsection
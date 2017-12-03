@extends('layout')

@section('content')
<br><br><br>
    <div class="home">
        <h1>Welcome to Tastyrecipes {{ Auth::user()->name }}!</h1>
    </div>
@endsection
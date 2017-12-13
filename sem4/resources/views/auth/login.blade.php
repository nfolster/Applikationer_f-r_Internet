@extends('layout')

@section('content')
   <br><br><br>
    <div class="home">
        <h1 class="home">Log In</h1>
        <br>
            <form class="login" action="{{ route('login') }}" method="post">
                {{ csrf_field() }}
            <label>Email Adress:</label><br>
            <input name="email" type="email" value="{{ old('email') }}" required autofocus><br>  
            <label>Password:</label><br>
            <input name="password" type="password" required><br>
            <input name="submit" type="submit" value=" Login ">
            <br><span>  {{$errors->first()}}</span>
            </form>
    </div>
@endsection
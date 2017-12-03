@extends('layout')

@section('content')
<br><br><br>
    <div class="home">
        <h1 class="home">Sign Up</h1>
        <br>
            <form class="login" action="{{ route('register') }}" method="post">
                {{ csrf_field() }}
                <label>Enter your Name:</label><br>
                    <input name="name" type="text" value="{{ old('name') }}" required autofocus><br>
                <label>Enter your Email Adress:</label><br>
                    <input name="email" type="email" value="{{ old('email') }}" required><br>
                <label>Enter your Password:</label><br>
                    <input name="password" type="password" required><br>
                <label>Enter your Password again:</label><br>
                    <input name="password_confirmation" type="password" required><br>
                    <input name="submit" type="submit" value=" Sign Up ">
                <br><span>{{$errors->first()}}</span>
            </form>
    </div>
@endsection


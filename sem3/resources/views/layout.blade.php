
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="{{ url('css/reset.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('css/stylesheet.css') }}" >
    </head>
    <body>
        <nav class="menu">
            <ul>
                <li class="{{ ((Request::is('home')) ? 'active' : ' ') }}">
                    <a href="{{ url('/home') }}"><img alt="Home" src="img/home.png"><p>Home</p></a>
                </li><!--
             --><li class="{{ ((Request::is('meatballs','pancakes')) ? 'active' : ' ') }}">
                    <a href="{{ url('/meatballs') }}"><img  alt="Recipes" src="img/recipe.png"><p>Recipes</p></a>
                </li><!--
             --><li class="{{ ((Request::is('calendar')) ? 'active' : ' ') }}">
                    <a href="{{ url('/calendar') }}"><img  alt="Calendar" src="img/calendar.png"><p>Calendar</p></a>
                </li><!--
                    -->@if (Auth::check())<!--
                     --><li class="user"><img  alt="User" src="img/user.png"><p>{{ Auth::user()->name }}</p></li><!--
                     --><li>
                            <a href="{{ url('/logout') }}"><img  alt="log out" src="img/logout.png"><p>Log out</p></a>
                        </li><!--
                    -->@else<!--
                     --><li class="{{ ((Request::is('login')) ? 'active' : ' ') }}">
                            <a href="{{ route('login') }}"><img  alt="Log In" src="img/login.png"><p>Log In</p></a>
                        </li><!--
                     --><li class="{{ ((Request::is('register')) ? 'active' : ' ') }}">
                            <a href="{{ route('register') }}"><img  alt="Sign Up" src="img/signup.png"><p>Sign Up</p></a>
                        </li>
                    @endif
            </ul>
        </nav>

        @yield('content')

    </body>
</html>

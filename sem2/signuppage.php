<?php
include('signup.php');
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Home</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="reset.css">
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
    <body>
        <nav class="menu">
            <ul>
                <li><a class="active" href="index.php"><img alt="Home" src="resources/home.png"><p>Home</p></a></li><li>
                <a href="meatballs.php"><img  alt="Recipes" src="resources/recipe.png"><p>Recipes</p></a></li><li>
                <a href="calendar.php"><img  alt="Calendar" src="resources/calendar.png"><p>Calendar</p></a></li><li>
                <a href="loginpage.php"><img  alt="Log In" src="resources/login.png"><p>Log In</p></a></li><li class="active">
                <a href="signuppage.php"><img  alt="Sign Up" src="resources/signup.png"><p>Sign Up</p></a></li>
            </ul>
        </nav>
    <br><br><br>
    <div class="home">
        <h1 class="home">Sign Up</h1>
        <br>
            <form class="login" action="" method="post">
            <label>Enter your username:</label><br>
            <input name="username" placeholder="username" type="text"><br>
            <label>Enter your password:</label><br>
            <input name="password" placeholder="**********" type="password"><br>
            <label>Enter your password again:</label><br>
            <input name="password2" placeholder="**********" type="password"><br>
            <input name="submit" type="submit" value=" Sign Up ">
            <br><span><?php echo $error; ?></span>
            </form>
    </div>

    </body>
</html>
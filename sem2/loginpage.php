<?php
include('login.php');
if(isset($_SESSION['login_user'])){
    header("Location: ".$_SESSION['page']);
    }
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
                <li><a href="index.php"><img alt="Home" src="resources/home.png"><p>Home</p></a></li><li>
                <a href="meatballs.php"><img  alt="Recipes" src="resources/recipe.png"><p>Recipes</p></a></li><li>
                <a href="calendar.php"><img  alt="Calendar" src="resources/calendar.png"><p>Calendar</p></a></li><li class="active">
                <a href="loginpage.php"><img  alt="Log In" src="resources/login.png"><p>Log In</p></a></li><li>
                <a href="signuppage.php"><img  alt="Sign Up" src="resources/signup.png"><p>Sign Up</p></a></li>
            </ul>
        </nav>
    <br><br><br>
    <div class="home">
        <h1 class="home">Log In</h1>
        <br>
            <form class="login" action="" method="post">
            <label>Username:</label><br>
            <input name="username" placeholder="username" type="text"><br>
            <label>Password:</label><br>
            <input name="password" placeholder="**********" type="password"><br>
            <input name="submit" type="submit" value=" Login ">
            <br><span><?php echo $error; ?></span>
            </form>
    </div>

    </body>
</html>
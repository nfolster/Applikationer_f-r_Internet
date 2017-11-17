<?php
session_start();
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
                <li class="active"><a href="index.php"><img alt="Home" src="resources/home.png"><p>Home</p></a></li><li>
                <a href="meatballs.php"><img  alt="Recipes" src="resources/recipe.png"><p>Recipes</p></a></li><li>
                <a href="calendar.php"><img  alt="Calendar" src="resources/calendar.png"><p>Calendar</p></a></li><?php
                if(isset($_SESSION['login_user']))
                {
                    include('navbar_logged_in.php');
                }else{
                    include('navbar_logged_out.php');
                }
                ?>
            </ul>
        </nav>
    <br><br><br>
    <div class="home">
        <h1>Welcome to Tastyrecipes <?php echo $_SESSION['login_user'];?>!</h1>
    </div>
    </body>
</html>
<?php
session_start();
$_SESSION['page']='index.php';
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
        <h1>Welcome to Tastyrecipes.com!</h1>
        <br>
        <p class="home">
                On this website we have unique and extrodinary recipes for your enjoyment.
                But what is a recipe? A recipe is a set of instructions that
                describes how to prepare or make something, especially a culinary dish. It is also used in 
                medicine or in information technology (user acceptance). A doctor will usually begin a prescription with recipe, usually abbreviated to Rx or an equivalent symbol.
        </p>
    </div>

    </body>
</html>
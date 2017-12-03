<?php
session_start();
$_SESSION['page']='meatballs.php';
if(isset($_SESSION['login_user']))
{
    include('comments.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Recipes</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="reset.css">
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
    <body>
        <nav class="menu">
            <ul>
                <li><a href="index.php"><img alt="Home" src="resources/home.png"><p>Home</p></a></li><li class="active">
                <a href="meatballs.php"><img alt="Recipe" src="resources/recipe.png"><p>Recipes</p></a></li><li>
                <a href="calendar.php"><img alt="Calendar" src="resources/calendar.png"><p>Calendar</p></a></li><?php
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
        <nav class="recipemenu">
            <ul>
                <li><a class="active" href="meatballs.php">Meatballs</a></li>
                <li><a href="pancakes.php">Pancakes</a></li>
                <li><a>Spagetti</a></li>
                <li><a href="http://www.icecream.com/">Icecream</a></li>
                <li><a>Toast</a></li>
            </ul>
        </nav>
        <div class="recipe">
        <img src="resources/meatballs.jpg" alt="Picture of Meatballs">
                
        <h1>Our Signature Meatballs</h1>
                <br>
                <h2>Ingredients</h2>
                    <ul>
                        <li>1 pack of <i>Our Signature Meatballs</i></li>
                    </ul>
                    <br>
                <h2>Directions</h2>
                    <ol>
                        <li>Remove the meatballs from the package. and put on a plate.</li>
                        <li>Microwave for 2 minutes.</li>
                        <li>Enjoy!</li>
                    </ol>
                    <br>
                <h3>Nutrition facts</h3>
                    <ul>
                        <li>Total Fat 30.69g - 60%</li>
                        <li>Saturated Fat 1.394g - 0.7%</li>
                        <li>Polyunsaturated Fat 0.163g</li> 
                        <li>Monounsaturated Fat 1.57g</li> 
                        <li>Cholesterol 21mg - 0.2%</li>
                        <li>odium 134mg - 0.6%</li>
                        <li>Potassium 60mg</li>
                        <li>Total Carbohydrate 2.12g - 0.1%</li>
                        <li>Dietary Fiber 0.1g - 0%</li>
                        <li>Sugars 80.42g - 38%</li> 
                        <li>Protein 3.47g</li> 
                    </ul>
                <br><br><br>
                <div class="comment">
                <h3>Comments</h3>
                <ul class="comment">
                <?php include('readComments.php') ?>
                </ul>
                <?php 
                if(isset($_SESSION['login_user']))
                {
                include('writeComment.php');
                } 
                ?>
            </div>
        </div>
    </body>
</html>
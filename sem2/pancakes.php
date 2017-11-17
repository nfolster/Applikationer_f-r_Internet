<?php
session_start();
$_SESSION['page']='pancakes.php';
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
        <nav class="recipemenu">
            <ul>
                <li><a href="meatballs.php">Meatballs</a></li>
                <li><a class="active" href="pancakes.php">Pancakes</a></li>
                <li><a>Spagetti</a></li>
                <li><a>Icecream</a></li>
                <li><a>Toast</a></li>
            </ul>
        </nav>
        <div class="recipe">
        <img src="resources/pancakes.jpg" alt="Picture of pancakes">
                <h1>Breakfast Pancakes</h1>
                <br>
                <h2>Ingredients</h2>
                    <ul>
                            <li>3 eggs</li>
                            <li>2 slices of bread</li>
                            <li>10g butter</li>
                            <li>2 slices of cheese</li>
                            <li>4 dl milk</li>
                            <li>2 cups of cereal</li>
                    </ul>
                    <br>
                <h2>Directions</h2>
                    <ol>
                        <li>Toast the bread, and add the butter and cheese on them.</li>
                        <li>Heat a frying pan and crack the eggs in the frying pan and cook the eggs 
                            until the whites and yolk reach the desired consistency for your 
                            average sunny side upp eggs.
                        </li>
                        <li>Add milk and cereal in a bowl.</li>
                        <li>Mix the everything together in a bowl and fry in frying pan.</li>
                        <li>Enjoy your breakfast flavored pancakes!</li>
                    </ol>
                    <br>
                <h3>Nutrition facts</h3>
                    <ul>
                        <li>Total Fat 3.69g - 0.1%</li>
                        <li>Saturated Fat 1.394g - 0.1%</li>
                        <li>Dietary Fiber 0.1g - 0.1%</li>
                        <li>Sugars 8.42kg - 99%</li> 
                        <li>Protein 3.47g - 0.1%</li> 
                    </ul>
                <br><br>
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
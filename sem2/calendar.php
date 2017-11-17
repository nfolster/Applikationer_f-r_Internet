<?php
session_start();
$_SESSION['page']='calendar.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Calendar</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="reset.css">
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
    <body>
        <nav class="menu">
            <ul>
                <li><a href="index.php"><img alt="Home" src="resources/home.png"><p>Home</p></a></li><li>
                <a href="meatballs.php"><img alt="recipe" src="resources/recipe.png"><p>Recipes</p></a></li><li class="active">
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
        <br><br>

        <div class="wrapper calendar">
            <table>
                <tr>
                    <th>Monday</th>
                    <th>Tuesday</th>
                    <th>Wednsday</th>
                    <th>Thursday</th>
                    <th>Friday</th>
                    <th>Saturday</th>
                    <th class="right">Sunday</th>
                </tr>
                <tr>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                </tr>
                <tr>
                        <td>6</td>
                        <td class="linked pancake"><a href="pancakes.php"><p>7</p></a></td>
                        <td class="active">8</td>
                        <td>9</td>
                        <td>10</td>
                        <td>11</td>
                        <td>12</td>
                </tr>
                <tr>
                        <td>13</td>
                        <td>14</td>
                        <td>15</td>
                        <td>16</td>
                        <td>17</td>
                        <td>18</td>
                        <td>19</td>
                </tr>
                <tr>
                        <td class="linked meatballs"><a href="meatballs.php"><p>20</p></a></td>
                        <td>21</td>
                        <td>22</td>
                        <td>23</td>
                        <td>24</td>
                        <td>25</td>
                        <td>26</td>
                </tr>
                <tr>
                        <td>27</td>
                        <td>28</td>
                        <td>29</td>
                        <td>30</td>
                        <td>31</td>
                        <td></td>
                        <td></td>
                </tr>
            </table>
        </div>
    </body>
</html>
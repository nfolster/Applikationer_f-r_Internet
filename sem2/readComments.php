<?php
session_start();

$db = new PDO("mysql:host=localhost;dbname=TastyRecipes", "root", "root");

$page = $_SESSION['page'];
$query = $db->prepare("select * from comments where page='$page'");
$query->execute();
while ($row = $query->fetch())
    {   
        if(isset($_SESSION['login_user']) && $_SESSION['login_user']==$row['author'])
        {
            echo '<li>' . htmlspecialchars($row['content']) . '<form class="delete" action="" method="post"><input name="delete"type="image" src="resources/delete.png"><input type="hidden" name="stamp" value="'.$row['timestamp'].'"></form><hr><p>' . $row['timestamp'] . ' by <b>' . htmlspecialchars($row['author']) . '</b></p></li>';
        }else
        {
            echo '<li>' . htmlspecialchars($row['content']) . '<hr><p>' . $row['timestamp'] . ' by <b>' . htmlspecialchars($row['author']) . '</b></p></li>';
        }
    } 
$query = null;

    

?>
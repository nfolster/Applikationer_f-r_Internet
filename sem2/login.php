<?php
session_start(); 
$error=''; 
if (isset($_POST['submit'])) 
{
    if (empty($_POST['username']) || empty($_POST['password'])) 
    {
        $error = "Username or Password is invalid";
    }
    else
    {
        // Definera username och password
        $username=$_POST['username'];
        $password=$_POST['password'];
        // Connecta till databasen
        $connection = mysql_connect("localhost", "root", "root");
        
        // Välj databas
        $db = mysql_select_db("TastyRecipes", $connection);
        //hämta info
        $query = mysql_query("select * from user where password='$password' AND username='$username'", $connection);
        $rows = mysql_num_rows($query);
        if ($rows == 1) 
            {
                $_SESSION['login_user']=htmlspecialchars($username); 
                header("Location: ".$_SESSION['page']); 
            } 
        else 
            {
                $error = "Username or Password is invalid";
            }
        mysql_close($connection);
    }
}
?>
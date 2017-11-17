<?php
session_start(); 
$error=''; 
if (isset($_POST['submit'])) 
{
    if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['password2'])) 
    {
        $error = "All fields must be filled in";
    }else if($_POST['password'] != $_POST['password2']){
        $error = "Different passwords entered";
    }else
    {
        // Definera username och password
        $username=$_POST['username'];
        $password=$_POST['password'];
        // Connecta till databasen
        $db = new PDO("mysql:host=localhost;dbname=TastyRecipes", "root", "root");
        
        // Välj databas
        $query = $db->prepare("select * from user where username='$username'");
        $query->execute();
        $rows = $query->rowCount();
        if ($rows == 0) 
            {
                //lägg in ny info
                $query = $db->prepare("insert into user(username, password) values (?,?)");
                $query->bindParam(1, $username);
                $query->bindParam(2, $password);
                $query->execute();
                $_SESSION['login_user']=htmlspecialchars($username);
                header("location: signupsucess.php");
            } 
        else 
            {
                $error = "Username already exists!";
            }
            $query = null;
    }
}
?>
<?php
session_start(); 

$error=''; 
if (isset($_POST['submit'])) 
{
    if (empty($_POST['content'])) 
    {
        $error = "Comments must contain 1-60 characters.";
    }
    else
    {
        $content=$_POST['content'];
        $content = trim($content);
        // Connecta till databasen
        $db = new PDO("mysql:host=localhost;dbname=TastyRecipes", "root", "root");
        $author = $_SESSION['login_user'];
        $page = $_SESSION['page'];
        // Välj databas
        $query = $db->prepare("insert into comments(content, author, page) values (?,?,?)");
        $query->bindParam(1, $content);
        $query->bindParam(2, $author);
        $query->bindParam(3, $page);
        $query->execute();     
        $query = null;
        header("Location: ".$_SESSION['page']);
    }
}
if (isset($_POST['delete_x'])) {
    $db = new PDO("mysql:host=localhost;dbname=TastyRecipes", "root", "root");
    $timestamp = $_POST['stamp'];
    $query = $db->prepare("delete from comments where timestamp=:timestamp");
    $query->bindParam(':timestamp', $timestamp);
    $query->execute();     
    $query = null;
}

?>
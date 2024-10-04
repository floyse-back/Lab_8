<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Register</h1>
    <form action="../page/register.php" method="post">
        <h2>ПІБ</h2>
        <input type="text" name="username">
        <h2>email</h2>
        <input type="email" name="email">
        <h2>password</h2>
        <input type="password" name="password">
        <input type="submit">
    </form>
</body>
</html>
<?php
    include_once("db_connect.php");
    session_start();
    if(isset($_POST["username"]) && isset($_POST["password"])&& isset($_POST["email"])){
        $DataBase=new db_connect;
        $DataBase->insert_user($_POST["username"],$_POST["email"],$_POST["password"]);
        $_SESSION['loggedin']=true;
        $_SESSION['email'] = $_POST["email"];
        $_SESSION['username']= $_POST["username"];
        header("Location: comments.php");
        }


?>
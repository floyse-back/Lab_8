<?php
    session_start();
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
        header("Location: register.php"); 
        exit;
    }
    include_once("db_connect.php");
    $DataBase = new db_connect();
    $comments = $DataBase->SELECT_COMMENTS();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Залишити відгук</h1>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <input type="text" name="comment">
            <input type="submit">
        </form>
        <h1>Всі відгуки</h1>
        <h3 class="js-content">Я</h3>
    </div>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post"><input type="submit" name="LogOut" value="Log Out"></form>
    <script src="../script/comments.js"></script>
</body>
</html>
<?php
    if ($_SERVER['REQUEST_METHOD']=="POST"){
        if (isset($_POST["comment"])){
            $comment = $_POST["comment"];
            $DataBase=new db_connect;
            $DataBase->INSERT_COMMENTS($_SESSION["username"], $comment);
            header("Location: " . $_SERVER['PHP_SELF']);
            exit; 
    }
        if(isset($_POST['LogOut'])){
            $_SESSION=array();
            session_destroy();
            header('Location: register.php');
        }
    }
?>
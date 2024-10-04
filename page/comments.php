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
        <?php if (!empty($comments)): ?>
            <ul>
                <?php foreach ($comments as $comment): ?>
                    <li><strong><?php echo htmlspecialchars($comment['username']); ?>:</strong> <?php echo htmlspecialchars($comment['comment']); ?></li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Відгуків поки що немає.</p>
        <?php endif; ?>
    </div>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post"><input type="submit" name="LogOut" value="Log Out"></form>
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
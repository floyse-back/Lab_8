<?php
session_start(); // Стартуємо сесію
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("Location: admin.php"); // Якщо вже увійшли, перенаправляємо на admin.php
    exit;
}

// Перевірка, чи була спроба входу
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $admin_username = 'admin';
    $admin_password = 'password';

    if ($username === $admin_username && $password === $admin_password) {
        $_SESSION['loggedin'] = true; 
        header("Location: admin.php"); 
        exit;
    } else {
        $error = "Неправильний логін або пароль!";
    }
}
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Вхід адміністратора</title>
</head>
<body>
    <h2>Вхід адміністратора</h2>
    <?php if (isset($error)) { echo "<p style='color: red;'>$error</p>"; } ?>
    <form method="POST">
        <label for="username">Логін:</label>
        <input type="text" name="username" required>
        <br>
        <label for="password">Пароль:</label>
        <input type="password" name="password" required>
        <br>
        <input type="submit" value="Увійти">
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="questionnaire.php" method="post">
        <h2>Анкета</h2>
        <h3>ПІБ</h3>
        <input type="text" name="username">
        <h3>email</h3>
        <input type="email" name="email">
        <h3>1.Що таке алгоритм?</h3>
        <section>
            <input name="question1" checked value="A" type="radio"><label for="">А) Інструкція для виконання задачі.</label>
            <br>
            <input name="question1" value="B" type="radio"><label for="">Б) Програма на комп'ютері.</label>
            <br>
            <input name="question1" value="C" type="radio"><label for="">В) Файл, який містить дані.</label>
            <br>
        </section>
        <h3>2.Який з наступних типів даних використовується для зберігання цілих чисел?</h3>
        <section>
            <input name="question2" checked value="A" type="radio"><label for="">А) float</label>
            <br>
            <input name="question2" value="B" type="radio"><label for="">Б) int</label>
            <br>
            <input name="question2" value="C" type="radio"><label for="">В) string</label>
            <br>
        </section>
        <h3>3.Як називається процес перевірки програми на наявність помилок?</h3>
        <section>
            <input name="question3" checked value="A" type="radio"><label for="">А) Компіляція</label>
            <br>
            <input name="question3" value="B" type="radio"><label for="">Б) Дебагінг</label>
            <br>
            <input name="question3" value="C" type="radio"><label for="">В) Виконання</label>
            <br>
        </section>
        <h3>4.Що таке HTML?</h3>
        <input type="text" name="question4">
        <h3>5.Як називається пристрій, що обробляє дані в комп'ютері?</h3>
        <input type="text" name="question5">
        <br>
        <br>
        <input type="submit">

    </form>
    <a href="">Назад</a>
    <a href="./admin.php">Admin</a>
</body>
</html>
<?php
    include_once "db_connect.php";
    if ($_SERVER['REQUEST_METHOD']=="POST"){
        $check=0;
        if(empty($_POST['username'])){
            echo "Без ПІБ не прийму <br>";
        }
        if (empty($_POST['email'])){
            echo "Без email не прийму <br>";
        }
        if (empty($_POST['question4'])){
            echo "Дай хоча б якусь відповідь на 4 запитання <br>";
        }
        if (empty($_POST['question5'])){
            echo "Дай хоча б якусь відповідь на 5 запитання <br>";
        }
        if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['question4']) && !empty($_POST['question5'])){
            $time=date('Y-m-d H:i:s');
            $mySQLBASE=new db_connect;
            $mySQLBASE->insert_into_ank($_POST["username"],$_POST["email"],$_POST["question1"],$_POST["question2"],$_POST["question3"],$_POST["question4"],$_POST["question5"],$time);
        }
    }
    


?>
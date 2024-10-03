<?php
session_start();


include_once "./db_connect.php";
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php"); 
    exit;
}
$MySQL=new db_connect;
$result=$MySQL->select_from_ask();

?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Адмін панель - Коментарі</title>
</head>
<>
    <h1>Керування коментарями</h1>
    
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Ім'я</th>
            <th>email</th>
            <th>Питання №1</th>
            <th>Питання №2</th>
            <th>Питання №3</th>
            <th>Питання №4</th>
            <th>Питання №5</th>
            <th>Дата</th>
            <th>Дія</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['question1']; ?></td>
            <td><?php echo $row['question2']; ?></td>
            <td><?php echo $row['question3']; ?></td>
            <td><?php echo $row['question4']; ?></td>
            <td><?php echo $row['question5']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td>
                <form method="POST" action="admin.php">
                    <input type="hidden" name="delete_anketa" value="<?php echo $row['id']; ?>">
                    <button type="submit" name="delete_comment">Видалити</button>
                </form>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>

    <br>
    <form method="POST" action="admin.php">
        <button type="submit" name="export">Експортувати коментарі у CSV</button>
    </form>
    <a href="./questionnaire.php">Анкета</a>
</body>
</html>
<?php
    if(isset($_POST['delete_anketa'])){
        $MySQL->delete_anketa($_POST['delete_anketa']);
        header("Location: admin.php");
    }
    if(isset($_POST['export'])){
        $anketa=$MySQL->select_from_ask();
        $filename='user_anketa.csv';
        $fp = fopen($filename, 'w','utf-8');
        fwrite($fp, "\xEF\xBB\xBF");
        fputcsv($fp,["Айді","ПІБ","Імейл",'Питання1','Питання2','Питання3','Питання4','Питання5','дата'],';');
        foreach($anketa as $ank){
            $ank = array_map(function($field) {
                return mb_convert_encoding($field, 'UTF-8', 'auto'); // Конвертуємо кожне поле окремо
            }, $ank);
            fputcsv($fp,$ank,';');
            
        }
        fclose($fp);
        echo'<a href="./user_anketa.csv">Завантажити файл</a>';
    }
?>

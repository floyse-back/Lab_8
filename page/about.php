<?php
    require("../function_date/thisdate.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10 смішних котів</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <div class="wrapper">
        <header><a href="./about.php">Про нас</a>   <a href="../index.php">Головна сторінка</a>   <a href="./catalog_cats.php">Каталог</a></header>
        <main>
            <div class="left-container"></div>
            <div class="main-container">
                <h2>Сьогодні: <?php echo thisdate(); ?></h2>
                <h1 style="text-align: center;">Про нас</h1>
                <p>Ласкаво просимо на наш сайт, присвячений найсмішнішим котикам! Ми — команда ентузіастів, які просто обожнюють котів і хочуть поділитися з вами їхніми веселими пригодами.<br> Наша місія — дарувати вам усмішки і гарний настрій через фото, відео і кумедні історії про наших пухнастих друзів.</p>
        
                <p>Ми створили цей сайт, щоб всі любителі котиків мали можливість не лише насолодитися смішними моментами з життя котів,<br> а й ділитися своїми власними історіями та фото. Незалежно від того, чи ви досвідчений власник кота, чи просто любите дивитися на ці милі створіння в інтернеті, ви знайдете тут щось для себе!</p>
                
                <p class="highlight">Наша мета — об’єднати котолюбів у всьому світі та створити простір,<br> де кожен зможе підняти собі настрій та знайти однодумців.</p>        
            </div>
            <div class="right-container"></div>
        </main>
        <footer>
            <p>Авторські права © 2024 Смішні коти</p>
        </footer>
    </div>
    <script src="./script/main.js"></script>

</body>
</html>
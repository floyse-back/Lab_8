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
        <header><a href="../page/about.php">Про нас</a>   <a href="../index.php">Головна сторінка</a>   <a href="../page/catalog_cats.php">Каталог</a></header>
        <main>
            <div class="left-container"></div>
            <div class="main-container">
                <h2>Сьогодні: <?php echo thisdate(); ?></h2>
                <h1>Шокований кіт</h1>
                <img class="avatar-img" src="../img/shocked.png" alt="Шокований кіт" width="300">
                <p>Цей кіт відомий своєю постійною здивованою мордочкою. Здається, він завжди шокований всім, що відбувається навколо нього — чи це шум пилососа, чи просто нова іграшка.</p>
                <iframe width="914" height="514" src="https://www.youtube.com/embed/3TIVo-o9dqU" title="#cat 😂😮" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
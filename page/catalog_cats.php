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
        <header><a href="../page/about.php">Про нас</a>   <a href="../index.php">Головна сторінка</a>   <a href="./catalog_cats.php">Каталог</a></header>
        <main>
            <div class="left-container"></div>
            <div class="main-container">
                <h2>Сьогодні: <?php echo thisdate(); ?></h2>
                <h1>Каталог смішних котів</h1>

                <ul>
                    <li>
                        <h2 style="text-align: center;"><a href="../catpage/cat1.php">Кіт-детектив</a></h2>
                        <ul>
                            <li><img src="../img/detective.jpg" alt="Кіт-детектив"></li>
                            <li>Цей кіт відомий своїм невтомним полюванням на власний хвіст. Він завжди виглядає, ніби намагається розгадати таємницю, навіть якщо це просто миска з їжею.</li>
                        </ul>
                    </li>
            
                    <li>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h2 style="text-align: center;"><a href="../catpage/cat2.php">Шокований-кіт</a></h2>
                        <ul>
                            <li><img src="../img/shocked.png" alt="Товстенький шокований кіт"></li>
                            <li>Цей кіт відомий своєю постійною здивованою мордочкою. Здається, він завжди шокований всім, що відбувається навколо нього — чи це шум пилососа, чи просто нова іграшка.</li>
                        </ul>
                    </li>
            
                    <li>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h2 style="text-align: center;"><a href="../catpage/cat3.php">Співучий-кіт</a></h2>
                        <ul>
                            <li><img src="../img/omg_cats.png" alt="Товстенький біло-чорний кіт"></li>
                            <li>Цей пухкенький біло-чорний кіт не тільки виділяється своїми розмірами, але й дивує всіх своїм унікальним звуком, який нагадує щось середнє між муркотінням і співом пташки. Його цікаві звуки роблять його ще більш чарівним!</li>
                        </ul>
                    </li>
                </ul>
                <table>
                    <tr>
                        <th>№</th>
                        <th>Назва</th>
                        <th>Рейтинг</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><a href="../catpage/cat1.php">Кіт-детектив</a></td>
                        <td>9.8</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><a href="../catpage/cat2.php">Шокований-кіт</a></td>
                        <td>9.6</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><a href="../catpage/cat3.php">Співучий-кіт</a></td>
                        <td>9.5</td>
                    </tr>
                </table>
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
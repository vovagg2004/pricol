<?php
require_once('elementary.php');

if($numberStringLenhgt > 0){
  header("Location:startIndex.php");
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Приколы</title>
        <link rel="stylesheet" href="main.css">
        <!-- 1 Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- 1 Fonts font-family: 'Comfortaa', cursive;-->

        <!-- 2 Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dongle&display=swap" rel="stylesheet">
        <!-- 2 Fonts font-family: 'Dongle', sans-serif; -->

    </head>
    <body>
        <div class="container">
            <div class="opposite_direction">
                <form action="elementary.php" method="post">

                    <p class="heading"> HI HI HA</p>
                    <p class="h3">Укажите сколько букв (числом)</p>
                    <input type="text" placeholder="Пока что можно только 4  буквы - поэтому напишите 4" name="numberString">
                    <p class="h3">Пример: 0000 1111 - это 2 буквы</p>
                    <button>Начать</button>

                </form>
            </div>
        </div>
    </body>
</html>

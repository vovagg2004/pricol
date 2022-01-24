<?php

require_once('main.php');
require_once('elementary.php');
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
    </head>
    <body>
        <div class="container">
            <div class="opposite_direction">
                <form action="main.php" method="post">

                    <p class="error"> <?= $_SESSION['errorInput']?></p>
                    <p class="h1"> Двоичный код в текст:</p>
                    <p class="h3"> Замечание! Запишите числа без пробела</p>
                    <input type="text" placeholder="Введите код" name="inpyteNumber">
                    <p class="h1">Полученное словосочетание/предложение:</p>
                    <p class="h2V1"><?php
                      if($readyNumber == null){
                        echo " . . . ";
                      }else{
                        echo $readyNumber;
                      }

                     ?> </p>

                    <p class="h1"> Из текста в двоичный код:</p>
                    <input type="text" placeholder="Введите текст" name="inpyteText">
                    <p class="h1">Полученный код:</p>
                    <p class="h2"><?php
                    if($readyNumber == null){
                      echo " . . . ";
                    }else{
                      echo $readyString;
                    }
                     ?> </p>
                     <p>Если нужно добавить еще буквы, <a href="index.php">жми сюда</a></p>
                    <button>Go</button>
                </form>
            </div>
        </div>
    </body>
</html>

<?php 

// не смогла настроить вывод длинной записи в файле конфигурации php.ini

    $title = 'Главная страница HTML';  // задание 4
    $heading = "Шаблон главной страницы HTML";
    $content = 'ЗАДАНИЕ 4: Используя имеющийся HTML-шаблон, сделать так, чтобы главная страница генерировалась через PHP. 
    Создать блок переменных в начале страницы. Сделать так, чтобы h1, title и текущий год генерировались в блоке контента из созданных переменных.';
    $today = date("d/m/Y");  // можно использовать одинарные и двойные кавычки
    $year = date('Y.m.d');
 ?>
 
<!DOCTYPE html>
<html>
<head>
    <title><?=$title?></title>
    <meta charset="UTF-8">
</head>
<body>
   <h1><?=$heading?></h1>
    <p><?=$content?></p>
</body>
<footer>	 
    <span><?=$today?></span>
    <p><&php echo $year?></p>
</footer> 
</html>
 
 
 
 

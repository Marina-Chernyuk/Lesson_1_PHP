
<?php

/* Задание 5 : Используя только две переменные, поменяйте их значение местами. 
Например, если a = 1, b = 2, надо, чтобы получилось b = 1, a = 2. Дополнительные переменные использовать нельзя */

  $a = 7;
  $b = 4;
  
  $a = $b + $a; // $a = 4 + 3 = 11
  $b = $a - $b; // $b = 11 - 4 = 7
  $a = $a - $b; // $a = 11 - 7 = 4
  
  print $a;  // ещё один оператор для вывода
  echo "<br>$b"; // перенос на другую строку
  
  ?>



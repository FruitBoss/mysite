<?php
//echo strftime("%d-%m-%y");
//define("USER_NAME", "Сергей");
//echo USER_NAME."<br>";
//echo gettype(USER_NAME);
//error_reporting(E_ALL);
// $x = "10fkkdks";
// echo gettype($x);
// echo "<br>";
// echo (int)$x; 
// echo $hour = strftime('%H')+2;
// $size = ini_get('post_max_size');
// $type = strlen($size)-1;
// echo $size{$type};

$leftMenu = [
    ['link'=>'Домой', 'href'=>'index.php'],
    ['link'=>'О нас', 'href'=>'about.php'],
    ['link'=>'Конаткты', 'href'=>'contact.php'],
    ['link'=>'Таблица умножения', 'href'=>'table.php'],
    ['link'=>'Калькулятор', 'href'=>'calc.php'],
  ]
?>

<ul>
  <?php 
    foreach ($leftMenu as $key => $x) { 
       echo "<li><a href=".$x['hfer'].">".$x['link']."</a></li>";
    }
  ?>
  </ul>

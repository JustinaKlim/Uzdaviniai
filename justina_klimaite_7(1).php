<?php

require __DIR__ . '/bootstrap.php';

// pirmas uždavinys

$backgroundColor = 'black';
if(!empty($_GET)) {
    if($_GET['color'] == 1){
        $backgroundColor = 'red';
    }
}
$linkas1 = '<a href="http://localhost/uzdaviniai/justina_klimaite_7(1).php">Pirmas linkas</a>'.'<br>';
$linkas2 = '<a href="http://localhost/uzdaviniai/justina_klimaite_7(1).php?color=1">Antras linkas</a>'.'<br>';
echo '<div style="height: 100vh; background-color:'.$backgroundColor.'">'.$linkas1.$linkas2.'</div>';
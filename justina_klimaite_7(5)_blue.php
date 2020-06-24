<?php

// Penktas uždavinys

if(!empty($_GET)){
    if($_GET['file'] = 'http://localhost/uzdaviniai/justina_klimaite_7(5)_red.php'){
        header("Location:http://localhost/uzdaviniai/justina_klimaite_7(5)_red.php");
        exit;
    }
}

?>


<div style="background-color:blue; height: 100vh">
    <a style="color: white;" href="http://localhost/uzdaviniai/justina_klimaite_7(5)_blue.php?file=http://localhost/uzdaviniai/justina_klimaite_7(5)_red.php">I am blue</a>
</div>

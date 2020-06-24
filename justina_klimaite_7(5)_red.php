<?php

if(!empty($_GET)) {
    if($_GET['file'] = 'http://localhost/uzdaviniai/justina_klimaite_7(5)_blue.php'){
        header("Location:http://localhost/uzdaviniai/justina_klimaite_7(5)_blue.php");
        exit;
    }
}
?>


<div style="background-color:red; height: 100vh">
    <a style="color: white;" href="http://localhost/uzdaviniai/justina_klimaite_7(5)_red.php?file=http://localhost/uzdaviniai/justina_klimaite_7(5)_blue.php">I am red</a>
</div>
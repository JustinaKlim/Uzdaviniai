<?php

require __DIR__ . '/bootstrap.php';

// Septintas uždavinys

if(!empty($_POST) )
{
    header("Location:http://localhost/uzdaviniai/justina_klimaite_7(7).php");
    die();
}

print('<pre>' . print_r($_GET, true) . '</pre>');
print('<pre>' . print_r($_POST, true) . '</pre>');

if(!empty($_GET) && isset($_GET['button']) )
{
    echo "<div style='background-color: green; height: 100vh'>";
}

?>

<form action="" method="get">
<button type="submit" name = "button" value = "pressed">Green</button>
</form>

<form action="" method="post">
<button type="submit" name = "button" value = "pressed">Yellow</button>

</form>



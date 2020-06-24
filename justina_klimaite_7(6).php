<?php

require __DIR__ . '/bootstrap.php';

// Šeštas uždavinys

require __DIR__ . '/bootstrap.php';

if(!empty($_GET) && isset($_GET['button']) ){
    echo "<div style='background-color: green; height: 100vh'></div>";
}

if( !empty($_POST) && isset($_POST['button']) ){
    echo "<div style='background-color: yellow; height: 100vh'></div>";
}

?>

<form action="" method="get">
<button type="submit" name = "button" value = "pressed">Green</button>
</form>

<form action="" method="post">
<button type="submit" name = "button" value = "pressed">Yellow</button>
</form>
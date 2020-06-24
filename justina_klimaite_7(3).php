<?php

require __DIR__ . '/bootstrap.php';

// Trečias uždavinys 

if (!empty($_GET) && isset($_GET['color']))
{
    $color = $_GET['color'];
}
else {$color = 'black';}

echo "<div style='background-color: $color; height: 100vh'>";

?>

<form action="" method="get">
    Background color: <input type="text" name="color"><br>
    <button type="submit">Submit</button>
</form>
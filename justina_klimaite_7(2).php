<?php

require __DIR__ . '/bootstrap.php';

// Antras uždavinys

print('<pre>' . print_r($_GET, true) . '</pre>');
if (!empty($_GET) && isset($_GET['color'])) $color = $_GET['color'];
else $color = 'white';
echo "<div style='background-color: $color; height: 100vh'>";
echo '<a href="http://localhost/uzdaviniai/justina_klimaite_7(2).php">Spalva</a><br>';
echo "</div>";
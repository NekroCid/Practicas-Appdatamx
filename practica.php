<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
</head>
<body>
	<div>
    <?php

    $newword = "";
    $palabra = explode(" ",$_POST ['palabra']);
    $word = $_POST ['palabra'];
    foreach (array_reverse($palabra) as $key => $value) {
      $newword = $newword." ".$value;
    }
    echo "<h1>Practica 1</h1>";
    echo "<form method='post' action=''>";
    echo  "<input type='text' name='palabra' value='$word'><br><br>";
    echo  "<input type='text' name='palabra2' value='$newword' disabled><br><br>";
    echo  "<input type='submit' value='Nuevo'>";
    echo  "</form>";
    echo "</div>";
    ?>
</body>
</html>

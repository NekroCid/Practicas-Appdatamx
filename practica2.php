<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
</head>
<body>
	<div>
    <?php

    if(isset($_POST ['datos'])){
      $datos = $_POST ['datos'];
      for ($i=0; $i < $datos; $i++) {
        for ($j=0; $j < $datos; $j++) {
          $ran = rand(1,3);
          switch ($ran) {
            case 1:
              $matriz[$i][$j] = 'O';
              break;
            case 2:
              $matriz[$i][$j] = 'G';
              break;
            case 3:
              $matriz[$i][$j] = 'W';
              break;
          }
        }
      }
      $matriz2 = $matriz;
      for ($i=0; $i < $datos; $i++) {
        for ($j=0; $j < $datos; $j++) {
          //
          if ($matriz2[$i][$j] == 'G'){
            //
            $a=1;
            $ban = 1;
            while ($ban) {
              if ($i-$a >= 0 and  $j-$a >= 0) {
                if ($matriz2[$i-$a][$j-$a] == 'W') $ban = 0;
                else if ($matriz2[$i-$a][$j-$a] == 'G') $ban = 0;
                else if ($matriz2[$i-$a][$j-$a] == 'O') $matriz2[$i-$a][$j-$a] = $a;
                else if ($matriz2[$i-$a][$j-$a] >= $a) $matriz2[$i-$a][$j-$a] = $a;
              }
              else {$ban = 0;}
              $a++;
            }
            //
            $ban = 1;
            $a=1;
            while ($ban) {
              if ($j-$a >= 0) {
                if ($matriz2[$i][$j-$a] == 'W') $ban = 0;
                else if ($matriz2[$i][$j-$a] == 'G') $ban = 0;
                else if ($matriz2[$i][$j-$a] == 'O') $matriz2[$i][$j-$a] = $a;
                else if ($matriz2[$i][$j-$a] >= $a) $matriz2[$i][$j-$a] = $a;
              }
              else {$ban = 0;}
              $a++;
            }
            //
            $ban = 1;
            $a=1;
            while ($ban) {
              if ($i-$a >= 0) {
                if ($matriz2[$i-$a][$j] == 'W') $ban = 0;
                else if ($matriz2[$i-$a][$j] == 'G') $ban = 0;
                else if ($matriz2[$i-$a][$j] == 'O') $matriz2[$i-$a][$j]  = $a;
                else if ($matriz2[$i-$a][$j] >= $a) $matriz2[$i-$a][$j]  = $a;
              }
              else {$ban = 0;}
              $a++;
            }
            //
            $ban = 1;
            $a=1;
            while ($ban) {
              if ($i+$a < $datos and  $j+$a < $datos) {
                if ($matriz2[$i+$a][$j+$a] == 'W') $ban = 0;
                else if ($matriz2[$i+$a][$j+$a] == 'G') $ban = 0;
                else if ($matriz2[$i+$a][$j+$a] == 'O') $matriz2[$i+$a][$j+$a] = $a;
                else if ($matriz2[$i+$a][$j+$a] >= $a) $matriz2[$i+$a][$j+$a] = $a;
              }
              else {$ban = 0;}
              $a++;
            }
            //
            $ban = 1;
            $a=1;
            while ($ban) {
              if ($j+$a < $datos) {
                if ($matriz2[$i][$j+$a] == 'W') $ban = 0;
                else if ($matriz2[$i][$j+$a] == 'G') $ban = 0;
                else if ($matriz2[$i][$j+$a] == 'O') $matriz2[$i][$j+$a] = $a;
                else if ($matriz2[$i][$j+$a] >= $a) $matriz2[$i][$j+$a] = $a;
              }
              else {$ban = 0;}
              $a++;
            }
            //
            $ban = 1;
            $a=1;
            while ($ban) {
              if ($i+$a < $datos) {
                if ($matriz2[$i+$a][$j] == 'W') $ban = 0;
                else if ($matriz2[$i+$a][$j] == 'G') $ban = 0;
                else if ($matriz2[$i+$a][$j] == 'O') $matriz2[$i+$a][$j] = $a;
                else if ($matriz2[$i+$a][$j] >= $a) $matriz2[$i+$a][$j] = $a;
              }
              else {$ban = 0;}
              $a++;
            }
            //
            $ban = 1;
            $a=1;
            while ($ban) {
              if ($i+$a < $datos and  $j-$a >= 0) {
                if ($matriz2[$i+$a][$j-$a] == 'W') $ban = 0;
                else if ($matriz2[$i+$a][$j-$a] == 'G') $ban = 0;
                else if ($matriz2[$i+$a][$j-$a] == 'O') $matriz2[$i+$a][$j-$a] = $a;
                else if ($matriz2[$i+$a][$j-$a] >= $a) $matriz2[$i+$a][$j-$a] = $a;
              }
              if ($i-$a >= 0 and  $j+$a < $datos) {
                if ($matriz2[$i-$a][$j+$a] == 'W') $ban = 0;
                else if ($matriz2[$i-$a][$j+$a] == 'G') $ban = 0;
                else if ($matriz2[$i-$a][$j+$a] == 'O') $matriz2[$i-$a][$j+$a] = $a;
                else if ($matriz2[$i-$a][$j+$a] >= $a) $matriz2[$i-$a][$j+$a] = $a;
              }
              else {$ban = 0;}
              $a++;
            }
            //
            $ban = 1;
            $a=1;
            while ($ban) {
              if ($i-$a >= 0 and  $j+$a < $datos) {
                if ($matriz2[$i-$a][$j+$a] == 'W') $ban = 0;
                else if ($matriz2[$i-$a][$j+$a] == 'G') $ban = 0;
                else if ($matriz2[$i-$a][$j+$a] == 'O') $matriz2[$i-$a][$j+$a] = $a;
                else if ($matriz2[$i-$a][$j+$a] >= $a) $matriz2[$i-$a][$j+$a] = $a;
              }
              else {$ban = 0;}
              $a++;
            }

          }
      }
    }
  }
    echo "<h1>Practica 2</h1>";
    echo "<form method='post' action=''>";
    echo  "<input type='text' name='datos' value='$datos'><br><br>";
    echo  "<input type='submit' value='enviar'>";
    echo  "</form>";
    echo "</div>";
    if(isset($matriz)){
      ?>
      <table width=”100%” border=”1″>
        <?php for ($i=0; $i < $datos; $i++) { ?>
          <tr>
            <?php for ($j=0; $j < $datos; $j++) {?>
              <td <?php if ($matriz[$i][$j] == 'W') {echo "bgcolor= '#827E7E' ";}
                        if ($matriz[$i][$j] == 'G') {echo "bgcolor= '#1E52CC' ";}
              ?>> <?php echo $matriz[$i][$j];?> </td>
           <?php } ?>
          </tr>
        <?php } ?>
      </table>
    <br>
    <table width=”100%” border=”1″>
      <?php for ($i=0; $i < $datos; $i++) { ?>
        <tr>
          <?php for ($j=0; $j < $datos; $j++) {?>
            <td <?php if ($matriz2[$i][$j] == 'W') {echo "bgcolor= '#827E7E' ";}
                      if ($matriz2[$i][$j] == 'G') {echo "bgcolor= '#1E52CC' ";}
            ?>> <?php echo $matriz2[$i][$j];?> </td>
         <?php } ?>
        </tr>
      <?php } ?>
    </table>
  <?php } ?>
</body>
</html>

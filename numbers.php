<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  //declaring no
  $a = 7;
  $b = 3;

  //arithmetic no
  echo $a + $b . '<br>';
  echo $a - $b . '<br>';
  echo $a * $b . '<br>';
  echo $a / $b . '<br>';
  echo $a % $b . '<br>';

  //math functions
  $a += $b; echo $a. '<br>';
  $a -= $b; echo $a. '<br>';
  $a *= $b; echo $a. '<br>';
  $a /= $b; echo $a. '<br>';
  $a %= $b; echo $a. '<br>';

  //increment o/p
  $c = 10;
  echo $c++. '<br>';
  echo ++$c. '<br>';

  //decremnet o/p
  echo $c--. '<br>';
  echo --$c. '<br>';

  //number checking functions
  echo is_float(value: 1.34)."float <br/>";
  echo is_int(value: 1)."int <br>";
  echo is_numeric(value: "5.78")."numberic <br/>";
  echo is_numeric(value: "3m.76")."numberic <br/>";

  //conversion
  $strNumber = '98.12';
  $number = (float)$strNumber;
  var_dump(value: $number);
  echo '<br>';

  //number functions
  echo "abs(-15)" .abs(num:-15).'<br>';
  echo "pow(5,9)" .pow(num:3, exponent: 5).'<br>';
  echo "sqrt(30)" .sqrt(num:30).'<br>';
  echo "max(2, 3): " . max(2, 3) . '<br>';
  echo "min(2, 3): " . min(2, 3) . '<br>';
  echo "round(5.7): " . round(5.7) . '<br>';
  echo "round(5.9): " . round(5.9) . '<br>';
  echo "floor(9.9): " . floor(9.9) . '<br>';
  echo "ceil(2.4): " . ceil(2.4) . '<br>';
  echo "ceil(4.6): " . ceil(4.6) . '<br>';

  //formatting numbers
    
?>

  ?>
</body>
</html>
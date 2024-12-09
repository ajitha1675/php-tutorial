<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  //print the variables
   echo $name = "Ajilalitha";
   echo $age = 23;
   echo $isFemale = true;
   echo $height = 159.23;
   echo $salary = null;

   //print the type of variable cancat using dot symbol
   echo gettype(value: $name) . '<br>';
   echo gettype(value: $age) . '<br>';
   echo gettype(value: $isFemale) . '<br>';
   echo gettype(value: $height) . '<br>';
   echo gettype(value: $salary) . '<br>';

   //print the whole var
   echo "var dump output:\n";
   var_dump($name, $age, $isFemale, $height, $salary);

   //print type of the var
   echo gettype(value: $name) . '<br>';

   //var checking functions
   echo "is string";
   var_dump(value: is_string (value : $name));
   is_int(value: $age);
   is_bool(value: $isFemale);
   is_double(value: $height);
   echo '<br>'; 
   echo '<br>';
   echo '<br>';

   //check if variable is defined
   var_dump(value: isset($name));
   echo '<br>';
   var_dump(value: isset($name2));
   echo '<br'; 

   //constant
   define(constant_name: 'PI', value: 3.14);
   echo PI. '<br>';
   var_dump(value: defined(constant_name: 'PI'));
   echo '<br>';

   //bulit-in constants
   echo SORT_ASC.'<br>';
   echo PHP_INT_MAX.'<br>'; 
  ?>,
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  //string Functions

  $string = "      Welcome the php program!         ";

  echo "1 - ".strlen(string: $string). '<br>' . PHP_EOL;
  echo "2 - ".trim(string: $string). '<br>' . PHP_EOL;
  echo "3 - ".ltrim(string: $string). '<br>' . PHP_EOL;
  echo "4 - ".rtrim(string: $string). '<br>' . PHP_EOL;
  echo "5 - ".str_word_count(string: $string). '<br>' . PHP_EOL;
  echo "6 - ".strrev(string: $string). '<br>' . PHP_EOL;
  echo "7 - ".strtoupper(string: $string). '<br>' . PHP_EOL;
  echo "8 - ".strtolower(string: $string). '<br>' . PHP_EOL;
  echo "9 - ".ucfirst(string: 'welcome'). '<br>' . PHP_EOL;
  echo "10 - ".lcfirst(string: 'WELCOME'). '<br>' . PHP_EOL;
  echo "11 - ".ucwords(string:"welcome to php program"). '<br>' . PHP_EOL;
  echo "12 - ".strpos(haystack: $string, needle: 'program'). '<br>' ;
  echo "13 - ".stripos(haystack: $string, needle: 'program'). '<br>' ;
  // echo"14 - ".substr(string: $string2, offset:9). '<br>' .PHP_EOL;
  // echo"15  - ".str_replace(search: 'program', replace: "first program").'<br>'.PHP_EOL;

  //multiline text and line breaks
 
  $longText = "
      Hello, My name is Amar,
      I am a SAS Developer,
      I love coding
  ";
  
  // Display the text
  echo $longText . '<br>' . PHP_EOL;
  
  // Count the number of characters
  echo "Number of characters: " . strlen($longText) . '<br>' . PHP_EOL;
  
  // Count the number of words
  echo "Number of words: " . str_word_count($longText) . '<br>' . PHP_EOL;
  ?>
  
  

 
</body>
</html>
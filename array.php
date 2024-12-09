<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    //create array
    $codes = ["python", 0.7, "javascript", 65, true];

   //print the arr
   echo '<pre>';
   var_dump(value: $codes);
   echo '</pre>';

   //get a element by index

   print_r (value: $codes)."<br/>";
   echo $codes[2].'<br>';

 //set ele by index
   $codes[4] = "Reactjs";
  
  //check if array has element at index2
   echo '<pre>';
   var_dump(value: isset($codes[2]));
   echo '<pre>';
   echo count(value: $codes).'<br>';

  //append element
   echo count(value: $codes).'<br>';
   $codes[] = 'Reactjs';
   echo $codes[5].'<br>';
   echo "test";
   
  //print the length of arr
   echo count(value: $codes).'<br>';

 //add element at the end of the arr
   array_push($codes, 'php');
   print_r(value: $codes);

  //remove ele from end of the arr
   array_pop(array: $codes);

   echo '<pre>';
   var_dump(value: $codes);
   echo'<pre>';

 //add ele at the beginning of the arr
   array_unshift( $codes,  'sql');
   print_r(value:$codes);

  //split the string into an arr
   $codes = "python-javascript-reactjs";
   echo '<pre>';
   var_dump(value: explode(separator: '-', string: $codes))."explode";
   echo '<pre>';

  //combine arr ele into string
  echo implode(",", $codes) . '<br>';

  //check if element exist in the array
   echo'<pre>';
   var_dump(in_array('python', $codes));

  //  //search ele index in the arr
  //  echo '<pre>';
  //  var_dump(value: array_search(needle: 'javascript', haystack: $codes));
  //  echo '/pre>';

  //  //merge two arrays
  //  $codes1 = ['java','machine learning'];
  //  echo '<pre>';
  //  var_dump(value: array_merge(arrays: $codes, $codes1));
  //  var_dump(value: [...$codes, ...$codes1]);
  //  echo '<pre>';
  ?>
</body>
</html>
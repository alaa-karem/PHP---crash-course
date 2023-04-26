<?php
// Output with php;
  /*
  // echo --> output multiple arguments
  echo 123, 'alaa', 15.5;

  // print --> output one argument
  print 'alaa';

  // print_r() --> output single argument or array
  print_r('alaa');       print_r([1,2,3,4,5]);

  // var_dump() --> return more information about output
  var_dump("alaa");

  // var_export() --> return all output as you write
  var_export('alaa');   // alaa
  */

// Datatype and variables
  /* 1- Variables must be prefixed with $
    2- Variables must start with a letter or the underscore character
    3- variables can't start with a number
    4- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
    5- Variables are case-sensitive ($name and $NAME are two different variables)
    $name='alaa';
    $age=20;
    $isGraduated=false;    // it will print nothing, But if value is true, it will print 1;
    // we can cocatenate with .
    echo $name . ' is ' . $age . ' years old ';
    // another way:
    echo "${name} is ${age} years old";
  
    // if you wanna define constant, you can use define(host,value) funcion
    define('DB_NAME', 'dev_dp');
    define('HOST','localhost');
    echo HOST;      // localhost
    echo DB_NAME;  // dev_dp
  */

//Arrya
  /*
    // There are 2 ways to represent an array:
    $numbers = [2,3,4,6];
    $number = array('alaa', 'mohamed', 'shaimaa');
    //print_r($numbers);
    //echo $number[0];
    //var_dump($number);

    // Associative array:
    $array = [
      1 => 'alaa',
      2 => 2,
      7 => 'ali',
    ];
    //echo $array[7];
    $array2 = [
      'firstname' => 'alaa',
      'secondname' => 'karem',
    ];
    //echo $array2['firstname'];
    $array3 =[
      $array = [
        1 => 'alaa',
        2 => 2,
        7 => 'ali',
      ],
      $array2 = [
        'firstname' => 'alaa',
        'secondname' => 'karem',
      ],
      $arrayColor = [
        1 => 'red',
        2 => 'blue',
        3 => 'green',
      ]
    ];
    //echo $array3[2][3];
    var_dump(json_encode($array3));
  */
// conditions:
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>
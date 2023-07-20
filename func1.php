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
<?php
   function mytest(){
    $x=10;
    $y=20;
    $z=$x+$y;
    echo $z."<br>";

   }
   mytest();
   function even($number){
    $r=$number%2;
    return $r;

   }
   $c=even(11);
   echo $c;
   


?>

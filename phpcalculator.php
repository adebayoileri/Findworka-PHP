<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple PHP calculator</title>
</head>
<body>
NB : Operation can be add , sub ,multipy ,divide;
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="number_1" placeholder="First Number">
    <input type="text" name="number_2" placeholder="Second Number">
    <input type="text" name="operation" placeholder="Enter an operation">
    <input type="submit" name="submit">
    </form>
    <h1>Result</h1>
    <?php
    $num1 = $_POST['number_1'];
    $num2 = $_POST['number_2'];
    $operation = $_POST['operation'];

   

    function add($num1,$num2){
        $output = $num1 + $num2;
       echo "The addition of the numbers = ". $output;
       echo "<br>";
    }
    function sub($num1,$num2){
        $output = $num1 - $num2;
        echo "The subtraction of the numbers =" .$output;
        echo "<br>";
     }
     function multiply($num1,$num2){
        echo "The multiplication of the numbers = " .$num1*$num2;
        echo "<br>";
     }
     function expo($num1,$num2){
        echo "The exponential value of the numbers = ".pow($num1,$num2);
        echo "<br>";
     }
     function div($num1,$num2){
        echo "The division of the numbers =" .$num1/$num2;
        echo "<br>";
     }

   if($operation ==='add'){
      add($num1,$num2);
   }
   elseif($operation ==='sub'){
     sub($num1,$num2);
   }
   elseif($operation ==='multiply'){
      multiply($num1,$num2);
   }elseif($operation == 'divide'){
      div($num1,$num2);
   }
   else{
      echo 'Please input a  valid number';
   }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP StartUp</title>
</head>
<style>
body{
    background: gray;
}
</style>
<body>
<!-- String 
examples of string
- James
- James is a boy

Integer 
examples
- 4,5,250 and other numbers,
-$500.00

Float
2500.000

Boolean
Examples
-True OR False 
-Yes OR NO
- 0 OR 1

Float/Double



String Functions
strlen();
str_word_count();
strrev();
strpos();
str_replace();
-->
    <?php
    # My first PHP code 
    // echo 'Hello world';
    //  echo '<br>';
    // $name = 'Adebayo';
    // echo $name;
    // echo '<br>';
    // $x = 34;
    // $y = 10;
    // $z = $x + $y;
    // echo $z;

    // $boy = "adebayo is a man";
    // $result = Strlen($boy);
    // echo '<br>';
    // echo $result;
    // echo '<br>';
    // $word_result = str_word_count($boy);
    // echo $word_result;
    // echo '<br>'; -->

    // function addTwoNumbers($x, $y){
    //     $sum = 0;
    //     $sum = 
    // }




    function Power($x ,$y){
        $answer =  1;
        for($c =0; $c < $y; $c++){
                  $answer*= $x;
                }
        echo $answer;
        echo '<br/>';
      }
      $x =4;
      $y =4;
      Power($x, $y);

      for($i=0;$i<5;$i++){
        echo $i;
            echo '<br/>';
      }


      for($i=1;$i<=5;$i++){
        echo $i;
            echo '<br/>';
      }


      echo 'WHILE LOOP EXAMPLE';
      echo '<br/>';
      $a = 0;
      while ($a < 5) {
          echo $a;
          echo '<br/>';
          $a++;
      };


      echo 'WHILE LOOP EXAMPLE 2';
      echo '<br/>';
      $c = 1;
      while ($c <= 5) {
          echo $c;
          echo '<br/>';
          $c++;
      };


 echo 'DO WHILE LOOP EXAMPLE';
 echo '<br/>';
      $b = 0;
      do {
        echo $b;
        echo '<br/>';
        $b++;
      } while ($b <= 10);


      // PHP code to get the Fibonacci series 
function Fibonacci($n){ 
  
  $num1 = 0; 
  $num2 = 1; 

  $i = 0; 
  while ($i < $n){ 
      echo ' '.$num1; 
      $num3 = $num2 + $num1; 
      $num1 = $num2; 
      $num2 = $num3; 
      $i = $i + 1; 
  } 
} 

  $n = 7; 
  Fibonacci($n); 

  $result = array();


$start =1;
$limit = 5;
$result[0]=$start;
$result[1]=$start;

  for($c=2; $c<$limit; $c++){
      $result[$c] = $result[$c-1] + $result[$c-2];
    }

print_r($result);


    ?>
</body>
</html>
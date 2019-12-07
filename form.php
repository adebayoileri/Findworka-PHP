<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form PHP</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="text" name="limit">
        <input type="submit" name="submit"/>
        </form>
        <h1>Result</h1>
        <div>
        <?php
    // echo $_POST['name'];
    $start = 1;
    $limit = $_POST['limit'];
    $result[0]=$start;
    $result[1]=$start;

  for($c=2; $c<$limit; $c++){
      $result[$c] = $result[$c-1] + $result[$c-2];
    }

print_r($result);
?>

        </div>
</body>
</html>
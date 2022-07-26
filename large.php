<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num1=1000;
    $num2=2000;
    $num3=4000;
    if ($num1>=$num2) {
        echo $num1." number is larger";
    }
    elseif($num2>=$num3){
        echo $num2."number is larger";
    }
    else {
        echo $num3." number is larger";
    }


?>
    
</body>
</html>
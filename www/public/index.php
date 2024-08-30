<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
<?php
    include('inc/math.php'); 

    $summa = sum(2, 5); 
    $prod = multiply(2, 5);
    $diff = minus(2, 5);
    $kvot = div(2, 5);
    echo "Summan av 2 och 5 är $summa<br>";
    echo "Produkten av 2 och 5 är $prod<br>";
    echo "Differensen av 2 och 5 är $diff<br>";
    echo "Kvoten av 2 och 5 är $kvot";
?>


   
</body>
</html>
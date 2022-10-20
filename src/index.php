<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$one=$_POST['one'];
$submit=$_POST['submit'];
    $n=0;
    $m=0;
    for ($i=1; $i<= $n; $i++)
    { 
        for($j=1; $j<= $m; $j++){
            if($i==1 || $i==$n ||$j==1 || $j==$m)
            echo $n. $m." "; 
        }
    
    }
   

    ?>
    <form action="" method="post" id="form">
<input id="num"  type="number" name="one" value=" <?php echo $n.$m ?>" > <br>
<button name="submit">submit</button>
    </form>

</body>
</html>
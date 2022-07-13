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
$x=0;
$front="Front-End";
$back="Back-End";
$full="Full-Stack";
while($x<100){
    $x++;
if($x%15==0 ){
    echo $full;
}
else if($x%3==0){
    echo $back . "<br>";
}
else if($x%5==0){
    echo $front . "<br>";
}
else{
    echo $x . "<br>";
}
}

?>

</body>
</html>
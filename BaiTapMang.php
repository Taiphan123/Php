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
        $Mang = array("Hoang"=>"31","Nam"=>"41","Minh"=>"39","Hoa"=>"40");
        ksort($Mang);
        foreach ($Mang as $key => $value) {
            echo $value."<br/>";
        }
    ?>
    <span>Tăng dần theo key</span>
 
    <span>Tăng dần theo value</span>

    <span>Giamr dần theo key</span>
    
    <span>Giamr dần theo value</span>
 

</body>
</html>
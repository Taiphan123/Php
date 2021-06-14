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
   $check = "";
    if(isset($_POST['Submit'])){  
        
        if(empty($_POST["number"]){
            $number = $_POST["number"]; 
            if($number % 7 == 0)
            echo "sô $number chia hết cho 7";
            else echo "số $number không chia hết cho 7";
        }else echo = " nhap vao" ;       
    }
    
    ?>
    <form method="post">
    <input type="text" name="number">
    <button name="Submit">Submit</button>
    <?php
    echo $check ;
    ?>
    </form>
    
</body>
</html>
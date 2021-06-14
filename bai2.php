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
    $messerror = "";
    if(isset($_POST['Submit'])){  
        if(!empty($_POST['toan']) && !empty($_POST['ly']) && !empty($_POST['hoa']) ){
            $messerror = "";
            $toan = $_POST["toan"];
            $ly = $_POST["ly"];
            $hoa = $_POST["hoa"];
            $total = $toan+$ly+$hoa;
            if( $toan == 1 || $ly == 1 || $hoa == 1){
                echo  "rớt";
            }else{
                if( $total >=15 ){
                    echo "đậu";
                }
            }
            
        }else{
            $messerror = "nhập vào !";
        }
        
        
    }
?>
<form method="post">
    <input type="text" name="toan">   
    <input type="text" name="ly">
    <input type="text" name="hoa">
    <button name="Submit">Submit</button>
    <?php
       echo $messerror;
    ?>
    </form>


</body>
</html>
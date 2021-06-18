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
    $err_toan = "";
    $err_ly = "";
    $err_hoa = "";
    $mess = ""; 
    if(isset($_POST['Submit'])){  
        
        if(empty($_POST['toan'])){
            $err_toan = "vui long nhap diem toan" ;
        }else {
            $err_toan = "";
        }
        if(empty($_POST['ly'])){
            $err_ly = "vui long nhap diem ly" ;
        }else {
            $err_ly = "";
        }
        if(empty($_POST['hoa'])){
            $err_hoa = "vui long nhap diem hoa";
        }else {
            $err_hoa = "";
        }
        if(!empty($_POST['toan'])&&!empty($_POST['ly'])&&!empty($_POST['hoa'])){
            $toan = $_POST["toan"];
            $ly = $_POST["ly"];
            $hoa = $_POST["hoa"];
            $total = $toan+$ly+$hoa;
            if( $toan == 1 || $ly == 1 || $hoa == 1){
                $mess = "rớt";
            }else{
                if( $total >=15 ){
                    $mess = "đậu";
                }else $mess= "";
            }
        }
        
        
        
    }
?>
<form method="post">
    <input type="text" name="toan">  
     <p><?php echo $err_toan; ?></p>
    <input type="text" name="ly">
    <p><?php echo $err_ly; ?></p>
    <input type="text" name="hoa">
    <p><?php echo $err_hoa; ?></p>
    <button name="Submit">Submit</button>
    <p><?php echo $mess; ?></p>
    </form>


</body>
</html>
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
        if(!empty($_POST['toan']) && !empty($_POST['ly']) && !empty($_POST['hoa']) && !empty($_POST['tiengAnh'])&& !empty($_POST['van'])&& !empty($_POST['lichSu'])){
            $messerror = "";
            $toan = $_POST["toan"];
            $ly = $_POST["ly"];
            $hoa = $_POST["hoa"];
            $tiengAnh = $_POST["tiengAnh"];
            $van = $_POST["van"];
            $lichSu = $_POST["lichSu"];
            $total = ($toan+$ly+$hoa+$tiengAnh+$van+$lichSu)/6;
            if($toan>10||$ly>10||$hoa>10||$tiengAnh>10||$van>10||$lichSu>10){
                echo "điểm dưới 10";
            }
            if($toan<0||$ly<0||$hoa<0||$tiengAnh<0||$van<0||$lichSu<0){
                echo "điểm không được âm";
            }else{
                if( $toan < 4 || $ly < 4 || $hoa < 4|| $tiengAnh < 4|| $van < 4|| $lichSu < 4 || $total<5){
                    echo  "Yếu";
                }else{
                    if($total >=5 && $total <= 6.4  ){
                        echo "Trung bình";
                    }
                    if( $total >=6.5 && $total <= 7.9  ){
                        echo "Khá";
                    }
                    if( $total >=8 && $total <= 10){
                        echo "Giỏi";
                    }
                    
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
    <input type="text" name="tiengAnh">   
    <input type="text" name="van">
    <input type="text" name="lichSu">
    <button name="Submit">Submit</button>
    <?php
       echo $messerror;
    ?>
    </form>


</body>
</html>
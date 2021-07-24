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
    $err_tiengAnh = "";
    $err_van = "";
    $err_lichSu = ""; 
    
    if(isset($_POST['Submit'])){  
        $toan = $_POST["toan"];
        $ly = $_POST["ly"];
        $hoa = $_POST["hoa"];
        $tiengAnh = $_POST["tiengAnh"];
        $van = $_POST["van"];
        $lichSu = $_POST["lichSu"];
        if(!empty($toan)){
            $err_toan = "";       
        }else {
            $err_toan = "vui long nhap diem toan" ;
        }
        if(empty($ly)){
            $err_ly = "vui long nhap diem ly" ;
        }else {
            $err_ly = "";
        }
        if(empty($hoa)){
            $err_hoa = "vui long nhap diem hoa";
        }else {
            $err_hoa = "";
        }
        if(empty($tiengAnh)){
            $err_tiengAnh = "vui long nhap diem tieng Anh";
        }else {
            $err_tiengAnh = "";
        }
        if(empty($van)){
            $err_van = "vui long nhap diem van";
        }else {
            $err_van = "";
        }
        if(empty($lichSu)){
            $err_lichSu = "vui long nhap diem lich Su";
        }else {
            $err_lichSu = "";
        }
        if(!empty($toan) && !empty($ly) && !empty($hoa) && !empty($tiengAnh)&& !empty($van)&& !empty($lichSu)){
            $messerror = "";
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
    <input type="text" name="tiengAnh">  
    <p><?php echo $err_tiengAnh; ?></p> 
    <input type="text" name="van">
    <p><?php echo $err_van; ?></p>
    <input type="text" name="lichSu">
    <p><?php echo $err_lichSu; ?></p>
    <button name="Submit">Submit</button>
    </form>


</body>
</html>
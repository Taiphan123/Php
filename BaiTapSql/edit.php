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
    include 'connect.php';
    $id = $_GET['id'];
    $err_name = "";
    $err_age = "";
    $err_national = "";
    $err_position = "";
    $err_salary = "";
    $err_file = ""; 
    $upLoaded = 0;
    
    if(isset($_POST['Submit'])){  
       $name = $_POST["name"];
       $age = $_POST["age"];
       $national = $_POST["national"];
       $position = $_POST["position"];
       $salary = $_POST["salary"];
       //$image = $_POST["avatar"];

        if(!empty($name)){
           $err_name = "";
        }else $err_name = "Vui lòng nhập name";

        if(!empty($age)){
           $err_age = "";
        }else $err_age = "Vui lòng nhập age";

        if(!empty($national)){
            $err_national = "";
        }else $err_national = "Vui lòng nhập national";

        if(!empty($position)){
            $err_position = "";
        }else $err_position = "Vui lòng nhập position";

        if(!empty($salary)){
            $err_salary = "";
        }else $err_salary = "Vui lòng nhập salary";

        if (isset($_FILES['avatar'])){
            $upLoadOk = $_FILES['avatar']['error'];
            $nameFile = (explode(".",$_FILES['avatar']['name']));
            
            $sizeFileImg = $_FILES['avatar']['size'];                 
            if( $upLoadOk > 0)
            {
                $err_file =  'File Upload Bị Lỗi';            
            }elseif($sizeFileImg>=2062336){
                $err_file = "kich thuoc file lon hon 1mb";
            }elseif ($nameFile[1]=="png"||$nameFile[1]=="jpg"||$nameFile[1]=="jpeg") {
                $upLoaded = 1;
                
            }else $err_file = "khong phai la file hinh anh";           
        }
        else{
            $err_file = 'Bạn chưa chọn file upload';
        }
        if((!empty($name)) && (!empty($age)) && (!empty($national)) && (!empty($salary)) && (!empty($position)) && ($upLoaded == 1)){
            move_uploaded_file($_FILES['avatar']['tmp_name'], './folderImg/'.$_FILES['avatar']['name']);
            $sql = " UPDATE `cauthu` SET "." `name` ='".$name."', `age` = '".$age."', `national` = '".$national."', `position` = '".$position."' , `salary` = '".$salary."', `image` = '".$_FILES['avatar']['name']."' WHERE `id` ='".$id."'";
           
            if ($result = $con->query($sql)) {
                echo "<h1>Update cầu thủ thành công Click vào <a href='index.php'>đây</a> để về trang danh sách</h1>";
            } else {
                echo "Lỗi:" . $sql . "<br>" . mysqli_error($con);
            }
            
        } 
    }
?>
<form method="post" enctype="multipart/form-data">
    <p>Tên cầu thủ</p>
    <?php 
    $sql = "SELECT * FROM `cauthu` WHERE `id`='".$id."'";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
    ?>
    <input type="text" name="name" value="<?php echo $row["name"]; ?>"> 
    <p><?php echo $err_name; ?></p> 

    <p>Tuổi</p>
    <input type="text" name="age" value="<?php echo $row['age']; ?>">
    <p><?php echo $err_age; ?></p>

    <p>Quốc tịch</p>
    <input type="text" name="national" value="<?php echo $row['national'] ;?>">
    <p><?php echo $err_national; ?></p>

    <p>Vị trí</p>
    <input type="text" name="position" value="<?php echo $row['position']; ?>">  
    <p><?php echo $err_position; ?></p> 

    <p>Lương</p>
    <input type="text" name="salary" value="<?php echo $row['salary'] ;?>">
    <p><?php echo $err_salary; ?></p>

    <input type="file" name="avatar" value="asdasd.hpy" >
    <p><?php echo $err_file; ?></p>

    <button name="Submit">Submit</button>
    </form>


</body>
</html>
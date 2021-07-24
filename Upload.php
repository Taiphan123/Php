<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
<body>
    <form method="post" action="" enctype="multipart/form-data">
        <input type="file" name="avatar"/>
        <input type="submit" name="uploadclick" value="Upload"/>
    </form>
    <?php 
    if (isset($_POST['uploadclick']))
    {
        
        
        if (isset($_FILES['avatar']))
        {
            $upLoadOk = $_FILES['avatar']['error'];
            $nameFile = (explode(".",$_FILES['avatar']['name'], 3));
            $sizeFileImg = $_FILES['avatar']['size'];
            echo $sizeFileImg;
            if($sizeFileImg>=2062336){
                echo "kich thuoc file lon hon 1mb";
                $upLoadOk = 1;
            }
            
            
            if( $upLoadOk > 0)
            {
                echo 'File Upload Bị Lỗi';
                
            }
            if($upLoadOk == 0){
                if($nameFile[1]=="png"||$nameFile[1]=="jpg"||$nameFile[1]=="jpeg"){       
                    move_uploaded_file($_FILES['avatar']['tmp_name'], './folderImg/'.$_FILES['avatar']['name']);
                    echo 'File Uploaded';
                }else echo "khong phai la file hinh anh";
                
            }
        }
        else{
            echo 'Bạn chưa chọn file upload';
        }
    }
?>
</body>
</html>

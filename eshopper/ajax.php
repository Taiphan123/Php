
<?php
  session_start();
  include 'connect.php';
  if($_POST["tai"]){
    $id = $_POST["tai"];
  }
  
	$sql = "SELECT * FROM `my-products` WHERE `id`= '".$id."';";
	//Chạy câu SQL
   // echo $sql;
	$result = $con->query($sql);
	$data = "";
  
  

	if ($result->num_rows > 0) {
	  while ($row = $result->fetch_assoc()) {
	    $data = $row;
	  }
	}
   
      $data1 = [
        "id"=> $data['id'],
        "image" => $data['images'],
        "price" => $data['price'],
        "item" => $data['item'],
        "count" => 1
      ];
    if($data1["id"]!=null){
      if($_SESSION['cart'][$id]["id"] == $data1["id"]){
        $_SESSION['cart'][$id]["count"]++;
      }else{
          $_SESSION['cart'][$id] = $data1;     
      }
    }
    



    if($_SESSION['cart'][$_POST["tai1"]]){
      $_SESSION['cart'][$_POST["tai1"]]["count"]++;
    }
    if($_SESSION['cart'][$_POST["tai2"]]){
      $_SESSION['cart'][$_POST["tai2"]]["count"]--;
    }
    if($_SESSION['cart'][$_POST["tai2"]]["count"]==0){
      unset($_SESSION['cart'][$_POST["tai2"]]);
    }
    if($_SESSION['cart'][$_POST["tai3"]]){
      unset($_SESSION['cart'][$_POST["tai3"]]);
    }

  
  echo "<pre>";
  var_dump($_SESSION['cart']);
//session_destroy();
    
 
?>
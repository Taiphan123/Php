
<?php
  session_start();
  include 'connect.php';
  $id = $_POST["tai"];
	$sql = "SELECT * FROM `my-products` WHERE `id`= '".$id."';";
	//Chạy câu SQL
   // echo $sql;
	$result = $con->query($sql);
	$data = [];
	if ($result->num_rows > 0) {
	  while ($row = $result->fetch_assoc()) {
	    $data[] = $row;
	  }
	}
  $data1;
 
    foreach ($data as $value) {
      $data1 = [
        "id"=> $value['id'],
        "image" => $value['images'],
        "price" => $value['price'],
        "item" => $value['item'],
        "count" => 1
      ];
    }
    if($_SESSION['cart'][$id]["id"]==$data1["id"]){
      $_SESSION['cart'][$id]["count"]++;
    }else{
      $_SESSION['cart'][$id] = $data1;
    }
  
  echo "<pre>";
  var_dump($_SESSION['cart']);
//session_destroy();
    
 
?>
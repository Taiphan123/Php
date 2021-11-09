<?php 
	//Kết nối databse
    session_start();
	include 'connect.php';
							
							
	//Viết câu SQL lấy tất cả dữ liệu trong bảng players
    echo $_SESSION["id"];
	$sql = "SELECT * FROM `my-products` WHERE `id`= '".$_SESSION["id"]."'";
	//Chạy câu SQL
    echo $sql;
	$result = $con->query($sql);
	//thu var_dump($result)
	//if co data thi num_rows > 0, num_rows =0


	$data = [];
	if ($result->num_rows > 0) {

	//Gắn dữ liệu lấy được vào mảng $data
	while ($row = $result->fetch_assoc()) {
	$data[] = $row;
	}
	}

	$html = '';
	foreach ($data as $value) {
	$html .= '
	<tr>
		<td class="cart_product">
		    <a href=""><img src="'.$value['images'].'" alt=""></a>
		</td>
		<td class="cart_description">
			<h4><a href="">'.$value['item'].'</a></h4>
			<p>Web ID: '.$value['id'].'</p>
		</td>
		<td class="cart_price">
			<p>$59</p>
		</td>
		<td class="cart_quantity">
			<div class="cart_quantity_button">
			    <a class="cart_quantity_up" href=""> + </a>
			    <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
			    <a class="cart_quantity_down" href=""> - </a>
			</div>
		</td>
		<td class="cart_total">
			<p class="cart_total_price">$59</p>
		</td>
		<td class="cart_delete">
			<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
		</td>
	</tr>';
	}
?>
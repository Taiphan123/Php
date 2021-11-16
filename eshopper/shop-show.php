<?php 
	//Kết nối databse
	include 'connect.php';
							
							
	//Viết câu SQL lấy tất cả dữ liệu trong bảng players
	$sql = "SELECT * FROM `my-products` ORDER BY `id`";
	//Chạy câu SQL
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
	<div class="col-sm-4">
		<div class="product-image-wrapper">
			<div class="single-products">
				<div class="productinfo text-center" >
					<img src="'.$value['images'].'" alt="" />
					<h2>'.$value['price'].'</h2>
					<p>'.$value['item'].'</p>
					<a href="" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
				</div>
			<div class="product-overlay">
				<div class="overlay-content">
					<h2>'.$value['price'].'</h2>
					<p>'.$value['item'].'</p>
					<a id="'.$value['id'].'" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
				</div>
			</div>
		</div>
	<div class="choose">
				<ul class="nav nav-pills nav-justified">
				<li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
				<li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
	</ul>
	</div>
	</div>
	</div>';
	}
?>
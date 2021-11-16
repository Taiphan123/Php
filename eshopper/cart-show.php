<?php 
	//Kết nối databse
	$html = '';
	foreach ($_SESSION['cart'] as $key) {	 
	$html .= '
	<tr id="'.$key['id'].'">
		<td class="cart_product">
		    <a href=""><img src="'.$key['image'].'" alt=""></a>
		</td>
		<td class="cart_description">
			<h4><a href="">'.$key['item'].'</a></h4>
			<p>Web ID: '.$key['id'].'</p>
		</td>
		<td class="cart_price">
			<p>$59</p>
		</td>
		<td class="cart_quantity" >
			<div class="cart_quantity_button">
			    <a  class="cart_quantity_up" > + </a>
			    <input class="cart_quantity_input" type="text" name="quantity" value="'.$key['count'].'" autocomplete="off" size="2">
			    <a class="cart_quantity_down" > - </a>
			</div>
		</td>
		<td class="cart_total">
			<p class="cart_total_price">$'.($key['count']*59).'</p>
		</td>
		<td class="cart_delete">
			<a class="cart_quantity_delete" ><i class="fa fa-times"></i></a>
		</td>
	</tr>';
}
?>
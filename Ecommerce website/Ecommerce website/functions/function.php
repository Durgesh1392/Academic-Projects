<?php

$con = mysqli_connect("localhost","root","","ecommerce");

function getPro()
{
	global $con;
	$get_pro = "select * from products order by RAND() LIMIT 0,20";
	
	$run_pro = mysqli_query($con,$get_pro);
	
	while($row_pro = mysqli_fetch_array($run_pro)){
		$pro_id = $row_pro['product_id'];
		$pro_cat = $row_pro['product_cat'];
		$pro_brand = $row_pro['product_brand'];
		$pro_title = $row_pro['product_title'];
		$pro_price = $row_pro['product_price'];
		$pro_image = $row_pro['product_image'];
		
		echo "
			<div style='float:left; margin-left:110px;margin-top:10px;'>
				<h3>$pro_title</h3>
				<a href='clothing.html'><img src='../admin_area/product_images/$pro_image' width='185' height='260' style='border:2px solid RED;'/><a/>
				<p><b> Rs.</b> $pro_price  </p><br>
				<a href='clothing.html' style='float:left;margin-top:-33px;'>Details</a>
				<a href='../index.php'><button style='float:right;margin-top:-35px;'>Add to Cart</button></a>
		</div>
		
		";
	}
}
?>
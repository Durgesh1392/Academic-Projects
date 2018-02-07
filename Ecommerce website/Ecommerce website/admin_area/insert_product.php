<?php	
	include("includes/db.php");
?>
<html>
<head>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
	<title>
	Shopping Garage
	</title>
	
	<link rel='stylesheet' href='../styles/home.css' type='text/css'/> 
</head>
<body>
	<div class="container">
		<div style="margin-left:0px;margin-top:0px;height:101px;width:1350px;background-image:url('../images/head.png');">
		<a href="" class="myButton"  target="popup" onclick="window.open('../login/loginform.html','popup','width=300,height=350,scrollbars=no,resizable=no'); return false;"><img style="margin-left:1085px; float:left; margin-top:10px;" src="../images/login.png"/></a>
		
		<a href="" class="myButton"  target="popup" onclick="window.open('../registration/Registration.html','popup','width=600,height=650,scrollbars=no,resizable=no'); return false;"><img style="margin-left:35px; float:left; margin-top:10px;" src="../images/register.png"/></a>
		<a href="../pages/cart.html"><img style="margin-left:1150px; float:left; margin-top:10px;" src="../images/cart.png"/></a>
		<a href="../index.php"><div style="float:left;margin-top:-85px;margin-left:5px;width:366px;height:40px;"></div></a>
		</div>
	<form action="insert_product.php" method="post" enctype="multipart/form-data">
		<table align="center" width="750" border="2" bgcolor="white">
			
			<tr align="center">
				<td colspan="8"><h2>Insert New Product</h2></td>
			</tr>
			
			<tr>
				<td align="right"><b>Product Title:</b></td>
				<td><input type="text" name="product_title"  required /></td>
			</tr>
			
			<tr>
				<td align="right"><b>Product Category:</b></td>
				<td>
				<select name="product_cat" required>
					<option>Select a Category</option>
					<?php
						$get_cats = "select * from categories";
						$run_cats = mysqli_query($con,$get_cats);
						
						while($row_cats = mysqli_fetch_array($run_cats)){
							$cat_id = $row_cats['cat_id'];
							$cat_title = $row_cats['cat_title'];
							
							echo "<option value= '$cat_id'>$cat_title</option>";
						}
					?>
					</select>
				</td>
			</tr>
			
			<tr>
				<td align="right"><b>Product Brand:</b></td>
				<td>
				
				<select name="product_brand" >
					<option required>Select a Brand</option>
					<?php
						$get_brands = "select * from brands";
						$run_brands = mysqli_query($con,$get_brands);
						
						while($row_brands = mysqli_fetch_array($run_brands)){
							$brand_id = $row_brands['brand_id'];
							$brand_title = $row_brands['brand_title'];
							
							echo "<option value= '$brand_id'>$brand_title</option>";
						}
					?>
					</select>
				
				</td>
			</tr>
			
			<tr>
				<td align="right"><b>Product Image:</b></td>
				<td><input type="file" name= "product_image" required/></td>
			</tr>
			
			<tr>
				<td align="right"><b>Product Price:</b></td>
				<td><input type="text" name= "product_price"  required /></td>
			</tr>
			
			<tr>
				<td align="right"><b>Product Description:</b></td>
				<td><textarea name= "product_desc" cols="20" rows="10" ></textarea></td>
			</tr>
			
			<tr>
				<td align="right"><b>Product Keywords:</b></td>
				<td><input type="text" name= "product_keywords" required/></td>
			<tr>
			<tr align="center">
				<td colspan="8"><input type="submit" name="insert_post" value="Insert Now" /></td>
			</tr>
		</table>
	</form>
	<div class="fter" style="margin-top:0px;">
			<center><B>&copy; 2014-16 by www.ShoppingAdda.com, Inc.</B></center>
	</div>
	</div>
</body>
</html>	

<?php
	if(isset($_POST['insert_post']))
	{
		//getting the text data from the fields
		$product_title = $_POST['product_title'];
		$product_cat = $_POST['product_cat'];
		$product_brand = $_POST['product_brand'];
		$product_price = $_POST['product_price'];
		$product_desc = $_POST['product_desc'];
		$product_keywords = $_POST['product_keywords'];
		
		//getting the image from the fields
		
		$product_image=$_FILES['product_image']['name'];
		$product_image_tmp=$_FILES['product_image']['tmp_name'];
		
		$insert_product = "insert into products (product_cat,product_brand,product_title,product_price,product_desc,product_image,product_keywords ) values ('$product_cat', '$product_brand', '$product_title', '$product_price', '$product_desc', '$product_image', '$product_keywords')" ;
		
		$insert_pro = mysqli_query($con, $insert_product);
		
		if($insert_pro)
		{
			echo "<script>alert('Successfully inserted')</script>";
			echo "<script>window.open('insert_product.php','_self')</script>";
		}
		
	}
?>	











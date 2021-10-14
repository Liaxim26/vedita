<?php include 'CProduct.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">	
	<title>Vedita</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="productScript.js"></script>

</head>
<body>

<table class="table table-dark">
	<tr>
	    <th>id</th>
	    <th>productId</th>
	    <th>productName</th>
	    <th>productPrice</th>
	    <th>productArticle</th>
	    <th>productQuantity</th>
	   	<th>dateCreate</th>
	   	<th>Скрыть</th>
	</tr>
  
  	<?php 
  	$product = new CProduct();
  	$maxCount = 5;

	$arr = $product->returnSortedProducts($maxCount);

	foreach ($arr as $key => $value) {
		$array = (array) $arr[$key];
		echo '
		<tr id="block'.$array['id'].'">
		 	<td>'.$array['id'].'</td>
		    <td>'.$array['productId'].'</td>
		    <td>'.$array['productName'].'</td>
		    <td>'.$array['productPrice'].'</td>
		    <td>'.$array['productArticle'].'</td>
		    <td>
		    <button class="btn btn-secondary" onclick="decreaseQuantity('.$array['id'].')">-</button>
		    <span id="quantity">'.$array['productQuantity'].'</span>
		    <button class="btn btn-secondary" onclick="increaseQuantity('.$array['id'].')">+</button>
		    </td>
		    <td>'.$array['dateCreate'].'</td>
		    <td><button class="btn btn-secondary" onclick="setInvisible('.$array['id'].')" type="submit" data-id="'.$array['id'].'">Скрыть</button></td>
      	</tr>
		';
	}
	?>
</table>

</body>

</html>

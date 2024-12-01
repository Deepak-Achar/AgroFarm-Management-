<?php
 	session_start();
	require 'db.php';
	require 'menu.php';
	
	$sql="SELECT * FROM fproduct WHERE pid = '$pid'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Agro Farm</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!-- <link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>
		[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<!-- <link rel="stylesheet" href="login.css"/>
		<link rel="stylesheet" type="text/css" href="indexFooter.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script> --> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
         <link rel="stylesheet" href="stylesheet.css">
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<script src="https://cdn.ckeditor.com/4.8.0/full/ckeditor.js"></script>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
    <body>
        <nav class="navbar navbar-light justify-content-center fe-3 mb-5">
                
		Edit Product
</nav>
      <div class="container d-flex justify-content-center">
		  <form action="" method style="width:50vw; min-width: 300px;">
        <div class="row">
              <div class="col">
			    <label class="form-label">product id:</label>
			     <input type="text" class="form-control" name="ProductId" value="<?php echo $_SESSION['id'] ?>" placeholder="poductID">	
			</div>
              <div class="col">
			    <label class="form-label">productName:</label>
			     <input type="text" class="form-control" name="ProductName" value="<?php  	?>"placeholder="productName">	
			</div>
			<div>
			<label class="form-label">productinfo:</label>
			     <input type="textarea" class="form-control" name="ProductInfo" placeholder="producInfo">	
			</div>

			<div>
			<label class="form-label">productprice:</label>
			     <input type="textarea" class="form-control" name="ProductPrice" placeholder="productPrice">	
			</div>
			<br>
			<div>
			<select name="type" id="type" required style="background-color:white;color: black;">
								  <option value="" style="color: black;">- Category -</option>
								  <option value="Fruit" style="color: black;">Fruit</option>
								  <option value="Vegetable" style="color: black;">Vegetable</option>
								  <option value="Grains" style="color: black;">Grains</option>
							  </select>
							  <div class="col-sm-6">
					<button class="btn btn-primary" style= "color:black;">Submit</button>
				</div>
							  <div class="col-sm-6">
					<button class="btn btn-danger" style="color:black;">cancel</button>
				</div>
		   </div>
	  </div>
</form>
    </body>
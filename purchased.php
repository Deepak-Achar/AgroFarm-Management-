<?php session_start();          
  // require 'menu.php';
  ?>
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
		<link rel="stylesheet" href="login.css"/>
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script> -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<link rel="stylesheet" href="indexfooter.css" />
   </head>
   <body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5">
          PRODUCTS PURCHASED
                      
    </nav>
                
       <div class="container">
     <!-- <a href="add_new.php" class="btn btn-dark mb-2">Add new</a> -->
     <table class="table table-hover text-center me-3">
      <thead class="table-dark">
     <tr>
      <th scope="col">tid</th>
      <th scope="col">Farmer name</th>
      <th scope="col">Buyer Name</th>
      <th scope="col">product-Name</th>
      <th scope="col">category</th>
      <th scope="col">price/Kg</th>
      <!-- <th scope="col">Action</th> -->
     </tr>
      </thead>
     <tbody>
     <tbody>
      <?php 
           require "db.php";
           
           $sql="SELECT * FROM `transaction` where ";
        //    "SELECT * FROM `fproduct`";
            $result=mysqli_query($conn, $sql);
            while ($row=mysqli_fetch_assoc($result))
             {               
                ?>    
            
                <tr>
             <th><?php echo $row['tid']?></th>
             <th><?php echo $row['name']?></th>
             <th><?php echo $row['pid']?></th>
             <td><?php echo $row['product']?></td>
             <td><?php echo $row['pcat']?></td>
             <td><?php echo $row['price']?></td>
             <!-- <td>
             <a href="php for product update.php" class="btn btn-primary">edit</a>
           </td> -->
           <td>
           <?php
             }
             ?>
               </tbody>
       </table>
     </div>
     </body>
</html> 

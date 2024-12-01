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
          PRODUCTS
                      
    </nav>
                
       <div class="container">
     <!-- <a href="add_new.php" class="btn btn-dark mb-2">Add new</a> -->
     <table class="table table-hover text-center me-3">
      <thead class="table-dark">
     <tr>
      <th scope="col">id</th>
      <th scope="col">product-Name</th>
      <th scope="col">category</th>
      <th scope="col">price/Kg</th>
      <th scope="col">Action</th>
     </tr>
      </thead>
     <tbody>
      <?php 
           require "db.php";
           $sql="SELECT * FROM `fproduct`";
            $result=mysqli_query($conn, $sql);
            while ($row=mysqli_fetch_assoc($result))
             {               
                ?>    
            
                <tr>
             <th><?php echo $row['pid']?></th>
             <td><?php echo $row['product']?></td>
             <td><?php echo $row['pcat']?></td>
             <td><?php echo $row['price']?></td>
             <!-- <td>
             <a href="php for product update.php" class="btn btn-primary">edit</a>
           </td> -->
           <td>
            
<form action="deleteproduct.php?pid=<?php echo $row['pid']; ?>" method='get'>                                      
<input type="hidden"  style="background-color:black;" value="<?php echo htmlspecialchars($row['pid'], ENT_QUOTES, 'UTF-8'); ?>" name="pid">
<input type="submit" value="delete">
</form>
           <!-- <a href="deleteproduct.php?pxid=" class="btn btn-danger"value="delete" id="delete" name="$row['pid']">Delete</a>     -->
           <!-- <?php echo $row['pid']; ?>   -->
          </td>
           </tr>
           <?php
             }
             ?>
     </tbody>
       </table>
     </div>
     <!--Bootstrap --> 
     <script src ="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity=" sha384-ka7sk8G1n4gmtz2M1QnikT1wxgYsOg+OMhuP+11RH9sENB00LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
   </body>
</html> 

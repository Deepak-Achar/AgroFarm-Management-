<?php
    session_start();

	if(!isset($_SESSION['logged_in']) OR $_SESSION['logged_in'] != 1)
	{
		$_SESSION['message'] = "You have to Login to view this page!";
		header("Location: Login/error.php");
	}
?>

<!DOCTYPE HTML>

<html lang="en">
    <head>
        <title>Profile: <?php echo $_SESSION['Username']; ?></title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>
        <meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="login.css"/>
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<link rel="stylesheet" href="css/skel.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/style-xlarge.css" />
<style>
    #hhh{
    padding:0px;
    border:0px;
    color:black;
    background-color: transparent;

    }
</style>
    </head>


    <body>

        <?php
            require 'menu.php';
        ?>

        <section id="one" class="wrapper style1 align">
            <div class="inner">
                <div class="box">
                <header>
                    <center>
                    <span><img src="<?php echo 'images/profileImages/profile0.png' ?>" class="image-circle" class="img-responsive" height="200%"></span>
                    <br>
                    <h2><?php echo $_SESSION['Name'];?></h2>
                   
                    <br>
                </center>
                </header>
                    <div class="row">
                    <p>&emsp;<p>&emsp;
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3">
                            <b><font size="+2" color="black">RATINGS : </font></b>
                            <font size="+2"><?php echo $_SESSION['Rating'];?></font>
                        </div>
                        <div class="col-sm-3">
                            <b><font size="+2" color="black">Email ID : </font></b>
                            <font size="+2"><?php echo $_SESSION['Email'];?></font>
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                    <br />
                    <div class="row">
                    <p>&emsp;<p>&emsp;
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3">
                            <b><font size="+2" color="black">Mobile No : </font></b>
                            <font size="+2"><?php echo $_SESSION['Mobile'];?></font>
                        </div>
                        <div class="col-sm-3">
                            <b><font size="+2" color="black">ADDRESS : </font></b>
                            <font size="+2"><?php echo $_SESSION['Addr'];?></font>
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                        <div class="12u$"style="border:50px;">
                            
                                <div id="hhh" >
                                  <button id="hhh">
            							<a href="uploadProduct.php" class="btn btn-primary" style="text-decoration: none;">Upload Product</a>
                                    </button>
                                    <button id="hhh">
                                        <a href="Login/logout.php" class="btn btn-danger" style="text-decoration: none;">LOG OUT</a>
                                    </button>
                                    
                                     <form id="hhh" action='update2.php' method='post' id="hhh">
                                      <input type="submit" style="background-color:blueviolet;"  value="update profile" name="update">
                                      </form>
                                                       
                                    <button id="hhh">
                                        <a href="edit product.php" class="btn btn-info" style="text-decoration: none;">Display Product </a>
                                    </button>
                           
                                     <form action='del.php' method='post'>
                                      
                                      <input type="submit"  style="background-color:black;" value="delete profile" name="delete">
                                      </form>
                  
                                </div>
                           
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/jquery.scrollex.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>
</body>
</html>







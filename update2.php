<?php
    session_start();

	if(!isset($_SESSION['logged_in']) OR $_SESSION['logged_in'] != 1)
	{
		$_SESSION['message'] = "You have successfull changed the credntils";
		header("Location: profileview.php");
	}

    //connect to the database
    
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "farmeasy";

    $conn = mysqli_connect($serverName, $userName, $password, $dbName);
//    $conn = mysqli_connect('host', 'username', 'password', 'dbname');

    if (isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $fusername = $_POST['fusername'];
        $femail = $_POST['femail'];
        $fmobile = $_POST['fmobile'];
        $faddress = $_POST['faddress'];

        $sql = "SELECT * FROM farmer WHERE femail='$femail'";
        $result1 = mysqli_query($conn, "SELECT * FROM farmer WHERE femail='$femail'") or die($mysqli->error());
        if ($result1->num_rows > 0 )
        {
            $_SESSION['message'] = "User with this email already exists!";
            //echo $_SESSION['message'];
            header("location: profileView.php");
        }
        //update the farmer's profile in the database
    $fid = $_SESSION['id'];
        $sql = "UPDATE farmer SET fname='$fname', fusername='$fusername', femail='$femail', fmobile='$fmobile', faddress='$faddress' WHERE fid='$fid'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            session_unset();
	        session_destroy();
        } else {
            echo "Error updating profile: <a href='profileView.php'><button>view profile</button></a>" . mysqli_error($conn);
        }
    }
    
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Agro Farm</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="login.css"/>
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<link rel="stylesheet" href="indexfooter.css" />
		<!-- [if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif] -->
	</head>
    <body>
        
    
   <form action="" method="post" class="container" style="width: 50%; height: 50%;">
    <h1>Profile Update</h1>
    <label for="fname">Full Name:</label>
    <input type="text" name="fname" value="<?php echo $_SESSION['Name'];?>" >
    <br>
    <label for="fusername">Username:</label>
    <input type="text" name="fusername" value="<?php echo $_SESSION['Username'];?>">
    <br>
    <label for="femail">Email:</label>
    <input type="email" name="femail" value="<?php echo $_SESSION['Email'];?>" >
    <br>
    <label for="fmobile">Mobile:</label>
    <input type="text" name="fmobile" value="<?php echo $_SESSION['Mobile'];?>">
    <br>
    <label for="faddress">Address:</label>
    <textarea name="faddress" rows="5" cols="50" value="<?php echo $_SESSION['Addr'];?>"></textarea>
 <br>
 <input  type="submit" value="Update Profile" name="submit">
 </form>
 </body>
 </html>
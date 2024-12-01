<?php
    session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = dataFilter($_POST['name']);
    $mobile = dataFilter($_POST['mobile']);
    $user = dataFilter($_POST['uname']);
    $email = dataFilter($_POST['email']);
    $pass = dataFilter(password_hash($_POST['pass'], PASSWORD_BCRYPT));
    $hash = dataFilter(md5(rand(0,1000)));
    $category = dataFilter($_POST['category']);
    $addr = dataFilter($_POST['addr']);

    $_SESSION['Email'] = $email;
    $_SESSION['Name'] = $name;
    $_SESSION['Password'] = $pass;
    $_SESSION['Username'] = $user;
    $_SESSION['Mobile'] = $mobile;
    $_SESSION['Category'] = $category;
    $_SESSION['Hash'] = $hash;
    $_SESSION['Addr'] = $addr;
    $_SESSION['Rating'] = 0;
}
require '../db.php';

$fid = $_SESSION['logged_in'];
$sqli = "SELECT * FROM farmer WHERE fid='$fid'";
$result = mysqli_query($conn, $sqli);
$User = $result->fetch_assoc();
$_SESSION['logged_in'] = $fid = $User['fid'];
$sqli = "UPDATE farmer SET fname='$name',fusername='$user',fpassword='$pass',fhash='$hash',femail='$email',fmobile='$mobile',faddress='$addr' WHERE fid='$fid'"; 
if (mysqli_query($conn, $sqli)) {
    $_SESSION['message'] = "Update successful!";
    header("location: profile.php");
} else {
    $_SESSION['message'] = "Update not successful!";
    header("location: error.php");
}

function dataFilter($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
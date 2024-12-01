<html>
    <style>
    h1{
    color:#4B0082;
    }
    div{
        padding:10%;
        height: 8rem;
        width:8rem;
        background-color: darkgreen;
        border-color:black;
        border-radius: 7%;
        border:7px;
    }
    </style>
    
<?php
   session_start();
   require 'db.php';            require 'menu.php';


if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $fid = $_SESSION['id'];
    $sql = "DELETE FROM farmer where fid=$fid ";
    if (mysqli_query($conn, $sql))
{
        echo "<center><div><h1>account  deleted <a href=\"index.php\">home";
        $_SESSION['logged_in'] = false;
        session_unset();
        session_destroy();
}
}
?>
</html>
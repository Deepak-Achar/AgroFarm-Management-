<?php
session_start();
require 'db.php';
require 'menu.php';
// $sql="SELECT * FROM `fproduct`";
// $result=mysqli_query($conn, $sql);
// while ($row = mysqli_fetch_assoc($result)) {
//     echo $row['pid'];
// }
$pro=$_GET['pid'];
$sqli = "DELETE FROM fproduct where pid=$pro ";
// echo "$sqli";
if (mysqli_query($conn, $sqli)) {
    echo "Product DELETED";
    echo "<a href='edit product.php'><button>back</button></a>";
}

?>

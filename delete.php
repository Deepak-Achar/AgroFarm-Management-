
?>
<?php
  /*first include database config file*/
  include_once('db.php');
  if(isset($_GET['id']))
  {
    $pid = $_GET['id'];
    $sql = "DELETE from fproduct where $pid";
    if(mysqli_query($conn,$sql))
    {
      /*now redirect on listing page*/
      header('Location:edit product.php');
      echo 'product delete';
        echo $pid;
    }
    else
    {
      echo mysqli_error($conn);
    }
  }
?>
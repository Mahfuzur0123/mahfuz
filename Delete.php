
<?php
include_once("conn.php");
?>
<?php
$get=$_GET['id'];

$sql="DELETE from product where ID='$get'";
$ex=mysqli_query($con,$sql);
echo "Delete complite";
?>
<a href="php to dbae.php"><h1>Go to Table</a> 
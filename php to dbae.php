<?php
include_once("conn.php");
?>
<?php
$sql="SELECT * FROM product";
$result=mysqli_query($con,$sql);
$num= mysqli_num_rows($result);

echo "<br>";

?>




<a href="insert.php">
<h3>Insert DATA</h3>
</a>
<h3>Product</h3>
<table border="3px"><tr><th>ID</th><th>Name </th><th>Description</th><th>Purchase Price</th><th>Quantity</th>
<th>Update</th><th>Delete</th></tr>
<?php
while($row=mysqli_fetch_assoc($result)){
echo "<tr>
      <td>$row[ID].</td>

      <td>$row[Name].</td>

      <td>$row[Description].</td>

      <td>$row[ID]</td>

      <td>$row[Quantity]</td>
      <td><a href='update.php?id=$row[ID]'>Update</a></td>
      <td><a href='Delete.php?id=$row[Name]'>Delete</a></td>

     </tr>";
     
}


?>
</table>
 


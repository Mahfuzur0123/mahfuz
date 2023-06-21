<?php
include_once("conn.php");
?>
<?php
$get=$_GET['id'];
echo "<br>";
$msql="SELECT * FROM product where ID='$get'";
$mresult = mysqli_query($con,$msql);
$mrow=mysqli_fetch_assoc($mresult);


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<form action="" method="POST">	
ID<input type="number" name="pid" > <br>
    Name<input type="text" name="name" ><br>
    Description<input type="text" name="des" ><br>
    Purchase price<input type="number" name="price" > <br>
    Quantity<input type="number" name="quan" > <br>
    <input type="submit" name="update" value="update"> 
</form>
<?php
if(isset($_POST['update']))
{
    $pid=$_POST['pid'];
    $name=$_POST['name'];
    $des=$_POST['des'];
    $price=$_POST['price'];
    $quan=$_POST['quan'];
    $sql="update product SET ID='$pid',Name='$name',Description='$des',Purchase price='$price',Quantity='$quan' where ID='$get'";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo "Success";
    }
    else

    {
        echo "Failed";
    } 
}

    ?>
    
</body>
</html>


    
    

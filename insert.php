
<?php
include_once("conn.php");
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
    <input type="submit" name="submit" value="Insert"> 
</form>
<?php
if(isset($_POST['submit']))
{
    $id=$_POST['pid'];
    $name=$_POST['name'];
    $des=$_POST['des'];
    $price=$_POST['price'];
    $quan=$_POST['quan'];

    $result=mysqli_query($con,"INSERT INTO `product` (`ID`, `Name`, `Description`, `Purchase price`, `Quantity`)
     VALUES ('$id', '$name', '$des', '$price', '$quan')");
    if($result)
    {
        echo "Success";

        echo'<script>
        window.location.href="hom.php";
        alert("Sigin Complite")
        </script>';
    }
    else
    {
        echo "Failed";

        echo'<script>
        window.location.href="hom.php";
        alert("Sigin Failed")
        </script>';
    } 
}
?>
</body>
</html>
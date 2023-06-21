
<?php
include_once("conn.php");
?>
<?php
if($con){
    echo "Connection Successfull";
}
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
    WID<input type="number" name="wid"> <br>
    Name<input type="text" name="name">
    <input type="submit" name="submit"> 
</form>
<?php
if(isset($_POST['submit']))
{
    $wid=$_POST['wid'];
    $name=$_POST['name'];
    $result=mysqli_query($con,"INSERT INTO `worker` (`wid`, `name`) VALUES ('$wid', '$name')");
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
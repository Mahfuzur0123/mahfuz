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
    Name<input type="text" name="name" >
    <input type="submit" name="submit" value="login"> 
</form>
<?php
if(isset($_POST['submit']))
{
    $pid=$_POST['pid'];
    $name=$_POST['name'];
    $msql="SELECT * FROM product where ID='$pid'";
    $mresult = mysqli_query($con,$msql);
    $mrow=mysqli_fetch_assoc($mresult);
    $dpid="$mrow[ID]";
    $dname="$mrow[Name]";
    if($pid==$dpid && $name==$dname){
        echo "Login complite";
        echo'<script>
        window.location.href="php to dbae.php";
        alert("Login Successful")
        </script>';
       
        
        
    }
    else{
        echo'<script>
        window.location.href="hom.php";
        alert("Login Failed")
        </script>';
    }
}
?>

</body>
</html>
<?php 
include("Db.php");
$id=$_GET['id'];
$sql=mysqli_query($con,"DELETE FROM wr_user where id='".$id."'");
if($sql){
$message = '<div class="alert alert-success">User Detail Has Been Deleted successfully </div>';
header("location:manageusers.php?success=true&message='.$message");
}
else
{
	echo "error";
}
?>
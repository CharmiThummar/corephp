<?php 
	 include('connection.php');
 	if(isset($_REQUEST['name'])){
	$name=$_REQUEST['name'];

	$del="delete * from student where name='$ name'";

	$con->query($del);
	header("Location:view.php");
}

?>

<?php 
	 include('connection.php');
	 if(isset($_REQUEST['name'])){
	 	     echo $name=$_REQUEST['name'];
	 	      $query="select * from student_name where name=$name";
	 	      $res=$con->query($query);
	 	      $row=$res->fetch_object();



	 }
?>
 <!DOCTYPE html>
<html>
<head>
	<title>FORM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
	<body>
	    <div class="container">
	    	<h2 style="text-align: center;">student table :-</h2>
	    	 <form method="POST">
	    	<div class="form-group">
	    	 	<label>student name:-</label>
	    	 	<input type="text" class="form-control" placeholder="enter student name" name="sname">
	    	</div>
	        <div class="form-group">
	    	 	<label>address:-</label>
	    	 	<input type="text" class="form-control" placeholder="enter student Address" name="add">
	    	</div>
	    	 <div class="form-group">
	    	 	<label>e-mail:-</label>
	    	 	<input type="email" class="form-control" placeholder="enter student e-mail" name="email">
	    	</div>
	    	 <div class="form-group">
	    	 	<label>contact nb.:-</label>
	    	 	<input type="number" class="form-control" placeholder="enter contact nb." name="cnb">
	    	</div>
	    	<button type="submit" class="btn btn-primary key" name="submit">Submit</button>


	    	 </form>
	    </div>	
</body>
</html>

<?php  
if (isset($_REQUEST['submit'])) {
		$sname=$_REQUEST['sname'];
		$add=$_REQUEST['add'];
		$email=$_REQUEST['email'];
		$cnb=$_REQUEST['cnb'];

		$query="update student_table set sname='$sname',add='$add',email='$email',cnb='$cnb' where sname='$name';";

		$con->query($query);
		header("location:view.php");
	}

?>
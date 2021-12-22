<?php include('connection.php') ?>
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
	    	 	<input type="mail" class="form-control" placeholder="enter student e-mail" name="mail">
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
		$mail=$_REQUEST['mail'];
		$cnb=$_REQUEST['cnb'];

     echo $query="insert into student_table(sname,add,mail,cno)values('$sname','$add','$mail','$cnb')";
     $con->query($query);




	}

?>
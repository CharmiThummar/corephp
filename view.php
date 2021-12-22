<?php include('connection.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>FORM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

<?php
$sel="select * from student_table";
$res=$con->query($sel);

?>
<div class="container">
<a href="form.php" class="btn btn-primary" style="text-align: center;">Add student</a>
  <h2>student table :-</h2>

  <table class="table">
    <thead>
      <tr>
        <th>student name:-</th>
        <th>address:-</th>
        <th>e-mail:-</th>
        <th>contact nb.:-</th>
        <th colspan="2">Action</th>

      </tr>
    </thead>
    <tbody>
 	<?php 
    while($row=$res->fetch_object()){
      ?>
      <tr>
        <td><?php echo $row->sname?></td>
        <td><?php echo $row->address?></td>
        <td><?php echo $row->email?></td>
        <td><?php echo $row->cnb?></td>

        <td><a href="update.php?name=<?php echo $row->sname;?>"><i class="fa fa-edit" style="font-size:36px;color:blue"></i></a></td>
        <td><a href="delete.php?name=<?php echo $row->sname;?>"><i class="material-icons" style="font-size:36px">delete_forever</i></a></td>


      </tr>

      <?php 

    }





 	 ?>
    </tbody>
  </table>
</div>
</body>
</html>




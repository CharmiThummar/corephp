
<?php include('connection.php'); ?>
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
</head>
<body>
<?php
$sel="select * from student_table";
$res=$con->query($sel);

?>
<div class="container">
  <h2>student table :-</h2>

  <table class="table">
    <thead>
      <tr>
        <th>student name:-</th>
        <th>address:-</th>
        <th>e-mail:-</th>
        <th>contact nb.:-</th>
      </tr>
    </thead>
    <tbody>
    <?php
    while($row=$res->fetch_object()){
      ?>
      <tr>
        <td><?php echo $row->sname?></td>
        <td><?php echo $row->add?></td>
        <td><?php echo $row->email?></td>
        <td><?php echo $row->cnb?></td>


      </tr>

      <?php
   }

    ?>


    </tbody>
  </table>
</div>

</body>
</html>
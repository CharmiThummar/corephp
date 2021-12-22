<?php include('connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>view</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
</head>
<body>
<?php
$sel="SELECT * FROM branch join crud on branch.sid= crud.branch";
$res=$connection->query($sel);

?>
<div class="container">
  <a href="registration.php" class="btn btn-primary">Add User</a>
  <h2>User Details</h2>

  <table class="table">
    <thead>
      <tr>
        <th>univercity</th>
        <th>institue</th>
        <th>branch</th>
        <th>degree</th>
        <th>experience</th>
        <th>email</th>
        <th>image</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
      while($row=$res->fetch_object()){
        ?>
        <tr>
          <td><?php echo $row->univercity ?></td>
          <td><?php echo $row->institue ?></td>
          <td><?php echo $row->branch ?></td>
          <td><?php echo $row->degree ?></td>
          <td><?php echo $row->experience ?></td>
          <td><?php echo $row->email ?></td>
          <td><img height="100px" width="100px" src="image/<?php echo $row->image ?>"></td>
          <td><a href="Registration.php?id=<?php echo $row->id?>">Edit</a></td>

        </tr>
        <?php
      }
    ?>


    </tbody>
  </table>
</div>

</body>
</html>
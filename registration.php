<?php	
include('connection.php');
$query="select * from branch";
$resbranch=$connection->query($query);

 ?>
 

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>form</title>
</head>
<body>
		<?php if(isset($_REQUEST['id']) && $_REQUEST['id']!=NULL){
			echo $id=$_REQUEST['id'];
			/*$query="select * from crud where id=$id";
			$res=$connection->query($query);
			$row=$resbranch->fetch_object();
			$dg=explode("-",$row->degree);*/
		}?>

		<h1 align="center">registration from</h1>
		<form method="POST" enctype="multipart/form-data">
			<fieldset>
				<legend>Registration details</legend>
			
			
		<table border="1" cellspacing="0px" cellpadding="10px" align="center">
			<!-- <tr>
				<th>student id:-</th>
				<td><input type="text" name="id" id="id" value=""></td>
			</tr> -->

			<tr>
				<th>univercity:-</th>
				<td><input type="text" name="univercity" id="univercity" value="<?php echo $row->univercity ?? ""?>"></td>
				
			</tr>
			<tr>
				<th>institue:-</th>
				<td><input type="text" name="institue" id="institue" value="<?php echo $row->institue ?? ""?>"></td>
			</tr>
		<tr>
				<th>branch:-</th>
				<td>
				<select name="branch" id="branch">	
						<option>---select---</option>
						<option>vnsgu</option>
						<option>porla</option>
						<option>rahya</option>
						<option>savysachi</option>

						<?php 
						
						while ($rowbranch=$resbranch->fetch_object()){
						?>
						<option value="<?php echo $row->sid?>"><?php echo $row->sname ?></option>
						<option value="<?php echo $row->sid?>">

							<?php echo(isset($row->branch)&&($row->branch==$rowbranch->sid))?"selected":"" ?>>
							<?php echo $rowbranch->sname ?></option>
						<?php 
						}
						?>
							
						</select>
				</td>
			</tr>
					
		<tr>
			<th>degree:-</th>
			<td>
				
				BCA<input type="checkbox" name="degree[]" id="degree" value="BCA" <?php echo(isset($dg)&&in_array("BCA", $dg))?"checked":""; ?>>
				BBA<input type="checkbox" name="degree[]" id="degree" value="BBA"  <?php echo(isset($dg)&&in_array("BBA", $dg))?"checked":""; ?>>
				BCOM<input type="checkbox" name="degree[]" id="degree" value="BCOM"  <?php echo(isset($dg)&&in_array("BCOM", $dg))?"checked":""; ?>>

			</td>
		</tr>
		<tr>
			<th>experience</th>
			<td><input type="option" name="experience" id="experience" value="">
				<select>
					<option>---select---</option>
					<option>1year</option>
					<option>2year</option>
					<option>3year</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>email</th>
				<td><input type="mail" name="email" id="email" value="<?php echo $row->email ?? ""?>"></td>
		<tr>
			<th>image</th>
				<td>
					<?php 
						if (isset($row->image)) {
							?>
							<img height="100px" width="100px" src="image/<?php echo $row->image ?>">
							<?php
						}?>
					<input type="file" name="image" id="image">
				</td>
			</tr>

		</tr>
		   <td style="text-align: center;">
			<td><input type="submit" name="<?php echo  isset($_REQUEST['id'])?"update":"submit"?>" id="submit" value="<?php echo  isset($_REQUEST['id'])?"submit":"submit"?>"></td>
			</td>
		</tr>


	</table>
</form>

<?php 
		if(isset($_POST['update'])&&isset($_REQUEST['id'])){
 		$id=$_POST['id'];
    	$univercity=$_POST['univercity'];
    	$institue=$_POST['institue'];
    	$branch=$_POST['branch'];
    	$degree=implode('-',$_POST['degree']);
    	$experience=$_POST['experience'];
    	$email=$_POST['email'];
    	if(isset($_FILES['image']['name'])&&$_FILES['image']['name']!=""){
    	$filename=$_FILES['image']['tmp_name'];
    	move_uploaded_file($temp, "image/".$filename);
    	}
    	else{
    		$filename=$row->image;
		}
		$upquery="update crud set univercity='$univercity',institue='$institue',branch='$branch',degree='$degree',experience='$experience',email='$email',image='$filename' where id= $id";
			$connection->query($upquery);
			header("location:view.php");
	   }
		if(isset($_POST['submit'])){
 		
    	$univercity=$_POST['univercity'];
    	$institue=$_POST['institue'];
    	$branch=$_POST['branch'];
    	echo "<pre>";
    	print_r($_POST['degree']);

    	echo $degree=implode('-',$_POST['degree']);
    	
    	$experience=$_POST['experience'];
    	$email=$_POST['email'];
    	echo $filename=$_FILES['image']['name'];
    	$temp=$_FILES['image']['tmp_name'];
    	move_uploaded_file($temp, 'image/'.$filename);
    	
   		echo $query ="insert into crud(univercity,institue,branch,degree,experience,email,image)values('$univercity','$institue','$branch','$degree','$experience','$email','$filename')";
   		
    	$connection->query($query);
    }


 ?>
</body>
</html>



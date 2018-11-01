
<?php
	
	$con = mysqli_connect('localhost','root','','wapexp');
	if($con){
		echo "connection start";
	}
	else{
		echo"connection not start";
	}

?>


<form method="post">
	<label>Name</label>
	<input type="text" name="name">
	<label>Email</label>
	<input type="text" name="email">
	<label>Password</label>
	<input type="text" name="pass">
	<input type="submit" name="btn">
</form>
<?php
	if(isset($_POST['btn'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];

		$sql = "INSERT INTO info(name,email,password)VALUES('$name','$email','$pass')";
		$res = mysqli_query($con,$sql);

		
	}




?>


<table border="1">
<tr>
<th>Name</th>
<th>Email</th>
<th>Password</th>
<th>Action</th>
</tr>

<?php
	
	$ins = "SELECT * FROM info";
	$run = mysqli_query($con,$ins);

	while ($data = mysqli_fetch_array($run)) {	
	
?>

<tr>
<td><?php echo $data['name']; ?></td>
<td><?php echo $data['email']; ?></td>
<td><?php echo $data['password']; ?></td>
<td><a href="del.php?var=<?php echo $data['id']; ?>"> Delete</a> | <a href="update.php?var=<?php echo $data['id']; ?>">Update</a></td>
</tr>
<?php

}
?>
</table>




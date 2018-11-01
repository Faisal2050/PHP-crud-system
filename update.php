<?php
$con = mysqli_connect('localhost','root','','wapexp');



$id = $_GET['var'];

$ins = "SELECT * FROM info WHERE id = '$id'";
	$run = mysqli_query($con,$ins);

	$data = mysqli_fetch_array($run);


?>

<form method="post">
	<label>Name</label>
	<input type="text" name="name" value="<?php echo $data['name']; ?>">
	<label>Email</label>
	<input type="text" name="email" value="<?php echo $data['email']; ?>">
	<label>Password</label>
	<input type="text" name="pass" value="<?php echo $data['password']; ?>">
	<input type="submit" name="btn" >
	
</form>


<?php
if (isset($_POST['btn'])) {

	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];

$update = "UPDATE `info` SET `name`= '$name',`email`='$email',`password`= '$pass' WHERE id = '$id'";
$res = mysqli_query($con, $update);
header('location:ab.php');

}

?>
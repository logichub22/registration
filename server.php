<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'crud');

	// initialize variables
	$name = "";
	$address = "";
	$id = 0;
	$edit_state=false;
	$_SESSION['message']="";
	

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$address = $_POST['address'];
		$query=("INSERT INTO info(name, address) VALUES ('$name','$address')");
		mysqli_query($db,$query);
		$_SESSION['name']=$name;
		$_SESSION['message'] = "Address saved";
		header('location:index.php');
	}
	if (isset($_POST['Update'])) {
	$name = $_POST['name'];
	$address = $_POST['address'];
	$id = $_POST['id'];
	
	mysqli_query($db, "UPDATE info SET name='$name', address='$address' WHERE id=$id");
	$_SESSION['message'] = "Address updated!"; 
	header('location: index.php');
}
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM info WHERE id=$id");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: index.php');
	}
	//retrive all the record
$results = mysqli_query($db,"SELECT * FROM info" );
?>
		
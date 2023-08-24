<?php include ('server.php');?>

<?php if(isset($_GET['edit'])){ 
	$id = $_GET['edit']; //fetch the record to be updated
	$edit_state = true;
		$record = mysqli_query($db, "SELECT * FROM info WHERE id=$id");

		
			$n = mysqli_fetch_array($record);
			$name = $n['name'];
			$address = $n['address'];
			$id=$n['id'];
		
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>CRUD: CReate, Update, Delete PHP MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
<?php
if(isset($_SESSION['name'])):?>
	<?php
	echo $_SESSION['name'];
	?>
<?php endif?>

?>
<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Address</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	<tbody>
		<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['address']; ?></td>
		
			<td><a class="edit_btn" href="index.php?edit=<?php echo $row['id']; ?>">Edit</a></td>
			<td><a class="del_btn" href="server.php?del=<?php echo $row['id']; ?>">Delet</a></td>
			
		</tr>
		<?php } ?>
	</tbody>
</table>
<form method="post" action="server.php" >
	<input type="hidden" name="id"value="<?php echo $id;?>">
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="<?php echo$name;?>">
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="address" value="<?php echo$address;?>">
		</div>
		<div class="input-group">
			<?php if($edit_state==false):?>
			<button class="btn" type="submit" name="save" >Save</button>
			<?php else:?>
				<button class="btn" type="submit" name="Update" >Update</button>
			<?php endif ?>
		</div>
	</form>
</body>
</html>
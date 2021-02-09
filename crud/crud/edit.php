<?php
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$fname = mysqli_real_escape_string($mysqli, $_POST['fname']);
	$mname = mysqli_real_escape_string($mysqli, $_POST['mname']);
	$lname = mysqli_real_escape_string($mysqli, $_POST['lname']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);	
	
	if(empty($fname) || empty($mname) || empty($lname) || empty($age) || empty($email)) {
			
		if(empty($fname)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		if(empty($mname)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		if(empty($lname)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		if(empty($age)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}		
	} else {	
		$result = mysqli_query($mysqli, "UPDATE users SET fname='$fname',mname='$mname',lname='$lname',age='$age',email='$email' WHERE id=$id");
		
		header("Location: index.php");
	}
}
?>
<?php
$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$fname = $res['fname'];
	$mname = $res['mname'];
	$lname = $res['lname'];
	$age = $res['age'];
	$email = $res['email'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>First Name</td>
				<td><input type="text" name="fname" value="<?php echo $fname;?>"></td>
			</tr>
			<tr> 
				<td>Middle Name</td>
				<td><input type="text" name="mname" value="<?php echo $mname;?>"></td>
			</tr>
			<tr> 
				<td>Last Name</td>
				<td><input type="text" name="lname" value="<?php echo $lname;?>"></td>
			</tr>
			<tr> 
				<td>Age</td>
				<td><input type="text" name="age" value="<?php echo $age;?>"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $email;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
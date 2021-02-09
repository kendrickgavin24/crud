<html>
<head>
	<title>Add Data</title>
</head>
<body>

<?php
include_once("config.php");

if(isset($_POST['Submit'])) {	
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
		
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
	
		$result = mysqli_query($mysqli, "INSERT INTO users(fname,mname,lname,age,email) VALUES('$fname','$mname','$lname','$age','$email')");
		
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>
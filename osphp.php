<?php
	$conn = mysqli_connect("localhost","os","os","useraccounts") or die(" Connection Error " . mysqli_error($conn));
	$username=$_POST['username'];
	$email=$_POST['email'];

	$sql="INSERT INTO users(username,email) VALUES ('$username','$email')";

	$result = mysqli_query($conn, $sql) or die("Insertion Error " . mysqli_error($conn));

echo "Values Inserted";
?>
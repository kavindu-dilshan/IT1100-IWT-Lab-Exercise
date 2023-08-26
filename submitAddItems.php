<?php
	include_once 'config.php';

	$name = $_POST["field1"];
	$code = $_POST["field2"];
	$description = $_POST["field5"];
	$price = $_POST["field3"];
	$quantity = $_POST["field4"];

	$sql = "INSERT INTO item (Item_name, Item_code, Item_description, Price, Quantity) VALUES ('$name', '$code', '$description', '$price', '$quantity')";

	if (mysqli_query($conn, $sql)) {
		echo "<script>alert('Record Inserted Successfully.')</script>";
		header("Location: index.php");
	} else {
		echo "<script>alert('Error in Inserting Records')</script>";
	}

	mysqli_close($conn);
?>

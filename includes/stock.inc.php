<?php
require_once "dbh.inc.php";

if(isset($_POST['submit'])){
	if(isset($_POST['itemName']) && !empty($_POST['itemName']) &&
	isset($_POST['itemType']) && !empty($_POST['itemType']) &&
	isset($_POST['itemSpecs']) && !empty($_POST['itemSpecs']) &&
	isset($_POST['itemQuantity']) && !empty($_POST['itemQuantity'])){
		$itemName = $_POST['itemName'];
		$itemType = $_POST['itemType'];
		$itemSpecs = $_POST['itemSpecs'];
		$itemQuantity = $_POST['itemQuantity'];

		$query = $conn->prepare("INSERT INTO stock(`item_name`,`item_type`,`item_specs`,`item_quantity`)
												values(:item_name,:item_type,:item_specs,:item_quantity)");

		$query->execute(array(
			":item_name" => $itemName,
			":item_type" => $itemType,
			":item_specs" => $itemSpecs,
			":item_quantity" => $itemQuantity
		));

	}
	header("Location: ../stock.php");
}
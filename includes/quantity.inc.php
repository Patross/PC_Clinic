<?php
require_once "dbh.inc.php";
if(isset($_POST['submit'])){
	if(isset($_POST['itemQuantity']) && !empty($_POST['itemQuantity'])){
        
        $quantity = $_POST['itemQuantity'];
        $id = $_GET['id'];

        $query = $conn->prepare("UPDATE stock SET `item_quantity` = :item_quantity WHERE `id` = :id");
        $query->execute(array(
            ":item_quantity" => $quantity,
            ":id" => $id
        ));
    }
    header("Location: ../stock.php");
}
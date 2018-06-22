<?php

require_once("includes/header.inc.php");
require_once("includes/dbh.inc.php");

$query = $conn->query("SELECT * FROM stock");
$stock = $query->fetchAll();

?>
<html>
    <body>
		<?php require_once("includes/nav.inc.php"); ?>
		<div class="holder">
			<form class="form" action="includes/stock.inc.php" method="POST">
				<div class="title">Add Stock</div>
				<div class="subtitle">Item name</div>
				<input type="text" placeholder="Item name" name="itemName">
				<div class="subtitle">Item type</div>
				<input type="text" placeholder="Item type" name="itemType">
				<div class="subtitle">Item specs</div>
				<input type="text" placeholder="Item specs" name="itemSpecs">
				<div class="subtitle">Item quantity</div>
				<input type="text" placeholder="Item quantity" name="itemQuantity">
				<input type="submit" value="Add"                    name="submit">
			</form>
			<table>
				<tr>
					<th>Item Name</th>
					<th>Type</th>
					<th>Specs</th>
					<th>Quantity</th>
				</tr>
				<?php
					for($i=0;$i<sizeOf($stock);$i++):
				?>
				<tr>
					<td><?php echo $stock[$i]['item_name']?></td>
					<td><?php echo $stock[$i]['item_type']?></td>
					<td><?php echo $stock[$i]['item_specs']?></td>
					<td><?php echo $stock[$i]['item_quantity']?></td>
				</tr>
				<?php
					ENDFOR;
				?>
			</table>
		</div>
    </body>
</html>
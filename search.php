<?php

require_once("includes/header.inc.php");
require_once("includes/dbh.inc.php");

if(!empty($_GET['search'])){
	$search = htmlspecialchars(strip_tags($_GET['search']));
	$query = $conn->prepare("SELECT * FROM booking WHERE id LIKE :ref OR serial_number LIKE :serial");
	$query->execute(array('ref' => $search,'serial' => $search));
	$bookingData = $query->fetchAll();
} else {
	$query = $conn->prepare("SELECT * FROM booking");
	$query->execute();
	$bookingData = $query->fetchAll();
}

if(isset($_POST['submit'])){
	$ref = htmlspecialchars(strip_tags($_POST['ref']));
	header("Location: search.php?search=$ref");
}

?>
<html>
    <body>
		<?php require_once("includes/nav.inc.php"); ?>
		<div class="holder">
			<form class="form" style="width: 100%;" action="" method="POST">
				<div class="title">Search Requests</div>
				<input type="text" placeholder="Reference Number" name="ref">
				<input type="submit" value="Search" name="submit"/>
			</form>
			<table>
			  <tr>
				<th>Reference Number</th>
				<th>Full Name</th>
				<th>Priority</th>
				<th>Serial Number</th>
			  </tr>
			  <?php
			  
			  for($i=0;$i<sizeOf($bookingData);$i++):
					$id = $bookingData[$i]['user_id'];
					$query = $conn->prepare("SELECT * FROM users WHERE id = :id");
					$query->execute(array('id' => $id));
					$userData = $query->fetch();
			  
			  ?>
			  <tr>
				<td><?php echo $bookingData[$i]['id']; ?></td>
				<td><?php echo $userData['first_name']; ?> <?php echo $userData['last_name']; ?></td>
				<td><div class="<?php echo $bookingData[$i]['priority']; ?>"></div></td>
				<td><?php echo $bookingData[$i]['serial_number']; ?></td>
			  </tr>
			  <?php
			  
			  ENDFOR;
			  
			  ?>
			</table>
		</div>
    </body>
</html>
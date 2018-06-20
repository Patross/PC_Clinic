<?php

require_once("includes/dbh.inc.php");

if(isset($_GET['id'])){
	$id = htmlspecialchars(strip_tags($_GET['id']));
	
	$query = $conn->prepare("SELECT * FROM booking WHERE id = :id");
	$query->execute(array('id' => $id));
	$bookingData = $query->fetch();
	
	$query = $conn->prepare("SELECT * FROM users WHERE id = :id");
	$query->execute(array('id' => $bookingData['user_id']));
	$userData = $query->fetch();
} else {
	header("Location: search.php");
}

?>
<html>
    <body>
		<div class="holder">
			<?php
				
				echo "<h1>PC CLINIC INVOICE - REF ".$bookingData['id']."</h1>";
				
				echo "<h2>YOUR DETAILS</h2>";
				echo "<b>Full name: </b>".$userData['first_name']." ".$userData['last_name']."<br><br>";
				echo "<b>Email Address: </b>".$userData['email_address']."<br><br>";
				echo "<b>Address: </b>".$userData['address']."<br><br>";
				echo "<b>Postcode: </b>".$userData['postcode']."<br><br>";
			
				echo "<h2>DEVICE DETAILS</h2>";
				echo "<b>Date booked in: </b>".$bookingData['date_booked']."<br><br>";
				echo "<b>Serial Number: </b>".$bookingData['serial_number']."<br><br>";
				echo "<b>Device Problem: </b><br>".$bookingData['problem_description']."<br><br>";
			
			?>
		</div>
    </body>
</html>
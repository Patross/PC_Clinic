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
	
	$query = $conn->prepare("SELECT * FROM job_status WHERE booking_id = :id");
	$query->execute(array('id' => $bookingData['id']));
	$jobData = $query->fetch();
} else {
	header("Location: search.php");
}

?>
<html>
    <body>
		<head>
			<title>Invoice <?php echo $bookingData['id']; ?></title>
			<link rel="stylesheet" href="css/invoice.css" type="text/css">
		</head>
			<button id="print">Print Invoice</button>
			<a id="link" href="invoiceBlank.php">Blank Invoice</a>
		<div class="holder">
			<div class="invoice">
				<img src="images/logo.png">
				<div class="invoice-title">
					<?php
						
						echo "<h1>PC CLINIC INVOICE - REF ".$bookingData['id']."</h1>";
					
					?>
				</div>
				<div class="box box-top">
				<?php

					echo "<h2>YOUR DETAILS</h2>";
					echo "<b>Full name: </b>".$userData['first_name']." ".$userData['last_name']."<br><br>";
					echo "<b>Email Address: </b>".$userData['email_address']."<br><br>";
					echo "<b>Address: </b>".$userData['address']."<br><br>";
					echo "<b>Postcode: </b>".$userData['postcode']."<br><br>";
				
				?>
				</div>
				<div class="box box-top">
					<?php
					
					echo "<h2>JOB DETAILS</h2>";
					echo "<b>Worked on by: </b>".$jobData['worked_on_by']."<br><br>";
					echo "<b>Date worked on: </b>".$jobData['date_worked']."<br><br>";
					echo "<b>Status: </b>".$jobData['status']."<br><br><br><br>";
					
					?>
				</div>
				<div style="clear: both"></div>
				<div class="box box-device">
				<?php
					echo "<h2>DEVICE DETAILS</h2>";
					echo "<b>Date booked in: </b>".$bookingData['date_booked']."<br><br>";
					echo "<b>Serial Number: </b>".$bookingData['serial_number']."<br>";
					echo "<div class='box-spacer'></div>";
					echo "<b>Device Problem: </b><br>".$bookingData['problem_description']."<br><br>";
				?>
					
				</div>
				<div class="box box-exchange">
					<h2>REPAIR/EXCHANGE</h2>
					<?php 
					$keys = array_keys($jobData);
					for($i=4;$i<sizeOf($jobData)/2-2;$i++){
						if($jobData[$i] == "yes"){
							echo $keys[$i*2].": ".$jobData[$i]."<br>";
						}
					}
					echo "<div class='box-spacer'></div>";
					echo "<b>Additional Information: </b><br>".$jobData['additional_information'];
					?>
				</div>
				<div class="footer">
					Burton Town Centre Campus,
					Lichfield Street,<br>
					Burton on Trent,
					Staffordshire,
					DE14 3RL<br>
					Website: bsdc.ac.uk<br>
					Tel: 01283 494400
				</div>
			</div>
		</div>

		<script src="scripts/print.js"></script>
    </body>
</html>
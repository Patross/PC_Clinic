<?php



?>
<html>
    <body>
		<div class="holder">
			<?php
				error_reporting(0);
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
		<button id="print">Print Invoice</button>
		<script src="scripts/print.js"></script>
    </body>
</html>
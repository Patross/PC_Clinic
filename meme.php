<?php

require_once("includes/header.inc.php");

?>
<html>
    <body>
		<?php require_once("includes/nav.inc.php"); ?>
		<form class="form" action="booking.inc.php" method="POST">
			<div class="title">Submit Request</div>
			<div class="subtitle">User Details</div>
			<input type="text"  placeholder="First Name"         name="firstName">
			<input type="text"  placeholder="Last Name"          name="lastName">
			<input type="email" placeholder="Email Address"      name="email">
			<input type="text"  placeholder="Phone Number"       name="phone">
			<input type="text"  placeholder="Address"            name="address">
			<input type="text"  placeholder="Postcode"           name="postcode">
			
			<div class="subtitle">Or submit email from previous</div>
			<input type="email" placeholder="Email Address"      name="email">
			<input type="submit" value="Next"                    name="submit">
		</form>
    </body>
</html>
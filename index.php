<?php

require_once("includes/header.inc.php");

?>
<html>
    <body>
		<div class="nav">
			<div class="holder">
				<div class="title">PC_Clinic</div>
			</div>
		</div>
		<form class="form" method="POST">
			<input type=text placeholder="First Name" name="firstName">
			<input type=text placeholder="Last Name" name="lastName">
			<input type=email placeholder="Email Address" name="email">
			<input type=tel placeholder="Phone Number" name="phone">
			<input type=number placeholder="Item Serial Number" name="serial">
			<input type=text placeholder="Address" name="address">
			<input type=text placeholder="Postcode" name="postcode">
			
			<input type="submit" value="Submit" name="submit">
		</form>
    </body>
</html>
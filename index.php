<?php

require_once("includes/header.inc.php");

$mode = "";
if(isset($_GET['mode'])){
	$mode = $_GET['mode'];
}

?>
<html>
    <body>
		<div class="nav">
			<div class="holder">
				<div class="title">PC Clinic</div>
			</div>
		</div>
		<?php if(empty($mode)):?>
		<div class="holder modeSelector">
			<div class="title">Select new user or existing</div>
			<div class="buttons">
				<a href="index.php?mode=NEW">NEW USER</a>
				<a href="index.php?mode=OLD">EXISTING USER</a>
			</div>
			<div style="clear: both;"></div>
		</div>
		<?php ENDIF; ?>
		<?php if($mode == "NEW"): ?>
		<form class="form" action="includes/booking.inc.php?mode=new" method="POST">
			<div class="title">Submit Request</div>
			<div class="subtitle">User Details</div>
			<input type="text"  placeholder="First Name"         name="firstName">
			<input type="text"  placeholder="Last Name"          name="lastName">
			<input type="email" placeholder="Email Address"      name="email">
			<input type="text"  placeholder="Phone Number"       name="phone">
			<input type="text"  placeholder="Address"            name="address">
			<input type="text"  placeholder="Postcode"           name="postcode">
			
			<div class="subtitle">Request Details</div>
			<select name="priority">
				<option hidden selected="selected">Priority</option>
				<option value="low">Low</option>
				<option value="medium">Medium</option>
				<option value="high">High</option>
			</select>
			<select name="jobType">
				<option hidden selected="selected">Type of Job</option>
				<option value="repair">Repair</option>
				<option value="exchange">Exchange</option>
				<option value="upgrade">Upgrade</option>
			</select>
			<input type="text"  placeholder="Item Serial Number" name="serial">
			<input type="text"  placeholder="Passwords"          name="passwords">
			<textarea placeholder="Describe your issue..."></textarea>
			<input type="submit" value="Next"                    name="submit">
		</form>
		<?php ENDIF; ?>
		<?php if($mode == "OLD"): ?>
		<form class="form" action="includes/booking.inc.php" method="POST">
			<div class="title">Submit Request</div>
			<div class="subtitle">User Details</div>
			<input type="email" placeholder="Email Address"      name="email">
			<div class="subtitle">Request Details</div>
			<select name="priority">
				<option hidden selected="selected">Priority</option>
				<option value="low">Low</option>
				<option value="medium">Medium</option>
				<option value="high">High</option>
			</select>
			<select name="jobType">
				<option hidden selected="selected">Type of Job</option>
				<option value="repair">Repair</option>
				<option value="exchange">Exchange</option>
				<option value="upgrade">Upgrade</option>
			</select>
			<input type="text"  placeholder="Item Serial Number" name="serial">
			<input type="text"  placeholder="Passwords"          name="passwords">
			<textarea placeholder="Describe your issue..."></textarea>
			<input type="submit" value="Next"                    name="submit">
		</form>
		<?php ENDIF; ?>
		<script src="scripts/buttons.js"></script>
    </body>
</html>
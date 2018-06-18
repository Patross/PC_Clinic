<?php

    require_once("includes/header.inc.php");
	
?>
<html>
    <body>
		<?php require_once("includes/nav.inc.php"); ?>
		<form class="form" method="POST">
			<div class="title">Updates</div>
			<input type="text" placeholder="Worked on by" name="workedOn">
			<input type="date" placeholder="Date of work carried out" name="dateCarriedOut">
            <div class="subtitle">Hardware Check</div>
			
			<div class="row">
				<input type="checkbox" name="HDD">
				<label for="HDD">HDD</label>
			</div>
			
			<div class="row">
				<input type="checkbox" name="Monitor">
				<label for="Monitor">Monitor</label>
            </div>
			
			<div class="row">
				<input type="checkbox" name="RAM">
				<label for="RAM">RAM</label>
            </div>
			
			<div class="row">
				<input type="checkbox" name="Motherboard">
				<label for="Motherboard">Motherboard</label>
            </div>
			
            <div class="subtitle">Software Check</div>
			
			<div class="row">
				<input type="checkbox" name="upToDate">
				<label for="upToDate">Up To Date</label>
            </div>
			
			<div class="row">
				<input type="checkbox" name="virusScanner">
				<label for="virusScanner">Virus Scanner</label>
            </div>
			
            <div class="subtitle">Network Check</div>
			
			<div class="row">
				<input type="checkbox" name="wired">
				<label for="wired">Wired</label>
            </div>
			
			<div class="row">
				<input type="checkbox" name="wireless">
				<label for="wireless">Wireless</label>
            </div>
			
			<div class="row">
				<input type="checkbox" name="connection">
				<label for="connection">Connection</label>
            </div>
			
			<div class="row">
				<input type="checkbox" name="internet">
				<label for="internet">Internet</label>
            </div>
			
			<div class="row">
				<input type="checkbox" name="emailConfig">
				<label for="emailConfig">E-mail Configuration</label>
            </div>
			
            <div class="subtitle">Additional Information</div>
            <textarea rows="4" cols="50" placeholder="Additional Information"></textarea>
            
            <div class="subtitle">Status</div>
			<div class="row">
				<input type="radio" name="status">
				<label for="ongGoing">On Going</lable>
            </div>
			<div class="row">
				<input type="radio" name="status">
				<label for="complete">Complete</label>
            </div>
			<div class="row">
				<input type="radio" name="status">
				<label for="cantRepair">Can't Repair</label>
			</div>
            
			<br><br>
            <input type="submit" value="Submit" name="submit">
		</form>
    </body>
</html>


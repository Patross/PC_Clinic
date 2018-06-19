<?php

    require_once("includes/header.inc.php");
	
?>
<html>
    <body>
		<?php require_once("includes/nav.inc.php"); ?>
		<form class="form" method="POST">
			<div class="title">Updates</div>
            <div class="subtitle"><strong>Worked on details</strong></div>
			<input type="text" placeholder="Worked on by" name="workedOn">
            
			<input type="date" placeholder="Date of work carried out" name="dateCarriedOut">
            <br>
            <div class="subtitle"><strong>Hardware Check</strong></div>
			
			<div class="row">
				<input type="checkbox" name="Motherboard">
				<label for="Motherboard">Motherboard</label>
            </div>
            
			<div class="row">
				<input type="checkbox" name="Processor">
				<label for="Processor">Processor</label>
            </div>
            
			<div class="row">
				<input type="checkbox" name="RAM">
				<label for="RAM">RAM</label>
            </div>
            
            <div class="row">
                <input type="checkbox" name="GPU">
                <label for="GPU">GPU</label>
            </div>
            
            <div class="row">
                <input type="checkbox" name="Networkcard">
                <label for="Networkcard">Network Card</label>
            </div>
            
            <div class="row">
                <input type="checkbox" name="Soundcard">
                <label for="Soundcard">Sound Card</label>
            </div>
            
            <div class="row">
                <input type="checkbox" name="Opticaldrive">
                <label for="Opticaldrive">Opitcal Drive</label>
            </div>
            
            <div class="row">
                <input type="checkbox" name="Powersupply">
                <label for="Powersupply">Power Supply</label>
            </div>
			
			<div class="row">
				<input type="checkbox" name="HDD">
				<label for="HDD">HDD</label>
			</div>
			
            <div class="row">
                <input type="checkbox" name="SSS">
                <label for="SSD">SSD</label>
            </div>
            
			<div class="row">
				<input type="checkbox" name="Monitor">
				<label for="Monitor">Monitor</label>
            </div>
            
            <div class="row">
                <input type="checkbox" name="Keyboard">
                <label for="Keyboard">Keyboard</label>
            </div>
            
            <div class="row">
                <input type="checkbox" name="Mouse">
                <label for="Mouse">Mouse</label>
            </div>
            <div class="subtitle"><strong>Software Check</strong></div>
			
			<div class="row">
				<input type="checkbox" name="upToDate">
				<label for="upToDate">Up To Date</label>
            </div>
			
			<div class="row">
				<input type="checkbox" name="virusScanner">
				<label for="virusScanner">Virus Scanner</label>
            </div>
			
            <div class="row">
                <input type="checkbox" name="email">
                <label for="email">E-mail</label>
            </div>
            
            <div class="subtitle"><strong>Network Check</strong></div>
			
			<div class="subtitle">Wired</div>
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
            
			<div class="subtitle">Wireless</div>
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
            <div class="subtitle"><strong>Additional Information</strong></div>
            <textarea rows="4" cols="50" placeholder="Additional Information"></textarea>
            
            <div class="subtitle"><strong>Status</strong></div>
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


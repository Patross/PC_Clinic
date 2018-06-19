<?php

    require_once("includes/header.inc.php");
	if(isset($_GET['id'])){
		$id = htmlspecialchars(strip_tags($_GET['id']));
	}
?>
<html>
    <body>
		<?php require_once("includes/nav.inc.php"); ?>
		<form class="form" action="includes/status.inc.php?id=<?php echo $id; ?>" method="POST">
			<div class="title">Updates</div>
            <div class="subtitle"><strong>Worked on details</strong></div>
			<input type="text" placeholder="Worked on by" name="workedOn">
            
			<input type="date" placeholder="Date of work carried out" name="dateCarriedOut">
            <br>
            <div class="subtitle"><strong>Hardware Check</strong></div>
			
			<div class="row">
				<input type="checkbox" name="motherboard">
				<label for="motherboard">Motherboard</label>
            </div>
            
			<div class="row">
				<input type="checkbox" name="processor">
				<label for="processor">Processor</label>
            </div>
            
			<div class="row">
				<input type="checkbox" name="ram">
				<label for="ram">RAM</label>
            </div>
            
            <div class="row">
                <input type="checkbox" name="GPU">
                <label for="GPU">GPU</label>
            </div>
            
            <div class="row">
                <input type="checkbox" name="networkCard">
                <label for="networkCard">Network Card</label>
            </div>
            
            <div class="row">
                <input type="checkbox" name="soundCard">
                <label for="soundCard">Sound Card</label>
            </div>
            
            <div class="row">
                <input type="checkbox" name="opticalDrive">
                <label for="opticalDrive">Opitcal Drive</label>
            </div>
            
            <div class="row">
                <input type="checkbox" name="powerSupply">
                <label for="powerSupply">Power Supply</label>
            </div>
			
			<div class="row">
				<input type="checkbox" name="hdd">
				<label for="hdd">HDD</label>
			</div>
			
            <div class="row">
                <input type="checkbox" name="ssd">
                <label for="ssd">SSD</label>
            </div>
            
			<div class="row">
				<input type="checkbox" name="monitor">
				<label for="monitor">Monitor</label>
            </div>
            
            <div class="row">
                <input type="checkbox" name="keyboard">
                <label for="keyboard">Keyboard</label>
            </div>
            
            <div class="row">
                <input type="checkbox" name="mouse">
                <label for="mouse">Mouse</label>
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
				<input type="checkbox" name="wiredConnection">
				<label for="wiredConnection"> Wired Connection</label>
            </div>
			
			<div class="subtitle">Wireless</div>
			<div class="row">
				<input type="checkbox" name="wirelessConnection">
				<label for="wirelessConnection"> Wireless Connection</label>
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
			<select name="status">
				<option hidden selected="selected">Repair Status</option>
				<option value="onGoing">On Going</option>
				<option value="complete">Complete</option>
				<option value="cantRepair">Can't Repair</option>
			</select>
            
			<br><br>
            <input type="submit" value="Submit" name="submit">
		</form>
    </body>
</html>


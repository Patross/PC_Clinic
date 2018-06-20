<?php

    require_once("includes/header.inc.php");
	if(isset($_GET['id'])){
		$id = htmlspecialchars(strip_tags($_GET['id']));
	}
?>
<html>
    <body>
		<?php require_once("includes/nav.inc.php"); ?>

        <?php
        //getting all the stuff
        require_once "includes/dbh.inc.php";
        @$query = $conn->query("select * from job_status where `booking_id` = '$id'");
        $result = $query->fetch();

        ?>
		<form class="form" action="includes/status.inc.php?id=<?php echo $id; ?>" method="POST">
			<div class="title">Updates</div>
            <div class="subtitle"><strong>Worked on details</strong></div>
			<input type="text" placeholder="Worked on by" name="workedOn" <?php echo isset($result['worked_on_by'])?"value='".$result['worked_on_by']."'":null;?>>
            
			<input type="date" placeholder="Date of work carried out" name="dateCarriedOut" <?php echo "value='".date("Y-m-d")."'";?>>
            <br>
            <div class="subtitle"><strong>Hardware Check</strong></div>
			
			<div class="row">
				<input type="checkbox" name="motherboard" <?php echo $result['motherboard']=="yes"?"checked":null; ?>>
				<label for="motherboard">Motherboard</label>
            </div>
            
			<div class="row">
				<input type="checkbox" name="processor" <?php echo $result['processor']=="yes"?"checked":null; ?>>
				<label for="processor">Processor</label>
            </div>
            
			<div class="row">
				<input type="checkbox" name="ram" <?php echo $result['ram']=="yes"?"checked":null; ?>>
				<label for="ram">RAM</label>
            </div>
            
            <div class="row">
                <input type="checkbox" name="GPU" <?php echo $result['gpu']=="yes"?"checked":null; ?>>
                <label for="GPU">GPU</label>
            </div>
            
            <div class="row">
                <input type="checkbox" name="networkCard" <?php echo $result['network_card']=="yes"?"checked":null; ?>>
                <label for="networkCard">Network Card</label>
            </div>
            
            <div class="row">
                <input type="checkbox" name="soundCard" <?php echo $result['sound_card']=="yes"?"checked":null; ?>>
                <label for="soundCard">Sound Card</label>
            </div>
            
            <div class="row">
                <input type="checkbox" name="opticalDrive" <?php echo $result['optical_drive']=="yes"?"checked":null; ?>>
                <label for="opticalDrive">Opitcal Drive</label>
            </div>
            
            <div class="row">
                <input type="checkbox" name="powerSupply" <?php echo $result['power_supply']=="yes"?"checked":null; ?>>
                <label for="powerSupply">Power Supply</label>
            </div>
			
			<div class="row">
				<input type="checkbox" name="hdd" <?php echo $result['hdd']=="yes"?"checked":null; ?>>
				<label for="hdd">HDD</label>
			</div>
			
            <div class="row">
                <input type="checkbox" name="ssd" <?php echo $result['ssd']=="yes"?"checked":null; ?>>
                <label for="ssd">SSD</label>
            </div>
            
			<div class="row">
				<input type="checkbox" name="monitor" <?php echo $result['monitor']=="yes"?"checked":null; ?>>
				<label for="monitor">Monitor</label>
            </div>
            
            <div class="row">
                <input type="checkbox" name="keyboard" <?php echo $result['keyboard']=="yes"?"checked":null; ?>>
                <label for="keyboard">Keyboard</label>
            </div>
            
            <div class="row">
                <input type="checkbox" name="mouse" <?php echo $result['mouse']=="yes"?"checked":null; ?>>
                <label for="mouse">Mouse</label>
            </div>
            <div class="subtitle"><strong>Software Check</strong></div>
			
			<div class="row">
				<input type="checkbox" name="upToDate" <?php echo $result['up_to_date']=="yes"?"checked":null; ?>>
				<label for="upToDate">Up To Date</label>
            </div>
			
			<div class="row">
				<input type="checkbox" name="virusScanner" <?php echo $result['virus_scanner']=="yes"?"checked":null; ?>>
				<label for="virusScanner">Virus Scanner</label>
            </div>
			
            <div class="row">
                <input type="checkbox" name="email" <?php echo $result['email']=="yes"?"checked":null; ?>>
                <label for="email">E-mail</label>
            </div>
            
            <div class="subtitle"><strong>Network Check</strong></div>
			
			<div class="subtitle">Wireless</div>
			<div class="row">
				<input type="checkbox" name="wirelessConnection" <?php echo $result['wireless_connection']=="yes"?"checked":null; ?>>
				<label for="wirelessConnection"> Wireless Connection</label>
            </div>
			
			<div class="row">
				<input type="checkbox" name="wirelessInternet" <?php echo $result['wireless_internet']=="yes"?"checked":null; ?>>
				<label for="wirelessInternet">Wireless Internet</label>
            </div>
			
			<div class="row">
				<input type="checkbox" name="wirelessEmailConfig" <?php echo $result['wireless_email_configuration']=="yes"?"checked":null; ?>>
				<label for="wirelessEmailConfig">Wireless E-mail Configuration</label>
            </div>
            
			<div class="subtitle">Wired</div>
            <div class="row">
				<input type="checkbox" name="wiredConnection" <?php echo $result['wired_connection']=="yes"?"checked":null; ?>>
				<label for="wiredConnection">Wired Connection</label>
            </div>
			
			<div class="row">
				<input type="checkbox" name="wiredInternet" <?php echo $result['wired_internet']=="yes"?"checked":null; ?>>
				<label for="wiredInternet">Wired Internet</label>
            </div>
			
			<div class="row">
				<input type="checkbox" name="wiredEmailConfig" <?php echo $result['wired_email_configuration']=="yes"?"checked":null; ?>>
				<label for="wiredEmailConfig">Wired E-mail Configuration</label>
            </div>
            <div class="subtitle"><strong>Additional Information</strong></div>
            <textarea rows="4" cols="50" placeholder="Additional Information" name="additionalInformation"><?php echo isset($result['additional_information'])?$result['additional_information']:null;?></textarea>
            
            <div class="subtitle"><strong>Status</strong></div>
			<select name="status">
				<option hidden <?php echo isset($result['status'])?null:"selected"?>>Repair Status</option>
				<option <?php echo isset($result['status'])&&$result['status']=="onGoing"?"selected ":null?> value="onGoing">On Going</option>
				<option <?php echo isset($result['status'])&&$result['status']=="complete"?"selected ":null?> value="complete">Complete</option>
				<option <?php echo isset($result['status'])&&$result['status']=="cantRepair"?"selected ":null?>value="cantRepair">Can't Repair</option>
			</select>
            
			<br><br>
            <input type="submit" value="Submit" name="submit">
		</form>
    </body>
</html>


<?php
    
?>
<html>
    <body>
		<div class="nav">
			<div class="holder">
                <div class="title"><h1>PC_Clinic</h1></div>
			</div>
		</div>
		<form class="form" method="POST">
			<input type="text" placeholder="Worked on by" name="workedOn">
            
            <br><br>
            
			<input type="date" placeholder="Date of work carried out" name="dateCarriedOut">
            
            <br><br>
            
            <h3>Hardware Check</h3>
            <input type="checkbox" name="HHD">
            <label for="HHD">HHD</label>
            
            <input type="checkbox" name="Monitor">
            <label for="Monitor">Monitor</label>
            
            <input type="checkbox" name="RAM">
            <label for="RAM">RAM</label>
            
            <input type="checkbox" name="Motherboard">
            <label for="Motherboard">Motherboard</label>
            
            <h3>Software Check</h3>
            <input type="checkbox" name="upToDate">
            <label for="upToDate">Up To Date</label>
            
            <input type="checkbox" name="virusScanner">
            <label for="virusScanner">Virus Scanner</label>
            
            <h3>Network Check</h3>
            <input type="checkbox" name="wired">
            <label for="wired">Wired</label>
            
            <input type="checkbox" name="wireless">
            <label for="wireless">Wireless</label>
            
            <input type="checkbox" name="connection">
            <label for="connection">Connection</label>
            
            <input type="checkbox" name="internet">
            <label for="internet">Internet</label>
            
            <input type="checkbox" name="emailConfig">
            <label for="emailConfig">E-mail Configuration</label>
            
            <h3>Additional Information</h3>
            <textarea rows="4" cols="50" placeholder="Additional Information"></textarea>
            
            <h4>Status</h4>
            <input type="radio" name="onGoing">
            <lable for="ongGoing">On Going</lable>
            
            <input type="radio" name="complete">
            <label for="complete">Complete</label>
            
            <input type="radio" name="cantRepair">
            <label for="cantRepair">Can't Repair</label>
            
			<br><br>
            <input type="submit" value="Submit" name="submit">
		</form>
    </body>
</html>


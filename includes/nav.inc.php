<div class="nav">
	<div class="holder">
		<div class="title"><a href="index.php">PC Clinic</a></div>
		<div class="links">
			<?php if (basename($_SERVER['PHP_SELF']) == "workedOn.php"): ?>
			<a href="workedOnBlank.php">Blank Checklist</a>
			<?php ENDIF;?>
			<?php if (basename($_SERVER['PHP_SELF']) == "invoice.php"): ?>
			<a href="invoiceBlank.php">Blank Invoice</a>
			<?php ENDIF;?>
			<a href="search.php">Search</a>
		</div>
	</div>
</div>
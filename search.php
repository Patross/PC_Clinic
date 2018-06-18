<?php

require_once("includes/header.inc.php");

?>
<html>
    <body>
		<div class="nav">
			<div class="holder">
				<div class="title">PC Clinic</div>
			</div>
		</div>
		<div class="holder">
			<form class="form" style="width: 100%;" action="" method="POST">
				<div class="title">Search Requests</div>
				<input type="text" placeholder="Reference Number" name="ref">
				<input type="submit" value="Search" name="submit"/>
			</form>
			<table>
			  <tr>
				<th>Reference Number</th>
				<th>Full Name</th>
				<th>Priority</th>
				<th>Serial Number</th>
			  </tr>
			  <tr>
				<td>#123</td>
				<td>Maria Anders</td>
				<td><div class="low"></div></td>
				<td>4UR45T6XRT576I967I</td>
			  </tr>
			  <tr>
				<td>#123</td>
				<td>Jake Anders</td>
				<td><div class="high"></div></td>
				<td>456SEGS834YDR</td>
			  </tr>
			  <tr>
				<td>#123</td>
				<td>Bob Anders</td>
				<td><div class="medium"></div></td>
				<td>4R6R6K56IRTKFTKF</td>
			  </tr>
			</table>
		</div>
    </body>
</html>
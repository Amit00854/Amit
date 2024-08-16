<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Salary Tax</title>
	<style type="text/css">
		table, tr, th, td {
			border: 3px solid grey;
			border-collapse: collapse;
		}
		.single{
			background-color: #ccbf10;
			height: 800px;
			padding-top: 350px;
			max-width: 800px;
			margin: 0 auto;
			border-radius: 5px;
		}
		h2{
			text-align: center;
			padding: 0px;
			padding-top: 50px;
			padding-bottom: 50px;
			margin: 0px;
			font-family: monospace;
			font-size: 2em;
			font-weight: 1;
			text-transform: uppercase;
		}
		.single input{
			font-size: 12px;
		}
		body{
			padding-top: 50px;
			padding-bottom: 50px;
			background-color: green;
		}
		@media screen and (max-width: 600px){
			#leftsidebar {width: 200px; float: left;}
			#main {margin-left: 216px;}
			body{
				background-color: red;
			}
		}
		table{
			margin: 0 auto;
		}
		tr{
			text-align: center;
		}
		td{
			border: 1px solid #141413;
            padding: 8px;
            text-align: center;
		}
		th{
			font-size: 2em;
		}
		a{
			color: white;
			text-decoration: none;
		}
		li{
			list-style-type: none;
			text-align: center;
			padding-top: 60px;
		}
	</style>
</head>
<body>
<div class="single">
	<h2><b>Salary Tax</b></h2>
	<table>
		<form action="" method="POST">
			<tr>
				<th align="center"><label>Income</label></th>
				<th align="center"><label>Martial Status</label></th>
			</tr>
			<tr>
				<td align="center"><input type="text" name="Income" id="Income" value="<?php if (isset($_POST["Income"])) print $_POST["Income"]; ?>" placeholder="Enter No." required></td>
				<td align="center"><select id="martial_status" name="Martial_Status">
				<option value="single">Single</option>
				<option value="married">Married</option></select></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submitsingle" value="Calculate Salary Tax"></td>
			</tr>
		</form>
	</table>
	<?php
	$Income = 0;
	if (isset($_POST["submitsingle"])) {
		$Income = $_POST["Income"];
		$Martial_Status = $_POST["Martial_Status"];
		if ($Martial_Status=="married") {
		if ($Income<=600000){
			$ft = $Income * 0.01;
			echo '<input type="number" value="'.$ft.'">';
		}elseif ($Income<=800000) {
			$st = (800000 - $Income) * 0.10;
			echo '<input type="number" value="'.$st.'">';
		}elseif ($Income<=1100000) {
			$tt = (1100000 - $Income) * 0.20;
			echo '<input type="number" value="'.$tt.'">';
		}elseif ($Income<=2000000){
			$fft = (2000000 - $Income) * 0.30;
			echo '<input type="number" value="'.$fft.'">';
		}elseif ($Income<=5000000) {
			$t = (5000000 - $Income) * 0.36;
			echo '<input type="number" value="'.$t.'">';
		}elseif ($Income<=10000000) {
			$sst = (10000000 - $Income) * 0.39;
			echo '<input type="number" value="'.$sst.'">';
		}
		}else  {
			if ($Income<=500000) {
			$ft = $Income * 0.01;
			echo '<input type="number" value="'.$ft.'">';
		}elseif ($Income<=700000) {
			$st = (700000 - $Income) * 0.10;
			echo '<input type="number" value="'.$st.'">';
		}elseif ($Income<=1000000) {
			$tt = (1000000 - $Income) * 0.20;
			echo '<input type="number" value="'.$tt.'">';
		}elseif ($Income<=2000000){
			$fft = (2000000 - $Income) * 0.30;
			echo '<input type="number" value="'.$fft.'">';
		}elseif ($Income<=5000000){
			$t = (5000000 - $Income) * 0.36;
			echo '<input type="number" value="'.$t.'">';
		}elseif ($Income<=10000000){
			$sst= (10000000 - $Income) * 0.39;
			echo '<input type="number" value="'.$sst.'">';
			}
		}
	
	}
	
	
	?>
</div>
<li><a href="Matheconomics.php">Back to Home Page</a></li>
</body>
</html>
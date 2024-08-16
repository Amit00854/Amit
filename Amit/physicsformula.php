<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Physics Formula</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style/style.xss">
	<script src="https://kit.fontawesome.com/71d7023f1a.js" crossorigin="anonymous"></script>
	<style type="text/css">
		table, tr, th, td{
			border: 5px solid balck;
			border-collapse: collapse;
		}
		.sdt{
			background-color: magenta;
			height: 800px;
			padding: 1em;
			padding-top: 250px;
			width: 100%;
			margin: 0 auto;
			border-radius: 5px;
			box-sizing: border-box;
		}
		h1{
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
		.sdt input{
			font-size: 18px;
		}
		.avut{
			background-color: magenta;
			height: 800px;
			padding: 1em;
			padding-top: 250px;
			width: 100%;
			margin: 0 auto;
			border-radius: 5px;
			box-sizing: border-box;
		}
		h1{
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
		.avut input{
			font-size: 18px;
		}
		table{
			margin: 0 auto;
		}
		tr{
			text-align: center;
		}
		td{
			border: 3px solid #141413;
            padding: 8px;
            text-align: center;
		}
	</style>
</head>
<body>
	<div class="sdt">
		<h1>Speed</h1>
		<table>
			<form action="" method="POST">
				<tr>
					<th align="center"><label>Distance</label></th><th align="center"><label>Time</label></th>
				</tr>
				<tr>
					<td align="center"><input type="text" name="Distance" value="<?php if (isset($_POST["Distance"])) print $_POST["Distance"]; ?>" placeholder="Enter No."></td><td align="center"><input type="text" name="Time" value="<?php if (isset($_POST["Time"])) print $_POST["Time"]; ?>" placeholder="Enter No."></td>
				</tr>
				<tr>
					<td colspan="3" align="center"><input type="submit" name="submitsdt" value="Calculate Speed"></td>
				</tr>
			</form>
		</table>
		<?php
		if (isset($_POST["submitsdt"])) {
		 	$Distance = $_POST["Distance"];
		 	$Time = $_POST["Time"];

		 	$Speed = $Distance / $Time;
		 	echo '<input type="number" value="'.$Speed.'">';
		 } 
		?>
	</div>
	<div class="avut">
		<h1>Acceleration</h1>
		<table>
			<form action="" method="POST">
				<tr>
					<th align="center"><label>Finalvelocity</label></th><th align="center"><label>Initialvelocity</label></th><th align="center"><label>Timetaken</label></th>
				</tr>
				<tr>
					<td align="center"><input type="text" name="Finalvelocity" value="<?php if (isset($_POST["Finalvelocity"]))print $_POST["Finalvelocity"]; ?>"placeholder="Enter No."></td><td align="center"><input type="text" name="Initialvelocity" value="<?php if (isset($_POST["Initialvelocity"])) print $_POST["Initialvelocity"]; ?>" placeholder="Enter No."></td><td align="center"><input type="text" name="Timetaken" value="<?php if (isset($_POST["Timetaken"])) print $_POST["Timetaken"]; ?>" placeholder="Enter No."></td>
				</tr>
				<tr>
					<td colspan="3" align="center"><input type="submit" name="submitavut" value="Calculate Acceleration"></td>
				</tr>
			</form>
		</table>
		<?php
		if (isset($_POST["submitavut"])) {
		 	$Finalvelocity = $_POST["Finalvelocity"];
		 	$Initialvelocity = $_POST["Initialvelocity"];
		 	$Timetaken = $_POST["Timetaken"];

		 	$Acceleration = ($Finalvelocity - $Initialvelocity) / $Timetaken;
		 	echo '<input type="number" value="'.$Acceleration.'">';
		 } 
		?>
	</div>
</body>
</html>
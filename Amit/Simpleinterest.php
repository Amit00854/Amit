<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Simple Interest</title>
	<style type="text/css">
		table, tr, th, td {
			border: 3px solid grey;
			border-collapse: collapse;
		}
		.si{
			background-color: magenta;
			height: 800px;
			padding: 1em;
			padding-top: 250px;
			width: 100%;
			margin: 0 auto;
			margin-bottom: 10px;
			border-radius: 5px;
			box-sizing: border-box;
		}
		.si input{
			font-size: 18px;
		}
		.ci{
			background-color: lightcoral;
			height: 800px;
			padding: 1em;
			padding-top: 250px;
			width: 100%;
			margin: 0 auto;
			margin-bottom: 10px;
			border-radius: 5px;
			box-sizing: border-box;
		}
		.ci input{
			font-size: 10px;
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
<div class="si">
	<h2>Simple Interest</h2>
	<table>
		<form action="" method="POST">
			<tr>
				<th align="center"><label>Principal</label></th>
				<th align="center"><label>Rate</label></th>
				<th align="center"><label>Time</label></th>
			</tr>
			<tr>
				<td align="center"><input type="text" name="Principal" id="Principal" value="<?php if (isset($_POST["Principal"])) print $_POST["Principal"]; ?>" placeholder="Enter No." required></td>
				<td align="center"><input type="text" name="Rate" id="Rate" value="<?php if (isset($_POST["Rate"])) print $_POST["Rate"]; ?>" placeholder="Enter No." required></td>
				<td align="center"><input type="text" name="Time" id="Time" value="<?php if (isset($_POST["Time"])) print $_POST["Time"]; ?>" placeholder="Enter No." required></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><input type="submit" name="submitsi" value="Calculate Simple Interest"></td>
			</tr>
		</form>
	</table>
	<?php
	if (isset($_POST["submitsi"])) {
		$Principal = $_POST["Principal"];
		$Rate = $_POST["Rate"] / 100;
		$Time = $_POST["Time"];

		if (isset($_POST["submitsi"])) {
			$Simple_interest = $Principal * $Rate * $Time;
			echo '<input type="number" value="'.$Simple_interest.'">';
		}
	}
	?>
</div>
<div class="ci">
		<h2>COMPOUND INTEREST</h2>
		<table>
			<form action="" method="POST">
				<tr>
					<th align="center"><label>Principal</label></th>
					<th align="center"><label>Rate</label></th>
					<th align="center"><label>Time</label></th>
					<th align="center"><label>n</label></th>
				</tr>
				<tr>
					<td align="center"><input type="text" name="Principal" id="Principal" value="<?php if (isset($_POST["Principal"])) print $_POST["Principal"]; ?>" placeholder="Enter No." required></td>
				<td align="center"><input type="text" name="Rate" id="Rate" value="<?php if (isset($_POST["Rate"])) print $_POST["Rate"]; ?>" placeholder="Enter No." required></td>
				<td align="center"><input type="text" name="Time" id="Time" value="<?php if (isset($_POST["Time"])) print $_POST["Time"]; ?>" placeholder="Enter No." required></td>
				<td align="center"><input type="text" name="n" id="n" value="<?php if (isset($_POST["n"])) print $_POST["n"]; ?>" placeholder="Enter No." required></td>
				</tr>
				<tr>
					<td colspan="4" align="center"><input type="submit" name="submitci" value="Calculate Compound Interest"></td>
				</tr>
			</form>
		</table>
		<?php
		if (isset($_POST["submitci"])) {
		 	$Principal = $_POST["Principal"];
		 	$Rate = $_POST["Rate"]/100;
		 	$Time = $_POST["Time"];
		 	$n = $_POST["n"];

		 	$depreciation = $Principal * pow(1 + ($Rate / $n), $n * $Time);

		 	echo '<input type="number" value="'.$depreciation.'">';
		 } 
		?>
	</div>
<li><a href="Matheconomics.php">Back to Home Page</a></li>
</body>
</html>
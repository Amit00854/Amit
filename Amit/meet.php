<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Meeting Point</title>
	<style type="text/css">
		table, tr, th, td {
			border: 3px solid grey;
			border-collapse: collapse;
		}
		.speed{
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
		.speed input{
			font-size: 10px;
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
			font-size: 1em;
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
<div class="speed">
	<h2>Meeting Point of Person A and Person B</h2>
	<table>
		<form action="" method="POST">
			<tr>
				<th align="center"><label>Distance</label></th>
				<th align="center"><label>SA</label></th>
				<th align="center"><label>SB</label></th>
				<th align="center"><label>Time</label></th>
			</tr>
			<tr>
				<td align="center"><input type="text" name="Distance" id="Distance" value="<?php if (isset($_POST["Distance"])) print $_POST["Distance"]; ?>" placeholder="Enter No." required></td>
				<td align="center"><input type="text" name="SA" id="SA" value="<?php if (isset($_POST["SA"])) print $_POST["SA"]; ?>" placeholder="Enter No." required></td>
				<td align="center"><input type="text" name="SB" id="SB" value="<?php if (isset($_POST["SB"])) print $_POST["SB"]; ?>" placeholder="Enter No." required></td>
				<td align="center"><input type="text" name="Time" id="Time" value="<?php if (isset($_POST["SB"])) print $_POST["SB"]; ?>" placeholder="Enter No." required></td>
			</tr>
			<tr>
				<td colspan="4" align="center"><input type="submit" name="submitspeed" value="Calculate when"></td>
			</tr>
		</form>
	</table>
	<?php 
	if (isset($_POST["submitspeed"])) {
		$Distance = $_POST["Distance"];
		$SA = $_POST["SA"];
		$SB = $_POST["SB"];
		$Time = $_POST["Time"];

		$start_time = $Time * 60;
		$combined_speed = $SA + $SB;
		$time_to_meet = $Distance / $combined_speed;
		$minutes =  $time_to_meet * 60;
		$SA_distance = $SA * $time_to_meet;
		$SB_distance = $SB * $time_to_meet;

		echo '<input type="number" value="'.$minutes.'">';
		echo 'Person A has travelled '.$SA_distance.' km from Pylon Academy, and Person B has travelled '.$SB_distance.' km from Golfutar. Hence, Person A meet '.$SA_distance.' km from Pylon Academy and Person B meet '.$SB_distance.' km from Golfutar.';
	}
	?>
</div>
<li><a href="Matheconomics.php">Back to Home Page</a></li>
</body>
</html>
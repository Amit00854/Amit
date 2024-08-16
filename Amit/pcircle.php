<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Perimeter</title>
	<style type="text/css">
		table, tr, th, td {
			border: 3px solid grey;
			border-collapse: collapse;
		}
		.circle{
			background-color: magenta;
			height: 800px;
			padding: 1em;
			padding-top: 250px;
			width: 100%;
			margin: 0 auto;
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
		.circle input{
			font-size: 18px;
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
<div class="circle">
	<h2>Perimeter of Circle</h2>
	<table>
		<form action="" method="POST">
			<tr>
				<th align="center"><label>Radius</label></th>
			</tr>
			<tr>
				<td align="center"><input type="text" name="Radius" id="Radius" value="<?php if (isset($_POST["Radius"])) print $_POST["Radius"]; ?>" placeholder="Enter No."></td>
			</tr>
			<tr>
				<td align="center"><input type="submit" name="submitcircle" value="Calculate Perimeter"></td>
			</tr>
		</form>
	</table>
	<?php
	if (isset($_POST["submitcircle"])) {
	 	$Radius = $_POST["Radius"];

	 	$Perimeter = 2 * pi() * $Radius;
	 	echo '<input type="number" value="'.$Perimeter.'">';
	 } 
	?>
</div>
<li><a href="Matheconomics.php">Back to Home Page</a></li>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Area</title>
	<style type="text/css">
		table, tr, th, td{
			border: 2px solid black;
			border-collapse: collapse;
		}
		.area{
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
			text-align:center;
            padding-top: 50px;
            padding-bottom: 50px;
            margin:0px;
            font-family: monospace;
            font-size: 2em;
            font-weight: 1;
            text-transform:uppercase;
		}
		.area input{
			font-size: 10px;
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
		body{
			padding-top: 50px;
			padding-bottom: 50px;
			background-color: green;
		}
		@media screen and (max-width: 600px){
			#leftsidebar {width: 200px; float: left;}
			#main {margin-left: 216px;}
			body{
				background-color: blue;
			}
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
	<div class="area">
		<h2>Using Base and Height:1/2 * base * height</h2>
		<table>
			<form action="" method="POST">
				<tr>
					<th align="center"><label>Base</label></th>
					<th align="center"><label>Height</label></th>
				</tr>
				<tr>
					<td><input type="text" name="Base" value="<?php if (isset($_POST["Base"])) print $_POST["Base"]; ?>" placeholder="Enter No."></td><td><input type="text" name="Height" value="<?php if (isset($_POST["Height"])) print $_POST["Height"]; ?>" placeholder="Enter No."></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="submitarea" value="Calculate Area"></td>
				</tr>
			</form>
		</table>
		<?php 
		if (isset($_POST["submitarea"])) {
			$Base = $_POST["Base"];
			$Height = $_POST["Height"];

			$Area = ($Base * $Height) / 2;
			echo '<input type="number" value="'.$Area.'">';
		}
		?>
	</div>
	<li><a href="Matheconomics.php">Back to Home Page</a></li>
</body>
</html>
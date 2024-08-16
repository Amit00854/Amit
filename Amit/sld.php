<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Straight-Line Depreciation</title>
	<style type="text/css">
		table, tr, th, td {
			border: 3px solid grey;
			border-collapse: collapse;
		}
		.sld{
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
		.sld input{
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
	<div class="sld">
		<h2>Straight-Line Depreciation</h2>
		<table>
			<form action="" method="POST">
				<tr>
					<th align="center"><label>Purchased Price</label></th>
					<th align="center"><label>Salvage Value</label></th>
					<th align="center"><label>Useful Life</label></th>
				</tr>
				<tr>
					<td align="center"><input type="text" name="purchased_price" value="<?php if (isset($_POST["purchased_price"])) print $_POST["purchased_price"]; ?>" placeholder="Enter No."></td>
					<td align="center"><input type="text" name="salvage_value" value="<?php if (isset($_POST["salvage_value"])) print $_POST["salvage_value"]; ?>" placeholder="Enter No."></td>
					<td align="center"><input type="text" name="useful_life" value="<?php if (isset($_POST["useful_life"])) print $_POST["useful_life"]; ?>" placeholder="Enter No."></td>
				</tr>
				<tr>
					<td align="center" colspan="3"><input type="submit" name="submitsld" value="Calculate Depreciation"></td>
				</tr>
			</form>
		</table>
		<?php 
		if (isset($_POST["submitsld"])) {
			$purchased_price = $_POST["purchased_price"];
			$salvage_value = $_POST["salvage_value"];
			$useful_life = $_POST["useful_life"];

			$depreciation = ($purchased_price - $salvage_value) / $useful_life;

			echo '<input type="number" value="'.$depreciation.'">';
		}
		?>
	</div>
	<li><a href="Matheconomics.php">Back to Home Page</a></li>
</body>
</html>
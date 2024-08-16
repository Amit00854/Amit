<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Declining Balance Depreciation</title>
	<style type="text/css">
		table, tr, th, td{
			border: 2px solid black;
			border-collapse: collapse;
		}
		.dbd{
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
		.dbd input{
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
	<div class="dbd">
		<h2>Declining Balance Deprication</h2>
		<table>
			<form action="" method="POST">
				<tr>
					<th align="center"><label>Book Value</label></th>
					<th align="center"><label>Depreciation Rate</label></th>
				</tr>
				<tr>
					<td align="center"><input type="text" name="book_value" value="<?php if (isset($_POST["book_value"])) print $_POST["book_value"]; ?>" placeholder="Enter No."></td>
					<td align="center"><input type="text" name="depreciation_rate" value="<?php if (isset($_POST["depreciation_rate"])) print $_POST["depreciation_rate"]; ?>" placeholder="Enter No."></td>
				</tr>
				<tr>
					<td align="center" colspan="2"><input type="submit" name="submitdbd" value="Calculate Depreciation"></td>
				</tr>
			</form>
		</table>
		<?php 
		if (isset($_POST["submitdbd"])) {
			$book_value = $_POST["book_value"];
			$depreciation_rate = $_POST["depreciation_rate"]/100;

			$depreciation = $book_value * $depreciation_rate;

			echo '<input type="number" value="'.$depreciation.'">'; 
		}
		?>
	</div>
	<li><a href="Matheconomics.php">Back to Home Page</a></li>
</body>
</html>
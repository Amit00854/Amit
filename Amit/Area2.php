<!DOCTYPE html>
<html lang="eng">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Herons</title>
	<style type="text/css">
		table, tr, th, td{
			border: 2px solid black;
			border-collapse: collapse;
		}
		.herons{
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
		.herons input{
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
	<div class="herons">
		<h2>Using Three Sides:Heron's Formula</h2>
		<table>
			<form action="" method="POST">
				<tr>
					<th align="center"><label>s</label></th>
					<th align="center"><label>a</label></th>
					<th align="center"><label>b</label></th>
					<th align="center"><label>c</label></th>
				</tr>
				<tr>
					<td align="center"><input type="text" name="s" value="<?php if (isset($_POST["s"])) print $_POST["s"]; ?>" placeholder="Enter No."></td>
					<td align="center"><input type="text" name="a" value="<?php if (isset($_POST["a"])) print $_POST["a"]; ?>" placeholder="Enter No."></td>
					<td align="center"><input type="text" name="b" value="<?php if (isset($_POST["b"])) print $_POST["b"]; ?>" placeholder="Enter No."></td>
					<td align="center"><input type="text" name="c" value="<?php if (isset($_POST["c"])) print $_POST["c"]; ?>" placeholder="Enter No."></td>
				</tr>
				<tr>
					<td colspan="4" align="center"><input type="submit" name="submitherons" value="Calculate Heron's"></td>
				</tr>
			</form>
		</table>
		<?php 
		if (isset($_POST["submitherons"])) {
			$s = $_POST["s"];
			$a = $_POST["a"];
			$b = $_POST["b"];
			$c = $_POST["c"];

			$area = sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));
			echo '<input type="number" value="'.$area.'">';
		}
		?>
	</div>
	<li><a href="Matheconomics.php">Back to Home Page</a></li>
</body>
</html>
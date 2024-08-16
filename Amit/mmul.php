<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Multiplication</title>
	<style type="text/css">
		table, tr, th, td {
			border: 3px solid grey;
			border-collapse: collapse;
		}
		.mul{
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
		.mul input{
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
<div class="mul">
	<h2>Multiplication of Matrix</h2>
	<table>
		<form action="" method="POST">
			<tr>
				<th align="center"><label>MatrixA</label></th>
				<th align="center"><label>MatrixB</th>
			</tr>
			<tr>
				<td align="center">
				<input type="number" name="a11" value="<?php if (isset($_POST["a11"])) print $_POST["a11"]; ?>" placeholder="Enter No." required><input type="number" name="a12" value="<?php if (isset($_POST["a12"])) print $_POST["a12"]; ?>" placeholder="Enter No." required><br>
				<input type="number" name="a21" value="<?php if (isset($_POST["a21"])) print $_POST["a21"]; ?>" placeholder="Enter No." required><input type="number" name="a22" value="<?php if (isset($_POST["a22"])) print $_POST["a22"]; ?>" placeholder="Enter No." required></td>
				<td align="center"><input type="number" name="b11" value="<?php if (isset($_POST["b11"])) print $_POST["b11"]; ?>" placeholder="Enter No." required><input type="number" name="b12" value="<?php if (isset($_POST["b12"])) print $_POST["b12"]; ?>" placeholder="Enter No." required><br>
				<input type="number" name="b21" value="<?php if (isset($_POST["b21"])) print $_POST["b21"]; ?>" placeholder="Enter No." required><input type="number" name="b22" value="<?php if (isset($_POST["b22"])) print $_POST["b22"]; ?>" placeholder="Enter No." required></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><input type="submit" name="submitmul" value="Calculate Multiplication"></td>
			</tr>
		</form>
	</table>
	<table>
	<tr>
		<th>MatrixA</th>
		<th>MatrixB</th>
		<th>Result</th>
	</tr>
	<tr>
	<?php
	if (isset($_POST["submitmul"])) {
	 	$a11 = $_POST["a11"];
	 	$a12 = $_POST["a12"];
	 	$a21 = $_POST["a21"];
	 	$a22 = $_POST["a22"];
	 	echo "<td>$a11  $a12<br>$a21  $a22</td>";
	    $b11 = $_POST["b11"];
	    $b12 = $_POST["b12"];
	    $b21 = $_POST["b21"];
	    $b22 = $_POST["b22"];
	    echo "<td>$b11  $b12<br>$b21  $b22 </td>";
        $result11 = ($a11 * $b11) + ($a12 * $b21);
	    $result12 = ($a11 * $b12) + ($a12 * $b22);  
	    $result21 = ($a21 * $b11) + ($a22 * $b21);
	    $result22 = ($a21 * $b12) + ($a22 * $b22); 
	    echo "<td>$result11  $result12<br>$result21  $result22</td>";
	}
	?>
	</tr>
</table>
</div>
<li><a href="Matheconomics.php">Back to Home Page</a></li>
</body>
</html>
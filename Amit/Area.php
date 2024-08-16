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
		.triangle{
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
			text-align:center;
            padding-top: 50px;
            padding-bottom: 50px;
            margin:0px;
            font-family: monospace;
            font-size: 2em;
            font-weight: 1;
            text-transform:uppercase;
		}
		.triangle input{
			font-size: 10px;
		}
		.herons{
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
		.herons input{
			font-size: 10px;
		}
		.angle{
			background-color: yellowgreen;
			height: 800px;
			padding: 1em;
			padding-top: 250px;
			width: 100%;
			margin: 0 auto;
			margin-bottom: 10px;
			border-radius: 5px;
			box-sizing: border-box;
		}
		.angle input{
			font-size: 10px;
		}
		.square{
			background-color: yellow;
			height: 800px;
			padding: 1em;
			padding-top: 250px;
			width: 100%;
			margin: 0 auto;
			margin-bottom: 10px;
			border-radius: 5px;
			box-sizing: border-box;
		}
		.square input{
			font-size: 18px;
		}
		.circle{
			background-color: cornflowerblue;
			height: 800px;
			padding: 1em;
			padding-top: 250px;
			width: 100%;
			margin: 0 auto;
			margin-bottom: 10px;
			border-radius: 5px;
			box-sizing: border-box;
		}
		.circle input{
			font-size: 10px;
		}
		.rectangle{
			background-color: cadetblue;
			height: 800px;
			padding: 1em;
			padding-top: 250px;
			width: 100%;
			margin: 0 auto;
			margin-bottom: 10px;
			border-radius: 5px;
			box-sizing: border-box;
		}
		.rectangle input{
			font-size: 18px;
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
	<div class="triangle">
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
	<div class="angle">
	<h2>Using Two Sides and Angle:(1/2) * b * a * sin(θ)</h2>
	<table>
	<form action="" method="POST">
		<tr>
					<th align="center"><label>a</label></th><th align="center"><label>b</label></th><th align="center"><label>Angle</label></th>
				</tr>
				<tr>
					<td align="center"><input type="text" id="a" name="a" value="<?php if (isset($_POST["a"])) print $_POST["a"]; ?>" placeholder="Enter No." required></td><td align="center"><input type="text" id="b" name="b" value="<?php if (isset($_POST["b"])) print $_POST["b"]; ?>" placeholder="Enter No." required></td><td align="center"><input type="text" id="Angle" name="Angle" value="<?php if (isset($_POST["Angle"])) print $_POST["Angle"]; ?>" placeholder="Enter No." required></td>
				</tr>
				<tr>
					<td colspan="3" align="center"><input type="submit" value="Calculate Area"></td>
				</tr>
				 
            </form>
        </table>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $angle_degrees = $_POST['Angle'];

        if (!is_numeric($a) || !is_numeric($b) || !is_numeric($angle_degrees) ||
            $a <= 0 || $b <= 0 || $angle_degrees <= 0 || $angle_degrees >= 180) {
            echo "<p style='color: red;'>Please enter valid positive numbers for sides and angle (0 < angle < 180).</p>";
        } else {
            $angle_radians = deg2rad($angle_degrees);

            $area = 0.5 * $a * $b * sin($angle_radians);

            echo "<h3>Result</h3>";
            echo '<input type="number" value="'.$area.'">';
        }
        }
        ?>
	</div>
	<div class="square">
	<h2>Area of square</h2>
	<table>
		<form action="" method="POST">
			<tr>
				<th align="center"><label>Length</label></th>
			</tr>
			<tr>
				<td align="center"><input type="text" id="Length" name="Length" value="<?php if (isset($_POST["Length"])) print $_POST["Length"]; ?>" placeholder="Enter No."></td>
			</tr>
			<tr>
				<td align="center"><input type="submit" name="submitsquare" value="Calculate Area"></td>
			</tr>
		</form>
	</table>
	<?php
	if (isset($_POST["submitsquare"])) {
	 	$Length = $_POST["Length"];

	 	$Area = $Length * $Length;

	 	echo '<input type="number" value="'.$Area.'">';
	 } 
	?>
    </div>
    <div class="circle">
	<h2>Area of Circle</h2>
	<table>
		<form action="" method="POST">
			<tr>
				<th align="center"><label>Radius</label></th>
			</tr>
			<tr>
				<td align="center"><input type="text" id="Radius" name="Radius" value="<?php if (isset($_POST["Radius"])) print $_POST["Radius"]; ?>" placeholder="Enter No." required></td>
			</tr>
			<tr>
				<td align="center"><input type="submit" name="submitcircle" value="Calculate Circle"></td>
			</tr>
		</form>
	</table>
	<?php
	if (isset($_POST["submitcircle"])) {
	 	$Radius = $_POST["Radius"];

	 	$Circle = pi() * $Radius * $Radius;

	 	echo '<input type="number" value="'.$Circle.'">';
	 }
	?>
    </div>
    <div class="rectangle">
	<table>
		<form action="" method="POST">
			<tr>
				<th align="center"><label>Length</label></th><th align="center"><label>Width</label></th>
			</tr>
			<tr>
			<td align="center"><input type="text" name="Length" id="Length" value="<?php if (isset($_POST["Length"])) print $_POST["Length"]; ?>" placeholder="Enter No."></td><td align="center"><input type="text" name="Width" id="Width" value="<?php if (isset($_POST["Width"])) print $_POST["Width"]; ?>" placeholder="Enter No."></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submitrectangle" value="Calculate Area"></td>
			</tr>
		</form>
	</table>
	<?php
	if (isset($_POST["submitrectangle"])) {
	 	$Length = $_POST["Length"];
	 	$Width = $_POST["Width"];

	 	$Area = $Length * $Width;

	 	echo '<input type="number" value="'.$Area.'">';
	 } 
	?>
    </div>
	<li><a href="Matheconomics.php">Back to Home Page</a></li>
</body>
</html>
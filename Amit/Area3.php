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
		.angle{
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
			text-align:center;
            padding-top: 50px;
            padding-bottom: 50px;
            margin:0px;
            font-family: monospace;
            font-size: 2em;
            font-weight: 1;
            text-transform:uppercase;
		}
		.angle input{
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
	<div class="angle">
	<h1>Using Two Sides and Angle:(1/2) * b * a * sin(θ)</h1>
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
	<li><a href="Matheconomics.php">Back to Home Page</a></li>
</body>
</html>
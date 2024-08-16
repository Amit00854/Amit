<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quadratic Equations</title>
	<style type="text/css">
		table, tr, th, td {
			border: 3px solid grey;
			border-collapse: collapse;
		}
		.qe{
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
		.qe input{
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
<div class="qe">
	<h2>Quadratic Equations</h2>
	<table>
		<form action="" method="POST">
			<tr>
				<th align="center"><label>a</label></th><th align="center"><label>b</label></th><th align="center"><label>c</label></th>
			</tr>
			<tr>
				<td align="center"><input type="text" name="a" id="a" value="<?php if (isset($_POST["a"])) print $_POST["a"]; ?>" placeholder="Enter No."></td><td align="center"><input type="text" name="b" id="b" value="<?php if (isset($_POST["b"])) print $_POST["b"]; ?>" placeholder="Enter No."></td><td align="center"><input type="text" name="c" id="c" value="<?php if (isset($_POST["c"])) print $_POST["c"]; ?>" placeholder="Enter No."></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><input type="submit" name="submitqe" value="Calculate x"></td>
			</tr>
		</form>
	</table>
	<?php
	 if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve form data
            $a = $_POST["a"];
            $b = $_POST["b"];
            $c = $_POST["c"];

            if (!is_numeric($a) || !is_numeric($b) || !is_numeric($c)) {
                echo "<p>Please enter valid numeric coefficients.</p>";
            } else {
                $discriminant = $b * $b - 4 * $a * $c;

                if ($discriminant > 0) {
                    $root1 = (-$b + sqrt($discriminant)) / (2 * $a);
                    $root2 = (-$b - sqrt($discriminant)) / (2 * $a);
                    echo "<h3>Roots of the quadratic equation:</h3>";
                    echo "<p>x1 = $root1</p>";
                    echo "<p>x2 = $root2</p>";
                } elseif ($discriminant == 0) {
                    $root = -$b / (2 * $a);
                    echo "<h3>Double root of the quadratic equation:</h3>";
                    echo "<p>x = $root</p>";
                } else {
                    $realPart = -$b / (2 * $a);
                    $imaginaryPart = sqrt(-$discriminant) / (2 * $a);
                    echo "<h3>Complex roots of the quadratic equation:</h3>";
                    echo "<p>x1 = $realPart + i$imaginaryPart</p>";
                    echo "<p>x2 = $realPart - i$imaginaryPart</p>";
                }
            }
        }
	?>
</div>
<li><a href="Matheconomics.php">Back to Home Page</a></li>
</body>
</html>
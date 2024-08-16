<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LCM</title>
	<style type="text/css">
		table, tr, th, td{
			border: 2px solid black;
			border-collapse: collapse;
		}
		.lcm{
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
		.lcm input{
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
<div class="lcm">
	<h2>LCM</h2>
	<table>
		<form action="" method="POST">
			<tr>
				<th align="center"><label>a</label></th>
				<th align="center"><label>b</label></th>
			</tr>
			<tr>
				<td align="center"><input type="text" name="a" id="a" value="<?php if (isset($_POST["a"])) print $_POST["a"]; ?>" placeholder="Enter No." required></td>
				<td align="center"><input type="text" name="b" id="b" value="<?php if (isset($_POST["b"])) print $_POST["b"]; ?>" required></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submitlcm" value="Calculate LCM"></td>
			</tr>
		</form>
	</table>
	 <?php
    function gcd($a, $b) {
        while ($b != 0) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }
        return $a;
    }

    function lcm($a, $b) {
        return ($a * $b) / gcd($a, $b);
    }

    if(isset($_POST['a']) && isset($_POST['b'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];

        if(is_numeric($a) && is_numeric($b)) {
            $lcm_result = lcm($a, $b);
            echo "<p>LCM of $a and $b is: $lcm_result</p>";
        } else {
            echo "<p>Please enter valid integers.</p>";
        }
    } 
    ?>
</div>
<li><a href="Matheconomics.php">Back to Home Page</a></li>
</body>
</html>
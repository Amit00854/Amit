<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HCF LCM</title>
	<style type="text/css">
		table, tr, th, td{
			border: 2px solid black;
			border-collapse: collapse;
		}
		.hcf{
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
		.hcf input{
			font-size: 10px;
		}
		.lcm{
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
	<div class="hcf">
		<div class="hcf">
	<h2>HCF</h2>
	<table>
		<form action="" method="POST">
			<tr>
				<th align="center"><label>a</label></th>
				<th align="center"><label>b</label></th>
			</tr>
			<tr>
				<td align="center"><input type="text" name="a" id="a" required></td>
				<td align="center"><input type="text" name="b" id="b" required></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submithcf" value="Calculate HCF"></td>
			</tr>
		</form>
	</table>
	<?php
	if (isset($_POST["submithcf"])) {
	 	$a = $_POST["a"];
	 	$b = $_POST["b"];

	 	$a_cf = array();
	 	$c_a = 0;
	 	for ($i=1; $i <= $a; $i++) { 
	 		if ($a % $i == 0) {
	 			$a_cf[] = $i;
	 			$c_a++;
	 		}
	 	}
	 	print 'The total number of factors obtained is ' .$c_a;
	 	print '<br> The common factors of first number are:<br>';
	 	for ($i=0; $i <$c_a; $i++) { 
	 		print '&nbsp; &nbsp;' .$a_cf[$i];
	 	}

	 	$b_cf = array();
	 	$c_b = 0;
	 	for ($i=1; $i <= $b; $i++) { 
	 		if ($b % $i == 0) {
	 			$b_cf[] = $i;
	 			$c_b++;
	 		}
	 	}
	 	print '<br>The common factors of second number are:<br>';
	 	for ($i=0; $i < $c_b; $i++) { 
	 		print $b_cf[$i]. '&nbsp; &nbsp;';
	 	}

	 	$cf = array();
	 	$c_cf = 0;
	 	for ($i=0; $i <$c_a ; $i++) { 
	 		for ($j=0; $j <$c_b ; $j++) { 
	 			if ($a_cf[$i] == $b_cf[$j]) {
	 				$cf[] = $b_cf[$j];
	 				$c_cf++;
	 			}
	 		}
	 	}
	 	print '<br> The common factors are:<br>';
	 	for ($i=0; $i <$c_cf ; $i++) { 
	 		print $cf[$i]. '&nbsp; &nbsp;';
	 	}
	 	$h = 0;
	 	for ($i=0; $i < $c_cf; $i++) { 
	 		if ($cf[$i]>$h) {
	 			$h = $cf[$i];
	 		}
	 	}
	 	print '<br> The HCF between two numbers is' .$h;
	 } 
	?>
</div>
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
	</div>
</body>
</html>
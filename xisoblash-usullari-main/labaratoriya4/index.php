<?
$result="";
if(!empty($_POST)){
	foreach ($_POST as $key => $value) {
		$$key=$value;
	}

	require_once 'hisobla.php';

	$result = ChatsF($px,$qx,$fx,$c1,$c,$d1,$d);

}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Hisoblash 2-topshiriq. </title>
	<style>
    
  </style>
</head>
<body>

	<br><hr>
	<marquee> <h2>Hisoblash usullari topshiriq</h2> </marquee>
	<hr><br>
	<div class="div">
		<form action="" method="POST">
			<input type="text" name="px" placeholder="p(x)" required>
			<input type="text" name="qx" placeholder="q(x)" required>
			<input type="text" name="fx" placeholder="f(x)" required>
			<input type="text" name="c1" placeholder="c1" required>
			<input type="text" name="c" placeholder="c" required>
			<input type="text" name="d1" placeholder="d1" required>
			<input type="text" name="d" placeholder="d" required>
			<input type="submit" name="" value="hisoblash">
		</form>
	</div>

	<br><hr><br>
	
	<div class="div">
		<table id="hisoblash">
			<tr>
			    <th><i>i<i></th>
			    <th><i>xi<i></th>
			    <th><i>p(xi)<i></th>
			    <th><i>q(xi)<i></th>
			    <th><i>f(xi)<i></th>
			    <th><i>u(i)<i></th>
			    <th><i>v(i)<i></th>
			    <th><i>y(i)<i></th>
			  </tr>
		<? print_r($result);?>
		</table>
	</div>
	<br>
	<hr>
	<br>

	<footer>
		<div class="footer-content">
		     <h4>&copy; Baratov Javohir</h4>
		</div>

	</footer>
</body>
</html>

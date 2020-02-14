<?php include ("Week-1.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>Goede...</title>
	<link rel="stylesheet" type="text/css" href="week1.css">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head>
<body>

	<div class="center">
		<h1><?php echo $message; ?> <?php echo $timelive; ?></h1>
	</div>

<style>
.center{
	background: url("img/<?php echo $img;?>");
}
</style>


</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5e7218536660240012cdf97d&product=inline-follow-buttons&cms=website' async='async'></script>
</head>
<body>

	<?php
		include "incs/header.php";

		if (isset($_GET['page'])) {
			$page = $_GET['page'];
			include "incs/$page.php";
		}else{
			include "incs/home.php";
		}

		include "incs/footer.php";
	?>

	<script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
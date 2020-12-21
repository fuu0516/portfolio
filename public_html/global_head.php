<head>
	<meta charset="UTF-8" />
	<script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>
	<script type="text/javascript" src="./js/jquery.js"></script>
	<script type="text/javascript" src="./js/bigSlide.js"></script>
	<script type="text/javascript" src="./js/menu.js"></script>

	<link rel="stylesheet" href="./css/reset.css" type="text/css">
	<link rel="stylesheet" href="./css/bgstyle_page.css" type="text/css">
	<script>console.log("");</script>
	<?php if(isset($_GET["title"])){ ?>
	<title>D&D|<?= $_GET["title"] ?></title>
	<?php }else{ ?>
		<title>D&D</title>
	<?php }?>
</head>

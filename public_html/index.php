<?php

//DBアクセス用の変数呼び出し
require_once('./func_pub_db.php');

$html_str = "";
$SQL_STAT = "SELECT updated_at,product,id FROM portfolio ORDER BY id DESC LIMIT 3";
$QueryObj = DB_Access($SQL_STAT);

while ($SelectALL = $QueryObj->fetch()) {
	$html_str .= "<tr><td><p>" . $SelectALL['updated_at'] . "</p></td>";
	$html_str .= "<td>" . "<p>" . "&nbsp;&nbsp;&nbsp;&nbsp;"."<a href='product_details.php?id=".$SelectALL["id"]."'> ". $SelectALL['product'] ."</a> "."を更新しました". "</p></td></tr>";
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bigSlide.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
	<link rel="stylesheet" href="css/slide.css" type="text/css">
	<link rel="stylesheet" href="./css/bgstyle_page.css" type="text/css">
	<link rel="stylesheet" href="css/reset.css" type="text/css">
	<link rel="stylesheet" href="css/news_page.css" type="text/css">

	<script>
		console.log("");
	</script>
	<title>D&D</title>
</head>

<body>

	<?php include('global_menu.php'); ?>

	<main class="wrap push">
		<ul id="slideshow">
			<li class="current"><img class="main_img" src="./photo/main.jpg"></li>
		</ul>
		<!-- hamburger -->
		<a href="#menu" class="menu-link">
			<i class="fas fa-align-justify justify_blue fa-3x"></i>
		</a>

		<div class="main_title">
			<h1>Designer&<br>&nbsp;&nbsp;Deveroper</h1>
			<p>Devoted to nature, technology & movement</p>
		</div>
		<div class="link">
			<div class="link-sty">
				<a href="./page1.php" class="pr">Profile</a>
			</div>
			<div class="link-sty">
				<a href="./list.php" class="wo">Works</a>
			</div>
		</div>
		<div class="news-style">
			<div class="news">
				<h2>News一覧</h2>
				<table>
					<?= $html_str ?>
				</table>
			</div>
		</div>
	</main>

</body>

</html>
<?php
//DBアクセス用の変数呼び出し
require_once('./func_pub_db.php');


$html_str = "";
$QueryObj = DB_SelectAll("portfolio");
while ($SelectALL = $QueryObj->fetch()) {
	$html_str .= "<div class=tent>";
	$html_str .= "<td><img src='photo/" . $SelectALL['file_name'] . "'></a></td>";
	$html_str .= "<p class='te'>" . $SelectALL['product'] . "</p>";
	$html_str .= "<p>" . "作成期間" . $SelectALL['cost'] . "</p>";
	$html_str .= "<p>" . "使用技術" . $SelectALL['software'] . "</p>";
	$html_str .= "<p ><a class='detail' href='product_details.php?id=" . $SelectALL["id"] . "'>詳細</a></p>";
	$html_str .= "</div>";
}
$SQL_STAT = "SELECT * FROM portfolio WHERE category='Ruby'";
$QueryObj = DB_Access($SQL_STAT);
$html_str_ruby = "";
while ($SelectALL = $QueryObj->fetch()) {
	$html_str_ruby .= "<div class=tent>";
	$html_str_ruby .= "<td><img src='photo/" . $SelectALL['file_name'] . "'></a></td>";
	$html_str_ruby .= "<p class='te'>" . $SelectALL['product'] . "</p>";
	$html_str_ruby .= "<p>" . "作成期間" . $SelectALL['cost'] . "</p>";
	$html_str_ruby .= "<p>" . "使用技術" . $SelectALL['software'] . "</p>";
	$html_str_ruby .= "<p><a class='detail' href='product_details.php?id=" . $SelectALL["id"] . "'>詳細</a></p>";
	$html_str_ruby .= "</div>";
}

$SQL_STAT = "SELECT * FROM portfolio WHERE category='JavaScript'";
$QueryObj = DB_Access($SQL_STAT);
$html_str_js = "";
while ($SelectALL = $QueryObj->fetch()) {
	$html_str_js .= "<div class=tent>";
	$html_str_js .= "<td><img src='photo/" . $SelectALL['file_name'] . "'></a></td>";
	$html_str_js .= "<p class='te'>" . $SelectALL['product'] . "</p>";
	$html_str_js .= "<p>" . "作成期間" . $SelectALL['cost'] . "</p>";
	$html_str_js .= "<p>" . "使用技術" . $SelectALL['software'] . "</p>";
	$html_str_js .= "<p><a class='detail' href='product_details.php?id=" . $SelectALL["id"] . "'>詳細</a></p>";
	$html_str_js .= "</div>";
}


$SQL_STAT = "SELECT * FROM portfolio WHERE category='CG'";
$QueryObj = DB_Access($SQL_STAT);
$html_str_cg = "";
while ($SelectALL = $QueryObj->fetch()) {
	$html_str_cg .= "<div class=tent>";
	$html_str_cg .= "<td><img src='photo/" . $SelectALL['file_name'] . "'></a></td>";
	$html_str_cg .= "<p class='te'>" . $SelectALL['product'] . "</p>";
	$html_str_cg .= "<p>" . "作成期間" . $SelectALL['cost'] . "</p>";
	$html_str_cg .= "<p>" . "使用技術" . $SelectALL['software'] . "</p>";
	$html_str_cg .= "<p><a class='detail' href='product_details.php?id=" . $SelectALL["id"] . "'>詳細</a></p>";
	$html_str_cg .= "</div>";
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>
	<script type="text/javascript" src="./js/jquery.js"></script>
	<script type="text/javascript" src="./js/bigSlide.js"></script>
	<script type="text/javascript" src="./js/menu.js"></script>
	<script type="text/javascript" src="./js/page2.js"></script>

	<link rel="stylesheet" href="./css/reset.css" type="text/css">
	<link rel="stylesheet" href="./css/bgstyle_page.css" type="text/css">
	<link rel="stylesheet" href="./css/list.css" type="text/css">
	<script>
		console.log("");
	</script>
	<title>D&D</title>
</head>

<body>
	<!-- メニューの共通呼び出し -->
	<?php include('global_menu.php'); ?>

	<main class="wrap push">
		<a href="#menu" class="menu-link">
			<i class="fas fa-align-justify justify_blue fa-3x"></i>
		</a>
		<div class="about">
			<h1>Works</h1>
			<div class="button">
				<div class="et_pb_module">
					<button type="button" name="button" id="all" class="list">All</button>
				</div>
				<div class="et_pb_module">
					<button type="button" name="button" id="ruby" class="list">ruby</button>
				</div>
				<div class="et_pb_module">
					<button type="button" name="button" id="js" class="list">JavaScript</button>
				</div>
				<div class="et_pb_module">
					<button type="button" name="button" id="cg" class="list">CG Maya</button>
				</div>
			</div>

			<div class="content">
				<div class="all section">
					<?= $html_str ?>
				</div>

				<div class="ruby section">
					<?= $html_str_ruby ?>
				</div>

				<div class="js section">
					<?= $html_str_js ?>
				</div>
				<div class="cg section">
					<?= $html_str_cg ?>
				</div>
			</div>
		</div>
	</main>
</body>

</html>
<?php
//DBアクセス用の変数呼び出し
require_once('./func_pub_db.php');
$html_str = "";
$SQL_STAT = "SELECT * FROM portfolio WHERE id =  $_GET[id]";
$QueryObj = DB_Access($SQL_STAT);
$SelectALL = $QueryObj->fetch();
$html_str .= "<tr>";
$html_str .= "<th>イメージ画像</th>";
$html_str .= "<td><img src='photo/" . $SelectALL['file_name'] . "' width='100%'></a></td>";
$html_str .= "</tr>";
$html_str .= "<tr>";
$html_str .= "<th>タイトル</th>";
$html_str .= "<td>" . $SelectALL['product'] . "</td>";
$html_str .= "</tr>";
$html_str .= "<tr>";
$html_str .= "<th>詳細</th>";
$html_str .= "<td>" . nl2br($SelectALL['product_description']) . "</td>";
$html_str .= "</tr>";
$html_str .= "<tr>";
$html_str .= "<th>開発期間</th>";
$html_str .= "<td>" . $SelectALL['cost'] . "</td>";
$html_str .= "</tr>";
$html_str .= "<tr>";
$html_str .= "<th>カテゴリー</th>";
$html_str .= "<td>" . $SelectALL['category'] . "</td>";
$html_str .= "</tr>";
$html_str .= "<th>ファイル名</th>";
$html_str .= "<td>" . $SelectALL['file_name'] . "</td>";
$html_str .= "</tr>";
?>
<html>

<head>
	<meta charset="UTF-8" />
	<script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bigSlide.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
	<link rel="stylesheet" href="css/slide.css" type="text/css">
	<link rel="stylesheet" href="./css/bgstyle_page.css" type="text/css">
	<!-- <link rel="stylesheet" href="css/reset.css" type="text/css"> -->
	<link rel="stylesheet" href="css/product_details.css" type="text/css">
	<script>
		console.log("");
	</script>
	<title>D&D</title>
</head>

<body>
	<?php include('global_menu.php'); ?>
	<main class="wrap push">
		<a href="#menu" class="menu-link">
			<i class="fas fa-align-justify justify_blue fa-3x"></i>
		</a>
		<h1>作品詳細ページ</h1>
		<div class="detalis_aitem">
			<table width="600px" border="1">
				<?= $html_str ?>
			</table>
		</div>
	</main>
</body>
</html>
<?php
//DBアクセス用の変数呼び出し
require_once('./func_db.php');
$html_str="";
$QueryObj = DB_SelectAll("portfolio");
while ($SelectALL = $QueryObj->fetch()) {
	$html_str .= "<tr>";
	$html_str .= "<td>".$SelectALL['id']."</td>";
	$html_str .= "<td><a href='img_up.php?id=".$SelectALL["id"]."'><img src='../photo/".$SelectALL['file_name']."' width='50'></a></td>";
	$html_str .= "<td>".$SelectALL['product']."</td>";
	$html_str .= "<td>".nl2br($SelectALL['product_description'])."</td>";
	$html_str .= "<td>".$SelectALL['cost']."</td>";
	$html_str .= "<td>".$SelectALL['category']."</td>";
	$html_str .= "<td>".$SelectALL['file_name']."</td>";
	$html_str .= "<td>".$SelectALL['software']."</td>";
	$html_str .= "<td>".$SelectALL['created_at']."</td>";
	$html_str .= "<td>".$SelectALL['updated_at']."</td>";
	$html_str .= "<td><a href='table_edit.php?id=".$SelectALL['id']."'>編集</a></td>";
	$html_str .= "<td><a href='table_del.php?id=".$SelectALL['id']."'>削除</a></td>";
	$html_str .= "</tr>"; 
}

?>
<html>
<head>
<title>一覧</title>
<meta charset="UTF-8">
</head>
<body>
<h1>一覧</h1>

<a href="./table_new.php">登録</a>
|<a href="./logout.php">ログアウト</a>
<hr>
<table border ="1" width="1000px">
<?= $html_str?>
</table>
</body>
</html>
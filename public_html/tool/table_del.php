<?php
//DBアクセス用の変数呼び出し
require_once('./func_db.php');
if (isset($_POST["id"])) {
	DB_Delete("portfolio", $_POST["id"]);
	header("Location:index.php");
}
if (isset($_GET["id"])) {
	$QueryObj = DB_SelectOne("portfolio", $_GET["id"]);
	$SelectOne = $QueryObj->fetch(PDO::FETCH_ASSOC);
}

?>
<html>

<head>
	<title>削除</title>
	<meta charset="UTF-8">
</head>

<body>
	<h1>削除</h1>
	<a href="./index.php">戻る</a>
	<hr>
	<form method="POST" action="">
		<table border="1">
			<tr>
				<td>ID</td>
				<td><?= $SelectOne['id']; ?><input type="hidden" name="id" value="<?= $SelectOne['id']; ?>"></td>
			</tr>
			<tr>
				<td>作品名</td>
				<td><?= $SelectOne['product']; ?></td>
			</tr>
			<tr>
				<td>商品の説明</td>
				<td><?= $SelectOne['product_description']; ?></td>
			</tr>
			<tr>
				<td>完成工数</td>
				<td><?= $SelectOne['cost']; ?></td>
			</tr>
			<tr>
				<td>カテゴリー</td>
				<td><?= $SelectOne['category']; ?></td>
			</tr>
			<tr>
				<td>ファイル名</td>
				<td><?= $SelectOne['file_name']; ?></td>
			</tr>
			<tr>
			<tr>
				<td>使用ソフト</td>
				<td><?= $SelectOne['software']; ?></td>
			</tr>
			<tr>
				<td>登録日</td>
				<td><?= $SelectOne['created_at']; ?></td>
			</tr>
			<tr>
				<td>更新日</td>
				<td><?= $SelectOne['updated_at']; ?></td>
			</tr>
			<tr>
				<td>ボタン</td>
				<td><input type="submit" value="消去">
				</td>
			</tr>
		</table>
	</form>


</body>

</html>
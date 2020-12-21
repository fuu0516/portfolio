<?php

//DBアクセス用の変数呼び出し
require_once('./func_db.php');
//フォームに値が入力されているかをチェック
if (isset($_POST["id"])) {
	DB_Update("portfolio", $_POST);
	header("Location:index.php");
}
if (isset($_GET["id"])) {
	$QueryObj = DB_SelectOne("portfolio", $_GET["id"]);
	$SelectOne = $QueryObj->fetch(PDO::FETCH_ASSOC);
}
?>
<html>

<head>
	<title>編集</title>
	<meta charset="UTF-8">
</head>

<body>
	<h1>編集</h1>
	<a href="./index.php">戻る</a>
	<hr>
	<form method="POST" action="">
		<table border="1">
			<tr>
				<td>ID</td>
				<td>自動登録<input type="hidden" name="id" value="<?= $SelectOne['id']; ?>"></td>
			</tr>
			<tr>
				<td>作品名</td>
				<td><input type="text" name="product" value="<?= $SelectOne['product']; ?>"></td>
			</tr>
			<tr>
				<td>作品の説明</td>
				<td><textarea name="product_description"><?= $SelectOne['product_description']; ?></textarea></td>
			</tr>
			<tr>
				<td>完成工数</td>
				<td><input type="text" name="cost" value="<?= $SelectOne['cost']; ?>"></td>
			</tr>
			<tr>
				<td>カテゴリー</td>
				<td><input type="text" name="category" value="<?= $SelectOne['category']; ?>"></td>
			</tr>
			<tr>
				<td>使用ソフト</td>
				<td><input type="text" name="software" value="<?= $SelectOne['software']; ?>"></td>
			</tr>
			<tr>
				<td>ファイル名</td>
				<td><input type="text" name="file_name" value="<?= $SelectOne['file_name']; ?>"></td>
			</tr>
			<tr>
				<td>登録日</td>
				<td><?= $SelectOne['created_at']; ?><input type="hidden" name="created_at" value="<?= $SelectOne['created_at']; ?>"></td>
			</tr>

			<tr>
				<td>更新日</td>
				<td><?= date('Y-m-d'); ?><input type="hidden" name="updated_at" value="<?= date('Y-m-d'); ?>"></td>
			</tr>

			<tr>
				<td>：ボタン</td>
				<td><input type="submit" value="送信"><input type="reset" value=" 取消 "></td>
			</tr>
		</table>
	</form>
</body>
</html>
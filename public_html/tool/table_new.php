<?php

//DBアクセス用の変数呼び出し
require_once('./func_db.php');
//フォームに値が入力されているかをチェック
if (isset($_POST["product"])) {
	DB_Insert("portfolio", $_POST);
	header("Location:index.php");
}

?>
<html>

<head>
	<title>入力</title>
	<meta charset="UTF-8">
</head>

<body>
	<h1>入力</h1>
	<a href="./index.php">戻る</a>
	<hr>
	<form method="POST" action="">
		<table border="1">
			<tr>
				<td>ID</td>
				<td>自動登録<input type="hidden" name="id" value="NULL"></td>
			</tr>
			<tr>
				<td>作品名</td>
				<td><input type="text" name="product" value=""></td>
			</tr>
			<tr>
				<td>作品の説明</td>
				<td><textarea name="product_description"></textarea></td>
			</tr>
			<tr>
				<td>完成工数</td>
				<td><input type="text" name="cost" value=""></td>
			</tr>
			<tr>
				<td>カテゴリー</td>
				<td><input type="text" name="category" value=""></td>
			</tr>
			<tr>
				<td>使用ソフト</td>
				<td><input type="text" name="software" value=""></td>
			</tr>
			<tr>
				<td>登録日</td>
				<td><?= date('Y-m-d'); ?><input type="hidden" name="created_at" value="<?= date('Y-m-d'); ?>"></td>
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
<?php
require_once('./func_pub_db.php');
$html_portfolio = "";
$QueryObj = DB_SelectProduct();
while ($SelectALL = $QueryObj->fetch()) {
	$html_portfolio .= "<option value=" . $SelectALL['product'] . ">" . $SelectALL['product'] . "</option>";
}
$html_str = "入力してください";
if (isset($_POST)) {
	if (DB_Insert("anq", $_POST)) {
		$html_str = "登録完了";
	}
}


?>
<html>

<head>
	<meta charset="UTF-8" />
	<script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>
	<script type="text/javascript" src="./js/jquery.js"></script>
	<script type="text/javascript" src="./js/bigSlide.js"></script>
	<script type="text/javascript" src="./js/menu.js"></script>

	<link rel="stylesheet" href="./css/bgstyle_page.css" type="text/css">
	<link rel="stylesheet" href="./css/anq_page.css" type="text/css">

	<script>console.log("");</script>
</head>

<body>
	<?php include('global_menu.php'); ?>

	<main class="wrap push">
		<a href="#menu" class="menu-link">
			<i class="fas fa-align-justify justify_blue fa-3x"></i>
		</a>
		<h1>ウェブサイトに関するアンケート</h1>
		<p><?= $html_str ?></p>
		<form method="POST" action="anq.php">
			<table border="1" width="500px">
				<tr>
					<td>現在お住まい地域</td>
					<td><input type="text" name="area" size="20" value="入力"></td>
				</tr>
				<tr>
					<td>年齢</td>
					<td><input type="number" name="AGE" size="3" value="" maxlength="3">歳</td>
				<tr>
					<td>性別</td>
					<td>
						<label><input type="radio" name="gender" value="男">男</label>
						<label><input type="radio" name="gender" value="女">女</label>
					</td>
				</tr>
				<td>子供は何人いますか。</td>
				<td><input type="number" name="HM" size="3" value="" maxlength="3">人</td>
				</tr>
				<tr>
					<td>雇用形態</td>
					<td>
						<select name="SEL">
							<option value="SEL0" selected>選択してください</option>
							<option value="自営業主">自営業主</option>
							<option value="正規の職員">正規の職員</option>
							<option value="会社用の役員">会社用の役員</option>
							<option value="派遣社員">派遣社員</option>
							<option value="家族従事者">家族従事者</option>
							<option value="パート　アルバイト">パート　アルバイト</option>
							<option value="学生">学生</option>
							<option value="その他">その他</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>自動車を保有してますか。</td>
					<td>
						<label><input type="radio" name="CRADIO" value="所有している">所有している</label>
						<label><input type="radio" name="CRADIO" value="所有していない">所有していない</label>
					</td>
				</tr>
				<tr>
					<td>自動車の使用頻度はどの程度ですか。</td>
					<td>
						<select name="MSEL">
							<option value="CSEL0" selected>選択してください</option>
							<option value="毎日">毎日</option>
							<option value="週に２、３回">週に２、３回</option>
							<option value="週に１回程度">週に１回程度</option>
							<option value="月に１回程度">月に１回程度</option>
							<option value="その他">その他</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>地域活動やイベントに参加していますか。</td>
					<td>
						<label><input type="radio" name="IRADIO" value="している">している</label>
						<label><input type="radio" name="IRADIO" value="していない">していない</label>
					</td>
				</tr>
				<tr>
					<td>今後も住み続けたいと思いますか。</td>
					<td>
						<label><input type="radio" name="LRADIO" value="思っている">思っている</label>
						<label><input type="radio" name="LRADIO" value="思っていない">思っていない</label>
					</td>
				</tr>
				<tr>
					<td>その他、ご質問等</td>
					<td><textarea name="MSG" cols="30" rows="4"></textarea></td>
				</tr>
				<tr>
					<td>お好きな作品</td>
					<td>
						<select name="LP">
							<?= $html_portfolio ?>
						</select>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="" value="送信します">
					</td>
				</tr>
			</table>
		</form>
	</main>
</body>

</html>
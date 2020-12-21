<?php
  require_once ("../../connect/func_login.php");
  LogINCheck();
	$db_file_name = "../../connect/portfolio.db3";
//DBアクセス用関数
function DB_Access($SQL_STAT) {
	global $db_file_name;
	
	try {
		//PDOでDB接続
		$NewPdo = new PDO("sqlite:".$db_file_name);
		//クエリオブジェクト取得
		$QueryObj = $NewPdo->query($SQL_STAT);
		//DB接続解除
		unset($NewPdo);
	} catch (PDOException $e) {
		$QueryObj = "DBError：".$e->getMessage();
	}
	return $QueryObj;
}

function DB_SelectAll($t_name){
	//クエリ作成
	$SQL_STAT = "SELECT * FROM ".$t_name." ORDER BY id DESC";
	//クエリ実行
	return DB_Access($SQL_STAT);
	}

//⭐︎ レコードの特定値を取得
function DB_SelectOne($t_name, $get_id)
{
	//クエリ作成
	$SQL_STAT = "SELECT * FROM " . $t_name . " WHERE id=" . $get_id . ";";
	//クエリ実行
	return DB_Access($SQL_STAT);
}

function DB_Insert($t_name, $post_data){
	unset($post_data["id"]);
	$post_key = "";
	$post_val = "";

	foreach($post_data as $key => $value){
		if($post_key != ""){
			$post_key .= ",";
		}
		$post_key .= "'" .$key."'";
		if($post_val != ""){
			$post_val .= ",";
		}
		$post_val .= "'" .$value."'";
	}

	$SQL_STAT = "INSERT INTO ".$t_name." (".$post_key.")";
	$SQL_STAT.=" VALUES (".$post_val.");";
		return DB_Access($SQL_STAT);
}



//⭐︎ レコードの編集
function DB_Update($t_name, $post_data)
{
	$post_set = "";
	foreach ($post_data as $key => $val) {
		if ($post_set != "") {
			$post_set .= ",";
		}
		$post_set .= "'" . $key. "'='".$val."'";
	}
	//クエリ作成
	$SQL_STAT = "UPDATE ".$t_name." SET ".$post_set." WHERE id=".$post_data["id"].";";
	return DB_Access($SQL_STAT);
}

//⭐︎ レコードの削除
function DB_Delete($t_name, $post_id)
{
	$SQL_STAT = "DELETE FROM ".$t_name." WHERE id=".$post_id.";";
	return DB_Access($SQL_STAT);
}

function DB_Update_filename($file_name,$post_id){
	$SQL_STAT = "UPDATE portfolio SET file_name =  "."'".$file_name."'"." WHERE id=".$post_id.";";
	return DB_Access($SQL_STAT);
}

function DB_SELECT_filename($post_id){
	$SQL_STAT = "SELECT file_name FROM portfolio WHERE id =".$post_id.";";
	return DB_Access($SQL_STAT);
	// print_r( $SQL_STAT);

}
?>
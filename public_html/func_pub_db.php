<?php
//DBアクセス用関数
function DB_Access($SQL_STAT) {
	//DBファイル名
	$db_file_name = "../connect/portfolio.db3";
	try {
		//PDOでDB接続
		$NewPdo = new PDO("sqlite:".$db_file_name);
		//クエリオブジェクト取得
		$QueryObj = $NewPdo->query($SQL_STAT);
		//DB接続解除
		unset($NewPdo);
	} catch (PDOException $e) {
		//例題があった場合の処理
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

function DB_SelectProduct(){
	//クエリ作成
	$SQL_STAT = "SELECT product FROM portfolio";
	//クエリ実行
	return DB_Access($SQL_STAT);
	}

?>
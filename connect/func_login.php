<?php 
//変数の定義
$db_user = hash("sha256",9999);
$db_pass = hash("sha256",9999);
//セッションの使用
session_start();
//ログイン判定
function LogINCheck() {
  global $db_user,$db_pass;
  //入力確認
  if(isset($_SESSION["db_user"])===false ||isset($_SESSION["db_pass"])===false ){
    header("Location:login.php");
  }
  //変数との生合成
  if(hash("sha256",$_SESSION["db_user"])!==$db_user&&hash("sha256",$_SESSION["db_pass"])!==$db_pass){
    header("Location:login.php");
  }
}
?>
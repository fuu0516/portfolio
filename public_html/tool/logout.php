<?php 
//ファンクション読み込み
require_once("../../connect/func_login.php");
//セッションを破壊
session_destroy();
header("Location:login.php");
?>
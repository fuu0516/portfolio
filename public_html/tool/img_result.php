<?php
  require_once('./func_db.php');
  
  $tmp = "";
  $tmp.="アップロード完了:".$_GET['filename']."<br>\n";
  $tmp.="<img src='".'../photo/'.$_GET['filename']."' width='200'>\n";
  // header("Location:list.php");
?>
<html>
<head>
<title>アップロード結果</title>
<meta charset="UTF-8">
</head>
<body>
<h1>アップロード結果</h1>
<a href="index.php">一覧</a>
<p><?php echo $tmp;?></p>
</body>
</html>
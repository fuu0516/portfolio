<?php
require_once('./func_db.php');
if(isset($_FILES["upfile"]["name"])){
  $tmp = "";
  $filename = "../photo/".$_FILES["upfile"]["name"];
  if(move_uploaded_file($_FILES["upfile"]["tmp_name"],$filename)){
    $tmp.="アップロード完了:".$filename."<br>\n";
    $tmp.="<img src='".$filename."' width='200'>\n";
    // header("Location:list.php");
  }else{
    $tmp.="アップロードエラー".$_FILES["upfile"]["error"];
  }

  DB_Update_filename($_FILES["upfile"]["name"], $_GET['id']);
  // print_r( $_FILES["upfile"]["tmp_name"]);
  header("Location:img_result.php?filename=".$_FILES["upfile"]["name"]."");
}
?>

<html>
<head>
<title>アップロード開始</title>
<meta charset="UTF-8">
</head>
<body>
<h1>アップロード開始</h1>
<form method="post" enctype="multipart/form-data" action="">
<input type="file" name="upfile"><br>
<input type="submit" value="upload"><br>
</form>
</body>
</html>
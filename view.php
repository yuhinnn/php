<html>
<head>
<title>phpのテスト</title>
</head>
<?php
if(isset($_POST["confirm"]))
{
?>
<?php
  //確認ボタンがクリックされた時
  print$_POST["onamae"]."さんからのメッセージ";
  print"<br><br>";
  print"本文:<br>";
  print nl2br($_POST["honbun"]);
?>

<?php
}elseif(isset($_POST["back"])){
  //戻るがクリックされた時

?>

<font size="4">テキスト送信のテスト<font>
<form name="form1" method="post" actoin="confirm.php">
名前:<br>
<input type"text" name="onamae"
value="<?=$_POST["onamae"]?>">
<br>
本文:<br>
<textarea name="honbun" cols="30" rows="5">
<?=$_POST["honbun"]?>"></textarea>
<br>
<input type="submit" value="送 信">
<input type="hidden" name="user_id" value="<?=$_POST["user_id"]?>">
</form>

<?php
}else{
  //上記条件以外の時
?>
エラーです<br>
<a href="index.php">form.html</a>からアクセスしてください

<?php
}
?>

</body>
</html>

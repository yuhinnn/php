<html>
<head>
<title>phpのテスト</title>
</head>
<body>

確認画面
<form name="form1" method="post" action="view.php">
<?php
print"名前:";
print$_POST["onamae"];
print"<br><br>";
print"本文:<br>";
print nl2br($_POST["honbun"]);
?>
<br>
<input type="submit" value="確 認">
<input type="hidden" name="user_id"
value="<?=$_POST["user_id"]?>">
<input type="hidden" name="onamae"
value="<?=$_POST["onamae"]?>">
<input type="hidden" name="honbun"
value="<?=$_POST["honbun"]?>">
</form>

</body>
</html>

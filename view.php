<html>
<head>
<title>phpのテスト</title>
</head>
<?php

print$_POST["onamae"]."さんからのメッセージ";
print"<br><br>";
print"本文:<br>";
print nl2br($_POST["honbun"]);
?>
</body>
</html>

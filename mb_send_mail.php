<?php
$to = "yuhinnn@gmai.com";
$subject = "テスト送信";
$message = "ただいまメールのテスト中です";
$add_header="";
if(mb_send_mail($to,$subject,$message,$add_header))
{
  print"メールを送信しました";
}else{
  print"メールを送信に失敗しました";
}
?>

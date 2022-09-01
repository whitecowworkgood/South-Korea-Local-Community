<meta charset="utf-8" />
<?php

include "./memberdb.php";

$userpw = password_hash($_POST['userpw'], PASSWORD_DEFAULT);
$username = $_POST['name'];
$phone = $_POST['phone'];

$sql = mq1("update member set pw='".$userpw."', name='".$username."', phone='".$phone."',email='".$_POST['email']."' where id='".$_SESSION['userid']."'");
echo "<script>alert('정보변경이 완료되었습니다 	'); window.close();</script>";

?>
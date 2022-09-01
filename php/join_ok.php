<?php
	include "./memberdb.php";

	$userid = $_POST['userid'];
	$userpw = password_hash($_POST['userpw'], PASSWORD_DEFAULT);
	$username = $_POST['name'];
	$phone = $_POST['phone'];
	$sex = $_POST['sex'];
	$email = $_POST['email'].'@'.$_POST['adress'];

$sql = mq1("insert into member (id,pw,name,phone,sex,email) values('".$userid."','".$userpw."','".$username."','".$phone."','".$sex."','".$email."')");

?>
<meta charset="utf-8" />
<script type="text/javascript">alert('회원가입이 완료되었습니다.');</script>
<meta http-equiv="refresh" content="0 url=/">
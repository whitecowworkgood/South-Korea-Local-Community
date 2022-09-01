<?php
include "./boarddb.php";

$bno = $_GET['idx'];
$title = $_POST['title'];
$content = $_POST['content'];
$modi = $_POST['modi'];

$sql1 = mq2("select * from board where idx='".$bno."'");
$board = $sql1->fetch_array();

if($modi == "modi"){
	unlink($board['path'].$board['filename']);
	
	$file_name = $_FILES["modifile"]['name'];
	$tmpfile = $_FILES["modifile"]['tmp_name'];
	move_uploaded_file($tmpfile, $board['path'].$file_name);

	
	$sql = mq2("update board set title='".$title."',content='".$content."',filename='".$file_name."' where idx='".$bno."'");

}
else{
	$sql = mq2("update board set title='".$title."',content='".$content."' where idx='".$bno."'");
}

echo "<script> alert('수정되었습니다.'); 
location.href='../page/local/board_main.html';</script>"
?>
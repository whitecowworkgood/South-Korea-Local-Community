<?php

include "./boarddb.php";
include "./memberdb.php";

	if(isset($_SESSION['userid'])){
		$username = $_SESSION['userid'];
		$title = $_POST['title'];
		$content = $_POST['content'];
		
if($username && $title && $content){
	
    $file = $_FILES["myfile"]['name'];
	$tmpfile = $_FILES["myfile"]['tmp_name'];
	
	$upload_dir = "../other/".$title."_".$username."/";

	$sql = mq2("insert into board(name,title,content,path,filename) values('".$username."','".$title."','".$content."','".$upload_dir."','".$file."')");
	
	if(!is_dir($upload_dir)){
		mkdir($upload_dir, 0777, true);
	}
	
	move_uploaded_file($tmpfile, $upload_dir.$file);

    echo "<script>
    alert('글쓰기 완료되었습니다.');
    location.href='../page/local/board_main.html';</script>";
}
else{
    echo "<script>
    alert('글쓰기에 실패했습니다.');
    history.back();</script>";
}
	}

?>
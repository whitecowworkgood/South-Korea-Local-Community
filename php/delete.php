<?php
	include "./boarddb.php";
	if(isset($_SESSION['userid'])){
		
			$bno = $_GET['idx'];
			$sql = mq2("select * from board where idx='".$bno."'");
			$board = $sql->fetch_array();
			
		if($board['name'] == $_SESSION['userid']){
			$sql = mq2("delete from board where idx='$bno';");
			echo "<script>alert('삭제되었습니다.'); location.href='../page/local/board_main.html';</script>";
		}


		else{
			echo "<script>
			alert('작성자만 삭제 할 수 있습니다.');
			history.back();</script>";
		}
	}
	else{
		echo "<script>alert('잘못된 접근입니다.'); history.back();</script>";
	}
?>
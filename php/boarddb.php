 <?php
  session_start();
  
  $db1 = new mysqli("localhost","root","toor","project_board");
  $db1->set_charset("utf8");

  function mq2($sql2){
    global $db1;
    return $db1->query($sql2);
  }

  ?>
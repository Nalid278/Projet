<?php
  if(!isset($_SESSION['membre'])) {
     print "ACCES RESERVE";
     print "<META http-equiv=\"refresh\": Content=\"2;URL=../index.php\">";    
     exit();
  }

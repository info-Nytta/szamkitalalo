<?php
	session_start();
	if (!isset($_SESSION['gep'])) {
		$_SESSION['id']=session_id();
		$_SESSION['jatekos']=
		$_SESSION['gep']=0;
		$_SESSION['tippek']='';
	}
?>
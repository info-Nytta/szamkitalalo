<?php
	session_start();
	if (!isset($_SESSION['gg'])) {
		$_SESSION['id']=session_id();
		$_SESSION['gg']['jatekos']=$_SESSION['gg']['gep']=$_SESSION['jg']['jatekos']=$_SESSION['jg']['gep']=0;
	}
?>
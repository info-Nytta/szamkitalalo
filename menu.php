<?php
$page='p_kezdo.php';

if (isset($_GET['jatek']))

	if ($_GET['jatek']=='gg' || $_GET['jatek']=='jg') {
		$jatekos=$_GET['jatek'];
		$page='p_jatek.php';
}

?>
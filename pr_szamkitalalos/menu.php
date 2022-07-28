<?php
$page='p_kezdo.php';

if (isset($_GET['jatek']))
{
	if ($_GET['jatek']=='gep') $page='p_gep.php';
	else if ($_GET['jatek']=='jatekos') $page='p_jatekos.php';
}

?>
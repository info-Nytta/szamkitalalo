<?php
$gondol='Gép';
$tippel='Játékos';

if (isset($_GET['tipp']))
{	
	$tipp=$_GET['tipp'];
	
	//$szam=$_GET['xx'];
	$tippszam=$_GET['x'];
	$min=$_GET['min'];
	$max=$_GET['max'];
	$le=$tippszam-$min-1;
	$fel=$max-$tippszam;
	if ($tipp==7) {
		if ($min==$max) {$valasz.="eltaláltad, győztél "; $_SESSION['jatekos']++;}
		else {$valasz.="ez sem jó, vesztettél "; $_SESSION['gep']++;}
		$valasz.="<br><br><a href='./?jatek=gg'><button>Új játék</button></a>";
		$ok=true;
	}	
	else if ($le>=$fel) {$valasz.="kisebb"; $max=$_GET['x']-1; $min=$_GET['min'];}
	else {$valasz.="nagyobb"; $min=$_GET['x']+1; $max=$_GET['max'];}
	$szam=ceil(($min+$max)/2);	
	$tipp=$_GET['tipp']+1;
	$_SESSION['tippek']=$_SESSION['tippek'].$_GET['tipp'].". tipp: ".$_GET['x']." - ".$valasz."<br>";
}

?>
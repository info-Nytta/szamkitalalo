<?php
$gondol='Játékos';
$tippel='Gép';

if (isset($_GET['valasz']))
{	
	$tippszam=$_GET['x'];
	$min=$_GET['min'];
	$max=$_GET['max'];
	$tipp=$_GET['tipp'];
	if ($_GET['valasz']!='0')
	{
		if ($_GET['valasz']=='3') {
			$valasz.="győztem"; $ok=true; $_SESSION['gep']++;
		}
		else {
			if ($_GET['valasz']=='1' && $tippszam>$min) {
				$valasz.="kisebb"; $max=$_GET['x']-1; $min=$_GET['min'];
			}
			else if ($_GET['valasz']=='2' && $tippszam<$max) {
				$valasz.="nagyobb"; $min=$_GET['x']+1; $max=$_GET['max'];
			}
			else $tipp--;
			$tipp++;
			if ($min==$max) $szam=$min;
			else $szam=floor(($min+$max)/2); 
		}
	}
	else $szam=$tippszam;
	$_SESSION['tippek'].=$_GET['tipp'].". tipp: ".$tippszam." - ".$valasz."<br>";
	if (!$ok && $tipp==7) {
		$_SESSION['tippek'].="$tipp. tipp: $szam - győztem<br><br><a href='./?jatek=jg'><button>Új játék</button></a>";
		$ok=true;
		$_SESSION['gep']++;
	}
}

?>
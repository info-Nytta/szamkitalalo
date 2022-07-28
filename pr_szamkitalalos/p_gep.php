<?php
$min=1;
$max=100;
$tipp=1;
$valasz="";
$ok=false;
//$szam=floor(($min+$max)/2);
$tippek="";
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
		if ($min<$max) {$valasz.="vesztettél "; $_SESSION['gg']['gep']++;}
		else { $valasz.="győztél "; $_SESSION['gg']['jatekos']++;}
	}
	if ($min>=$max) {
		$valasz.="eltaláltad";
		$ok=true;
	}
	else if ($le>=$fel) {$valasz.="kisebb"; $max=$_GET['x']-1; $min=$_GET['min'];}
	else {$valasz.="nagyobb"; $min=$_GET['x']+1; $max=$_GET['max'];}
	$szam=floor(($min+$max)/2);
	$tipp=$_GET['tipp']+1;
	/*
	if ($_GET['x']<$szam) {$valasz="nagyobb"; $min=$_GET['x']+1; $max=$_GET['max'];}
	else if ($_GET['x']>$szam) {$valasz="kisebb"; $max=$_GET['x']-1; $min=$_GET['min'];}
	else $valasz="eltaláltad";
	*/
	$tippek=$_GET['tippek'].$_GET['tipp'].". tipp: ".$_GET['x']." - ".$valasz."<br>";
	
}

?>
			<p class='pontok'>
			<p class='pontok'>
			<?php echo "Játékos: ".$_SESSION['gg']['jatekos']." / Gép: ".$_SESSION['gg']['gep']; ?>
			</p>
			</p>

			<h2>Gép gondol</h2>
			
			<?php include('jelki.php'); ?>
			
			<h3>Játékos tippjei</h3>
			<p>
			<?php echo $tippek; ?>
			</p>
			
			
			<?php if (!$ok) { ?>
			<form method='GET'>
			<?php echo $tipp; ?>. tipp: 
			<input type='hidden' name='jatek' value='gep'>
			<input type='hidden' name='tipp' value='<?php echo $tipp; ?>'>
			<input type='hidden' name='min' value='<?php echo $min; ?>'>
			<input type='hidden' name='max' value='<?php echo $max; ?>'>
			<input type='hidden' name='tippek' value='<?php echo $tippek; ?>'>
			<input type='number' name='x' min='<?php echo $min; ?>' max='<?php echo $max; ?>' required autofocus>
			<input type='submit' value='mehet'>
			</form>
			<?php } ?>
			

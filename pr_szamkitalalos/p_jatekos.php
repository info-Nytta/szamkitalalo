<?php
$min=1;
$max=100;
$tipp=1;
$valasz="";
$ok=false;
$szam=floor(($min+$max)/2);
$tippek="";
if (isset($_GET['valasz']))
{	
	$tippszam=$_GET['x'];
	$min=$_GET['min'];
	$max=$_GET['max'];
	$tipp=$_GET['tipp'];
	if ($_GET['valasz']!='0')
	{
		if ($_GET['valasz']=='3') {
			$valasz.="győztem"; $ok=true; $_SESSION['jg']['gep']++;
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
	$tippek=$_GET['tippek'].$_GET['tipp'].". tipp: ".$tippszam." - ".$valasz."<br>";
	if (!$ok && $tipp==7) {
		$tippek.="$tipp. tipp: $szam - győztem";
		$ok=true;
		$_SESSION['jg']['gep']++;
	}
}

?>
			<p class='pontok'>
			<?php echo "Játékos: ".$_SESSION['jg']['jatekos']." / Gép: ".$_SESSION['jg']['gep']; ?>
			</p>
			
			<h2>Játékos gondol</h2>
			<?php include('jelki.php'); ?>
			
			<h3>Gép tippjei</h3>
			<p>
			<?php echo $tippek; ?>
			</p>
			
			
			<?php if (!$ok) { ?>
			<form method='GET'>
			<?php echo $tipp; ?>. tipp: 
			<input type='hidden' name='jatek' value='jatekos'>
			<input type='hidden' name='tipp' value='<?php echo $tipp; ?>'>
			<input type='hidden' name='min' value='<?php echo $min; ?>'>
			<input type='hidden' name='max' value='<?php echo $max; ?>'>
			<input type='hidden' name='tippek' value='<?php echo $tippek; ?>'>
			<input type='text' name='x' value='<?php echo $szam; ?>' readonly>
			<select name='valasz' required autofocus>
				<option value='0'></option>      
				<option value='1'>kisebb</option>      
				<option value='2'>nagyobb</option>      
				<option value='3'>eltaláltad</option>      
			</select>
			<input type='submit' value='mehet'>
			</form>
			<?php } ?>
			

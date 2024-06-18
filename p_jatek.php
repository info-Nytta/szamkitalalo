<?php
$min=1;
$max=100;
$tipp=1;
$valasz="";
$ok=false;
$szam=floor(($min+$max)/2);
$valasztas="";

if ($jatekos=='gg') {
    include('gepgondol.php');
    $valasztas="
    <input type='number' name='x' min='$min' max='$max' required autofocus>
    ";
}
else if ($jatekos=='jg') {
    include('jatekosgondol.php');
    $valasztas="
    <input type='text' name='x' value='$szam' readonly>
    <select name='valasz' required autofocus>
        <option value='0'></option>      
        <option value='1'>kisebb</option>      
        <option value='2'>nagyobb</option>      
        <option value='3'>eltaláltad</option>      
    </select>
    ";
}
else
    header('Location: ./');
?>

    <p class='pontok'>
    <?php echo "Játékos: ".$_SESSION['jatekos']." / Gép: ".$_SESSION['gep']; ?>
    </p>

    <h2><?php echo $gondol?> gondol</h2>
    
    <p class='jelek center'>
			<?php 
			for ($i=1; $i<$min; $i++) echo "<span class='tilt jel'>x</span>";
			echo "<span class='enged szam'> ".$min." </span>";
			for ($i=$min+1; $i<$max; $i++) echo "<span class='enged jel'>?</span>";
			echo "<span class='jel-kicsi'> - </span>";
			if ($min!=$max) echo "<span class='enged szam'> ".$max." </span>";
			for ($i=100; $i>$max; $i--) echo "<span class='tilt jel'>x</span>";
			?>
	</p>
    
    <h3><?php echo $tippel?> tippjei</h3>
    <p>
    <?php 
        if ($tipp==1) $_SESSION['tippek']="";
        echo $_SESSION['tippek']; 
    ?>
    </p>

    <?php if (!$ok) { ?>
			<form method='GET'>
			<?php echo $tipp; ?>. tipp: 
			<input type='hidden' name='jatek' value='gep'>
			<input type='hidden' name='tipp' value='<?php echo $tipp; ?>'>
			<input type='hidden' name='min' value='<?php echo $min; ?>'>
			<input type='hidden' name='max' value='<?php echo $max; ?>'>
            <input type='hidden' name='jatek' value='<?php echo $jatekos;?>'>
            <?php echo $valasztas; ?>
			
			<input type='submit' value='mehet'>
			</form>
			<?php } ?>



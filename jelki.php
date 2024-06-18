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
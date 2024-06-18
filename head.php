<!doctype html>
<html lang='hu'>
<head>
	<meta charset='utf-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel='stylesheet' type='text/css' href='style.css'>
	<title>Számkitalálós játék</title>
</head>
<body>
	<header>
		<div id="logo">
			<a href='./'><img src='./img/logo.jpg'></a>
		</div>
		<div>
			<h1>Számkitalálós játék</h1>		
		</div>
	</header>
	<nav>
		<div id="hambi" onclick="menu_valt()"><span id="hambi_gomb">&#9776;</span></div>
		<div id="menupontok">
			<a href='./'>Játék menete</a><span class='valaszto'> | </span>
			<a href='./?jatek=gg'>Gép gondol</a><span class='valaszto'> | </span>
			<a href='./?jatek=jg'>Játékos gondol</a>
		</div>
	</nav>
   	<script>
       function menu_valt() {
           menu=document.getElementById("menupontok");
           gomb=document.getElementById("hambi_gomb");
           if (menu.style.display=="block"){
               menu.style.display="none";
               gomb.innerHTML="&#9776;";
           } else {
               menu.style.display="block";
               gomb.innerHTML="&#9932;";
           }
       }
   	</script>

	<main>
<?php
//Ohjelma toivottaa Ville-nimiset tervetulleiksi. 
//Jos käyttäjä yrittää avata sivun suoraan tulematta ekasivu.php:n kautta, niin häntä ei toivoteta tervetulleeksi
//Session aloitus. 
 session_start(); 
?> 
<!DOCTYPE html>
<html>
<head>
<title>PHP - pohja</title>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="styles.css" title="tyylit" />
</head>
<body>
<div class="container">
<div class="header">
<div class="otsikko">Tokasivu</div>
</div>	
<div class="content">				
			
<?php
//Jos on saavuttu ekasivun kautta ja annettu nimeksi Ville
if(isset($_SESSION['nimi']) && $_SESSION['nimi'] == "Ville") {
		 echo "<h2> Tervetuloa " . $_SESSION['nimi'] . "</h2>"; 
}
else {
		echo "<h2>Et ole tervetullut!</h2>";
}
//Poistaa session
if(isset($_REQUEST["poistaSessioNappi"])) {
	session_unset();
	session_destroy();
	header("location: ekasivu.php");//ajaa ekasivu.php:n
}
?>
	<br/><br/>
	<a href="ekasivu.php">Paluu. Sessio jää voimaan, jos on olemassa </a>
	<br/><br/>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 			
		<input type="submit" name="poistaSessioNappi" value="Poista sessio, jos on ja palaa etusivulle" />			
	</form>			
	<br/>
	</div>	
<div class="footer"><br/>
</div>
</div>
</body>
</html>
<?php
/*
Tämä ohjelma koostuu kahdesta sivusta: ekasivu.php ja tokasivu.php
ekasivulla käyttäjä kirjoittaa nimen. Nimi tallennetaan sessiomuuttujalle nimeltä 'nimi'. Tämän jälkeen käyttäjä ohjataan tokasivulle
Tokasivulla tarkastetaan sessiomuuttujasta, onko sivun lataaja tullut ekasivun kautta ja onko hän antanut nimeksi Ville
Jos molemmat ehdot täyttyvät, toivotetaan hänet tervetulleeksi. Huomaa, että sessio on oletuksena voimassa niin kauan, kunnes selain suljetaan tai palvelimen asetuksissa määrätyn ajan (esimerkiksi 30 minuuttia)
Testaa ohjelmaa myös siten, että avaat tokasivu.php:n suoraan
*/

//Session aloitus. Lähettää cookieen tallennetun session_id:n palvelimelle tai luo uuden id:n, jos uusi sessio
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
	<div class="otsikko">Ekasivu</div>
</div>	
<div class="content">
Vain Villet ovat tervetulleita palveluun<br/><br/>				
			<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 			
			Nimi: <input name="nimi" />
			<input type="submit" name="nappi" value="Jatka" /><br/><br/>			
			</form>
<?php
//Jos nappia on painettu, niin ajetaan ohjelmalohko (aaltosulkujen väliset lauseet)
if(isset($_REQUEST["nappi"])) { 
		 $_SESSION['nimi'] = $_REQUEST['nimi']; //Asetetaan nimi session-muuttujalle. Tässä nimenä on 'nimi'
		 header("location:tokasivu.php");//Ohjataan toiselle sivulle
}
?>

</div>

	<div class="footer"><br/>
	</div>
</div>
</body>
</html>
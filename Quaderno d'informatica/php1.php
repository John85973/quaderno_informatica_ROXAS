<!DOCTYPE html>
<html>
<body>

<h1>SPIEGAZIONE</h1>
<p>Il file PHP riceve i dati inviati dal form tramite metodo POST e assegna ogni valore a una variabile.</p>
<p>Controlla se i campi sono stati compilati e mostra a schermo i valori inseriti con una nota di presenza.</p>
<p>Se un campo è vuoto, viene indicato come "valore non presente" invece di mostrare il valore.</p>
<p>Alla fine ci sono due pulsanti per tornare alla pagina precedente o alla pagina principale.</p>

<hr>

<h2>REGISTRAZIONE</h2>
<?php
$nome = $_POST["nome"];
echo ("Nome: ");

$nome = isset($_POST["nome"]) ? $_POST["nome"] : "";
if (!empty($nome)) {
		echo (" $nome - (valore presente)");
	} else {
		echo ("(valore non presente)");
}
echo nl2br("\n");
?>


<?php
$cognome = $_POST["cognome"];
echo ("Cognome: ");

$cognome = isset($_POST["cognome"]) ? $_POST["cognome"] : "";
if (!empty($cognome)) {
		echo (" $cognome - (valore presente)");
	} else {
		echo ("(valore non presente)");
}

echo nl2br("\n");
?>


<?php
$cf = $_POST["cf"];
echo ("Codice Fiscale: ");

$cf = isset($_POST["cf"]) ? $_POST["cf"] : "";
if (!empty($cf)) {
		echo (" $cf - (valore presente)");
	} else {
		echo ("(valore non presente)");
}

echo nl2br("\n");
?>

<?php
$datadinascita = $_POST["datadinascita"];
echo ("Data di nascita: ");

$datadinascita = isset($_POST["datadinascita"]) ? $_POST["datadinascita"] : "";
if (!empty($datadinascita)) {
		echo (" $datadinascita - (valore presente)");
	} else {
		echo ("(valore non presente)");
}

echo nl2br("\n");
?>

	<br>

	<form action="esercizio1.html">
	<button type="submit">Indietro</button>
	</form>
	
	<br>
	
	<form action="index.html">
	<button type="submit">Torna nella pagina principale</button>
	</form>

	
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


<hr>

<footer>
	<p>2024/2025 Quaderno di informatica</p>
	<p>ESERCIZI:</p>
		<ul>
			<li><a href="esercizio2.html">passaggio dei dati con l'utilizzo del form e controllo delle credenziali utilizzando la logica nel php (Esercizio 2)</a></li>
			<li><a href="esercizio3.html">passaggio dei dati con l'utilizzo del form e controllo del metodo utilizzato per passare i dati utilizzando la logica nel php (Esercizio 3)</a></li>
			<li><a href="esercizio4.html">passaggio dei dati con l'utilizzo del form e salvataggio credenziali utilizzando la logica nel php (Esercizo 4)</a></li>
		</ul>
		
		<br>
		
		<p>INFORMAZIONI:</p>
		<ul>
			<li><a href="#chi siamo">Chi Siamo</a></li>
			<li><a href="#servizio">Servizi</a></li>
			<li><a href="#privacy">Privacy Policy</a></li>
			<li><a href="#contatti">Contatti</a></li>
		</ul>
</footer>

</body>
</html>
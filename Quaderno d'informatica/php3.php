<html>
<body>

<h1>SPIEGAZIONE</h1>
<p>Il file PHP riceve il nome utente e la password tramite metodo POST dal form.</p>
<p>Verifica se il metodo di invio è POST e se il nome utente è "Mario" e la password è "123".</p>
<p>Se le credenziali sono corrette, mostra un messaggio di benvenuto, altrimenti segnala che le credenziali non sono corrette.</p>
<p>Alla fine c'è un pulsante per tornare alla pagina precedente e un'altra per tornare nella pagina principale.</p>

<hr>

<h2>ACCEDI</h2>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nomeutente = $_POST['nomeutente'];
    $password = $_POST['password'];

    if ($nomeutente == "Mario" && $password == "123") {
        echo "Benvenuto $nomeutente nella pagina riservata del sito!";
    } else {
        echo "Attenzione: credenziali non corrette.";
    }
}

?>

<br>
<br>

	<form action="esercizio3.html">
	<button type="submit">Indietro</button>
	</form>
	
	<br>
	
	<form action="index.html">
	<button type="submit">Torna nella pagina principale</button>
	</form>
	
	
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


<hr>

<footer>
	<p>2024/2025 Quaderno di informatica</p>
	<p>ESERCIZI:</p>
		<ul>
			<li><a href="esercizio1.html">passaggio dei dati con l'utilizzo del form e controllo dei dati presenti utilizzando la logica nel php (Esercizio 1)</a></li>
			<li><a href="esercizio2.html">passaggio dei dati con l'utilizzo del form e controllo delle credenziali utilizzando la logica nel php (Esercizio 2)</a></li>
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


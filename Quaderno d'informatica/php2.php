<!DOCTYPE html>
<html>
<head>
  <title>Accesso a pagina riservata</title>
</head>

<h1>SPIEGAZIONE</h1>
<p>Il file PHP riceve il nome utente e la password inviati dal form tramite metodo POST.</p>
<p>Verifica se il nome utente è "Admin" e la password è "123", se sono corretti mostra un messaggio di benvenuto.</p>
<p>Se le credenziali sono sbagliate, viene mostrato un messaggio di errore indicando che le credenziali non sono corrette.</p>
<p>Alla fine c'è un pulsante per tornare alla pagina precedente e un'altro pulsante per tornare nella pagina principale.</p>

<hr>
<h2>ACCEDI</h2>

<?php
$nomeutente = $_REQUEST['nomeutente'];
$password = $_REQUEST['password'];

echo "Nome utente: $nomeutente<br>";
echo "Password: $password<br>";

if($nomeutente == "Admin" && $password == "123") {
  echo ("Benvenuto $nomeutente nella pagina riservata del sito!");
} else {
  echo  ("Attenzione: credenziali non corrette.");
}
?>

<br>
<br>

	<form action="esercizio2.html">
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
			<li><a href="esercizio1.html">passaggio dei dati con l'utilizzo del form e controllo dei dati presenti utilizzando la logica nel php (Esercizio 1)</a></li>
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

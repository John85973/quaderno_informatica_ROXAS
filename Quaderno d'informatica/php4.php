<html>
<body>

<h1>SPIEGAZIONE</h1>

<p>Il codice permette di registrare un utente salvando il nome utente e la password in una sessione.</p>
<p>Quando l'utente cerca di accedere, i dati inseriti vengono confrontati con quelli registrati nella sessione.</p>
<p>Se i dati sono corretti, l'utente vede un messaggio di benvenuto.</p>
<p>Se i dati sono sbagliati, l'utente deve riprovare ad accedere.</p>

<hr>

<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if (!empty($username) && !empty('password')) {

    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];

    echo "REGISTRATO CON SUCCESSO<br>";
    echo "VERIFICA LE CREDENZIALI CLICCANDO SU ACCEDI<br><br>";
    echo "<form action='esercizio4_1.html'>
          <button type='submit'>Accedi</button>
          </form><br>";
    echo "<form action='esercizio4.html'>
          <button type='submit'>Indietro</button>
          </form>";

} else {
    echo "REGISTRATO SENZA SUCCESSO<br><br>";
    echo "<form action='esercizio4.html'>
          <button type='submit'>Riprova</button>
          </form>";
}
?>

	
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


<hr>

<footer>
	<p>2024/2025 Quaderno di informatica</p>
	<p>ESERCIZI:</p>
		<ul>
			<li><a href="esercizio1.html">passaggio dei dati con l'utilizzo del form e controllo dei dati presenti utilizzando la logica nel php (Esercizio 1)</a></li>
			<li><a href="esercizio2.html">passaggio dei dati con l'utilizzo del form e controllo delle credenziali utilizzando la logica nel php (Esercizio 2)</a></li>
			<li><a href="esercizio3.html">passaggio dei dati con l'utilizzo del form e controllo del metodo utilizzato per passare i dati utilizzando la logica nel php (Esercizo 3)</a></li>
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


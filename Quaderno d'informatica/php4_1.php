<html>
</body>

<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$sessionusername = $_SESSION['username'];
$sessionpassword = $_SESSION['password'];


if ($username == $sessionusername && $password == $sessionpassword) {

    echo "<h2>BENVENUTO $username</h2>";
    echo "<h2>ACCESSO CON SUCCESSO!</h2>";
    echo "<form action='index.html'>
          <button type='submit'>Torna nella pagina principale</button>
          </form><br>";
    

} else {

    echo "<h2>CREDENZIALI SBAGLIATE</h2>";
    echo "<form action='esercizio4_1.html'>
          <button type='submit'>Riprova</button>
          </form><br>";
    echo "<form action='esercizio4.html'>
          <label>credenziali dimenticati?</label><br><br>
          <button type='submit'>Rifare registrazione</button>
          </form>";

}





?>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


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
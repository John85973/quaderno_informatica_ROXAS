<html>
<body>

<h1>SPIEGAZIONE</h1>

<p>Il codice permette di registrare un utente salvando il nome utente e la password in una sessione.</p>
<p>Quando l'utente cerca di accedere, i dati inseriti vengono confrontati con quelli registrati nella sessione.</p>
<p>Se i dati sono corretti, l'utente vede un messaggio di benvenuto.</p>
<p>Se i dati sono sbagliati, l'utente deve riprovare ad accedere.</p>

<hr>

<?php
// Avvia la sessione
session_start();

// Se i dati di registrazione sono stati inviati, memorizzali nella sessione
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['signup_username']) && isset($_POST['signup_password'])) {
    $_SESSION['signup_username'] = $_POST['signup_username'];
    $_SESSION['signup_password'] = $_POST['signup_password'];
}

// Se l'utente sta tentando di accedere
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['login_username']) && isset($_POST['login_password'])) {
    // Recupera i dati di registrazione dalla sessione
    $signup_username = $_SESSION['signup_username'] ?? null;
    $signup_password = $_SESSION['signup_password'] ?? null;

    // Dati inseriti nel form di login
    $login_username = $_POST['login_username'];
    $login_password = $_POST['login_password'];

    // Verifica delle credenziali
    if ($signup_username && $login_username === $signup_username && $login_password === $signup_password) {
        echo "<h1>Benvenuto, $login_username!</h1>";
        echo '<a href="index.html"><button>Torna alla Home</button></a>';
    } else {
        echo "<h1>Credenziali errate. Riprova.</h1>";
        echo '<a href="php4.php"><button>Torna al Sign In</button></a>';
    }
} else {
    // Mostra il form di accesso
    echo '<!DOCTYPE html>
<html>
<body>
    <h1>Accedi</h1>

    <!-- Form di accesso -->
    <form method="post" action="php4.php">
        <label for="username">Nome Utente:</label>
        <input type="text" id="username" name="login_username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="login_password" required><br><br>

        <button type="submit">Accedi</button>
    </form>

    <!-- Pulsante per tornare al Sign Up -->
    <br>
    <a href="esercizio4.html"><button>Torna alla registrazione</button></a>

</body>
</html>';
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


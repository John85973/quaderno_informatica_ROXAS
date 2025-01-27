<html>
<body>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "AutomobileProprietario";     

// Collegamento DB in PHP
$connessione = new mysqli($servername, $username, $password, $db);

if ($connessione->connect_error) {
    die("Connessione fallita " . $connessione->connect_error);
}

// Variabili per gestire l'inserimento dei dati dell'automobile
$targa = $modello = $marca = $colore = "";

// Variabili per gestire l'inserimento dei dati del proprietario
$cf = $nome = $cognome = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    // Raccogli i dati dal form
    $targa = $_POST['targa'];
    $modello = $_POST['modello'];
    $marca = $_POST['marca'];
    $colore = $_POST['colore'];

    $CF = $_POST['CF'];
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];



    // Query SQL per inserire i dati nella tabella dell'automobile
    $sql1 = "INSERT INTO Automobile (targa, modello, marca, colore)
             VALUES ('$targa', '$modello', '$marca', '$colore');";

    // Query SQL per inserire i dati del proprietario
    $sql2 = "INSERT INTO Proprietario (CF, nome, cognome)
             VALUES ('$CF', '$nome', '$cognome');";

    $connessione->query($sql1);
    $connessione->query($sql2);

    echo "<h1>Registrazione con successo!</h1>";

    

}

?>

    <form action="esercitazionetabelle.php">
        <button type="submit">VISUALIZZA TABELLE</button>
    </form><br>

</body>
</html>

<html>
<body>

<h1>SPIEGAZIONE</h1>
<p>Il file PHP si occupa di connettersi al database MySQL e di creare un database se non esiste. Inoltre,</p>
<p>crea una tabella chiamata "Studente" per memorizzare le informazioni inserite. Dopo aver ricevuto i</p>
<p>dati dal form, il PHP li inserisce nella tabella. Successivamente, mostra un messaggio che</p>
<p>conferma il successo dell'inserimento e recupera e visualizza tutti gli studenti registrati nel database</p>
<p>attraverso una tabella. Alla fine l'utente puo tornare alla pagina principale premendo sul pulsante.</p>

<hr>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "Scuola"; //DB esempio

//collegamento DB in php
$connessione = new mysqli($servername, $username, $password);

if ($connessione->connect_error) {
    die("Connessione fallita " . $connessione->connect_error);
}


$crea_database = "CREATE DATABASE IF NOT EXISTS $db";
$connessione->query($crea_database);


$connessione = new mysqli($servername, $username, $password, $db);

//query di creazione tabella
$query_crea_tabella = "
    CREATE TABLE IF NOT EXISTS Studente (
        id_studente VARCHAR(20) PRIMARY KEY,
        nome VARCHAR(50),
        cognome VARCHAR(50),
        telefono VARCHAR(20)
    );
";

$connessione->query($query_crea_tabella);


$id_studente = $_POST["id_studente"];
$nome = $_POST["nome"];
$cognome = $_POST["cognome"];
$telefono = $_POST["telefono"];

//query di inserimento dati
$query_sql = "INSERT INTO Studente (id_studente, nome, cognome, telefono)
              VALUES ('$id_studente', '$nome', '$cognome', '$telefono')";

$risultato = $connessione->query($query_sql);

    if ($risultato == TRUE) {
        echo "<h2>Inserimento dati con successo!</h2>";
        echo "<h2>Controlla sul sito</h2>";
        echo "<form action='eserciziodatabase.html'>  
              <button type='submit'>Indietro</button>
              </form>";
    } else {
        echo "Errore";
    }


//visualizzazione dei dati DB sulla pagina web
$visualizza_sql = "SELECT * FROM Studente";
$risultati = $connessione->query($visualizza_sql);

    echo "<h2>Elenco studenti registrati:</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID Studente</th>
                <th>Nome</th>
                <th>Cognome</th>
                <th>Telefono</th>
            </tr>";
            
    while ($row = $risultati->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['id_studente'] . "</td>
                <td>" . $row['nome'] . "</td>
                <td>" . $row['cognome'] . "</td>
                <td>" . $row['telefono'] . "</td>
              </tr>";
    }
    echo "</table>";


?>
<br>

<form action="index.html">
	<button type="submit">Torna nella pagina principale</button>
</form>


</body>
</html>

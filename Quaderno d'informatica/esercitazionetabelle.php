<html>
<body>

<?php
    // Configurazione per la connessione al database
    $host = "localhost";        // localhost
    $username = "root";         // Nome utente del database
    $password = "";         // Password del database
    $dbname = "AutomobileProprietario";        // Nome del database

    // Creazione della connessione
    $connessione = new mysqli($host, $username, $password, $dbname);

    // Controllo della connessione
    if ($connessione->connect_error) {
        die("Connessione fallita " . $connessione->connect_error);
    }
    ?>


<?php
    //query per mostrare le tabelle 
    $risultati1 = $connessione->query("SELECT * FROM Automobile");
    echo "<h2>Elenco Automobili</h2><table border='1'><tr><th>Targa</th><th>Modello</th><th>Marca</th><th>Colore</th></tr>";
    while ($row = $risultati1->fetch_assoc()) {
        echo "<tr><td>" . $row['targa'] . "</td><td>" . $row['modello'] . "</td><td>" . $row['marca'] . "</td><td>" . $row['colore'] . "</td></tr>";

    }
    echo "</table>";

    $risultati2 = $connessione->query("SELECT * FROM Proprietario");
    echo "<h2>Elenco Proprietari</h2><table border='1'><tr><th>CF</th><th>Nome</th><th>Cognome</th></tr>";
    while ($row = $risultati2->fetch_assoc()) {
        echo "<tr><td>" . $row['CF'] . "</td><td>" . $row['nome'] . "</td><td>" . $row['cognome'] . "</td></tr>";
    }
    echo "</table>";

?>
    <br>

    <form action="index1.html">
        <button type="submit">Torna indietro</button>
    </form><br>


</body>
</html>
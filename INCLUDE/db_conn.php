<?php
$servername="localhost";
$username="admin"; //ALL PRIVILEGES
$password="wnk_p4u6ECjH/Fo]";
$database="website_pfgsm";
$mysqliProceduralConection = mysqli_connect($servername, $username, $password, $database);

if (!$mysqliProceduralConection)
{
    die("Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: "
        . mysqli_connect_error());
}
?>
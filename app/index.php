<?php
$host = 'mysql'; //Nom donné dans le docker-compose.yml
$user = 'root';
$password = '12345';
$db = 'opc-php-mysql';

$conn = new mysqli($host,$user,$password,$db);
if(!$conn) {echo "Erreur de connexion à MSSQL<br />";}
else{
    echo "Connexion à MySQL ok<br />";
    mysqli_close($conn);
}


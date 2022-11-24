<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Ma page web</title>
</head>
<body>
<h1>Ma page web</h1>
<p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>

</body>
</html>

<?php

phpinfo();

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


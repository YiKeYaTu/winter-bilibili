
<?php
$dsn = "mysql:host=localhost;dbname=ceshi";
$username = "root";
$passwd = "";
$dbh = new PDO($dsn,$username,$passwd);
$dbh->exec('set names utf8');

?>
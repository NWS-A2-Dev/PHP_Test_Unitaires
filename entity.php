<?php
$dbh = new PDO('mysql:host=localhost;dbname=test_unit', "root", "");

$sql = "INSERT INTO messages(Nom, Prenom, Content) VALUES(:nom, :prenom, :content)";
$sth = $dbh->prepare($sql);
$sth->execute([
    'nom' => "VAREILLE",
    "prenom" => "Nicolas",
    "content" => "OwO"
]);
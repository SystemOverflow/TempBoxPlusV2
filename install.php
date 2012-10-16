<?php
include 'lib/config.php';
$mysqli->autocommit(true);
$mysqli->query("
CREATE TABLE ".$DBprefix."host (
id INT UNSIGNED AUTO_INCREMENT NOT NULL,
url VARCHAR(600) NOT NULL,
code TEXT NOT NULL,
limite TEXT NOT NULL,
numero_download INT,
dimensioni TEXT NOT NULL,
nome VARCHAR(48) NOT NULL,
commento VARCHAR(100) NOT NULL,
delete_key TEXT NOT NULL,
nickname TEXT NOT NULL,
public INT,
PRIMARY KEY(id)
);
");
$mysqli->query("
CREATE TABLE ".$DBprefix."utenti (
id INT UNSIGNED AUTO_INCREMENT NOT NULL,
nickname VARCHAR(600) NOT NULL,
password TEXT NOT NULL,
keyID TEXT NOT NULL,
email TEXT NOT NULL,
activate INT,
avatar TEXT NOT NULL,
public_page INT,
PRIMARY KEY(id)
);
");

$mysqli->query("
CREATE TABLE ".$DBprefix."posta (
id INT UNSIGNED AUTO_INCREMENT NOT NULL,
mittente TEXT NOT NULL,
destinatario TEXT NOT NULL,
testo TEXT NOT NULL,
letto INT,
ora TEXT NOT NULL,
PRIMARY KEY(id)
);
");

?>
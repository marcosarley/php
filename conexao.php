<?php 

$host = "localhost";
$user = "root";
$pass = "usbw";
$bank = "empresa_de_treinamento";

$conn = new mysqli($host,$user,$pass,$bank);

If($conn->connect_error) {
    die(" Falha de conexão " . $conn->connect_error);
}


?>
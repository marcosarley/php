<?php 

$host = "localhost:8080";
$user = "root";
$pass = "usbw";
$bank = "empresa_de_treinamento";

$link = mysqli_connect($host,$user,$pass,$bank);

If(mysqli_connect_errno($link)) {
    echo "Erro de conexão!";
}
else {
    echo = "Conexão OK!";
}

?>
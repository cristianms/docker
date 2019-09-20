<?php
$arr = array(
    'aaaaa',
    'bbbbbb'
);

echo "<pre>";
print_r($arr);

$host = 'db';
$db = 'teste_db';
$user = 'devuser';
$pass = 'devpass';

$conn = new mysqli($host, $user, $pass, $db);
if($conn->connect_error) {
    echo "<br/>Erro ao conectar";
} else {
    echo "Conectou :D";
}


?>
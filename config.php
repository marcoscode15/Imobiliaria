<?php

if (isset ($_POST['cadastrar'])) {
    $nomecorretor = $_POST['nomecorretor'];
    $nomecliente = $_POST['nomecliente'];
    $numerotelefone = $_POST['numerotelefone'];
    $endereco = $_POST['endereco'];
    $preco = $_POST['preco'];
    $dataencontro = $_POST['dataencontro'];
    $complemento = $_POST['complemento'];
}

$host = 'localhost';
$user = 'root';
$senha_user = '';
$banco = 'imobiliaria';

$con = mysqli_connect($host, $user, $senha_user, $banco);

if (!$con) {
    die ("Conexão falhou." .mysqli_connect_error());
}

$sql = "INSERT INTO clientes (nomecorretor, nomecliente, numerotelefone, endereco, preco, dataencontro, complemento) values ('$nomecorretor', '$nomecliente', '$numerotelefone', '$endereco', '$preco', '$dataencontro', '$complemento')";

$rs = mysqli_query($con, $sql);

if ($rs) {
    echo "Cliente cadastrado com sucesso";
} else {
    echo "Erro ao cadastrar o cliente: " . mysqli_error($con);
}

?>

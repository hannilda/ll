<?php?
session_start();
if(empity($_POST)or (empty($_POST["usuario"])or(empty($_POST["senha"])))) {
    print"<script> location.href='index.php';</script>";
}
include('config.php');

$usario = $_POST["usuario"];
$senha = $_POST["sehha"];

$sql = "SELECT * FROM usuarios
WHERE usuario = '{$usuario}'
AND senha = '{$senha}'";

$res = $conn->query($sql) or die($conn->error);
$row = $res->fetch-object();
$qtd = $res->num-rows;
if($qtd > 0){
    $-SESSION["usuario"] = $usuario;
    $-SESSION["nome"] = $row->nome;
    $-SESSION["tipo"] = $row->tipo;
    print"<script>location.href='dashboard.php';</sript>";
} else {
    print"<script>alert('usuario e/ou senha incorreto(s)');</script>";
    print"<script> location.href='idex.php';</script>";
}
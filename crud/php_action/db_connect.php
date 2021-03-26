<?php
//conexão com o banco de dados
$servername="200.18.128.52";
$username="lu_paloma_rebeka";
$password="lu_paloma_rebeka";
$db_name="lu_paloma_rebeka";

$connect = mysqli_connect($servername, $username, $password,$db_name);
mysqli_set_charset($connect, "utf8");

if(mysqli_connect_error()){
    echo "Erro na conecção: ".mysqli_connect_error();
}
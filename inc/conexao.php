<?php
/*$host="localhost";
$user="root";
$pass="";
$banco="banco";
*/

 function getConnection(){
    $conexao = @mysqli_connect(DB_HOST,DB_USUARIO,DB_PASSOWORD,DB_NOME);
    return $conexao;
 }

 function closeConnection($conexao){
    mysqli_close($conexao);
 }
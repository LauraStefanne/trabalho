<?php

$dbHost ='sql309.infinityfree.com';
$dbUsername = 'if0_36582708';
$dbPassword = 'AXFpFaELMKLLFOd';
$dbName ='if0_36582708_bancoteste';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName );

if($conexao -> connect_errno)
{
    echo "Erro";
}
else
{
    echo "Certo";
}
?>
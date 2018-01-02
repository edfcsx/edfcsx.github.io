<?php

/*
Codigo PHP para conexão do site com o banco de dados
Autor:Manga Softs
DBA : PHPMYADMIN
*/

//------------Credenciais para login no sistema------------------
$usuario = "root";
$senha = "123";
//------------Seleção do banco de dados--------------------------
$servidor = "localhost";
$dbname = "manga";
//------------Conexão do banco de dados--------------------------
$con = mysqli_connect($servidor,$usuario,$senha,$dbname);

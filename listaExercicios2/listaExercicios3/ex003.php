<?php

$arrayNome = '{"nome":"Vinicius","anoNascimento":1997,"profissao":"Dev"}';
$arayAssociativo = json_decode($arrayNome,true);
var_dump($arayAssociativo);
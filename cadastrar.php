<?php
// Carrega o banco de dados
$bd = new SQLite3('database/database.sqlite');


// Campo do formulario identificado como  name="data"
$data = $_POST['data'];

// Campo do formulario identificado como  name="tipo"
$tipo = $_POST['tipo'];

// Campo do formulario identificado como  name="descricao"
$descricao = $_POST['descricao'];

// Campo do formulario identificado como  name="valor"
$valor = $_POST['valor'];


/**
 *  EXEMPLO DE QUERY
 *  $bd->query(" COMANDO SQL ");
 */
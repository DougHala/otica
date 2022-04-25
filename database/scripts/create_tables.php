<?php
// Criar uma instancia do banco na variavel
// Essa variavel agora representa o banco de dados contido no arquivo ./database.sqlite
$obj = new SQLite3('../database.sqlite');

// Criando a primeira tabela para guardar o fluxo de caixa
$obj->query("CREATE table cash_flow (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    day int not null,
    month int not null,
    year int not null,
    type int not null default(1),
    description varchar(255) not null,
    value decimal not null
)");

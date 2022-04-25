<?php

require_once('layout/topo.php');

//Objeto Banco de Dados
$bd = new SQLite3('database/database.sqlite');

// Criando a primeira tabela para guardar o fluxo de caixa
$caixa = $bd->query("SELECT * from cash_flow");
?>

    <table class="table table-striped">
        <tr>
            <th> Data</th>
            <th> Tipo</th>
            <th> Descrição</th>
            <th> Valor</th>
        </tr>
<?php

while ($item = $caixa->fetchArray()) {
    $tipo = $item['type'] == 1 ? 'Entrada' : 'saida';
    echo "<tr>
           <td> {$item['day']}/{$item['month']}/{$item['year']}</td>
           <td> {$tipo} </td>
           <td> {$item['description']} </td>
           <td> {$item['value']} </td>
    </tr>";

}
echo '</table>';
require_once('layout/rodape.php');
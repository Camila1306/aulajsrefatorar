<?php
    $sql = "SELECT Modelo, Placa, Motorista, Origem, Destino, Km_percorrido, Litros_gasto, Preco_combustivel from `dados_viagem`";
    $consulta = $conn->prepare($sql);
    $resultado = $consulta->execute();
    $dados = $conn ->query($sql);
?>

<table class="table table-striped table-light">
    <tr>
        <td>Modelo</td>
        <td>Placa</td>
        <td>Motorista</td>
        <td>Local de Origem</td>
        <td>Local de Destino</td>
        <td>KM Percorrido</td>
        <td>Combustível Gasto</td>
        <td>Preço do Combustível</td>
    </tr>
<?php
    foreach($dados as $linha) {
        ?>
        <tr>
            <td><?php echo $linha['Modelo'];?></td>
            <td><?php echo $linha['Placa'];?></td>
            <td><?php echo $linha['Motorista'];?></td>
            <td><?php echo $linha['Origem'];?></td>
            <td><?php echo $linha['Destino'];?></td>
            <td><?php echo $linha['Km_percorrido'];?></td>
            <td><?php echo $linha['Litros_gasto'];?></td>
            <td><?php echo $linha['Preco_combustivel'];?></td>
        </tr>
        <?php
    }        
?>
</table>
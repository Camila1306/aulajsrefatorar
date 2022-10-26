<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Informações</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body> 
    <div class="container">
        <h1>Cadastro de Informações</h1>

    <?php
        function fValida($valores) {
            $msg = "";
            $valido = true;
            if(empty($valores['modelocarro'])) {
                $msg = "Modelo Inválido";
                $valido = false;
            } elseif(empty($valores['placacarro'])) {
                $msg = "Placa Inválida";
                $valido = false;
            } elseif(empty($valores['motorista'])) {
                $msg = "Motorista Inválido";
                $valido = false;
            } elseif(empty($valores['origem'])) {
                $msg = "Local de Origem Inválido";
                $valido = false;
            } elseif(empty($valores['destino'])) {
                $msg = "Local de Destino Inválido";
                $valido = false;
            } elseif(empty($valores['km'])) {
                $msg = "KM Percorrido Inválido";
                $valido = false;
            } elseif(empty($valores['combustivel'])) {
                $msg = "Combustivel Gasto Inválido";
                $valido = false;
            } elseif(empty($valores['valorcombustivel'])) {
                $msg = "Preço do Combustível Inválido";
                $valido = false;
            }
            echo "<div class=\"alert alert-warning\">".$msg."</div>";
            return $valido;
        }

        if (isset($_POST['bGravar'])) {
            $valores = array("Modelo" => $_POST['modelocarro'],
                             "Placa" => $_POST['placacarro'],
                             "Motorista" => $_POST['motorista'],
                             "Origem" => $_POST['origem'],
                             "Destino" => $_POST['destino'],
                             "Km_percorrido" => $_POST['km'],
                             "Litros_gasto" => $_POST['combustivel'],
                             "Preco_combustivel" => $_POST['valorcombustivel']);
            if (fValida($valores)) {
                try {
                    $sql = "INSERT into dados_viagem (Modelo, Placa, Motorista, Origem, Destino, Km_percorrido, Listros_gasto, Preco_combustivel)
                            values (:Modelo, :Placa, :Motorista, :Origem, :Destino, :Km_percorrido, :Listros_gasto, :Preco_combustivel)";
                    $consulta = $conn->prepare($sql);
                    $consulta->execute($valores);
                    echo "<h2 class=\"alert alert-success\">Dados Salvos</h2><br>";
                    echo "Modelo do Carro".$valores['modelocarro']."<br>";
                    echo "Placa do Carro".$valores['placacarro']."<br>";
                    echo "Motorista".$valores['motorista']."<br>";
                    echo "Local de Origem".$valores['origem']."<br>";
                    echo "Local de Destino".$valores['destino']."<br>";
                    echo "KM Percorrido".$valores['km']."<br>";
                    echo "Combustível Gasto".$valores['combustivel']."<br>";
                    echo "Preço do Combustível".$valores['valorcombustivel']."<br>";

                }catch (error) {
                    echo "<h2 class=\"alert alert-danger\">Dados Não Salvos</h2><br>";
                }
            }
        }
    ?>
    <br>
    <input class="btn btn-info" type="button" value="Voltar" onclick="JavaScript:location.assign('/viagem/?pag=p_cadastro');window.clearTimeout();">
    </div>
</body>
<script language="JavaScript">
    setTimeout(() => {
        location.assign("/viagem/?pag=p_cadastro");
    }, 5000);
</script>
</html>
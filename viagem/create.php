<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Informações</title>
</head>
<body>
        <h4>Cadastro de Informações</h4>
        <br>
        <div id="dMsg"></div>
        <br>
        <form action="salvar.php" method="post" id="fCadastro" class="row g-3">
            <div class="col-md-4">
                <label class="form-label " for="modelocarro" >Modelo do Carro</label>
                <input class="form-control " type="text" placeholder="Modelo do Carro" name="modelocarro" id="modelocarro">
            </div>
            <div class="col-md-4">
                <label class="form-label" for="placacarro">Placa do Carro</label>
                <input class="form-control" type="text" placeholder="Placa do Carro" name="placacarro" id="placacarro">
            </div>
            <div class="col-md-4">
                <label class="form-label" for="motorista">Motorista</label>
                <input class="form-control" type="text" placeholder="Nome do Motorista" name="motorista" id="motorista">
            </div>
            <div class="col-md-4">
                <label class="form-label" for="origem">Local de Origem</label>
                <input class="form-control" type="text" placeholder="Local de Origem" name="origem" id="origem">
            </div>
            <div class="col-md-4">
                <label class="form-label" for="destino">Local de Destino</label>
                <input class="form-control" type="text" placeholder="Local de Destino" name="destino" id="destino">
            </div>
            <div class="col-md-4">
                <label class="form-label" for="km">KM Percorrido</label>
                <input class="form-control" type="text" placeholder="Em KM" name="km" id="km">
            </div>
            <div class="col-md-6">
                <label class="form-label" for="combustivel">Combustível Gasto</label>
                <input class="form-control" type="text" placeholder="Em Litros" name="combustivel" id="combustivel">
            </div>
            <div class="col-md-6">
                <label class="form-label" for="valorcombustivel">Preço do Combustível</label>
                <input class="form-control" type="text" placeholder="Em R$" name="valorcombustivel" id="valorcombustivel">
            </div>
            <div class="col-md-4">
                <input type="reset" id="bLimpar" value="Limpar" class="btn btn-outline-warning">&nbsp;| |&nbsp;
                <input type="submit" id="bSalvar" name="bGravar" value="Gravar" class="btn btn-outline-success">
            </div>
        </form>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script language="JavaScript" src="lib/funcoes.js"></script>

</html>
<?php
include_once('lib/conexao.php');

function option_estados() {
    $conn = $GLOBALS['conn'];
    $sql = "SELECT Uf, Nome FROM estado";
    $consulta = $conn->prepare($sql);
    $estados = $consulta->execute();
    while($r = $consulta->fetch()) {
        echo '<option value="'.$r['Uf'].'">'.$r['Nome'].'</option>';
    } 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Interessados - NewsLetter - DEVs-TI</title>
</head>
<body>
    <h1>INTERESSADOS - NewsLetter - DEVs-TI</h1>
    <br>
    <div id="dMsg"></div> 
    <br>
    <form id="fInteressados" action="salvar_interessados.php" method="post">
        <label for="iNome">Nome:</label>
        <input id="iNome" name="iNome" type="input" value="">
        <br>
        <label for="iEmail">e-mail:</label>
        <input id="iEmail" name="iEmail" type="input" value="">
        <br>
        <label for="iFone">fone:</label>
        <input id="iFone" name="iFone" type="input" value="" placeholder="(99) 99999-9999">
        <br>
        <label for="sEstado">Estado:</label>
        <select id="sEstado" name="sEstado"> 
            <option value="00">Selecionar</option>
            <?php option_estados(); ?>
        </select>
        <br>
        <label for="sCidade">Cidade:</label>
        <select id="sCidade" name="sCidade"> 
            <option value="00">Selecionar</option>
        </select>
        <br><br>
        <input id="bLimpar" type="reset" value="Limpar">&nbsp;|&nbsp;
        <input id="bSalvar" name="bGravar" type="submit" value="Gravar">
    </form>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script language="JavaScript" src="lib/funcoes.js"></script>
</html>

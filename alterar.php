<?php

include ("conexao.php");
$pessoa = selectIdPessoa($_POST["id"]);
?>
<link rel="styleheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<link rel="styleheet" type="text/css" href="css/style.css">
<meta charset="UTF-8">
<div class="container">
    <form name="dadosPessoa" action="conexao.php" method="post">
        <table>
            <tbody>
                <tr>
                    <td>Nome: </td>
                    <td><input type="text" name="nome" value="<?=$pessoa["nome"]?>" size="20"></td>
                </tr>
                <tr>
                    <td>Nascimento:</td>
                    <td><input type="date" name="nascimento" value="<?=$pessoa["nascimento"]?>"></td>
                </tr>
                <tr>
                    <td>Telefone:</td>
                    <td><input type="text" name="telefone" value="<?=$pessoa["telefone"]?>" size="20"></td>
                </tr>
                <tr>
                    <td>Endereço:</td>
                    <td><input type="text" name="endereco" value="<?=$pessoa["endereco"]?>" size="20"></td>
                </tr>
                <tr>
                    <td><input type="hideen" name="acao" value="alterar">
                    <input type="hideen" name="id" value="<?=$pessoa["id"]?>">
                    </td>
                    <td><input type="submit" name="Enviar" value="Enviar"></td>
                </tr>
            </tbody>
        </table>
    </form>
</div>
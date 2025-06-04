<!DOCTYPE html>

<?php include ("conexao.php");
    $grupo = selectAllPessoa();
?>

<html lang="pt-br">
<head>
    <meta charsert="UTF-8">
    <title>CRUD com PHP e MYSQL - INSERT</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<div class="container">
    <body>
     <div class="posicionarCabecalho">
     <br>
          <center><h1>Agenda Pessoal</h1></center>
          <br>
          <br>
      </div>
      <table border="1" class="table">
          <thead class="thead-light">
              <tr>
                  <th>Nome</th>
                  <th>Nascimento</th>
                  <th>Telefone</th>
                  <th>Endereço</th>
                  <th>Editar</th>
                  <th>Excluir</th>
              </tr>
          </thead>
          <tbody>
             <?php
                foreach($grupo as $pessoa) { ?>
 
                   <tr>
                       <th><?=$pessoa["nome"]?></th>
                       <th><?=formatoData($pessoa["nascimento"])?></th>
                       <th><?=$pessoa["telefone"]?></th>
                       <th><?=$pessoa["endereco"]?></th>
                       <th>
                           <form name="alterar" action="alterar.php" method="post">
                               <input type="hidden" name="id" value="<?=$pessoa["id"]?>">
                               <input type="submit" name="editar" value="Editar">
                           </form>
                       </th>
                       <th>
                           <form name="excluir" action="conexao.php" method="post">
                               <input type="hidden" name="id" value="<?=$pessoa["id"]?>">
                               <input type="hidden" name="acao" value="excluir">
                               <input type="submit" name="excluir" value="Excluir">
                           </form>
                       </th>
                   </tr>
                 <?php }
               ?>
           </tbody>
      </table>

      <br>
      <div class="text-center">
      <button type="button" ><a href="inserir.php">Adicionar pessoa</a></button>
      </div>
      <?php
      function formatoData($data){
          $array = explode("-",$data);
          $novaData = $array[2]."/".$array[1]."/".$array[0];
          return $novaData;
      }
      ?>
      </body>
      </div>
      </html>
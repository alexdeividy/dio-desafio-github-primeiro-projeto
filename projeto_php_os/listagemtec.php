<?php

include 'conexao.php';

$buscar_cadastros_tec = "SELECT * FROM tb_tecnicos";
$query_cadastros_tec = mysqli_query($connx, $buscar_cadastros_tec);

?>




<!doctype html>
<html lang="en">
  <head>
    <title>CADASTRO DE TECNICOS</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
<div class="container">
  <table class="table">
      <thead>
          <tr>
              <th>id</th>
              <th>Nome</th>
              <th>Email</th>
              <th>Telefone</th>
          </tr>
      </thead>
      <tbody>
        <?php
        while($receber_cadastros_tec = mysqli_fetch_array($query_cadastros_tec))
        {
            $id_tec = $receber_cadastros_tec['id_tec'];
            $nome_tec = $receber_cadastros_tec['nome_tec'];
            $email_tec = $receber_cadastros_tec['email_tec'];
            $telefone_tec = $receber_cadastros_tec['telefone_tec'];
        ?>

          <tr>
              <td scope="row"> <?php echo $id_tec; ?></td>
              <td><?php echo $nome_tec; ?></td>
              <td><?php echo $email_tec; ?></td>
              <td><?php echo $telefone_tec; ?></td>

              <td>            
                  <form action="editartec.php" method="post">
                    <input type="hidden" name="id_tec" value="<?php echo $id_tec; ?>">
                    <input type="text" name="nome_tec" value="<?php echo $nome_tec; ?>">
                    <input type="text" name="email_tec" value="<?php echo $email_tec; ?>">
                    <input type="text" name="telefone_tec" value="<?php echo $telefone_tec; ?>">
                    
                    <input type="submit" value="Editar" class="btn btn-danger">
                  </form>
              </td>

              <td>            
                  <form action="excluirtec.php" method="post">
                  <input type="hidden" name="id_tec" value="<?php echo $id_tec; ?>">
                  <input type="submit" value="Excluir" class="btn btn-danger">
                  </form>
              </td>
          </tr>


          <?php }; ?> <!--  parou o while -->

        <tr>
            <form action="cadastrotec.php" method="post">
                <td></td>
                <td> <input type="text" name="nome"> </td>
                <td> <input type="text" name="email"> </td>
                <td> <input type="text" name="telefone"> </td>
                <td> <input type="submit" value="Cadastro"> </td>
            </form>
        </tr>

      </tbody>
  </table>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
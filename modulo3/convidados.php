<?php include "conecao.php";?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js">
  function atualizar(nome, acompanhantes){
    document.getElementById("nome").setAttribute('value', "Teste");
    document.getElementById("acompanhante").setAttribute('value', "2");
  }
  </script>
  </head>



  <body>
   <div class="container">
    <div class="mt-4 p-5 bg-primary rounded text-center text-white">
       <h1>Lista Convidados</h1>
</div>
  <form class="row d-flex" action="#" method="GET">
  <div class="col-auto">
    <label for="staticEmail2">Nome:</label>
    <input type="text" class="form-control" id="nome" placeholder="Ex: José" name="nome">
  </div>
  <div class="col-auto">
    <label for="staticEmail2">Acompanhante:</label>
    <input type="numero" class="form-control" id="nome" placeholder="Ex: 1" name="acompanhante">
  </div>
  <div class="col-auto">
    </br><button type="submit" class="btn btn-primary mb-3">Salvar</button>
  </div>
</form>           
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome Convidados</th>
        <th>Quantidade de acompanhantes</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($resultado as $convidado) : ?>
      <tr>
        <td> <?php echo $convidado['id']?> </td>
        <td> <?php echo $convidado['nome_convidado']?> </td>
        <td> <?php echo $convidado['acompanhantes']?> </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
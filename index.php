<?php require_once "consultar_todos.php"; ?>
<?php require_once "template/cabecalho.php";  ?>

<div class="container">
  <h1>Produtos</h1>
  <hr>
  <div class="text-end">
    <a href="form.php" class="btn btn-success">
      Inserir produto
    </a>
  </div>

  <table class="table" id="myTable">
    <thead>
      <tr>
        <th scope="col">Descrição</th>
        <th scope="col">Peso</th>
        <th scope="col">Quantidade</th>
        <th scope="col">Valor</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($produtos as $produto){ ?>
        <tr>
          <td><?php echo $produto['descricao']; ?></td>
          <td><?php echo $produto['peso']; ?></td>
          <td><?php echo $produto['quantidade']; ?></td>
          <td><?php echo $produto['valor']; ?></td>
          <td>
            <a href="excluir.php?id=<?php echo $produto['codigo']; ?>" class="btn btn-danger"><i class="far fa-trash-alt"></i> Apagar</a>
            <a href="form.php?id=<?php echo $produto['codigo']; ?>" class="btn btn-primary"><i class="far fa-edit"></i> Atualizar</a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

<?php require_once "template/rodape.php";  ?>

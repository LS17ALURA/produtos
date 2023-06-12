
<?php require_once "consultar_por_id.php" ?>
<?php require_once "template/cabecalho.php";  ?>
<div class="container">
    <h1>Cadastro de Produto</h1>
    <hr>

    <form 
    action="<?php echo isset($produto) ? 'atualizar.php' : 'inserir.php' ?>" 
    method="post"
    enctype="multipart/form-data"
    >
       <label for="descricao" class="form-label">Descrição</label><br>
       <textarea  name="descricao" class="form-control" id="descricao"><?php echo $produto['descricao'] ?? ""; ?></textarea><br>
       <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $produto['codigo'] ?? ""; ?>"><br>

       <label for="peso" class="form-label">Peso</label><br>
       <input type="number" class="form-control" name="peso" id="peso" step="0.01" value="<?php echo $produto['peso'] ?? "0.00"; ?>"><br>

       <label for="quantidade" class="form-label">Quantidade</label><br>
       <input type="number" class="form-control" name="quantidade" id="quantidade" value="<?php echo $produto['quantidade'] ?? "0"; ?>"><br>

       <label for="valor" class="form-label">Valor</label><br>
       <input type="number" name="valor" id="valor" class="form-control" step="0.01" value="<?php echo $produto['valor'] ?? "0.00"; ?>"><br>

       <br>
       <button type="submit" class="btn btn-dark">Cadastrar</button>

    </form>
</div>
    <?php require_once "template/rodape.php";  ?>
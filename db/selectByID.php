<?php
include('conn.php');

$id = $_GET['id'];

$sql = "SELECT * FROM produto WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
?>

<div class="container-fluid">
  <form action="db/update.php" method="get">
    <input type="text" value="<?= $row["id"]?>" name="form-id" hidden>
    <div class="mb-3">
        <label for="form-nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="form-nome" name="form-nome" value="<?= $row["nome"]?>">
    </div>
    <div class="mb-3">
        <label for="form-descricao" class="form-label">Descrição</label>
        <input type="text" class="form-control" id="form-descricao" name="form-descricao" value="<?= $row["descricao"]?>">
    </div>
    <div class="mb-3">
        <label for="form-preco" class="form-label">Preço</label>
        <input type="number" class="form-control" id="form-preco" name="form-preco" value="<?= $row["preco"]?>">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Editar</button>
        <a href="index.php?p=eliminarProduto&id=<?= $row["id"]?>" class="btn btn-danger">Eliminar</a>
    </div>
  </form>
</div>

<?php 
} else {
  echo "0 results";
}
$conn->close();
?>
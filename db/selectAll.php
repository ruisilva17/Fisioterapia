<?php
include('conn.php');

$sql = "SELECT * FROM produto";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    /*echo "ID: " . $row["id"];
    echo " | Nome: " . $row["nome"];
    echo " | Descrição: " . $row["descricao"];
    echo " | Preço: " . $row["preco"] . "<br>";*/
?>
    <div class="row text-center p-1">
      <div class="col-2">
        <a href="index.php?p=dadosProduto&id=<?= $row["id"]?>" class="btn btn-primary">Selecionar</a>
      </div>
      <div class="col"><?= $row["nome"]?></div>
      <div class="col"><?= $row["descricao"]?></div>
      <div class="col"><?= $row["preco"]?></div>
    </div>
<?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<?php 
include('content/head.php');
include('content/header.php');
?>
  <main class="container p-3 rounded shadow "><center><h3>Contacto</h3></center>
<form action="email.php" method="get">
<div class="mb-3">
        <label for="form-name" class="form-label">Nome</label>*
        <input type="name" required class="form-control" id="form-name" name="form-name">
    </div>
    <div class="mb-3">
        <label for="form-email" class="form-label">Email</label>*
        <input type="email" required class="form-control" id="form-email" name="form-email">
    </div>
    <div class="mb-3">
        <label for="form-mensagem" class="form-label">Mensagem</label>*
        <textarea class="form-control" required name="form-mensagem" id="form-mensagem" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <button class="btn btn-primary" type="submit">Enviar</button>
    </div>
</form>
</main> 
<?php
if(isset($_GET['res'])){
    if($_GET['res'] == 'ok'){
        ?>
        <div class="alert alert-success" role="alert">
            Mensagem enviada com sucesso
        </div>
        <?php
    }else{
        ?>
        <div class="alert alert-danger" role="alert">
            Erro ao enviar a mensagem, tente novamente mais tarde
        </div>
        <?php
    }
}
?>
<?php include ('content/footer.php');?>
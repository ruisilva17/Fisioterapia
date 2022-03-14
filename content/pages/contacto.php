<h2>Contacto</h2>
<form action="email.php" method="get">
    <div class="mb-3">
        <label for="form-email" class="form-label">Email</label>
        <input type="email" class="form-control" id="form-email" name="form-email">
    </div>
    <div class="mb-3">
        <label for="form-mensagem" class="form-label">Mensagem</label>
        <textarea class="form-control" name="form-mensagem" id="form-mensagem" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <button class="btn btn-primary" type="submit">Enviar</button>
    </div>
</form>

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
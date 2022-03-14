<!-- div.container-fluid>div.row>div.col*2 -->
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h2>Galeria</h2>
        </div>
        <div class="col text-end">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Novo Produto
            </button>   
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="db/insert.php" method="get">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Novo Produto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="form-nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="form-nome" name="form-nome">
                </div>
                <div class="mb-3">
                    <label for="form-descricao" class="form-label">Descrição</label>
                    <input type="text" class="form-control" id="form-descricao" name="form-descricao">
                </div>
                <div class="mb-3">
                    <label for="form-preco" class="form-label">Preço</label>
                    <input type="number" class="form-control" id="form-preco" name="form-preco">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Gravar</button>
            </div>
        </form>
    </div>
  </div>
</div>


<!--div.container-fluid>div.row*2>div.col*4-->
<div class="container-fluid">
    <div class="row bg-primary text-white text-center">
        <div class="col-2"></div>
        <div class="col">NOME</div>
        <div class="col">DESCRIÇÃO</div>
        <div class="col">PREÇO</div>
    </div>
    <?php include('db/selectAll.php')?>
</div>
<div class="row">

    <h1 class="text-center text-light">
        Editar Tarefa
    </h1>
    <?php
    $tarefa = $_SESSION['retorno'] ?? '';
    unset($_SESSION['retorno']);
    ?>
    <form class="bg-light rounded-4 p-5" method="POST" action="./Tarefa/Routes/TarefaRoutes.php?rota=7">
        <div class="mb-3">

            <label for="id" class="form-label">
                ID
            </label>

            <input
                type="text"
                name="id"
                id="id"
                class="form-control"
                value="<?= $tarefa['id'] ?>" disabled>
            <input type="hidden" name="idHidden" value="<?= $tarefa['id'] ?>">

        </div>

        <div class="mb-3">

            <label for="titulo" class="form-label">
                Título
            </label>

            <input
                type="text"
                name="titulo"
                id="titulo"
                class="form-control"
                value="<?= $tarefa['titulo'] ?>">

        </div>       
   

        <div class="mb-3">

            <label for="descricao" class="form-label">
                Descrição
            </label>

            <textarea
                class="form-control"
                id="descricao"
                name="descricao"
                rows="3"
                ><?= $tarefa['descricao'] ?></textarea>

        </div>
        <div class="d-flex align-items-center justify-content-between gap-2">
            <a href="./Tarefa/Routes/TarefaRoutes.php?rota=2" class="btn btn-primary w-100">
                VOLTAR
            </a>
            <button type="submit" class="btn btn-success w-100">
                SALVAR
            </button>
        </div>
</form>
</div>
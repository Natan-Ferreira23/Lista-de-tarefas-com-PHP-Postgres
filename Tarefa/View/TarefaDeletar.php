<div class="row">

    <h1 class="text-center text-light">
        Excluir Tarefa
    </h1>
    <?php
    $tarefa = $_SESSION['retorno'] ?? '';
    unset($_SESSION['retorno']);
    ?>
    <div class="bg-light rounded-4 p-5">
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
                value="<?= $tarefa['titulo'] ?>" disabled>

        </div>
        <div class="mb-3">

            <label for="concluido" class="form-label">
                Concluido
            </label>

            <input
                type="text"
                name="concluido"
                id="concluido"
                class="form-control"
                value="<?= $tarefa['concluida'] == false ? "Não" : "Sim" ?>" disabled>

        </div>
        <div class="mb-3">

            <label for="dataCriacao" class="form-label">
                Data Criação
            </label>

            <input
                type="text"
                name="dataCriacao"
                id="dataCriacao"
                class="form-control"
                value="<?= substr($tarefa['created_at'], 0, 10) ?>" disabled>

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
                disabled><?= $tarefa['descricao'] ?></textarea>

        </div>
        <div class="d-flex align-items-center justify-content-between gap-2">
            <a href="./Tarefa/Routes/TarefaRoutes.php?rota=2" class="btn btn-primary w-100">
                VOLTAR
            </a>
            <a href="./Tarefa/Routes/TarefaRoutes.php?rota=5&id=<?= $tarefa['id'] ?>" class="btn btn-danger w-100">
                DELETAR
            </a>
        </div>
    </div
</div>
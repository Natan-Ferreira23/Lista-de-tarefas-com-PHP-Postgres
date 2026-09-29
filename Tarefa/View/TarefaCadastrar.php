<div class="row bg-">

        <h1 class="text-center text-light mb-2">
            Cadastrar Tarefa
        </h1>

        <form
            action="./Tarefa/Routes/TarefaRoutes.php?rota=3"
            method="POST"
            class="bg-light rounded-4 p-5">

            <div class="mb-3">

                <label for="titulo" class="form-label">
                    Título
                </label>

                <input
                    type="text"
                    name="titulo"
                    id="titulo"
                    class="form-control"
                    placeholder="Digite o título...">

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
                    placeholder="Digite a descrição..."></textarea>

            </div>
            <input type="hidden" name="rota"  value="3">
            <button
                type="submit"
                class="btn btn-primary w-100">
                Enviar
            </button>

        </form>

</div>
  

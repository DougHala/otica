<?php
require_once('layout/topo.php');
?>
    <div class="container">
        <div class="row">
            <form class="mb-6" method="post" action="cadastrar.php">
                <div>
                    <label class="form-label">Data</label>
                    <input type="date" class="form-control" id="data">
                </div>
                <div>
                    <label class="form-label">Tipo</label>
                    <select name="tipo" class="form-control">
                        <option value="1"> Entrada</option>
                        <option value="2"> Saida</option>
                    </select>
                </div>
                <div>
                    <label class="form-label">Descrição</label>
                    <textarea name="descricao" cols="30" rows="2" class="form-control">
                </textarea>
                </div>
                <div>
                    <label class="form-label"> Valor </label>
                    <input type="text" class="form-control" id="valor">
                </div>

                <button type="submit" class="btn btn-primary"> Cadastrar </button>
            </form>
        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.mask.min.js"></script>

    <script>
        $(document).ready(function () {
            document.getElementById('data').valueAsDate = new Date();
            $('#valor').mask('#.##0,00', {reverse: true});
        })

    </script>
<?php
require_once('layout/rodape.php.php');
?>
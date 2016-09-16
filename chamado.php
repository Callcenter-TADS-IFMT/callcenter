<?php include_once('cabecalho.php'); ?>

<div class="row">
    <div class="col-md-3 col-xs-12 col-lg-3">
        <?php include_once('sidebar.php'); ?>
    </div>

    <div class="col-md-9 col-xs-12 col-lg-3">

        <div class="container">

            <h1 style="font-size: 32">Chamado</h1>

            <form class="form-inline">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" style="width: 520px" class="form-control" id="tit" placeholder="Titulo">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <select style="width: 250px;align-items: flex-end" class="form-control" name="status" id="status">
                                <option value="Z" selected="selected">Status do Chamado</option>
                                <option value="E">Em andamento</option>
                                <option value="F">Fechado</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" style="width: 1024px" class="form-control" id="cli" placeholder="Relato do chamado">
                        </div>
                    </div>
                </div>







                <!--            <div class="form-group">
                                <label for="tit">Título</label></br>
                                <input type="text" size="40" class="form-control" id="tit" placeholder="Jane Doe">
                            </div>
                
                            <div class="form-group">
                                <label for="status">Status</label></br>
                                <select class="form-control" name="status" id="status">
                                    <option value="E">Em andamento</option>
                                    <option value="F">Fechado</option>
                                </select>
                            </div>
                
                            <div class="form-group">
                                <label for="cli">Cliente</label></br>
                                <input type="text" class="form-control" id="cli" placeholder="Teste">
                            </div>
                
                            <div class="form-group">
                                <label for="rel">Relato</label></br>
                                <input type="text" size="50" class="form-control" id="rel" placeholder="Relate aqui o relato do seu chamado!">
                            </div>-->
            </form>

            <h1 style="font-size: 32">Tramites</h1>



            <div class="principal">
                <form class="form-inline">



                    <table class="table table-striped table-bordered" >
                        </br>
                        <tr>
                            <td>Descrição</td>
                            <td>Responsável</td>
                            <td>Nome do Tecnico</td>
                        </tr>
                    </table>
                </form>
            </div>

        </div>
    </div>
</div>
<?php include_once('rodape.php'); ?>
<?php include_once('cabecalho.php'); ?>

<div class="row">
    <div class="col-md-3 col-xs-12 col-lg-3">
        <?php include_once('sidebar.php'); ?>
    </div>

    <div class="col-md-9 col-xs-12 col-lg-9">



            <h1 style="font-size: 32px">Chamado</h1>

            <form >

                <div class="row">

                        <div class="form-group col-md-6 col-xs-6">
                            <input type="text" class="form-control" id="tit" placeholder="Titulo">
                        </div>

                        <div class="form-group col-md-6 col-xs-6">
                            <select class="form-control" name="status" id="status">
                                <option value="Z" selected="selected">Status do Chamado</option>
                                <option value="E">Em andamento</option>
                                <option value="F">Fechado</option>
                            </select>
                        </div>

                </div>

                <div class="row">
                    <div class="form-group col-md-12 col-xs-12">
                        <div class="input-group col-md-12 col-xs-12 col-lg-12">
                              <span class="input-group-btn">
                                <button class="btn btn-default" data-toggle="modal" data-target="#myModal" type="button">
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>  Pesquisar
                                </button>
                              </span>
                            <input type="text" class="form-control" disabled id="cli" placeholder="Cliente">
                        </div><!-- /input-group -->
                    </div>


                </div>

                <div class="row">
                    <div class="col-md-12" style="margin-bottom: 10px">
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Relato do chamado"></textarea>
                        </div>
                    </div>
                </div>

            </form>

            <h1 style="font-size: 32px">Trâmites</h1>



            <div class="principal">


                    <table class="table table-striped table-bordered" >

                        <tr>
                            <td>Descrição</td>
                            <td>Responsável</td>
                            <td>Nome do Tecnico</td>
                        </tr>
                    </table>

            </div>

    </div>
</div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Selecione um Cliente</h4>
                </div>
                <div class="modal-body">
                    <select class="form-control" id="cliente" onchange="teste()">
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button id="botaoFechar" type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function teste() {
            var nomeCliente = ($('#cliente').val());
            alert(nomeCliente);
        }
    </script>
<?php include_once('rodape.php'); ?>
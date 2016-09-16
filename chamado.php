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
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <div class="form-group">
                            <input type="text" style="width: 618px" class="form-control" id="tit" placeholder="Titulo">
                        </div>
                    </div>
                    <div class="col-md-6" style="text-align: right;margin-bottom: 10px">
                        <div class="form-group">
                            <select style="width: 250px" class="form-control" name="status" id="status">
                                <option value="Z" selected="selected">Status do Chamado</option>
                                <option value="E">Em andamento</option>
                                <option value="F">Fechado</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-1" style="margin-bottom: 10px">
                        <div class="form-group">
                            <button type="button" class="fa fa-search" style="width: 65px;height: 35px" data-toggle="modal" data-target="#myModal"/>

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









                    </div>
                    <div class="col-md-11" style="text-align: left;margin-bottom: 10px">
                        <div class="form-group">
                            <input type="text" style="width: 520px" class="form-control" id="cli" placeholder="Cliente">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12" style="margin-bottom: 10px">
                        <div class="form-group">
                            <input type="text" style="width: 618px;height: 80px" class="form-control" id="rlt" placeholder="Relato do chamado">
                        </div>
                    </div>
                </div>

            </form>

            <h1 style="font-size: 32">Trâmites</h1>



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
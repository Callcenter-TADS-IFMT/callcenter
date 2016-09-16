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
                            <button type="button" class="fa fa-search" style="width: 65px;height: 35px" data-to/>
                        </div>
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
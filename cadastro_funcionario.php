<?php include_once('cabecalho.php'); ?>

<div class="row">
    <div class="col-md-2 col-xs-12 col-lg-2">
        <?php include_once('sidebar.php'); ?>
    </div>
    <div class="col-md-10 col-xs-12 col-lg-10">
          <h2>Cadastro Funcionários</h2>
    <div class="container">
        <div class="principal">
            <form method="Post" action="">
                <table class="table" style="width: 75%">
                      
                    
                <tr>
                    <td><input  placeholder="Nome do Funcionário" class="form-control" type="text" name="nome"/></td>
                    <td><input placeholder="Data de Admissão" class="form-control" type="" name="admissao"/></td>
                    <td><input placeholder="Função" class="form-control" type="text" name="funcao"/></td>
                </tr>
                
                <tr>
                  <td><input placeholder="Data de Nascimento" class="form-control" type="" name="data"/></td>
                  <td><input placeholder="Estado Civil" class="form-control" type="text" name="data"/></td>
                  <td><input placeholder="Endereço" class="form-control" type="text" name="endereco"/></td> 
                </tr>
                <tr>
                    
                    <td><input placeholder="Fone Residencial" class="form-control" type="" name="residencial"/></td>
                    <td><input placeholder="Celular"class="form-control" type="" name="celular"/></td>
                    <td><input placeholder="Contato Familiar"class="form-control" type=""  name="celular"/></td>
                    
                </tr>
                                        
                <tr>
                    <td><input class="btn btn-primary" type="submit" value="Salvar"/></td>
                </tr>
            </table>
                
                    
                   
                   
            </form>
        </div>
    </div> 
    </div>
    
</div>

<?php include_once('rodape.php'); ?>

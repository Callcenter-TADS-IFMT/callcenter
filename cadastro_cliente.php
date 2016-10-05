<?php include_once('cabecalho.php'); ?>

<div class="row">
    <div class="col-md-3 col-xs-12 col-lg-3">
        <?php include_once('sidebar.php'); ?>
    </div>
    <div class="col-md-9 col-xs-12 col-lg-9">
          <h2>Cadastro Cliente</h2>
    <div class="container">
        <div class="principal">
            <form method="Post" action="">
                <table class="table" style="width: 75%">
                      
                    
                <tr>
                    <td><input  placeholder="Nome do Cliente" class="form-control" type="text" name="nome"/></td>
                    <td><input placeholder="CPF" class="form-control" type="" name="cpf"/></td>
                    <td><input placeholder="Estado Civil" class="form-control" type="text" name="estado"/></td>
                </tr>
                
                <tr>
                  <td><input placeholder="Data de Nascimento" class="form-control" type="" name="data"/></td>
                  <td><input placeholder="Endereço" class="form-control" type="text" name="endereco"/></td> 
                  <td><input placeholder="Cidade" class="form-control" type="text" name="cidade"/></td>
                  
                </tr>
                <tr>
                    
                    <td><input placeholder="Fone Residencial" class="form-control" type="text" name="residencial"/></td>
                    <td><input placeholder="Celular"class="form-control" type="" name="celular"/></td>
                    <td><input placeholder="email"class="form-control" type="text"  name="email"/></td>
                    
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



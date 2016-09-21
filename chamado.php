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
                                    <style>
                                        .custom-combobox {
                                          position: relative;
                                          display: inline-block;
                                        }
                                        .custom-combobox-toggle {
                                          position: absolute;
                                          top: 0;
                                          bottom: 0;
                                          margin-left: -1px;
                                          padding: 0;
                                        }
                                        .custom-combobox-input {
                                          margin: 0;
                                          padding: 5px 10px;
                                        }
                                    </style>
                                    <script>
                                        $( function() {
                                            $.widget( "custom.combobox", {
                                              _create: function() {
                                                this.wrapper = $( "<span>" )
                                                  .addClass( "custom-combobox" )
                                                  .insertAfter( this.element );

                                                this.element.hide();
                                                this._createAutocomplete();
                                                this._createShowAllButton();
                                              },
                                                      
                                        _createAutocomplete: function() {
                                        var selected = this.element.children( ":selected" ),
                                          value = selected.val() ? selected.text() : "";

                                        this.input = $( "<input>" )
                                          .appendTo( this.wrapper )
                                          .val( value )
                                          .attr( "title", "" )
                                          .addClass( "custom-combobox-input ui-widget ui-widget-content ui-state-default ui-corner-left" )
                                          .autocomplete({
                                            delay: 0,
                                            minLength: 0,
                                            source: $.proxy( this, "_source" )
                                          })
                                          .tooltip({
                                            classes: {
                                              "ui-tooltip": "ui-state-highlight"
                                            }
                                          }); 
                                          
                                          this._on( this.input, {
                                                autocompleteselect: function( event, ui ) {
                                                  ui.item.option.selected = true;
                                                  this._trigger( "select", event, {
                                                    item: ui.item.option
                                                  });
                                                },

                                                autocompletechange: "_removeIfInvalid"
                                              });
                                            },
                                        
                                        _createShowAllButton: function() {
                                        var input = this.input,
                                          wasOpen = false;

                                        $( "<a>" )
                                          .attr( "tabIndex", -1 )
                                          .attr( "title", "Show All Items" )
                                          .tooltip()
                                          .appendTo( this.wrapper )
                                          .button({
                                            icons: {
                                              primary: "ui-icon-triangle-1-s"
                                            },
                                            text: false
                                          })
                                          .removeClass( "ui-corner-all" )
                                          .addClass( "custom-combobox-toggle ui-corner-right" )
                                          .on( "mousedown", function() {
                                            wasOpen = input.autocomplete( "widget" ).is( ":visible" );
                                          })
                                          .on( "click", function() {
                                            input.trigger( "focus" );

                                            // Close if already visible
                                            if ( wasOpen ) {
                                              return;
                                            }

                                            // Pass empty string as value to search for, displaying all results
                                            input.autocomplete( "search", "" );
                                          });
                                      },
                                              
                                      _source: function( request, response ) {
                                    var matcher = new RegExp( $.ui.autocomplete.escapeRegex(request.term), "i" );
                                    response( this.element.children( "option" ).map(function() {
                                      var text = $( this ).text();
                                      if ( this.value && ( !request.term || matcher.test(text) ) )
                                        return {
                                          label: text,
                                          value: text,
                                          option: this
                                        };
                                    }) );
                                  },

                                  _removeIfInvalid: function( event, ui ) {

                                    // Selected an item, nothing to do
                                    if ( ui.item ) {
                                      return;
                                    }

                                    // Search for a match (case-insensitive)
                                    var value = this.input.val(),
                                      valueLowerCase = value.toLowerCase(),
                                      valid = false;
                                    this.element.children( "option" ).each(function() {
                                      if ( $( this ).text().toLowerCase() === valueLowerCase ) {
                                        this.selected = valid = true;
                                        return false;
                                      }
                                    });
                                    
                                    // Found a match, nothing to do
                                            if ( valid ) {
                                              return;
                                            }

                                            // Remove invalid value
                                            this.input
                                              .val( "" )
                                              .attr( "title", value + " didn't match any item" )
                                              .tooltip( "open" );
                                            this.element.val( "" );
                                            this._delay(function() {
                                              this.input.tooltip( "close" ).attr( "title", "" );
                                            }, 2500 );
                                            this.input.autocomplete( "instance" ).term = "";
                                          },

                                          _destroy: function() {
                                            this.wrapper.remove();
                                            this.element.show();
                                          }
                                        });

                                        $( "#combobox" ).combobox();
                                        $( "#toggle" ).on( "click", function() {
                                          $( "#combobox" ).toggle();
                                        });
                                      } );
                                    </script>
                                    <div class="ui-widget">
                                        <label>Selecione o cliente desejado: </label>
                                        <select id="combobox" class="form-control" onchange="teste()">
                                          <option value="">Selecione o Cliente...</option>
                                          <option value="ActionScript">ActionScript</option>
                                          <option value="AppleScript">AppleScript</option>
                                          <option value="Julio Mamadeira">Julio Mamadeira</option>
                                          <option value="BASIC">BASIC</option>
                                          <option value="Cleiton Bixona">Cleiton Bixona</option>
                                          <option value="C++">C++</option>
                                          <option value="Clojure">Clojure</option>
                                          <option value="COBOL">COBOL</option>
                                          <option value="ColdFusion">ColdFusion</option>
                                          <option value="Erlang">Erlang</option>
                                          <option value="Fortran">Fortran</option>
                                          <option value="Groovy">Groovy</option>
                                          <option value="Haskell">Haskell</option>
                                          <option value="Java">Java</option>
                                          <option value="JavaScript">JavaScript</option>
                                          <option value="Lazaro Pouca Telha">Lazaro Pouca Telha</option>
                                          <option value="Perl">Perl</option>
                                          <option value="PHP">PHP</option>
                                          <option value="Python">Python</option>
                                          <option value="Ruby">Ruby</option>
                                          <option value="Scala">Scala</option>
                                          <option value="Scheme">Scheme</option>
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
                                var nomeCliente = ($('#combobox').val());
                                alert(nomeCliente);
                            }
                        </script>









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

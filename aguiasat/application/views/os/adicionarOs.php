<link rel="stylesheet" href="<?php echo base_url();?>assets/js/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" />


<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>assets/js/radios.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.validate.js"></script>
 
<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>assets/jquery/dist/jquery.maskMoney.min.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>assets/jquery/dist/jquery.mask.min.js"></script>

<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-tags"></i>
                </span>
                <h5>Cadastro de OS</h5>
            </div>

            <div class="widget-content nopadding">
                

                <div class="span12" id="divProdutosServicos" padding="1%" style=" margin-left: 0">
                    <ul class="nav nav-tabs">
                        <li class="active" id="tabDetalhes"><a href="#tab1" data-toggle="tab"><strong>Dados</strong></a></li>
                    </ul>

                    <div class="tab-content">

                            <div class="span12" id="divCadastrarOs">
                               
                                <?php if ($custom_error == true) { ?>
                                <div class="span12 alert alert-danger" id="divInfo" style="padding: 1%;">Dados incompletos, verifique os campos com asterisco ou se selecionou corretamente o associado e operador.</div>
                                <?php } ?>
                                
                            <form action="<?php echo current_url(); ?>" method="post" id="formOs">
                            
                            <div class="span12" style="padding: 1%;margin-left: 0">
       
                            <div class="span6" style="margin-top: 30px; margin-left: 0; margin-left: 2%"> 
                                <input style="width: 20px;" type="radio" class="radio" name="associacao" value="Associação Acontrans" id="associacao" checked>  
                                <label style="font-size: 15px; color: #2E363F; background-color:#F9F9F9 " class="label" for="defaultChecked" id="associacao" style="">Associação Acontrans</label>
                       
                                <input type="radio" class="radio radio-lg" name="associacao" style="margin-left: 30px; width: 20px;" value="Associação Acontrans/SP" id="associacao">
                                <label style="font-size: 15px; color: #2E363F; background-color:#F9F9F9 " class="label" for="defaultUnchecked" id="associacao">Associação Acontrans/SP</label>
                            </div>

                           </div> 

                            <div class="span12" style="padding: 1%;margin-left: 0">
       
                                <div class="span6">
                                    <label for="servico">Serviço<span class="required">*</span></label>
                                    <select class="span12" name="servico" id="servico" value="" >

                                        <option value="" disabled selected>-- Selecione um Serviço --</option>
                                        <option value="Reboque Leve">Reboque Leve</option>
                                        <option value="Reboque Utilitário">Reboque Utilitário</option>
                                        <option value="Reboque Pesado">Reboque Pesado</option>
                                        <option value="Reboque Extra Pesado">Reboque Extra Pesado</option>
                                        <option value="Chaveiro">Chaveiro</option>
                                        <option value="Recarga de Bateria">Recarga de Bateria</option>
                                    </select>
                                </div>

                                <div class="span6">
                                    <label for="motivo">Descrição do Serviço<span class="required">*</span></label>
                                    <input id="motivo" class="span12" type="text" name="motivo"  placeholder="Descrição do Serviço" autocomplete="off"/>
                                </div>


                            </div>    
                         

                                    <div class="span12"  style="padding: 1%; margin-left: 0" >
                                        <div class="span6">
                                            <label for="cliente">Associado<span class="required">*</span></label>
                                            <input id="cliente" class="span12" type="text" name="cliente" value=""  placeholder="Nome do associado"/>
                                            <input id="clientes_id" class="span12" type="hidden" name="clientes_id" value=""  />
                                        </div>
                                        <div class="span6">
                                            <label for="tecnico">Operador<span class="required">*</span></label>
                                            <input id="tecnico" class="span12" type="text" name="tecnico" value="" placeholder="Nome do operador" />
                                            <input id="usuarios_id" class="span12" type="hidden" name="usuarios_id" value=""  />
                                        </div>
                                    </div>
                                    <div class="span12" style="padding: 1%; margin-left: 0">
                                        <div class="span6">
                                            <label for="status">Status<span class="required">*</span></label>
                                            <select class="span12" name="status" id="status" value="">
                                                <option value="" disabled selected>-- Selecione um Status --</option>
                                                <option value="Orçamento">Orçamento</option>
                                                <option value="Aberto">Aberto</option>
                                                <option value="Em Andamento">Em Andamento</option>
                                                <option value="Finalizado">Finalizado</option>
                                                <option value="Cancelado">Cancelado</option>
                                            </select>
                                        </div>
                                        <div class="span3">
                                            <label for="dataInicial">Data Inicial<span class="required">*</span></label>
                                            <input id="dataInicial" class="span12 datepicker" type="text" name="dataInicial" value="<?php echo date('d/m/Y'); ?>"  />
                                        </div>
                                        <div class="span3">
                                            <label for="dataFinal">Data Final</label>
                                            <input id="dataFinal" class="span12 datepicker" type="text" name="dataFinal" value=""  autocomplete="off" action="" placeholder="dd/mm/aaaa" />
                                        </div>
                                    </div>


                                    <div class="span12" style="padding: 1%; margin-left: 0">

                                        <div class="span6">
                                            <label for="garantia">Marca/Modelo<span class="required">*</span></label>
                                            <input id="garantia" class="span12" type="text" name="garantia" value=""  autocomplete="off" action="" placeholder="Marca do veículo"/>
                                        </div>

                                        <div class="span6">
                                            <label for="descricaoProduto">Placa<span class="required">*</span></label>
                                            <input id="campoPlaca" class="span12" type="text" name="descricaoProduto" value=""  autocomplete="off" action="" placeholder="AAA-0000"/>

                                        </div>
                                        
                                    </div>    
                                    
                                    <div class="span12" style="padding: 1%; margin-left: 0">
                                        <div class="span6">
                                            <label for="observacoes">Contato no Local<span class="required">*</span></label>
                                            <input id="observacoes" class="span12" type="text" name="observacoes" value=""  autocomplete="off" action="" placeholder="Nome do contato"/>
                                        </div>
                                        
                                        <div class="span6">
                                            <label for="laudoTecnico">Telefone<span class="required">*</span></label>
                                            <input id="campoTelefone" class="span12 phone-ddd-mask" type="text" name="laudoTecnico" value=""  autocomplete="off" placeholder="(00) 00000-0000 / (00) 00000-0000"/>
                                        </div>
                                    </div>
                             
                <!--SERVIÇOS-->

                <div class="span12" id="divProdutosServicos" style=" margin-left: 0">
                    <ul class="nav nav-tabs">
                        <li class="active" id="tabDetalhes"><a href="#tab1" data-toggle="tab"><strong>Serviços</strong></a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1"> 

                                        
                                    <div class="span12"  style="padding: 1%; margin-left: 0" >
                                        <div class="span6">
                                            <label for="endOrigem">Endereço de Origem<span class="required">*</span></label>
                                            <input id="endOrigem" class="span12" type="text" name="endOrigem" autocomplete="off" action="" value=""/>
                                        </div>
                                       

                                        <div class="span6">
                                            <label for="cidade">Cidade<span class="required">*</span></label>
                                            <input id="cidade" class="span12" type="text" name="cidade" autocomplete="off" action="" value=""/>
                                        </div>
                                    </div>    

                                    <div class="span12"  style="padding: 1%; margin-left: 0" >
                                        <div class="span6">
                                            <label for="endDestino">Endereço de Destino<span class="required">*</span></label>
                                            <input id="endDestino" class="span12" type="text" name="endDestino" autocomplete="off" action="" value=""/>
                                        </div>
                                        

                                        <div class="span6">
                                            <label for="cidadeDes">Cidade<span class="required">*</span></label>
                                            <input id="cidadeDes" class="span12" type="text" name="cidadeDes" autocomplete="off" action="" value=""/>
                                        </div>
                                    </div>    

                                    <div class="span12"  style="padding: 1%; margin-left: 0" >
                                        
                                        <div class="span6">
                                        <label for="prestador">Prestador<span class="required">*</span></label>
                                            <input id="prestador" class="span12" type="text" name="prestador" value="" />
                                        </div>    

                                        <div class="span3">
                                            <label for="nomeP">Nome<span class="required">*</span></label>
                                            <input id="nomeP" class="span12" type="text" name="nomeP"  autocomplete="off" action="" value=""/>
                                        </div>

                                        <div class="span3">
                                            <label for="telP">Telefone<span class="required">*</span></label>
                                            <input id="telP" class="span12 phone-ddd-mask" type="text" name="telP" autocomplete="off" placeholder="(00) 00000-0000"/>
                                        </div>
                                    </div>    

                                    <div class="span12"  style="padding: 1%; margin-left: 0" >
                                        <div class="span3">
                                            <label for="totKM">Total KM<span class="required">*</span></label>
                                            <input id="totKM" class="span12" type="text" name="totKM" autocomplete="off"/>
                                        </div>
                                        <div class="span3">
                                            <label for="valSaida">Valor Saida<span class="required">*</span></label>
                                            <input id="currency1" class="span12" type="text" name="valSaida"  autocomplete="off" data-affixes-stay="true" data-prefix="R$ " data-thousands="." data-decimal="," placeholder="R$0,00" />
                                        </div>

                                        <div class="span3">
                                            <label for="valKM">Valor KM<span class="required">*</span></label>
                                            <input id="currency2" class="span12" type="text" name="valKM" autocomplete="off" data-affixes-stay="true" data-prefix="R$ " data-thousands="." data-decimal="," placeholder="R$0,00" />
                                        </div>

                                        <div class="span3">
                                            <label for="valTot">Valor Total<span class="required">*</span></label>
                                            <input id="currency3" class="span12" type="text" name="valTot" autocomplete="off" data-affixes-stay="true" data-prefix="R$ " data-thousands="." data-decimal="," placeholder="R$0,00"/>
                                        </div>
                                    </div>    
                                        
                                    <div class="span12" style="padding: 1%; margin-left: 0">
                                        
                                        <div class="span3">
                                            <label for="ht">H.T.</label>
                                            <input id="ht" class="span12" type="text" name="ht" autocomplete="off" placeholder="Horas Trabalhadas" />
                                        </div>

                                        <div class="span3">
                                            <label for="hp">H.P.</label>
                                            <input id="hp" class="span12" type="text" name="hp" autocomplete="off" placeholder="Horas Paradas"/>
                                        </div>

                                    <div class="span1">  
                                    <label for="km">Exc.</label>   
                                            <input type="checkbox" name="check-categoria" class="span7" onclick="document.getElementById('categoria').disabled = !this.checked;document.getElementById('currency4').disabled = !this.checked" style="margin: auto;" />
                                    </div>        
                                    <div class="span2">  
                                            <label for="km">KM</label>            
                                            <input type="text" class="span12" name="km" id="categoria" size="40" disabled="disabled"/>
                                    </div>       
                                    <div class="span3"> 
                                            <label for="valor">Valor</label>
                                            <input type="text" class="span12" name="valor" id="currency4" size="40" disabled="disabled" data-affixes-stay="true" data-prefix="R$ " data-thousands="." data-decimal="," placeholder="R$0,00"/> 
                                    </div>
                                </div> 

                                <div class="span12" style="padding: 1%; margin-left: 0">

                                        <div class="span6">
                                            <label for="formaPagto">Forma de Pagamento<span class="required">*</span></label>
                                            <select class="span12" name="formaPagto" id="formaPagto" value="">
                                                <option value="" disabled selected>-- Selecione uma Forma de Pagamento --</option>
                                                <option value="Pagamento para 7 dias">Pagamento para 7 dias</option>
                                                <option value="Pagamento para 15 dias">Pagamento para 15 dias</option>
                                                <option value="Pagamento para 20 dias">Pagamento para 20 dias</option>
                                                <option value="Parcelado 2x - 10/20 dias">Parcelado 2x - 10/20 dias</option>
                                                <option value="Parcelado 2x - 15/30 dias">Parcelado 2x - 15/30 dias</option>
                                                <option value="Parcelado 2x - 20/40 dias">Parcelado 2x - 20/40 dias</option>
                                                <option value="Parcelado 3x - 15/30/45 dias">Parcelado 3x - 15/30/45 dias</option>
                                                <option value="Parcelado 4x - 15/30/45/60 dias">Parcelado 4x - 15/30/45/60 dias</option>
                                                <option value="Pagamento via transferência bancária">Pagamento via transferência bancária</option>
                                                <option value="Reembolso">Reembolso</option>
                                            </select>
                                        </div>                                     

                                        <div class="span6">
                                            <label for="pedagio">Pedágio</label>
                                            <input id="currency5" class="span12" type="text" name="pedagio"  autocomplete="off" data-affixes-stay="true" data-prefix="R$ " data-thousands="." data-decimal="," placeholder="R$0,00" />
                                        </div>
                                </div>        
   
                                <div class="span12" style="padding: 1%; margin-left: 0">
                                    <div class="span12">
                                            <label for="Obs">Observações</label>
                                            <input id="Obs" class="span12" type="text" name="Obs" autocomplete="off" />
                                        </div>
                                </div>    

                          
                                    <div class="span12" style="padding: 1%; margin-left: 0">
                                        <div class="span6 offset3" style="text-align: center">
                                            <button class="btn btn-success" id="btnContinuar"><i class="icon-share-alt icon-white"></i> Continuar</button>
                                            <a href="<?php echo base_url() ?>index.php/os" class="btn"><i class="icon-arrow-left"></i> Voltar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>                                                                             



<script type="text/javascript">
$(function() {
    $('#currency, #currency1, #currency2, #currency3, #currency4, #currency5').maskMoney();
});

jQuery(function($){
$("#campoData").mask("99/99/9999");
$("#campoTelefone").mask("(99) 99999-9999 / (99) 99999-9999");
$("#campoTelefone1").mask("(99) 99999-9999");
$("#campoPlaca").mask("AAA-9999");
});

$(document).ready(function(){

      $("#cliente").autocomplete({
            source: "<?php echo base_url(); ?>index.php/os/autoCompleteCliente",
            minLength: 1,
            select: function( event, ui ) {

                 $("#clientes_id").val(ui.item.id);
                

            }
      });

      $("#prestador").autocomplete({
            source: "<?php echo base_url(); ?>index.php/os/autoCompletePrestador",
            minLength: 1,
            select: function( event, ui ) {

                 $("#prestador").val(ui.item.id), 
                 $("#nomeP").val(ui.item.nomeP);
                 $("#telP").val(ui.item.telP);
            }
      });

      $("#tecnico").autocomplete({
            source: "<?php echo base_url(); ?>index.php/os/autoCompleteUsuario",
            minLength: 1,
            select: function( event, ui ) {

                 $("#usuarios_id").val(ui.item.id);


            }
      });

      $("#formOs").validate({
          rules:{
             cliente: {required:true},
             tecnico: {required:true},
             dataInicial: {required:true},
             servico: {required:true},
             motivo: {required:true},
             status: {required:true},
             descricaoProduto: {required:true},
             garantia: {required:true},
             
             observacoes: {required:true},
             laudoTecnico: {required:true},
             associacao: {required:true},
             servico: {required:true},
             endOrigem: {required:true},
             
             cidade: {required:true},
             endDestino: {required:true},
             
             cidadeDes: {required:true},
             prestador: {required:true},
             nomeP: {required:true},
             telP: {required:true},
             totKM: {required:true},
             //valSaida: {required:true},
             //valKM: {required:true},
             valTot: {required:true},

             formaPagto: {required:true}
          },
          messages:{
             cliente: {required: 'Campo Requerido.'},
             tecnico: {required: 'Campo Requerido.'},
             dataInicial: {required: 'Campo Requerido.'},
             servico: {required: 'Campo Requerido.'},
             motivo: {required: 'Campo Requerido.'},
             status: {required: 'Campo Requerido.'},
             descricaoProduto: {required: 'Campo Requerido.'},
             
             garantia: {required: 'Campo Requerido.'},
             observacoes: {required: 'Campo Requerido.'},
             laudoTecnico: {required: 'Campo Requerido.'},
             associacao: {required: 'Campo Requerido.'},
             servico: {required: 'Campo Requerido.'},
             endOrigem: {required: 'Campo Requerido.'},
             
             cidade: {required: 'Campo Requerido.'},
             endDestino: {required: 'Campo Requerido.'},
             
             cidadeDes: {required: 'Campo Requerido.'},
             prestador: {required: 'Campo Requerido.'},
             nomeP: {required: 'Campo Requerido.'},
             telP: {required: 'Campo Requerido.'},
             totKM: {required: 'Campo Requerido.'},
             //valSaida: {required: 'Campo Requerido.'},
             //valKM: {required: 'Campo Requerido.'},
             valTot: {required: 'Campo Requerido.'},
             formaPagto: {required: 'Campo Requerido.'}

          },

            errorClass: "help-inline",
            errorElement: "span",
            highlight:function(element, errorClass, validClass) {
                $(element).parents('.control-group').addClass('error');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).parents('.control-group').removeClass('error');
                $(element).parents('.control-group').addClass('success');
            }
       });

    $(".datepicker" ).datepicker({ dateFormat: 'dd/mm/yy' });
   
});

function EnableDisableTextBox(quant_a0) {
  var txtquant_a0 = document.getElementById("quant_a0");
   txtquant_a0.disabled = quant_a0.checked ? false : true;
  if (!txtquant_a0.disabled) {
    txtquant_a0.focus();
  }


}

</script>


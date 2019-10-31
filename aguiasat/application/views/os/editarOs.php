
<link rel="stylesheet" href="<?php echo base_url();?>assets/js/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css" />
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.validate.js"></script>
<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-tags"></i>
                </span>
                <h5>Editar OS</h5>
            </div>
            <div class="widget-content nopadding">


                <div class="span12" id="divProdutosServicos" style=" margin-left: 0">
                    <ul class="nav nav-tabs">
                        <li class="active" id="tabDetalhes"><a href="#tab1" data-toggle="tab"><strong>Detalhes da OS</strong></a></li>
                        <!--li id="tabProdutos"><a href="#tab2" data-toggle="tab">Produtos</a></li-->
                        <!--li id="tabServicos"><a href="#tab3" data-toggle="tab"><strong>Serviços</strong></a></li-->
                        <li id="tabAnexos"><a href="#tab4" data-toggle="tab"><strong>Anexos</strong></a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">

                            <div class="span12" id="divCadastrarOs">
                                
                                <form action="<?php echo current_url(); ?>" method="post" id="formOs">
                                    <?php echo form_hidden('idOs', $result->idOs) ?>            
                                    
                                <div class="span12" style="padding: 1%; margin-left: 0">
                                    <div class="span6" style="margin-left: 0px;">
                                        <h4><?php echo $result->associacao ?></h4>
                                    </div>
                                    <div class="span6" style="margin-left: 25px;"> 
                                        <h4>#Protocolo: <?php echo $result->idOs ?></h4>
                                    </div> 
                                </div>     

                                <div class="span12" style="padding: 1%;margin-left: 0">
               
                                    <div class="span6" style="margin-top: 30px; margin-left: 0; margin-left: 0%"> 
                                        <input style="width: 20px;" type="radio" class="radio" name="associacao" id="associacao" value="Associação Acontrans"
                                        <?php echo ($result->associacao == "Associação Acontrans") ? "checked" : null; ?> />  
                                        <label style="font-size: 15px; color: #2E363F; background-color:#EEEEEE" class="label" for="defaultChecked" id="associacao" style="">Associação Acontrans</label>
                               
                                        <input type="radio" class="radio radio-lg" name="associacao" style="margin-left: 30px; width: 20px;" id="associacao" value="Associação Acontrans/SP"
                                        <?php echo ($result->associacao == "Associação Acontrans/SP")? "checked" : null; ?> />
                                        <label style="font-size: 15px; color: #2E363F; background-color:#EEEEEE" class="label" for="defaultUnchecked" id="associacao">Associação Acontrans/SP</label>
                                    </div> 
                                </div>   

                                    <div class="span12" style="padding: 1%; margin-left: 0">
                                        

                                        
                                        <div class="span6" style="margin-left: 0%">
                                            <label for="cliente">Associado</label>
                                            <input id="cliente" class="span12" type="text" name="cliente" value="<?php echo $result->nomeCliente ?>"  />
                                            <input id="clientes_id" class="span12" type="hidden" name="clientes_id" value="<?php echo $result->clientes_id ?>"  />
                                            <input id="valorTotal" type="hidden" name="valorTotal" value=""  />
                                        </div>
                                        <div class="span6">
                                            <label for="tecnico">Operador</label>
                                            <input id="tecnico" class="span12" type="text" name="tecnico" value="<?php echo $result->nome ?>"  />
                                            <input id="usuarios_id" class="span12" type="hidden" name="usuarios_id" value="<?php echo $result->usuarios_id ?>"  />
                                        </div>
                                    </div>
                                    <div class="span12" style="padding: 1%; margin-left: 0">
                                        <div class="span6">
                                            <label for="status">Status</label>
                                            <select class="span12" name="status" id="status" value="">
                                                <option <?php if ($result->status == 'Orçamento') {  echo 'selected'; } ?> value="Orçamento">Orçamento</option>
                                                <option <?php if ($result->status == 'Aberto') { echo 'selected'; } ?> value="Aberto">Aberto</option>
                                                <option <?php if ($result->status == 'Faturado') { echo 'selected'; } ?> value="Faturado">Faturado</option>
                                                <option <?php if ($result->status == 'Em Andamento') { echo 'selected'; } ?> value="Em Andamento">Em Andamento</option>
                                                <option <?php if ($result->status == 'Finalizado') { echo 'selected'; } ?> value="Finalizado">Finalizado</option>
                                                <option <?php if ($result->status == 'Cancelado') { echo 'selected'; } ?> value="Cancelado">Cancelado</option>
                                            </select>
                                        </div>
                                        <div class="span3">
                                            <label for="dataInicial">Data Inicial</label>
                                            <input id="dataInicial" class="span12 datepicker" type="text" name="dataInicial" value="<?php echo date('d/m/Y', strtotime($result->dataInicial)); ?>"  />
                                        </div>
                                        <div class="span3">
                                            <label for="dataFinal">Data Final</label>
                                            <input id="dataFinal" class="span12 datepicker" type="text" name="dataFinal" value="<?php echo date('d/m/Y', strtotime($result->dataFinal)); ?>"  />
                                        </div>
                                        
                                    <div class="span12" style=" margin-left: 0">

                                        <div class="span6">
                                            <label for="garantia">Marca/Modelo<span class="required">*</span></label>
                                            <input id="garantia" class="span12" type="text" name="garantia"  autocomplete="off" value="<?php echo $result->garantia?>"/>
                                        </div>
                                       
                                        <div class="span6">
                                            <label for="descricaoProduto">Placa</label>
                                            <input class="span12" name="descricaoProduto" id="descricaoProduto" type="text" autocomplete="off" action="" value="<?php echo $result->descricaoProduto?>"/>
                                        </div>
                                       
                                    </div>
                                    
                                    <div class="span12" style=" margin-left: 0">
                                        <div class="span6">
                                            <label for="observacoes">Contato no Local</label>
                                            <input class="span12" name="observacoes" id="observacoes" type="text" autocomplete="off" action="" value="<?php echo $result->observacoes ?>"/>
                                        </div>
                                        
                                        <div class="span6">
                                            <label for="laudoTecnico">Telefone</label>
                                            <input class="span12" name="laudoTecnico" id="laudoTecnico" type="text" autocomplete="off" action="" value="<?php echo $result->laudoTecnico ?>"/>
                                        </div>
                                    </div>
                                    
                <!--SERVIÇOS-->

                <div class="span12" id="divProdutosServicos" style=" margin-left: 0">
                    <ul class="nav nav-tabs">
                        <li class="active" id="tabDetalhes"><a href="#tab1" data-toggle="tab"><strong>Serviços</strong></a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">

                                    <div class="span12"  style="padding: ; margin-left: 0" >
                                        <div class="span6">
                                            <label for="servico">Serviço</label>
                                            <input id="servico" class="span12" type="text" name="servico"  autocomplete="off" value="<?php echo $result->servico ?>" />
                                        </div>

                                        <div class="span6">
                                            <label for="motivo">Descrição do Serviço</label>
                                            <input id="motivo" class="span12" type="text" name="motivo"  autocomplete="off" value="<?php echo $result->motivo ?>" />
                                        </div>
                                    </div> 

                                    <div class="span12"  style="padding: ; margin-left: 0" >
                                        <div class="span6">
                                            <label for="endOrigem">Endereço de Origem</label>
                                            <input id="endOrigem" class="span12" type="text" name="endOrigem" autocomplete="off" action="" value="<?php echo $result->endOrigem ?>"/>
                                        </div>
                                    

                                        <div class="span6">
                                            <label for="cidade">Cidade</label>
                                            <input id="cidade" class="span12" type="text" name="cidade" autocomplete="off" action="" value="<?php echo $result->cidade ?>"/>
                                        </div>
                                    </div>

                                    <div class="span12"  style="padding: ; margin-left: 0" >
                                        <div class="span6">
                                            <label for="endDestino">Endereço de Destino</label>
                                            <input id="endDestino" class="span12" type="text" name="endDestino" autocomplete="off" action="" value="<?php echo $result->endDestino ?>"/>
                                        </div>

                                        <div class="span6">
                                            <label for="cidadeDes">Cidade</label>
                                            <input id="cidadeDes" class="span12" type="text" name="cidadeDes" autocomplete="off" action="" value="<?php echo $result->cidadeDes ?>"/>
                                        </div>
                                    </div>

                                    <div class="span12"  style="padding: ; margin-left: 0" >
                                        <div class="span6">
                                            <label for="prestador">Prestador</label>
                                            <input id="prestador" class="span12" type="text" name="prestador" autocomplete="off" action="" value="<?php echo $result->prestador ?>"/>
                                        </div>
                                    
                                        <div class="span3">
                                            <label for="nomeP">Nome</label>
                                            <input id="nomeP" class="span12" type="text" name="nomeP"  autocomplete="off" action="" value="<?php echo $result->nomeP ?>"/>
                                        </div>

                                        <div class="span3">
                                            <label for="telP">Telefone</label>
                                            <input id="telP" class="span12" type="text" name="telP" autocomplete="off" action="" value="<?php echo $result->telP ?>"/>
                                        </div>
                                    </div>
                                    
                                    <div class="span12"  style="padding: ; margin-left: 0" >
                                        <div class="span3">
                                            <label for="totKM">Total KM</label>
                                            <input id="currency" class="span12" type="text" name="totKM" autocomplete="off" value="<?php echo $result->totKM ?>" />
                                        </div>
                                        <div class="span3">
                                            <label for="valSaida">Valor Saida</label>
                                            <input id="currency1" class="span12" type="text" name="valSaida"  autocomplete="off" value="<?php echo $result->valSaida ?>"/>
                                        </div>

                                        <div class="span3">
                                            <label for="valKM">Valor KM</label>
                                            <input id="currency2" class="span12" type="text" name="valKM" autocomplete="off" value="<?php echo $result->valKM ?>"/>
                                        </div>

                                        <div class="span3">
                                            <label for="valTot">Valor Total</label>
                                            <input id="currency3" class="span12" type="text" name="valTot" autocomplete="off" value="<?php echo $result->valTot ?>"/>
                                        </div>
                                    </div>  

                                    <div class="span12"  style="padding: ; margin-left: 0" >
                                        <div class="span3">
                                            <label for="ht">H.T.</label>
                                            <input id="ht" class="span12" type="text" name="ht" autocomplete="off" value="<?php echo $result->ht?>" />
                                        </div>

                                        <div class="span3">
                                            <label for="hp">H.P.</label>
                                            <input id="hp" class="span12" type="text" name="hp" autocomplete="off" value="<?php echo $result->hp?>"/>
                                        </div>

                                    
                                        <div class="span3">
                                            <label for="km">KM Excedente</label>
                                            <input id="km" class="span12" type="text" name="km"  autocomplete="off" action="" value="<?php echo $result->km?>"/>
                                        </div>

                                        <div class="span3">
                                            <label for="valor">Valor Excedente</label>
                                            <input id="valor" class="span12" type="text" name="valor" autocomplete="off" action="" value="<?php echo $result->valor ?>"/>
                                        </div>
                                        <div class="span12" style=" margin-left: 0">

                                          <div class="span6">
                                            <label for="formaPagto">Forma de Pagamento<span class="required">*</span></label>
                                            <select class="span12" name="formaPagto" id="formaPagto" value="">
                                                <option value="" disabled selected>-- Selecione uma Forma de Pagamento --</option>
                                                <option <?php if ($result->formaPagto == 'Pagamento para 7 dias') {  echo 'selected'; } ?> value="Pagamento para 7 dias">Pagamento para 7 dias</option>
                                                <option <?php if ($result->formaPagto == 'Pagamento para 15 dias') {  echo 'selected'; } ?> value="Pagamento para 15 dias">Pagamento para 15 dias</option>
                                                <option <?php if ($result->formaPagto == 'Pagamento para 20 dias') {  echo 'selected'; } ?> value="Pagamento para 20 dias">Pagamento para 20 dias</option>
                                                <option <?php if ($result->formaPagto == 'Parcelado 2x - 10/20 dias') {  echo 'selected'; } ?> value="Parcelado 2x - 10/20 dias">Parcelado 2x - 10/20 dias</option>
                                                <option <?php if ($result->formaPagto == 'Parcelado 2x - 15/30 dias') {  echo 'selected'; } ?> value="Parcelado 2x - 15/30 dias">Parcelado 2x - 15/30 dias</option>
                                                <option <?php if ($result->formaPagto == 'Parcelado 2x - 20/40 dias') {  echo 'selected'; } ?> value="Parcelado 2x - 20/40 dias">Parcelado 2x - 20/40 dias</option>
                                                <option <?php if ($result->formaPagto == 'Parcelado 3x - 15/30/45 dias') {  echo 'selected'; } ?> value="Parcelado 3x - 15/30/45 dias">Parcelado 3x - 15/30/45 dias</option>
                                                <option <?php if ($result->formaPagto == 'Parcelado 4x - 15/30/45/60 dias') {  echo 'selected'; } ?> value="Parcelado 4x - 15/30/45/60 dias">Parcelado 4x - 15/30/45/60 dias</option>
                                                <option <?php if ($result->formaPagto == 'Pagamento via transferência bancária') {  echo 'selected'; } ?> value="Pagamento via transferência bancária">Pagamento via transferência bancária</option>
                                                <option <?php if ($result->formaPagto == 'Reembolso') {  echo 'selected'; } ?> value="Reembolso">Reembolso</option>

                                            </select>
                                        </div>

                                            <div class="span6">
                                                <label for="pedagio">Pedágio</label>
                                                <input id="pedagio" class="span12" type="text" name="pedagio" autocomplete="off" rows="2" value="<?php echo $result->pedagio?>" />
                                            </div>
                                        </div>

                                    </div> 

                                    <div class="span12" style=" margin-left: 0">
                                        <div class="span12">
                                            <label for="Obs">Observações</label>
                                            <input id="Obs" class="span12" type="text" name="Obs" autocomplete="off" rows="2" value="<?php echo $result->Obs?>" />
                                        </div>
                                    </div>    

                                    <div class="span12" style="padding: 1%; margin-left: 0">
                                        <div class="span6 offset3" style="text-align: center">
                                            <?php if ($result->faturado == 0) { ?>
                                                <!--modal-faturar-->
                                                <a href="#" id="btn-faturar" role="button" data-toggle="modal" class="btn btn-success"><i class="icon-file"></i> Faturar</a>
                                            <?php } ?>
                                            <button class="btn btn-primary" id="btnContinuar"><i class="icon-white icon-ok"></i> Alterar</button>
                                            <a href="<?php echo base_url() ?>index.php/os/visualizar/<?php echo $result->idOs; ?>" class="btn btn-inverse"><i class="icon-eye-open"></i> Visualizar OS</a>
                                            <a href="<?php echo base_url() ?>index.php/os" class="btn"><i class="icon-arrow-left"></i> Voltar</a>
                                        </div>
                                    </div>
                                </div>
                               </div>
                              </div>
                              </div> 
                            </form>
                        </div>
                    </div>    



                        <!--Anexos-->
                        <div class="tab-pane" id="tab4">
                            <div class="span12" style="padding: 1%; margin-left: 0">
                                <div class="span12 well" style="padding: 1%; margin-left: 0" id="form-anexos">
                                    <form id="formAnexos" enctype="multipart/form-data" action="javascript:;" accept-charset="utf-8"s method="post">
                                    <div class="span10">
                                
                                        <input type="hidden" name="idOsServico" id="idOsServico" value="<?php echo $result->idOs?>" />
                                        <label for="">Anexo</label>
                                        <input type="file" class="span12" name="userfile[]" multiple="multiple" size="20" />
                                    </div>
                                    <div class="span2">
                                        <label for="">.</label>
                                        <button class="btn btn-success span12"><i class="icon-white icon-plus"></i> Anexar</button>
                                    </div>
                                    </form>
                                </div>
                
                                <div class="span12" id="divAnexos" style="margin-left: 0">
                                    <?php
                                    $cont = 1;
                                    $flag = 5;
                                    foreach ($anexos as $a) {

                                        if ($a->thumb == null) {
                                            $thumb = base_url().'assets/img/icon-file.png';
                                            $link = base_url().'assets/img/icon-file.png';
                                        } else {
                                            $thumb = base_url().'assets/anexos/thumbs/'.$a->thumb;
                                            $link = $a->url.$a->anexo;
                                        }

                                        if ($cont == $flag) {
                                            echo '<div style="margin-left: 0" class="span3"><a href="#modal-anexo" imagem="'.$a->idAnexos.'" link="'.$link.'" role="button" class="btn anexo" data-toggle="modal"><img src="'.$thumb.'" alt=""></a></div>';
                                            $flag += 4;
                                        } else {
                                            echo '<div class="span3"><a href="#modal-anexo" imagem="'.$a->idAnexos.'" link="'.$link.'" role="button" class="btn anexo" data-toggle="modal"><img src="'.$thumb.'" alt=""><p align="center">'. $a->anexo .'</p></a></div>';
                                        }
                                        $cont ++;
                                    } ?>
                                </div>

                            </div>
                        </div>
                


                    </div>

                </div>




        </div>

    </div>
</div>
</div>




 
<!-- Modal visualizar anexo -->
<div id="modal-anexo" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Visualizar Anexo</h3>
  </div>
  <div class="modal-body">
    <div class="span12" id="div-visualizar-anexo" style="text-align: center">
        <div class='progress progress-info progress-striped active'><div class='bar' style='width: 100%'></div></div>
    </div>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Fechar</button>
    <a href="" id-imagem="" class="btn btn-inverse" id="download">Download</a>
    <a href="" link="" class="btn btn-danger" id="excluir-anexo">Excluir Anexo</a>
  </div>
</div>





<!-- Modal Faturar-->
<div id="modal-faturar" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form id="formFaturar" action="<?php echo current_url() ?>" method="post">
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
  <h3 id="myModalLabel">Faturar OS</h3>
</div>
<div class="modal-body">
    
    <div class="span12 alert alert-info" style="margin-left: 0"> Obrigatório o preenchimento dos campos com asterisco.</div>
    <div class="span12" style="margin-left: 0"> 
      <label for="descricao">Descrição</label>
      <input class="span12" id="descricao" type="text" name="descricao" value="Fatura de Venda - #<?php echo $result->idOs; ?> "  />
      
    </div>  
    <div class="span12" style="margin-left: 0"> 
      <div class="span12" style="margin-left: 0"> 
        <label for="cliente">Associado*</label>
        <input class="span12" id="cliente" type="text" name="cliente" value="<?php echo $result->nomeCliente ?>" />
        <input type="hidden" name="clientes_id" id="clientes_id" value="<?php echo $result->clientes_id ?>">
        <input type="hidden" name="os_id" id="os_id" value="<?php echo $result->idOs; ?>">
      </div>
      
      
    </div>
    <div class="span12" style="margin-left: 0"> 
      <div class="span4" style="margin-left: 0">  
        <label for="valor">Valor*</label>
        <input type="hidden" id="tipo" name="tipo" value="receita" /> 
        <input class="span12 money" id="valor" type="text" name="valor" value="<?php echo number_format($total, 2); ?> "  />
      </div>
      <div class="span4" >
        <label for="vencimento">Data Vencimento*</label>
        <input class="span12 datepicker" id="vencimento" type="text" name="vencimento"  />
      </div>
      
    </div>
    
    <div class="span12" style="margin-left: 0"> 
      <div class="span4" style="margin-left: 0">
        <label for="recebido">Recebido?</label>
        &nbsp &nbsp &nbsp &nbsp <input  id="recebido" type="checkbox" name="recebido" value="1" /> 
      </div>
      <div id="divRecebimento" class="span8" style=" display: none">
        <div class="span6">
          <label for="recebimento">Data Recebimento</label>
          <input class="span12 datepicker" id="recebimento" type="text" name="recebimento" /> 
        </div>
        <div class="span6">
          <label for="formaPgto">Forma Pagto</label>
          <select name="formaPgto" id="formaPgto" class="span12">
            <option value="Dinheiro">Dinheiro</option>
            <option value="Cartão de Crédito">Cartão de Crédito</option>
            <option value="Cheque">Cheque</option>
            <option value="Boleto">Boleto</option>
            <option value="Depósito">Depósito</option>
            <option value="Débito">Débito</option>        
          </select> 
      </div>
      
    </div>
    
    
</div>
<div class="modal-footer">
  <button class="btn" data-dismiss="modal" aria-hidden="true" id="btn-cancelar-faturar">Cancelar</button>
  <button class="btn btn-primary">Faturar</button>
</div>
</form>
</div>



<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.validate.js"></script>
<script src="<?php echo base_url();?>assets/js/maskmoney.js"></script>

<script type="text/javascript">
$(document).ready(function(){
    
    $(".money").maskMoney(); 

     $('#recebido').click(function(event) {
        var flag = $(this).is(':checked');
        if(flag == true){
          $('#divRecebimento').show();
        }
        else{
          $('#divRecebimento').hide();
        }
     });

     $(document).on('click', '#btn-faturar', function(event) {
       event.preventDefault();
         valor = $('#total-venda').val();
         total_servico = $('#total-servico').val();
         valor = valor.replace(',', '' );
         total_servico = total_servico.replace(',', '' );
         total_servico = parseFloat(total_servico); 
         valor = parseFloat(valor);
         $('#valor').val(valor + total_servico);
     });
     
     $("#formFaturar").validate({
          rules:{
             descricao: {required:true},
             cliente: {required:true},
             valor: {required:true},
             vencimento: {required:true}
      
          },
          messages:{
             descricao: {required: 'Campo Requerido.'},
             cliente: {required: 'Campo Requerido.'},
             valor: {required: 'Campo Requerido.'},
             vencimento: {required: 'Campo Requerido.'}
          },
          submitHandler: function( form ){       
            var dados = $( form ).serialize();
            $('#btn-cancelar-faturar').trigger('click');
            $.ajax({
              type: "POST",
              url: "<?php echo base_url();?>index.php/os/faturar",
              data: dados,
              dataType: 'json',
              success: function(data)
              {
                if(data.result == true){
                    
                    window.location.reload(true);
                }
                else{
                    alert('Ocorreu um erro ao tentar faturar OS.');
                    $('#progress-fatura').hide();
                }
              }
              });

              return false;
          }
     });

     $("#produto").autocomplete({
            source: "<?php echo base_url(); ?>index.php/os/autoCompleteProduto",
            minLength: 2,
            select: function( event, ui ) {

                 $("#idProduto").val(ui.item.id);
                 $("#estoque").val(ui.item.estoque);
                 $("#preco").val(ui.item.preco);
                 $("#quantidade").focus();
                 

            }
      });

      $("#servico").autocomplete({
            source: "<?php echo base_url(); ?>index.php/os/autoCompleteServico",
            minLength: 2,
            select: function( event, ui ) {

                 $("#idServico").val(ui.item.id);
                 $("#precoServico").val(ui.item.preco);
                 

            }
      });


      $("#cliente").autocomplete({
            source: "<?php echo base_url(); ?>index.php/os/autoCompleteCliente",
            minLength: 2,
            select: function( event, ui ) {

                 $("#clientes_id").val(ui.item.id);


            }
      });

      $("#tecnico").autocomplete({
            source: "<?php echo base_url(); ?>index.php/os/autoCompleteUsuario",
            minLength: 2,
            select: function( event, ui ) {

                 $("#usuarios_id").val(ui.item.id);


            }
      });




      $("#formOs").validate({
          rules:{
             cliente: {required:true},
             tecnico: {required:true},
             dataInicial: {required:true}
          },
          messages:{
             cliente: {required: 'Campo Requerido.'},
             tecnico: {required: 'Campo Requerido.'},
             dataInicial: {required: 'Campo Requerido.'}
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




      $("#formProdutos").validate({
          rules:{
             quantidade: {required:true}
          },
          messages:{
             quantidade: {required: 'Insira a quantidade'}
          },
          submitHandler: function( form ){
             var quantidade = parseInt($("#quantidade").val());
             var estoque = parseInt($("#estoque").val());
             if(estoque < quantidade){
                alert('Você não possui estoque suficiente.');
             }
             else{
                 var dados = $( form ).serialize();
                $("#divProdutos").html("<div class='progress progress-info progress-striped active'><div class='bar' style='width: 100%'></div></div>");
                $.ajax({
                  type: "POST",
                  url: "<?php echo base_url();?>index.php/os/adicionarProduto",
                  data: dados,
                  dataType: 'json',
                  success: function(data)
                  {
                    if(data.result == true){
                        $( "#divProdutos" ).load("<?php echo current_url();?> #divProdutos" );
                        $("#quantidade").val('');
                        $("#produto").val('').focus();
                    }
                    else{
                        alert('Ocorreu um erro ao tentar adicionar produto.');
                    }
                  }
                  });

                  return false;
                }

             }
             
       });

       $("#formServicos").validate({
          rules:{
             servico: {required:true}
          },
          messages:{
             servico: {required: 'Insira um serviço'}
          },
          submitHandler: function( form ){       
                 var dados = $( form ).serialize();
                 
                $("#divServicos").html("<div class='progress progress-info progress-striped active'><div class='bar' style='width: 100%'></div></div>");
                $.ajax({
                  type: "POST",
                  url: "<?php echo base_url();?>index.php/os/adicionarServico",
                  data: dados,
                  dataType: 'json',
                  success: function(data)
                  {
                    if(data.result == true){
                        $( "#divServicos" ).load("<?php echo current_url();?> #divServicos" );
                        $("#servico").val('').focus();
                    }
                    else{
                        alert('Ocorreu um erro ao tentar adicionar serviço.');
                    }
                  }
                  });

                  return false;
                }

       });


        $("#formAnexos").validate({
         
          submitHandler: function( form ){       
                //var dados = $( form ).serialize();
                var dados = new FormData(form); 
                $("#form-anexos").hide('1000');
                $("#divAnexos").html("<div class='progress progress-info progress-striped active'><div class='bar' style='width: 100%'></div></div>");
                $.ajax({
                  type: "POST",
                  url: "<?php echo base_url();?>index.php/os/anexar",
                  data: dados,
                  mimeType:"multipart/form-data",
                  contentType: false,
                  cache: false,
                  processData:false,
                  dataType: 'json',
                  success: function(data)
                  {
                    if(data.result == true){
                        $("#divAnexos" ).load("<?php echo current_url();?> #divAnexos" );
                        $("#userfile").val('');

                    }
                    else{
                        $("#divAnexos").html('<div class="alert fade in"><button type="button" class="close" data-dismiss="alert">×</button><strong>Atenção!</strong> '+data.mensagem+'</div>');      
                    }
                  },
                  error : function() {
                      $("#divAnexos").html('<div class="alert alert-danger fade in"><button type="button" class="close" data-dismiss="alert">×</button><strong>Atenção!</strong> Ocorreu um erro. Verifique se você anexou o(s) arquivo(s).</div>');      
                  }

                  });

                  $("#form-anexos").show('1000');
                  return false;
                }

        });

       $(document).on('click', 'a', function(event) {
            var idProduto = $(this).attr('idAcao');
            var quantidade = $(this).attr('quantAcao');
            var produto = $(this).attr('prodAcao');
            if((idProduto % 1) == 0){
                $("#divProdutos").html("<div class='progress progress-info progress-striped active'><div class='bar' style='width: 100%'></div></div>");
                $.ajax({
                  type: "POST",
                  url: "<?php echo base_url();?>index.php/os/excluirProduto",
                  data: "idProduto="+idProduto+"&quantidade="+quantidade+"&produto="+produto,
                  dataType: 'json',
                  success: function(data)
                  {
                    if(data.result == true){
                        $( "#divProdutos" ).load("<?php echo current_url();?> #divProdutos" );
                        
                    }
                    else{
                        alert('Ocorreu um erro ao tentar excluir produto.');
                    }
                  }
                  });
                  return false;
            }
            
       });



       $(document).on('click', 'span', function(event) {
            var idServico = $(this).attr('idAcao');
            if((idServico % 1) == 0){
                $("#divServicos").html("<div class='progress progress-info progress-striped active'><div class='bar' style='width: 100%'></div></div>");
                $.ajax({
                  type: "POST",
                  url: "<?php echo base_url();?>index.php/os/excluirServico",
                  data: "idServico="+idServico,
                  dataType: 'json',
                  success: function(data)
                  {
                    if(data.result == true){
                        $("#divServicos").load("<?php echo current_url();?> #divServicos" );

                    }
                    else{
                        alert('Ocorreu um erro ao tentar excluir serviço.');
                    }
                  }
                  });
                  return false;
            }

       });


       $(document).on('click', '.anexo', function(event) {
           event.preventDefault();
           var link = $(this).attr('link');
           var id = $(this).attr('imagem');
           var url = '<?php echo base_url(); ?>index.php/os/excluirAnexo/';
           $("#div-visualizar-anexo").html('<img src="'+link+'" alt="">');
           $("#excluir-anexo").attr('link', url+id);

           $("#download").attr('href', "<?php echo base_url(); ?>index.php/os/downloadanexo/"+id);

       });

       $(document).on('click', '#excluir-anexo', function(event) {
           event.preventDefault();

           var link = $(this).attr('link'); 
           $('#modal-anexo').modal('hide');
           $("#divAnexos").html("<div class='progress progress-info progress-striped active'><div class='bar' style='width: 100%'></div></div>");

           $.ajax({
                  type: "POST",
                  url: link,
                  dataType: 'json',
                  success: function(data)
                  {
                    if(data.result == true){
                        $("#divAnexos" ).load("<?php echo current_url();?> #divAnexos" );
                    }
                    else{
                        alert(data.mensagem);
                    }
                  }
            });
       });



       $(".datepicker" ).datepicker({ dateFormat: 'dd/mm/yy' });




});

</script>





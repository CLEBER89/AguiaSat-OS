<link rel="stylesheet" href="<?php echo base_url();?>assets/js/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css" />
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.validate.js"></script>

<?php $totalServico = 0;
$totalProdutos = 0;?>
<div class="row-fluid" style="margin-top: 0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-tags"></i>
                </span>
                <h5>Ordem de Serviço</h5>
                <div class="buttons">
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'eOs')) {
                        echo '<a title="Icon Title" class="btn btn-mini btn-info" href="'.base_url().'index.php/os/editar/'.$result->idOs.'"><i class="icon-pencil icon-white"></i> Editar</a>';
} ?>
                    
                    <a target="_blank" title="Imprimir" class="btn btn-mini btn-inverse" href="<?php echo site_url()?>/os/imprimir/<?php echo $result->idOs; ?>"><i class="icon-print icon-white"></i> Imprimir</a>
                </div>
            </div>
            <div class="widget-content" id="printOs">
                <div class="invoice-content">
                    <div class="invoice-head" style="margin-bottom: 0">

                        <table class="table table-condensed" style="">
                        <tbody>
                           <?php if ($emitente == null) {?>
                                        
                            <tr>
                                <td colspan="3" class="alert">Você precisa configurar os dados do emitente. >>><a href="<?php echo base_url(); ?>index.php/mapos/emitente">Configurar</a><<<</td>
                            </tr>
                            <?php } elseif ($result->associacao == "Associação Acontrans") {?>

                            <tr>

                            <tr>
                                <td style="width: 25%"><img src=" <?php echo base_url(); ?>assets/img/AC.png " style="max-height: 100px; margin-top: 40px;"></td>
                                <td> <span style="font-size: 20px; "> <?php echo $emitente[0]->nome; ?></span> </br><span><?php echo $emitente[0]->cnpj; ?> </br> <?php echo $emitente[0]->rua.', '.$emitente[0]->numero.' - '.$emitente[0]->bairro.' - '.$emitente[0]->cidade.' - '.$emitente[0]->uf; ?> </span> </br> <span> E-mail: <?php echo $emitente[0]->email.' - Fone: '.$emitente[0]->telefone; ?></span></td>
                                <td style="width: 18%; text-align: center"><b>#PROTOCOLO:</b> <span ><?php echo $result->idOs?></span></br> </br> <span>Emissão: <?php echo date('d/m/Y')?></span></td>
                            </tr>

                            <?php } else {?>
                            
                            <tr>

                            <tr>
                                <td style="width: 25%"><img src=" <?php echo base_url(); ?>assets/img/SP.png " style="max-height: 100px; margin-top: 40px;"></td>
                                <td> <span style="font-size: 20px; "> <?php echo $emitente[1]->nome; ?></span> </br><span><?php echo $emitente[1]->cnpj; ?> </br> <?php echo $emitente[1]->rua.', '.$emitente[1]->numero.' - '.$emitente[1]->bairro.' - '.$emitente[1]->cidade.' - '.$emitente[1]->uf; ?> </span> </br> <span> E-mail: <?php echo $emitente[1]->email.' - Fone: '.$emitente[1]->telefone; ?></span></td>
                                <td style="width: 18%; text-align: center"><b>#PROTOCOLO:</b> <span ><?php echo $result->idOs?></span></br> </br> <span>Emissão: <?php echo date('d/m/Y')?></span></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                

                <table class="table table-condensend">
                        <tbody>
                            <tr>
                                <td style="width: 55%; padding-left: 0">
                                    <ul>
                                        <li>
                                            <span><h5><b>ASSOCIADO</b></h5>
                                            <span><?php echo $result->nomeCliente?></span><br>
                                            <span>Telefone: <?php echo $result->telefone_cliente?></span><br/>
                                            <span>Email: </span><br>
                                            </span>    
                                    </ul>
                                </td>
                                <td style="width: 50%; padding-left: 0">
                                    <ul>
                                        <li>
                                            <span><h5><b>OPERADOR</b></h5></span>
                                            <span><?php echo $result->nome?></span> <br/>
                                            <span>Telefone: 11 2729-5090</span><br/>
                                            <span>Email: monitoramento@aguiasat.com</span>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table> 
                
                

                <div style="margin-top: 0; padding-top: 0">
                    

                    <table class="table table-condensed">
                        <tbody>
                            
                            <?php if($result->dataInicial != null){?>

                        <table class="table table-condensed">
                            <tbody>
        

                                <tr>       

                                    
                                    
                                    <td style=" background: lightgrey !important">
                                    <center>    
                                    <b style="color: #2E2E2E; font-size: 18px;">DADOS</b>
                                    </center>
                                    </td>

                                    
                                    
                                </tr>  
                           </tbody>
                        </table> 

                        <table class="table table-condensed">
                            <tbody>
               

                            <tr>
                                <td style="width:500px;">
                                <b>DATA INICIAL: </b>
                                <?php echo date('d/m/Y', strtotime($result->dataInicial)); ?>
                                </td>

                                <td> 
                                <b>DATA FINAL: </b>
                                <?php echo $result->dataFinal ? date('d/m/Y', strtotime($result->dataFinal)) : ''; ?>
                                </td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>
                                <b>MARCA/MODELO: </b>
                                <?php echo $result->garantia; ?>
                                </td>
                            

                                <td>
                                <b>PLACA: </b>
                                <?php echo $result->descricaoProduto ?>
                                </td>

                                <td>

                    
                            </tr>


                            <tr>
                                <td>
                                <b>CONTATO NO LOCAL: </b>
                                <?php echo $result->observacoes; ?>
                                </td>
                               
                                <td>
                                <b>TELEFONE: </b>
                                <?php echo $result->laudoTecnico?>
                                </td>

                                <div>
                                <td></td>
                                </div>
                    
                            </tr>

                            <tr>
                                <td>
                                <b>SERVIÇO: </b>
                                <?php echo $result->servico; ?>
                                </td>

                                <td>
                                <b>DESCRIÇÃO DO SERVIÇO: </b>
                                <?php echo $result->motivo?>
                                </td>
                                
                                <td></td>
                            </tr>

                            <tr>
                                <td>
                                <b>ENDEREÇO DE ORIGEM: </b>
                                <?php echo $result->endOrigem; ?>                               
                                </td>

                                <td>
                                <b>CIDADE: </b>
                                <?php echo $result->cidade?>
                                </td>

                                <td>
                            </tr>

                            <tr> 

                                <td>
                                <b>ENDEREÇO DE DESTINO: </b>
                                <?php echo $result->endDestino; ?>
                                </td>

                                <td>
                                <div>
                                <b>CIDADE: </b>
                                <?php echo $result->cidadeDes?>
                                
                                </td>
                                <td></td>

                            </tr>
                    </tbody>
                </table>

                <table class="table table-condensed">
                    <tbody>

                                <tr>       

                                    

                                    <td style=" background: lightgrey !important">
                                    <center>
                                    <b style="color: #2E2E2E; align-content: center; font-size: 18px;">
                                    SERVIÇO</b>
                                    </center>
                                    </td>

                                   
                                    
                                </tr> 

                            </tbody>
                        </table>            

                         <table class="table table-condensed">
                    <tbody>        

                            <tr>

                            <tr>
                                <td style="width:500px;">
                                <b>PRESTADOR: </b>
                                <?php echo $result->prestador; ?>
                                </td>

                                <td>
                                <b>NOME: </b>
                                <?php echo $result->nomeP?>
                                </td>

                                <td></td>
                    
                            </tr>

                            <tr>

                                <td>
                                <b>TELEFONE: </b>
                                <?php echo $result->telP?>                        
                                </td>

                                <td>
                                <b>TOTAL KM: </b>
                                <?php echo $result->totKM; ?>
                                </td>

                                <td></td>
                            </tr>
                
                            <tr>
                                
                                <td>
                                <b>VALOR SAIDA: </b>
                                <?php echo $result->valSaida?>
                                </td>

                                <td>
                                <b>VALOR KM: </b>
                                <?php echo $result->valKM?>
                                </td>

                                <td></td>
                            </tr>

                            <tr>
                                <td>
                                <b>H.T.: </b>
                                <?php echo $result->ht?>
                                </td>

                                <td>
                                <b>H.P.: </b>
                                <?php echo $result->hp?>
                                </td>

                                <td></td>
                            </tr>

                            <tr>
                                <td>
                                <b>KM EX.: </b>
                                <?php echo $result->km?>
                                </td>
                                
                                <td> 
                                <b>VALOR EX.: </b>
                                <?php echo $result->valor?>
                                </td>
                            
                                <td></td>
                            </tr>
                                         
                            <tr>
                                <td style="word-wrap:  break-word;">
                                <b>FORMA DE PGTO.: </b>
                                <?php echo $result->formaPagto?>
                                </td>
                                
                                <td  style="word-wrap:  break-word;"> 
                                <b>PEDÁGIO: </b>                             
                                <?php echo $result->pedagio?>                    
                                </td>
                                
                                <td></td>
                            </tr>
                            
                            <tr>
                                <td  style="word-wrap:  break-word;"> 
                                <b>OBS: </b>      
                                <?php echo $result->Obs?>
                                </td>
                                
                                <td></td>
                                <td></td>
                            </tr>


                            <tr><td></td><td></td><td></td></tr>

                        </tbody>
                    </table>      
                               
                            <?php }?>
                        </br></br>    

                        </tbody>
                    </table>
                    
                    <div class="footer">
                        <h4 style="text-align: right; color: #2E2E2E">Valor Total: <?php echo $result->valTot?></h4>
                    </div>

                    <div class="active" id="divProdutosServicos" style=" margin-left: 0">
                    <ul class="nav nav-tabs">
                        <li id="tabAnexos"><a href="#tab4" data-toggle="tab"><strong>Anexos</strong></a></li>
                    </ul>
            
                    <!--Anexos-->
                        <div class="tab-pane" id="tab4">
                            <div class="span12" style="padding: 1%; margin-left: 0">
                                <div class="span12 well" style="padding: 1%; margin-left: 0" id="form-anexos">
                                    <form id="formAnexos" enctype="multipart/form-data" action="javascript:;" accept-charset="utf-8"s method="post">
                                    
                
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
                    
                    
              
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.validate.js"></script>
<script src="<?php echo base_url();?>assets/js/maskmoney.js"></script>

<script type="text/javascript">

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


</script>

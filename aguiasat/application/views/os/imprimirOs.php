<?php $totalServico = 0;
$totalProdutos = 0;?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>ÁGUIASAT OS</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/matrix-style.css" />
<link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/fav1.ico">

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<style>
    .table {
        margin-bottom: 5px;
    }
</style>
</head>
<body>

 
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
       
        <div class="invoice-content">
                <div class="invoice-head" style="margin-bottom: 0">

                    <table class="table table-condensed">
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
                                <td style="width: 54%; padding-left: 0">
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
                                <td>
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

                                <td style="width:350px;">
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
                                <td style="width:350px;">
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
                                <td>
                                <b>FORMA DE PGTO.: </b>
                                <?php echo $result->formaPagto; ?>
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


                        <!--table class="table table-bordered table-condensed">                                      
                            <tbody>
                                    <tr> 
                                        <td>Data <hr></td>
                                        <td>Assinatura do Cliente <hr></td>
                                        <td>Assinatura do Responsável <hr></td>
                                    </tr>
                            </tbody>
                        </table-->
                </div>



<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/matrix.js"></script> 

<script>
    window.print();
</script>

</body>
</html>

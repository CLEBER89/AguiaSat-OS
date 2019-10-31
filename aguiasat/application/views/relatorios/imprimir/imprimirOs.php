<head>
    <title>ÁGUIASAT OS</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/blue.css" class="skin-color" />

    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/fav1.ico">

    <script type="text/javascript"  src="<?php echo base_url();?>assets/js/jquery-1.10.2.min.js"></script>

    <script type="text/javascript"  src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


</head>
<body style="background-color: transparent">
    
    <div class="alert alert-secondary" role="alert" style="text-align: center;">
      Baixe o relatório e <a href="https://online2pdf.com/pt/converter-excel-para-pdf" class="alert-link">clique aqui</a> para convertê-lo em .xls(excel).
    </div>

    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <?= isset($topo) ? $topo : '' ?>
                    <div class="widget-title">
                        <h4 style="text-align: center"><?= ucfirst($title)?></h4>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th style="padding: 5px;">N° OS</th>
                                    <th style="padding: 5px;">DATA</th>
                                    <th style="padding: 5px;">OPERADOR</th>
                                    <th style="padding: 5px;">ASSOCIADO</th>
                                    <th style="padding: 5px;">ASSOCIAÇÃO</th>
                                    <th style="padding: 5px;">SERV.</th>
                                    <th style="padding: 5px;">PLACA</th>
                                    
                                    <th style="padding: 5px; width: 23px;">PREST.</th>
                                    <th style="padding: 5px; width: 23px;">D. SERV.</th>
                                    <th style="padding: 5px; width: 14px;">F. PGTO</th>
                                    <th style="padding: 5px;">H.T.</th>
                                    <th style="padding: 5px;">H.P.</th>
                                    <th style="padding: 5px;">V. SAIDA</th>
                                    <th style="padding: 5px;">V. KM</th>
                                    <th style="padding: 5px;">T. KM</th>
                                    <th style="padding: 5px;">PED.</th>
                                    <th style="padding: 5px;">KM EXC.</th>
                                    <th style="padding: 5px;">VALOR EXC.</th>
                                    <th style="padding: 5px;">TOTAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($os as $c) {
                                    echo '<tr>';
                                    echo '<td><small>' . $c->idOs. '</small></td>';
                                    echo '<td><small>' . date('d/m/Y', strtotime($c->dataInicial)) . '</small></td>';
                                    echo '<td><small>' . $c->nome. '</small></td>';
                                    echo '<td><small>' . $c->nomeCliente. '</small></td>';
                                    echo '<td><small>' . $c->associacao. '</small></td>';
                                    echo '<td><small>' . $c->servico. '</small></td>';
                                    echo '<td><small>' . $c->descricaoProduto. '</small></td>';
                                    echo '<td><small>' . $c->prestador. '</small></td>';
                                    echo '<td><small>' . $c->motivo. '</small></td>';
                                    echo '<td><small>' . $c->formaPagto. '</small></td>';
                                    echo '<td><small>' . $c->ht. '</small></td>';
                                    echo '<td><small>' . $c->hp. '</small></td>';
                                    echo '<td><small>' . $c->valSaida. '</small></td>';
                                    echo '<td><small>' . $c->valKM. '</small></td>';
                                    echo '<td><small>' . $c->totKM. '</small></td>';
                                    echo '<td><small>' . $c->pedagio. '</small></td>';
                                    echo '<td><small>' . $c->km. '</small></td>';
                                    echo '<td><small>' . $c->valor. '</small></td>';
                                    echo '<td><small>' . $c->valTot. '</small></td>';

                                   //echo '<td><small>R$ '. number_format($c->total_produto,2,',','.') .'</small></td>';
                                    //echo '<td><small>R$ '. number_format($c->total_servico,2,',','.') .'</small></td>';
                                    
                                    //echo '<td><small>R$ '. number_format($c->total_produto + $c->total_servico, 2, ',', '.') .'</small></td>';
                                    echo '</tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <p style="text-align: right">Data do Relatório: <?php echo date('d/m/Y');?></p>
            </div>
        </div>
    </div>
</body>









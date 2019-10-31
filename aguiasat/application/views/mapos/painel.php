<!--[if lt IE 9]><script language="javascript" type="text/javascript" src="<?php echo base_url();?>js/dist/excanvas.min.js"></script><![endif]-->

<script
    language="javascript"
    type="text/javascript"
    src="<?=base_url();?>assets/js/dist/jquery.jqplot.min.js"></script>
<script
    type="text/javascript"
    src="<?=base_url();?>assets/js/dist/plugins/jqplot.pieRenderer.min.js"></script>
<script
    type="text/javascript"
    src="<?=base_url();?>assets/js/dist/plugins/jqplot.donutRenderer.min.js"></script>
<link
    rel="stylesheet"
    type="text/css"
    href="<?=base_url();?>assets/js/dist/jquery.jqplot.min.css" />


<!--Action boxes-->
<div class="container-fluid">
    <div class="quick-actions_homepage">
        <ul class="quick-actions">
            <?php if($this->permission->checkPermission($this->session->userdata('permissao'), 'vCliente')):?>
                <li class="bg_lb">
                    <a href="<?=base_url()?>index.php/clientes"> <i class="icon-group"></i> Associados</a>
                </li>
            <?php endif ?>

            <?php if($this->permission->checkPermission($this->session->userdata('permissao'), 'vPrestadores')):?>
                <li class="bg_lh">
                    <a href="<?=base_url()?>index.php/prestadores"> <i class="icon-truck"></i> Prestadores</a>
                </li>
            <?php endif ?>

            <?php if($this->permission->checkPermission($this->session->userdata('permissao'), 'vOs')) :?>
                <li class="bg_lo">
                    <a href="<?=base_url()?>index.php/os"> <i class="icon-tags"></i> OS</a>
                </li>
            <?php endif ?>


        </ul>
    </div>
</div>  
<!--End-Action boxes-->  


    <div class="span12" style="margin-left: 0">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon"><i class="icon-signal"></i></span>
                <h5>Ordens de Serviço Em Aberto</h5>
            </div>
            <div class="widget-content">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Data Inicial</th>
                            <th>Data Final</th>
                            <th>Associado</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($ordens != null):?>
                            <?php foreach ($ordens as $o): ?>
                                <tr>
                                    <td><?=$o->idOs?></td>
                                    <td><?=date('d/m/Y', strtotime($o->dataInicial))?></td>
                                    <td><?=date('d/m/Y', strtotime($o->dataFinal))?></td>
                                    <td><?=$o->nomeCliente?></td>
                                    <td>
                                    <?php if($this->permission->checkPermission($this->session->userdata('permissao'), 'vOs')):?>
                                        <a
                                            href="<?=base_url()?>index.php/os/visualizar/<?=$o->idOs?>"
                                            class="btn">
                                            <i class="icon-eye-open" ></i> </a>
                                    <?php endif ?>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        <?php else:?>
                            <tr>
                                <td colspan="3">Nenhuma OS em aberto.</td>
                            </tr>
                        <?php endif?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<?php if ($os != null) { ?>
<div class="row-fluid" style="margin-top: 0">

    <div class="span12">
        
        <div class="widget-box">
            <div class="widget-title"><span class="icon"><i class="icon-signal"></i></span><h5>Estatísticas de OS</h5></div>
            <div class="widget-content">
                <div class="row-fluid">
                    <div class="span12">
                      <div id="chart-os" style=""></div>
                    </div>
            
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>


<div class="row-fluid" style="margin-top: 0">

    <div class="span12">
        
        <div class="widget-box">
            <div class="widget-title"><span class="icon"><i class="icon-signal"></i></span><h5>Estatísticas do Sistema</h5></div>
            <div class="widget-content">
                <div class="row-fluid">           
                    <div class="span12">
                        <ul class="site-stats">
                            <li class="bg_lh"><i class="icon-group"></i> <strong><?=$this->db->count_all('clientes');?></strong> <small>Associados</small></li>

                            <li class="bg_lh"><i class="icon-tags"></i> <strong><?=$this->db->count_all('os');?></strong> <small>Ordens de Serviço</small></li>

                            
                        </ul>
                 
                    </div>
            
                </div>
            </div>
        </div>
    </div>
</div>



<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>


<?php if ($os != null) {?>
<script type="text/javascript">
    
    $(document).ready(function(){
      var data = [
        <?php foreach ($os as $o) {
            echo "['".$o->status."', ".$o->total."],";
} ?>
       
      ];
      var plot1 = jQuery.jqplot ('chart-os', [data], 
        { 
          seriesDefaults: {
            // Make this a pie chart.
            renderer: jQuery.jqplot.PieRenderer, 
            rendererOptions: {
              // Put data labels on the pie slices.
              // By default, labels show the percentage of the slice.
              showDataLabels: true
            }
          }, 
          legend: { show:true, location: 'e' }
        }
      );

    });
 
</script>

<?php } ?>



<?php if (isset($estatisticas_financeiro) && $estatisticas_financeiro != null) {
    if ($estatisticas_financeiro->total_receita != null || $estatisticas_financeiro->total_despesa != null || $estatisticas_financeiro->total_receita_pendente != null || $estatisticas_financeiro->total_despesa_pendente != null) {
?>
<script type="text/javascript">
    
$(document).ready(function(){

 var data2 = [['Total Receitas',<?php echo ($estatisticas_financeiro->total_receita != null ) ?  $estatisticas_financeiro->total_receita : '0.00'; ?>],['Total Despesas', <?php echo ($estatisticas_financeiro->total_despesa != null ) ?  $estatisticas_financeiro->total_despesa : '0.00'; ?>]];
 var plot2 = jQuery.jqplot ('chart-financeiro', [data2], 
   {  

     seriesColors: [ "#9ACD32", "#FF8C00", "#EAA228", "#579575", "#839557", "#958c12","#953579", "#4b5de4", "#d8b83f", "#ff5800", "#0085cc"],   
     seriesDefaults: {
       // Make this a pie chart.
       renderer: jQuery.jqplot.PieRenderer, 
       rendererOptions: {
         // Put data labels on the pie slices.
         // By default, labels show the percentage of the slice.
         dataLabels: 'value',
         showDataLabels: true
       }
     }, 
     legend: { show:true, location: 'e' }
   }
 );


 var data3 = [['Total Receitas',<?php echo ($estatisticas_financeiro->total_receita_pendente != null ) ?  $estatisticas_financeiro->total_receita_pendente : '0.00'; ?>],['Total Despesas', <?php echo ($estatisticas_financeiro->total_despesa_pendente != null ) ?  $estatisticas_financeiro->total_despesa_pendente : '0.00'; ?>]];
 var plot3 = jQuery.jqplot ('chart-financeiro2', [data3], 
   {  

     seriesColors: [ "#90EE90", "#FF0000", "#EAA228", "#579575", "#839557", "#958c12","#953579", "#4b5de4", "#d8b83f", "#ff5800", "#0085cc"],   
     seriesDefaults: {
       // Make this a pie chart.
       renderer: jQuery.jqplot.PieRenderer, 
       rendererOptions: {
         // Put data labels on the pie slices.
         // By default, labels show the percentage of the slice.
         dataLabels: 'value',
         showDataLabels: true
       }
     }, 
     legend: { show:true, location: 'e' }
   }

 );


 var data4 = [['Total em Caixa',<?php echo ($estatisticas_financeiro->total_receita - $estatisticas_financeiro->total_despesa); ?>],['Total a Entrar', <?php echo ($estatisticas_financeiro->total_receita_pendente - $estatisticas_financeiro->total_despesa_pendente); ?>]];
 var plot4 = jQuery.jqplot ('chart-financeiro-caixa', [data4], 
   {  

     seriesColors: ["#839557","#d8b83f", "#d8b83f", "#ff5800", "#0085cc"],   
     seriesDefaults: {
       // Make this a pie chart.
       renderer: jQuery.jqplot.PieRenderer, 
       rendererOptions: {
         // Put data labels on the pie slices.
         // By default, labels show the percentage of the slice.
         dataLabels: 'value',
         showDataLabels: true
       }
     }, 
     legend: { show:true, location: 'e' }
   }

 );


});
 
</script>

<?php                                                                                                              }
} ?>
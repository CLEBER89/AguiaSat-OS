
<link
    rel="stylesheet"
    href="<?=base_url();?>assets/js/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css" />
<script
    type="text/javascript"
    src="<?=base_url()?>assets/js/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>

    <form method="get" action="<?=current_url(); ?>" >
        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'aPrestadores')) { ?>
            <div class="span3">
                <a href="<?php echo base_url();?>index.php/prestadores/adicionar" class="btn btn-success"><i class="icon-plus icon-white"></i> Adicionar Prestador</a>    
                </div>
        <?php } ?>

        <div class="span3" style="margin-left: 0px">
            <input type="text" name="pesquisa"  id="pesquisa"  placeholder="Busca por Nome" class="span12" autocomplete="off" value="<?=$this->input->get('pesquisa')?>">
        </div>
        <div class="span3" style="margin-left: 5px">
            <input type="text" name="cidade"  id="cidade" placeholder="Busca por Cidade" class="span12" autocomplete="off" value="<?=$this->input->get('cidade')?>">
        </div>
        
        <div class="span3" style="margin-left: 5px">
            <select class="span12" name="regiao" id="regiao" value="<?=$this->input->get('regiao')?>">

                <option value="" disabled selected>Selecione uma Região</option>
                <option value="Região Norte">Região Norte</option>
                <option value="Região Sul">Região Sul</option>
                <option value="Região Leste">Região Leste</option>
                <option value="Região Oeste">Região Oeste</option>
                <option value="Região Metropolitana">Região Metropolitana</option>
                <option value="Outros">Outros</option>
            </select>

        </div>
        <div class="span1" style="margin-left: 7px">
            <button class="span12 btn"> <i class="icon-search"></i> </button>
        </div>
    </form>
</div>    



<?php if (!$results) { ?>

        <div class="widget-box">
        <div class="widget-title">
            <span class="icon">
                <i class="icon-user"></i>
            </span>
            <h5>Prestadores</h5>

        </div>

        <div class="widget-content nopadding">
            <table class="table table-bordered">
                <thead>
                    <tr style="background-color: #2D335B">
                        <th>N°</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Região</th>
                        <th>Cidade</th>
                        <th>Estado</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="5">Nenhum Prestador Cadastrado</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

<?php } else { ?>

<div class="widget-box">
     <div class="widget-title">
        <span class="icon">
            <i class="icon-user"></i>
         </span>
        <h5>Prestadores</h5>

     </div>

<div class="widget-content nopadding">


<table class="table table-bordered ">
    <thead>
        <tr style="background-color: #2D335B" "white-space: nowrap">
            <th>Nº</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Região</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($results as $r) {
            echo '<tr>';
            echo '<td>'.$r->idClientes.'</td>';
            echo '<td>'.$r->prestadorPre.'</td>';
            echo '<td>'.$r->telefonePre.'</td>';
            echo '<td>'.$r->regiao.'</td>';
            echo '<td>'.$r->cidadePre.'</td>';
            echo '<td>'.$r->estadoPre.'</td>';
            
            echo '<td style="white-space: nowrap">';

            if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vPrestadores')) {
                echo '<a href="'.base_url().'index.php/prestadores/visualizar/'.$r->idClientes.'" style="margin-right: 1%" class="btn tip-top" title="Ver mais detalhes"><i class="icon-eye-open"></i></a>';
            }
            if ($this->permission->checkPermission($this->session->userdata('permissao'), 'ePrestadores')) {
                echo '<a href="'.base_url().'index.php/prestadores/editar/'.$r->idClientes.'" style="margin-right: 1%" class="btn btn-info tip-top" title="Editar Prestador"><i class="icon-pencil icon-white"></i></a>';
            }
            if ($this->permission->checkPermission($this->session->userdata('permissao'), 'dPrestadores')) {
                echo '<a href="#modal-excluir" role="button" data-toggle="modal" prestadores="'.$r->idClientes.'" style="margin-right: 1%" class="btn btn-danger tip-top" title="Excluir Prestador"><i class="icon-remove icon-white"></i></a>';
            }

              
            echo '</td>';
            echo '</tr>';
        }?>
        <tr>
            
        </tr>
    </tbody>
</table>
</div>
</div>

<?php echo $this->pagination->create_links(); }?>



 
<!-- Modal -->
<div id="modal-excluir" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <form action="<?php echo base_url() ?>index.php/prestadores/excluir" method="post" >
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h5 id="myModalLabel">Excluir Prestador</h5>
  </div>
  <div class="modal-body">
    <input type="hidden" id="idPrestador" name="id" value="" />
    <h5 style="text-align: center">Deseja realmente excluir este prestador??</h5>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
    <button class="btn btn-danger">Excluir</button>
  </div>
  </form>
</div>



<script type="text/javascript">
$(document).ready(function(){


   $(document).on('click', 'a', function(event) {
        
        var prestador = $(this).attr('prestadores');
        $('#idPrestador').val(prestador);

    });

});
</script>


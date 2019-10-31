<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-user"></i>
                </span>
                <h5>Editar Cliente</h5>
            </div>
            <div class="widget-content nopadding">
                <?php if ($custom_error != '') {
                    echo '<div class="alert alert-danger">' . $custom_error . '</div>';
} ?>
                <form action="<?php echo current_url(); ?>" id="formCliente" method="post" class="form-horizontal" >
                    <div class="control-group" style="margin-left: 170px;">
                        <?php echo form_hidden('idClientes', $result->idClientes) ?>
                        <label for="nomeCliente" class="control-label">Nome<span class="required">*</span></label>
                        <div class="controls">
                            <input id="nomeCliente" type="text" name="nomeCliente" value="<?php echo $result->nomeCliente; ?>"  />
                        </div>

                    <div class="control-group">
                        <label for="telefone" class="control-label">Telefone<span class="required">*</span></label>
                        <div class="controls">
                            <input id="telefone" type="tel" name="telefone" value="<?php echo $result->telefone; ?>"  />
                        </div>
                    </div>

                    
                    <div class="control-group" >
                        <label for="operador" class="control-label">Operador<span class="required">*</span></label>
                        <div class="controls">
                            <input id="operador" type="text" name="operador" value="<?php echo $result->operador; ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="data" class="control-label">Data<span class="required">*</span></label>
                        <div class="controls">
                            <input id="data" type="date" name="data" value="<?php echo $result->data; ?>"  />
                        </div>
                    </div>

                    



                    <div class="control-group">
                          <div class="span12 controls">    
                            <div class="span12 offset3">
                                <button type="submit" class="btn btn-primary"><i class="icon-ok icon-white"></i> Alterar</button>
                                <a href="<?php echo base_url() ?>index.php/clientes" id="" class="btn"><i class="icon-arrow-left"></i> Voltar</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<script src="<?php echo base_url()?>assets/js/jquery.validate.js"></script>
<script type="text/javascript">
      $(document).ready(function(){
           $('#formCliente').validate({
            rules :{
                  nomeCliente:{ required: true},
                  telefone:{ required: true},
                  operador:{ required: true},
                  data:{ required: true}
            },
            messages:{
                  nomeCliente :{ required: 'Campo Requerido.'},
                  telefone:{ required: 'Campo Requerido.'},
                  operador :{ required: 'Campo Requerido.'},
                  data:{ required: 'Campo Requerido.'}
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
      });
</script>


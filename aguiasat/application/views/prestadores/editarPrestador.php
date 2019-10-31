
<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-user"></i>
                </span>
                <h5>Editar Prestador</h5>
            </div>
            <div class="widget-content nopadding">
                <?php if ($custom_error != '') {
                    echo '<div class="alert alert-danger">' . $custom_error . '</div>';
} ?>
                <form action="<?php echo current_url(); ?>" id="formPrestador" method="post" class="form-horizontal" >
                    <div class="control-group" style="padding: 1%; margin-left: 170px;">
                        <?php echo form_hidden('idClientes', $result->idClientes) ?>

                        <label for="prestadorPre" class="control-label">Prestador<span class="required">*</span></label>
                        <div class="controls">
                            <input id="prestadorPre" type="text" name="prestadorPre" value="<?php echo $result->prestadorPre; ?>"  />
                        </div>

                        <label for="nomePre" class="control-label">Nome<span class="required">*</span></label>
                        <div class="controls">
                            <input id="nomePre" type="text" name="nomePre" value="<?php echo $result->nomePre; ?>"  />
                        </div>

                    <div class="control-group">
                        <label for="telefonePre" class="control-label">Telefone<span class="required">*</span></label>
                        <div class="controls">
                            <input id="telefonePre" type="tel" name="telefonePre" value="<?php echo $result->telefonePre; ?>"  placeholder="(99)99999-9999 / (99)99999-9999"/>
                        </div>
                    </div>

                    
                    <div class="control-group" class="control-label">
                        <label for="enderecoPre" class="control-label">Endereço<span class="required">*</span></label>
                        <div class="controls">
                            <input id="enderecoPre" type="text" name="enderecoPre" cols="2" value="<?php echo $result->enderecoPre; ?>"  />
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="regiao" class="control-label">Região<span class="required">*</span></label>
                        <div class="controls">
                            <input id="regiao" type="text" name="regiao" value="<?php echo $result->regiao; ?>"  />
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="cidadePre" class="control-label">Cidade<span class="required">*</span></label>
                        <div class="controls">
                            <input id="cidadePre" type="text" name="cidadePre" value="<?php echo $result->cidadePre; ?>"  />
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="estadoPre" class="control-label">Estado<span class="required">*</span></label>
                        <div class="controls">
                            <input id="estadoPre" type="text" name="estadoPre" value="<?php echo $result->estadoPre; ?>"  />
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="data" class="control-label">Data<span class="required">*</span></label>
                        <div class="controls">
                            <input id="data" type="date" name="data" value="<?php echo $result->data; ?>"  />
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="obs" class="control-label">Obs.<span class="required">*</span></label>
                        <div class="controls">
                            <textarea id="obs" rows="3" type="text" name="obs"><?php echo $result->obs;?></textarea>
                        </div> 
                    </div>

                    <div class="control-group">
                          <div class="span12 controls">    
                            <div class="span12 offset3">
                                <button type="submit" class="btn btn-primary"><i class="icon-ok icon-white"></i> Alterar</button>
                                <a href="<?php echo base_url() ?>index.php/prestadores" id="" class="btn"><i class="icon-arrow-left"></i> Voltar</a>
                            </div>
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
           $('#formPrestador').validate({
            rules :{
                  prestadorPre:{ required: true},
                  nomePre:{ required: true},
                  telefonePre:{ required: true},
                  enderecoPre:{ required: true},
                  regiao:{ required: true},
                  cidadePre:{ required: true},
                  estadoPre:{ required: true},
                  data:{ required: true}
            },
            messages:{
                  prestadorPre :{ required: 'Campo Requerido.'},
                  nomePre :{ required: 'Campo Requerido.'},
                  telefonePre:{ required: 'Campo Requerido.'},
                  enderecoPre :{ required: 'Campo Requerido.'},
                  regiao :{ required: 'Campo Requerido.'},
                  cidadePre :{ required: 'Campo Requerido.'},  
                  estadoPre :{ required: 'Campo Requerido.'},
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


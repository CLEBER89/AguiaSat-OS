<script type="text/javascript" src="<?php echo base_url()?>assets/jquery/dist/jquery.maskMoney.min.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>assets/jquery/dist/jquery.mask.min.js"></script>


<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-user"></i>
                </span>
                <h5>Cadastro do Prestador</h5>
            </div>
            <div class="widget-content nopadding">
                <?php if ($custom_error != '') {
                    echo '<div class="alert alert-danger">' . $custom_error . '</div>';
} ?>
                <form action="<?php echo current_url(); ?>" id="formPrestador" method="post" class="form-horizontal" >
                    <div class="control-group" style="padding: 1%;margin-left: 170px;">
                        <label for="prestadorPre" class="control-label">Prestador<span class="required">*</span></label>
                        <div class="controls">
                            <input id="prestadorPre" type="text" name="prestadorPre" value="<?php echo set_value('prestadorPre'); ?>"  autocomplete="off" action=""/>
                        </div>
                    

                        <label for="nomePre" class="control-label">Nome<span class="required">*</span></label>
                        <div class="controls">
                            <input id="nomePre" type="text" name="nomePre" value="<?php echo set_value('nomePre'); ?>"  autocomplete="off" action=""/>
                        </div>
                      
                    
                        <label for="telefonePre" class="control-label">Telefone<span class="required">*</span></label>
                        <div class="controls">
                            <input id="telefonePre" type="tel" name="telefonePre" value="<?php echo set_value('telefonePre'); ?>"  autocomplete="off" action=""
                            placeholder="(99)99999-9999 / (99)99999-9999 "/>
                        </div>
                    

                    <label for="enderecoPre" class="control-label">Endereço<span class="required">*</span></label>
                        <div class="controls">
                            <input id="enderecoPre" type="text" name="enderecoPre" value="<?php echo set_value('enderecoPre'); ?>"  autocomplete="off" action=""
                            />
                        </div>
                         
                         
                        <label for="regiao" class="control-label">Região<span class="required">*</span></label>
                        <div class="controls"> 
                                    <select class="combo" name="regiao" id="regiao" value="" >

                                        <option value="" disabled selected>Selecione uma Região</option>
                                        <option value="Região Norte">Região Norte</option>
                                        <option value="Região Sul">Região Sul</option>
                                        <option value="Região Leste">Região Leste</option>
                                        <option value="Região Oeste">Região Oeste</option>
                                        <option value="Região Metropolitana">Região Metropolitana</option>
                                        <option value="Outros">Outros</option>
                                    </select>
                         </div>       
                    

                    <label for="cidadePre" class="control-label">Cidade<span class="required">*</span></label>
                        <div class="controls">
                            <input id="cidadePre" type="text" name="cidadePre" value="<?php echo set_value('cidadePre'); ?>"  autocomplete="off" action=""/>
                        </div>
                    

                    <label for="estadoPre" class="control-label">Estado<span class="required">*</span></label>
                        <div class="controls">
                            <select class="combo" name="estadoPre" id="estadoPre" value="">
                                <option selected="" disabled selected value="">Selecione o Estado (UF)</option>
                                <option value="Acre">Acre</option>
                                <option value="Alagoas">Alagoas</option>
                                <option value="Amapá">Amapá</option>
                                <option value="Amazonas">Amazonas</option>
                                <option value="Bahia">Bahia</option>
                                <option value="Ceará">Ceará</option>
                                <option value="Distrito Federal">Distrito Federal</option>
                                <option value="Espírito Santo">Espírito Santo</option>
                                <option value="Goiás">Goiás</option>
                                <option value="Maranhão">Maranhão</option>
                                <option value="Mato Grosso">Mato Grosso</option>
                                <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                                <option value="Minas Gerais">Minas Gerais</option>
                                <option value="Pará">Pará</option>
                                <option value="Paraíba">Paraíba</option>
                                <option value="Paraná">Paraná</option>
                                <option value="Pernambuco">Pernambuco</option>
                                <option value="Piauí">Piauí</option>
                                <option value="Rio de Janeiro">Rio de Janeiro</option>
                                <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                                <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                                <option value="Rondônia">Rondônia</option>
                                <option value="Roraima">Roraima</option>
                                <option value="Santa Catarina">Santa Catarina</option>
                                <option value="São Paulo">São Paulo</option>
                                <option value="Sergipe">Sergipe</option>
                                <option value="Tocantins">Tocantins</option>
                                </select>
                        </div>
                    
                    
                        <label for="data" class="control-label">Data<span class="required">*</span></label>
                        <div class="controls">
                            <input id="rua" type="date" name="data" value="<?php echo set_value('data'); ?>"  autocomplete="off" action=""/>
                        </div>
                        
                        <label for="obs" class="control-label">Obs.<span class="required">*</span></label>
                        <div class="controls">
                            <textarea id="obs" rows="3" type="text" name="obs" value="<?php echo set_value('obs'); ?>"  autocomplete="off" action=""></textarea>
                        </div>    

                        <div class="control-group">
                          <div class="span12 controls">    
                            <div class="span12 offset3">
                                <button type="submit" class="btn btn-success"><i class="icon-plus icon-white"></i> Adicionar</button>       
                                <a href="<?php echo base_url() ?>index.php/prestadores" id="" class="btn"><i class="icon-arrow-left"></i> Voltar</a>
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
    $(function() {
        $('#currency, #currency1, #currency2, #currency3, #currency4').maskMoney();
    });

    jQuery(function($){
    $("#campoData").mask("99/99/9999");
    $("#telefonePre").mask("(99)99999-9999 / (99)99999-9999");
    $("#campoTelefone1").mask("(99) 99999-9999");
    $("#campoPlaca").mask("AAA-9999");
    });

      $(document).ready(function(){
           $('#formPrestador').validate({
            rules :{
                  prestadorPre:{ required: true},
                  telefonePre:{ required: true},
                  nomePre:{ required: true},
                  enderecoPre:{ required: true},
                  cidadePre:{ required: true},
                  estadoPre:{ required: true},
                  data:{ required: true}

            },
            messages:{
                  prestadorPre :{ required: 'Campo Requerido.'},
                  telefonePre :{ required: 'Campo Requerido.'},
                  nomePre:{ required: 'Campo Requerido.'},
                  enderecoPre:{ required: 'Campo Requerido.'},
                  cidadePre:{ required: 'Campo Requerido.'},
                  estadoPre:{ required: 'Campo Requerido.'},
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

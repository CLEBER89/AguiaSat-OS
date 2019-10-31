

<div class="accordion" id="collapse-group">
                <div class="accordion-group widget-box">
                    <div class="accordion-heading">
                        <div class="widget-title">
                            <a data-parent="#collapse-group" href="#collapseGOne" data-toggle="collapse">
                                <span class="icon"><i class="icon-list"></i></span><h5>Dados do Prestador</h5>
                            </a>
                        </div>
                    </div>
                    <div class="collapse in accordion-body" id="collapseGOne">
                        <div class="widget-content">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td style="text-align: right; width: 30%"><strong>Prestador</strong></td>
                                        <td><?php echo $result->prestadorPre ?></td>
                                    </tr>

                                    <tr>
                                        <td style="text-align: right; width: 30%"><strong>Nome</strong></td>
                                        <td><?php echo $result->nomePre ?></td>
                                    </tr>

                                    <tr>
                                    <td style="text-align: right; width: 30%"><strong>Telefone</strong></td>
                                        <td><?php echo $result->telefonePre ?></td>
                                    </tr>

                                    <tr>
                                    <td style="text-align: right; width: 30%"><strong>Endereço</strong></td>
                                        <td><?php echo $result->enderecoPre ?></td>
                                    </tr>

                                    <tr>
                                    <td style="text-align: right; width: 30%"><strong>Região</strong></td>
                                        <td><?php echo $result->regiao ?></td>
                                    </tr>

                                    <tr>
                                    <td style="text-align: right; width: 30%"><strong>Cidade</strong></td>
                                        <td><?php echo $result->cidadePre ?></td>
                                    </tr>

                                    <tr>
                                    <td style="text-align: right; width: 30%"><strong>Estado</strong></td>
                                        <td><?php echo $result->estadoPre ?></td>
                                    </tr>                                              

                                    <tr>
                                        <td style="text-align: right"><strong>Data de Cadastro</strong></td>
                                        <td><?php echo date('d/m/Y', strtotime($result->data)) ?></td>
                                    </tr>

                                    <tr>
                                    <td style="text-align: right; width: 30%;"><strong>Observações</strong></td>
                                        <td><?php echo $result->obs ?></td>
                                    </tr>     

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                           



          
        </div>

    </div>
</div>
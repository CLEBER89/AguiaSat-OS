<?php
$config = array('clientes' => array(array(
                                    'field'=>'nomeCliente',
                                    'label'=>'Nome',
                                    'rules'=>'required|trim'
                                ),
                                array(
                                    'field'=>'telefone',
                                    'label'=>'Telefone',
                                    'rules'=>'required|trim'
                                ),
                                array(
                                    'field'=>'operador',
                                    'label'=>'Operador',
                                    'rules'=>'required|trim'
                                ),        
                                array(
                                    'field'=>'data',
                                    'label'=>'Data',
                                    'rules'=>'required|trim'
                                ))
                ,
                'prestadores' => array(array(
                                    'field'=>'nomePre',
                                    'label'=>'Nome',
                                    'rules'=>'required|trim'
                                ),
                                array(
                                    'field'=>'prestadorPre',
                                    'label'=>'Prestador',
                                    'rules'=>'trim'
                                ),
                                array(
                                    'field'=>'telefonePre',
                                    'label'=>'telefone',
                                    'rules'=>'required|trim'
                                ))
                ,
                'servicos' => array(array(
                                    'field'=>'nome',
                                    'label'=>'Nome',
                                    'rules'=>'required|trim'
                                ),
                                array(
                                    'field'=>'descricao',
                                    'label'=>'',
                                    'rules'=>'trim'
                                ),
                                array(
                                    'field'=>'preco',
                                    'label'=>'',
                                    'rules'=>'required|trim'
                                ))
                ,
                'produtos' => array(array(
                                    'field'=>'descricao',
                                    'label'=>'',
                                    'rules'=>'required|trim'
                                ),
                                array(
                                    'field'=>'unidade',
                                    'label'=>'Unidade',
                                    'rules'=>'required|trim'
                                ),
                                array(
                                    'field'=>'precoCompra',
                                    'label'=>'Preo de Compra',
                                    'rules'=>'required|trim'
                                ),
                                array(
                                    'field'=>'precoVenda',
                                    'label'=>'Preo de Venda',
                                    'rules'=>'required|trim'
                                ),
                                array(
                                    'field'=>'estoque',
                                    'label'=>'Estoque',
                                    'rules'=>'required|trim'
                                ),
                                array(
                                    'field'=>'estoqueMinimo',
                                    'label'=>'Estoque Mnimo',
                                    'rules'=>'trim'
                                ))
                ,
                'usuarios' => array(array(
                                    'field'=>'nome',
                                    'label'=>'Nome',
                                    'rules'=>'required|trim'
                                ),
                                
                                array(
                                    'field'=>'cpf',
                                    'label'=>'CPF',
                                    'rules'=>'required|trim|is_unique[usuarios.cpf]'
                                ),
                                array(
                                    'field'=>'email',
                                    'label'=>'Email',
                                    'rules'=>'required|trim|valid_email|is_unique[usuarios.email]'
                                ),
                                array(
                                    'field'=>'senha',
                                    'label'=>'Senha',
                                    'rules'=>'required|trim'
                                ),
                            
                                array(
                                    'field'=>'situacao',
                                    'label'=>'Situacao',
                                    'rules'=>'required|trim'
                                ))
                ,
                'os' => array(array(
                                    'field'=>'dataInicial',
                                    'label'=>'DataInicial',
                                    'rules'=>'required|trim'
                                ),
                                array(
                                    'field'=>'dataFinal',
                                    'label'=>'DataFinal',
                                    'rules'=>'trim'
                                ),
                                array(
                                    'field'=>'garantia',
                                    'label'=>'Marca',
                                    'rules'=>'trim'
                                ),
                                array(
                                    'field'=>'descricaoProduto',
                                    'label'=>'DescricaoProduto',
                                    'rules'=>'trim'
                                ),
                                array(
                                    'field'=>'status',
                                    'label'=>'Status',
                                    'rules'=>'required|trim'
                                ),
                                array(
                                    'field'=>'observacoes',
                                    'label'=>'Observacoes',
                                    'rules'=>'trim'
                                ),
                                array(
                                    'field'=>'clientes_id',
                                    'label'=>'clientes',
                                    'rules'=>'trim|required'
                                ),
                                array(
                                    'field'=>'usuarios_id',
                                    'label'=>'usuarios_id',
                                    'rules'=>'trim|required'
                                ),
                                array(
                                    'field'=>'motivo',
                                    'label'=>'Motivo',
                                    'rules'=>'trim|required'
                                ),
                                array(
                                    'field'=>'endOrigem',
                                    'label'=>'endOrigem',
                                    'rules'=>'trim|required'
                                ),
                                
                                array(
                                    'field'=>'cidade',
                                    'label'=>'Cidade',
                                    'rules'=>'trim|required'
                                ),
                                array(
                                    'field'=>'endDestino',
                                    'label'=>'Endereço de Destino',
                                    'rules'=>'trim|required'
                                ),
                                array(
                                    'field'=>'cidadeDes',
                                    'label'=>'Cidade',
                                    'rules'=>'trim|required'
                                ),
                                array(
                                    'field'=>'prestador',
                                    'label'=>'Prestador',
                                    'rules'=>'trim|required'
                                ),
                                array(
                                    'field'=>'nomeP',
                                    'label'=>'Nome',
                                    'rules'=>'trim|required'
                                ),
                                array(
                                    'field'=>'telP',
                                    'label'=>'Telefone',
                                    'rules'=>'trim|required'
                                ),
                                array(
                                    'field'=>'totKM',
                                    'label'=>'Total KM',
                                    'rules'=>'trim|required'
                                ),
                            
                                /*array(
                                    'field'=>'valKM',
                                    'label'=>'Valor KM',
                                    'rules'=>'trim|required'
                                ),*/
                                array(
                                    'field'=>'valTot',
                                    'label'=>'Valor Total',
                                    'rules'=>'trim|required'
                                ),
                                array(
                                    'field'=>'formaPagto',
                                    'label'=>'Forma de Pagamento',
                                    'rules'=>'trim|required'
                                ),
                                array(
                                    'field'=>'laudoTecnico',
                                    'label'=>'Laudo Tecnico',
                                    'rules'=>'trim'
                                ))

                  ,
                'tiposUsuario' => array(array(
                                    'field'=>'nomeTipo',
                                    'label'=>'NomeTipo',
                                    'rules'=>'required|trim'
                                ),
                                array(
                                    'field'=>'situacao',
                                    'label'=>'Situacao',
                                    'rules'=>'required|trim'
                                ))

                ,
                'receita' => array(array(
                                    'field'=>'descricao',
                                    'label'=>'Descrição',
                                    'rules'=>'required|trim'
                                ),
                                array(
                                    'field'=>'valor',
                                    'label'=>'Valor',
                                    'rules'=>'required|trim'
                                ),
                                array(
                                    'field'=>'vencimento',
                                    'label'=>'Data Vencimento',
                                    'rules'=>'required|trim'
                                ),
                        
                                array(
                                    'field'=>'cliente',
                                    'label'=>'Cliente',
                                    'rules'=>'required|trim'
                                ),
                                array(
                                    'field'=>'tipo',
                                    'label'=>'Tipo',
                                    'rules'=>'required|trim'
                                ))
                ,
                'despesa' => array(array(
                                    'field'=>'descricao',
                                    'label'=>'Descrição',
                                    'rules'=>'required|trim'
                                ),
                                array(
                                    'field'=>'valor',
                                    'label'=>'Valor',
                                    'rules'=>'required|trim'
                                ),
                                array(
                                    'field'=>'vencimento',
                                    'label'=>'Data Vencimento',
                                    'rules'=>'required|trim'
                                ),
                                array(
                                    'field'=>'fornecedor',
                                    'label'=>'Fornecedor',
                                    'rules'=>'required|trim'
                                ),
                                array(
                                    'field'=>'tipo',
                                    'label'=>'Tipo',
                                    'rules'=>'required|trim'
                                ))
                ,
                'vendas' => array(array(

                                    'field' => 'dataVenda',
                                    'label' => 'Data da Venda',
                                    'rules' => 'required|trim'
                                ),
                                array(
                                    'field'=>'clientes_id',
                                    'label'=>'clientes',
                                    'rules'=>'trim|required'
                                ),
                                array(
                                    'field'=>'usuarios_id',
                                    'label'=>'usuarios_id',
                                    'rules'=>'trim|required'
                                ))
        );

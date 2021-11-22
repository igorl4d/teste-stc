<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='/css/main.css' rel='stylesheet'>
    <title>Acessar Escola</title>
</head>

<body>
    <main>
        <div class='container-main'>
            <aside class='container-link'>
                <a href='/'>|Home /</a>
            </aside>

            <div class='container-conteudo-principal'>
                <div class='envie-sua-foto'>
                    <p>Envie Sua Foto</p>
                </div>

                <div class='flex-escola'>
                    <div class='texto-escola'>
                        <h1>
                            {{$info_escola_dashboard['info_escola']['nome']}}
                        </h1>

                        <p>
                            <strong>Código Inep:</strong> {{$info_escola_dashboard['info_escola']['codigo_inep']}}
                            &nbsp;&nbsp;&nbsp;&nbsp;<strong>CNPJ:</strong>
                            {{$info_escola_dashboard['info_escola']['cnpj']}}
                        </p>
                    </div>

                    <div class='container-status'>
                        <p>Status Da Escola:</p>

                        @if ($info_escola_dashboard['info_escola']['status'] == 'EM ATIVIDADE')
                        <span class='status-ativo'>ATIVO</span>

                        @elseif ($info_escola_dashboard['info_escola']['status'] == 'INATIVA')
                        <span class='status-inativo'>INATIVO</span>
                        @endif
                    </div>
                </div>

                <div class='container-info-escola'>
                    <div class='texto-info-escola'>
                        <p class='titulo-info-escola'>Endereço:</p>
                        <p class='subtitlo-info-escola'>{{$info_escola_dashboard['info_escola']['endereco']}}</p>
                    </div>

                    <div class='texto-info-escola'>
                        <p class='titulo-info-escola'>Bairro:</p>
                        <p class='subtitlo-info-escola'>{{$info_escola_dashboard['info_escola']['bairro']}}</p>
                    </div>

                    <div class='texto-info-escola'>
                        <p class='titulo-info-escola'>Cep:</p>
                        <p class='subtitlo-info-escola'>{{$info_escola_dashboard['info_escola']['cep']}}</p>
                    </div>

                    <div class='texto-info-escola'>
                        <p class='titulo-info-escola'>Localidade:</p>
                        <p class='subtitlo-info-escola'>{{$info_escola_dashboard['info_escola']['localidade']}}</p>
                    </div>

                    <div class='texto-info-escola'>
                        <p class='titulo-info-escola'>Telefone:</p>
                        <p class='subtitlo-info-escola'>{{$info_escola_dashboard['info_escola']['telefone']}}</p>
                    </div>

                    <div class='texto-info-escola'>
                        <p class='titulo-info-escola'>Regional:</p>
                        <p class='subtitlo-info-escola'>{{$info_escola_dashboard['info_escola']['regional']}}</p>
                    </div>

                    <div class='texto-info-escola'>
                        <p class='titulo-info-escola'>Dados Do Imovel:</p>
                        <p class='subtitlo-info-escola'>{{$info_escola_dashboard['info_escola']['dados']}}</p>
                    </div>

                    <div class='texto-info-escola'>
                        <p class='titulo-info-escola'>Tipo de Escola:</p>
                        <p class='subtitlo-info-escola'>{{$info_escola_dashboard['info_escola']['tipo_de_escola']}}</p>
                    </div>

                    <div class='texto-info-escola'>
                        <p class='titulo-info-escola'>Tipo de Ensino:</p>
                        <p class='subtitlo-info-escola'>{{$info_escola_dashboard['info_escola']['tipo_de_ensino']}}</p>
                    </div>
                </div>

                <h2>Dados Do Gestor</h2>

                <div class='container-gestor'>

                    <img src="{{ asset('assets/avatart.jpeg') }}">

                    <div class='container-texto-gestor'>
                        <div class='texto-gestor'>
                            <p class='titulo-gestor'>Nome</p>
                            <p class='subtitlo-gestor'>{{$info_escola_dashboard['info_gestor']['nome']}}</p>
                        </div>

                        <div class='texto-gestor'>
                            <p class='titulo-gestor'>Tipo</p>
                            @if ($info_escola_dashboard['info_gestor']['tipo'] == 'gestores GERAL')
                            <p class='subtitlo-gestor'>Principal</p>
                            @else
                            <p class='subtitlo-gestor'>Auxiliar</p>
                            @endif
                        </div>

                        <div class='texto-gestor'>
                            <p class='titulo-gestor'>Email</p>
                            <p class='subtitlo-gestor'>{{$info_escola_dashboard['info_gestor']['email']}}</p>
                        </div>

                        <div class='texto-gestor'>
                            <p class='titulo-gestor'>Telefone</p>
                            <p class='subtitlo-gestor'>{{$info_escola_dashboard['info_gestor']['telefone']}}</p>
                        </div>

                        <div class='texto-gestor'>
                            <p class='titulo-gestor'>Forma De Eleição</p>
                            <p class='subtitlo-gestor'>{{$info_escola_dashboard['info_gestor']['forma_selecao']}}</p>
                        </div>
                    </div>
                </div>
                <h2>Dados De Sala Fora</h2>
                <table style='width: 100%;'>
                    <tr>
                        <th>Nome</th>
                        <th>CNPJ</th>
                        <th>Localidade</th>
                        <th>Status</th>
                        <th>Gestor Auxiliar</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>

                <h2>Financeiro</h2>

                <div class='container-financeiro'>
                    <div class='item-financeiro'>Contratos E Repasses</div>
                    <div class='item-financeiro'>Prestação De Serviços</div>
                </div>

                <h2>Contratos</h2>
                <div class='container-contratos'>

                    <div class='texto-contratos'>
                        <p class='titulo-contratos'>Vigilância:</p>
                        <p class='subtitlo-contratos'>R$ {{$info_escola_dashboard['info_terceirizados']['vigilancia']}}
                        </p>
                    </div>

                    <div class='texto-contratos'>
                        <p class='titulo-contratos'>Limpeza:</p>
                        <p class='subtitlo-contratos'>R$ {{$info_escola_dashboard['info_terceirizados']['limpeza']}}</p>
                    </div>

                    <div class='texto-contratos'>
                        <p class='titulo-contratos'>Merendeira:</p>
                        <p class='subtitlo-contratos'>R$ {{$info_escola_dashboard['info_terceirizados']['merendeira']}}
                        </p>
                    </div>



                </div>

                <h2>Repasses</h2>
                <div class='container-contratos'>
                    <div class='texto-contratos'>
                        <p class='titulo-contratos repasses'>Caixa Escolar:</p>
                        <p class='subtitlo-contratos'>R$ {{$info_escola_dashboard['info_repasses']['caixa_escolar']}}
                        </p>
                    </div>

                    <div class='texto-contratos'>
                        <p class='titulo-contratos repasses'>Manutenção:</p>
                        <p class='subtitlo-contratos'>R$ {{$info_escola_dashboard['info_repasses']['manutencao']}}</p>
                    </div>

                    <div class='texto-contratos'>
                        <p class='titulo-contratos repasses'>Pagamento de Terceiros:</p>
                        <p class='subtitlo-contratos'>R$ {{$info_escola_dashboard['info_repasses']['terceiros']}}
                        </p>
                    </div>

                    <div class='texto-contratos'>
                        <p class='titulo-contratos repasses'>Outros:</p>
                        <p class='subtitlo-contratos'>R$ {{$info_escola_dashboard['info_repasses']['outros']}}
                        </p>
                    </div>
                </div>
            </div>

            <aside class='container-conteudo-aside'>

                <div class='vagas'>
                    <p class='titulo-vagas'>Vagas Na Escola</p>
                    <p class='subtitlo-vagas'>786</p>
                </div>

                <div class='tipo_de_escola'>
                    <p class='titulo-vagas'>Tipo de Escola</p>

                    @if ($info_escola_dashboard['info_escola']['tipo_de_anexo'] == 'MAE')

                    <span class='tipo_escola'>
                        <p>Anexo</p>
                    </span>
                    <span class='tipo_escola selecionado'>
                        <p>Mãe</p>
                    </span>
                    @endif
                </div>

                <div class='status-financeiro'>
                    <p class='titulo-vagas'>Status Financeiro</p>
                    <span class='adimplente'>
                        <p>Adimplente</p>
                    </span>
                </div>
            </aside>
        </div>
    </main>
</body>

</html>
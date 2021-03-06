<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['as'=> 'index', 'uses'=>'HomeController@index']);


Route::get('/downloadcsv', ['as'=> 'downloadcsv', 'uses'=>'DownloadController@downloadcsv']);

/* COMUM */

    Route::get('/construcao', function () {
        return view('Construcao.Construcao');
    });
    Route::get('/portal', function () {
        return view('comum.portal');
    });

    Route::get('/resultado', function () {
        return view('comum.resultado');
    });

    Route::get('/glossario', function () {
        return view('comum.glossario');
    });

    Route::get('/manual', function () {
        return view('comum.manual');
    });

    Route::get('/legislacao', function () {
        return view('comum.legislacao');
    });

    Route::get('/faq', function () {
        return view('comum.faq');
    });

    Route::get('/estruturaorganizacional', function () {
        return view('comum.estruturaorganizacional');
    });

    Route::get('/quemsomos', function () {
        return view('comum.quemsomos');
    });
    Route::get('/lai', function () {
        return view('comum.lai');
    });
    Route::get('/gestaofiscal/legislacao/ppa', function () {
        return view('gestaoFiscal.legislacaoOrcamentaria.ppa');
    });
    Route::get('/gestaofiscal/legislacao/ldo', function () {
        return view('gestaoFiscal.legislacaoOrcamentaria.ldo');
    });
    Route::get('/gestaofiscal/legislacao/loa', function () {
        return view('gestaoFiscal.legislacaoOrcamentaria.loa');
    });
    Route::get('/gestaofiscal/lrf/rgf', function () {
        return view('gestaoFiscal.relatorioLrf.rgf');
    });
    Route::get('/gestaofiscal/lrf/rreo', function () {
        return view('gestaoFiscal.relatorioLrf.rreo');
    });
    Route::get('/gestaofiscal/prestacaoconta', function () {
        return view('gestaoFiscal.prestacaoConta');
    });
    Route::get('/gestaofiscal/auditorias', function () {
        return view('gestaoFiscal.auditoriasInsp');
    });
    Route::get('/api', function () {
        return view('api.api');
    });
    Route::get('/apiempenhos', function () {
        return view('api.despesas.apiempenhos');
    });
    Route::get('/apinotaempenho', function () {
        return view('api.despesas.apiempenhonota');
    });
    Route::get('/apiliquidacao', function () {
        return view('api.despesas.apiliquidacao');
    });
    Route::get('/apinotaliquidacao', function () {
        return view('api.despesas.apiliquidacaonota');
    });
    Route::get('/apipagamento', function () {
        return view('api.despesas.apipagamentos');
    });
    Route::get('/apinotapagamento', function () {
        return view('api.despesas.apipagamentonota');
    });
    Route::get('/apirestopagar', function () {
        return view('api.despesas.apirestopagar');
    });
    Route::get('/apinotarestopagar', function () {
        return view('api.despesas.apirestopagarnota');
    });
    Route::get('/apiarrecadada', function () {
        return view('api.receitas.apiarrecadada');
    });
    Route::get('/apilicandamento', function () {
        return view('api.licitacoes.apiandamento');
    });
    Route::get('/apicontratos', function () {
        return view('api.licitacoes.apicontratos');
    });
    Route::get('/apibensadquiridos', function () {
        return view('api.licitacoes.apibensprodutos');
    });
    Route::get('/apialmoxarifado', function () {
        return view('api.patrimonios.apialmoxarifado');
    });
    Route::get('/apibensmoveis', function () {
        return view('api.patrimonios.apibensmoveis');
    });
    Route::get('/apiservidoresnome', function () {
        return view('api.pessoal.apiservidoresnome');
    });
    Route::get('/apiservidormatricula', function () {
        return view('api.pessoal.apiservidormatricula');
    });
    Route::get('/apifolhapagamento', function () {
        return view('api.pessoal.apifolhapagamento');
    });
    Route::get('/apiconveniorecebidos', function () {
        return view('api.convenios.apirecebidos');
    });
    Route::get('/apiconvenioconcedidos', function () {
        return view('api.convenios.apiconcedidos');
    });
/* FIM COMUM */

/*Organograma*/
    Route::get('/gestaoestrategica', function () {
        return view('organograma.gestaoestrategica');
    });
/*Fim Organograma*/

/* CHAMADAS AJAX */
    /* Nota Completa */
    Route::get('/showNota', ['as' => 'rota.consulta.showNota', 'uses' => 'ConsultasController@showNota']);

    // Fornecedor Completo
    Route::get('/showFornecedor', ['as' => 'rota.consulta.showFornecedor', 'uses' => 'ConsultasController@showFornecedor']);
    
/* FIM CHAMADAS AJAX */

/* MENU */
    Route::get('/menu', ['as'=> 'menu', 'uses'=>'AuxController@menu']);
/* FIM MENU */

/*Download*/
    Route::get('download/pca/{pasta1}/{pasta2}/{pasta3}', ['uses' => 'GestaoFiscal\PrestacaoContasController@abrirArquivo']);
    Route::get('download/{nomeArquivo}', ['as' => 'download', 'uses' => 'DownloadController@download']);

/*Fim Download*/

/* RECEITAS */
    Route::get('/receitas/recebimentos/orgao', 'Receitas\ReceitasController@FiltroOrgao');
    Route::post('/receitas/recebimentos/orgao', 'Receitas\ReceitasController@orgao');
    Route::get('/receitas/recebimentos/orgao/{dataini}/{datafim}/{orgao}', ['as'=> 'MostrarReceitasOrgao', 'uses'=>'Receitas\ReceitasController@MostrarReceitasOrgao']);
    Route::get('/receitas/recebimentos/orgao/{dataini}/{datafim}/{orgao}/{categoria}', ['as'=> 'MostrarReceitasOrgaoCategoria', 'uses'=>'Receitas\ReceitasController@MostrarReceitasOrgaoCategoria']);
    Route::get('/receitas/recebimentos/orgao/{dataini}/{datafim}/{orgao}/{categoria}/{especie}', ['as'=> 'MostrarReceitasOrgaoCategoriaEspecie', 'uses'=>'Receitas\ReceitasController@MostrarReceitasOrgaoCategoriaEspecie']);

    Route::get('/receitas/recebimentos/categoria', 'Receitas\ReceitasController@FiltroCategoria');
    Route::post('/receitas/recebimentos/categoria', 'Receitas\ReceitasController@categoria');
    Route::get('/receitas/recebimentos/categoria/{dataini}/{datafim}/{categoria}', ['as'=> 'MostrarReceitasCategoria', 'uses'=>'Receitas\ReceitasController@MostrarReceitasCategoria']);
    Route::get('/receitas/recebimentos/categoria/{dataini}/{datafim}/{categoria}/{especie}', ['as'=> 'MostrarReceitasCategoriaEspecie', 'uses'=>'Receitas\ReceitasController@MostrarReceitasCategoriaEspecie']);

    Route::get('/receitas/showReceita', ['as'=> 'ShowReceita', 'uses'=>'Receitas\ReceitasController@ShowReceita']);
/* FIM RECEITAS */

/* CONTRATOS */

    

/* FIM CONTRATOS */

/*licitacoes e contratos*/
    Route::group(['prefix' => 'licitacoescontratos'], function () {
        Route::get('/andamento/orgao', ['as' => 'filtroOrgao','uses' =>'LicitacoesContratos\LicitacoesAndamentoController@MostrarLicitacaoAndamento']);
        Route::get('/andamento/ShowLicitacaoAndamento', ['as'=> 'ShowLicitacaoAndamento', 'uses'=> 'LicitacoesContratos\LicitacoesAndamentoController@ShowLicitacaoAndamento']);
        Route::get('/andamento/download/{id}', ['as'=> 'DownloadLicitacaoAndamento', 'uses'=> 'LicitacoesContratos\LicitacoesAndamentoController@DownloadLicitacaoAndamento']);

        Route::get('/concluida/orgao', ['as'=> 'filtroOrgao', 'uses'=> 'LicitacoesContratos\LicitacoesConcluidasController@MostrarLicitacaoConcluida']);
        Route::get('/andamento/download/{id}', ['as'=> 'DownloadLicitacaoAndamento', 'uses'=> 'LicitacoesContratos\LicitacoesAndamentoController@DownloadLicitacaoAndamento']);
        Route::get('/andamento/download/{id}', ['as'=> 'DownloadLicitacaoAndamento', 'uses'=> 'LicitacoesContratos\LicitacoesAndamentoController@DownloadLicitacaoAndamento']);

        Route::get('/contratos', 'LicitacoesContratos\ContratosController@ListarContratos');
        Route::get('/contratos/ShowContrato', ['as'=> 'ShowContrato', 'uses'=> 'LicitacoesContratos\ContratosController@ShowContrato']);
        Route::get('/contratos/Download/{id}', ['as'=> 'DownloadContrato', 'uses'=> 'LicitacoesContratos\ContratosController@DownloadContrato']);

        Route::get('/bensadquiridos/orgao', ['as' => 'filtroProdutosAdquirido','uses' =>'LicitacoesContratos\ProdutosAdquiridosController@montarFiltroProdutosAdquiridos']);
        Route::post('/bensadquiridos/orgao', 'LicitacoesContratos\ProdutosAdquiridosController@Filtrar');
        Route::get('/bensadquiridos/orgao/{orgao}', ['as'=> 'BensAdquiridosOrgao', 'uses'=>'LicitacoesContratos\ProdutosAdquiridosController@FiltrarProdutosAdquiridos']);
        Route::get('/bensadquiridos/ShowbensAdquiridos', ['as'=> 'ShowBensAdquiridos', 'uses'=> 'LicitacoesContratos\ProdutosAdquiridosController@ShowBemAdquirido']);
    });
/*fim licitacoes e contratos*/

 /*Convenios*/
    Route::group(['prefix' => 'convenios'], function () {
        Route::get('/cedidos/todos', ['as' => 'filtroOrgao','uses' =>'Convenios\ConveniosCedidosController@MostrarConveniosRecebidos']);
        Route::get('/cedidos/ShowConvenioCedido', ['as'=> 'ShowConvenioCedido', 'uses'=> 'Convenios\ConveniosCedidosController@ShowConvenioCedido']);
        Route::get('/cedidos/download/{id}', ['as'=> 'DownloadConveioCedido', 'uses'=> 'Convenios\ConveniosCedidosController@DownloadConveniosCedidos']);

        Route::get('/recebidos/todos', ['as'=> 'filtroConvenioRecebido', 'uses'=> 'Convenios\ConveniosRecebidosController@MostrarConveniosRecebidos']);
        Route::get('/recebidos/ShowConvenioRecebido', ['as'=> 'ShowConvenioRecebido', 'uses'=> 'Convenios\ConveniosRecebidosController@ShowConvenioRecebido']);
        Route::get('/recebidos/download/{id}', ['as'=> 'DownloadConveioRecebido', 'uses'=> 'Convenios\ConveniosRecebidosController@DownloadConveniosRecebido']);
    });
 /* fim*/


/* PESSOAL */
    /* SERVIDORES */
        Route::get('/servidores/nome', 'Pessoal\ServidoresController@FiltroNome');
        Route::post('/servidores/nome', 'Pessoal\ServidoresController@nome');
        Route::get('/servidores/nome/{nome}/situacao/{situacao}', ['as'=> 'MostrarServidoresNome', 'uses'=>'Pessoal\ServidoresController@MostrarServidoresNome']);
        Route::get('/servidores/orgao', 'Pessoal\ServidoresController@FiltroOrgao');
        Route::post('/servidores/orgao', 'Pessoal\ServidoresController@orgao');
        Route::get('/servidores/orgao/{orgao}/situacao/{situacao}', ['as'=> 'MostrarServidoresOrgao', 'uses'=>'Pessoal\ServidoresController@MostrarServidoresOrgao']);        
        Route::get('/servidores/cargofuncao', 'Pessoal\ServidoresController@FiltroCargoFuncao');
        Route::post('/servidores/cargofuncao', 'Pessoal\ServidoresController@cargofuncao');
        Route::get('/servidores/cargofuncao/{cargofuncao}/situacao/{situacao}', ['as'=> 'MostrarCargoFuncao', 'uses'=>'Pessoal\ServidoresController@MostrarCargoFuncao']);
        Route::get('/servidores/cargofuncao/{cargofuncao}/situacao/{situacao}/servidores', ['as'=> 'MostrarServidoresCargoFuncao', 'uses'=>'Pessoal\ServidoresController@MostrarServidoresCargoFuncao']);
        Route::get('/servidores/matricula', function () {
            return view('pessoal/servidores.filtroMatricula');
        });
        Route::post('/servidores/matricula', 'Pessoal\ServidoresController@matricula');
        Route::get('/servidores/matricula/{matricula}', ['as'=> 'MostrarServidoresMatricula', 'uses'=>'Pessoal\ServidoresController@MostrarServidoresMatricula']);
        
        Route::get('/servidores/ShowServidor', ['as'=> 'ShowServidor', 'uses'=>'Pessoal\ServidoresController@showServidor']);
    /* FIM SERVIDORES */

    /* ESTRUTURA DE PESSOAL */
        Route::get('/estruturapessoal', 'Pessoal\EstruturaPessoalController@CargosFuncoes');
        Route::get('/estruturapessoal/ShowCargoFuncao', ['as'=> 'ShowCargoFuncao', 'uses'=>'Pessoal\EstruturaPessoalController@showCargoFuncao']);
     /* FIM ESTRUTURA DE PESSOAL */

    /* FOLHA DE PAGAMENTO */
        Route::get('/folhadepagamento/matricula', function () {
            return view('pessoal/folhapagamento.filtroMatricula');
        });
        Route::post('/folhadepagamento/matricula', 'Pessoal\FolhaPagamentoController@matricula');
        Route::get('/folhadepagamento/matricula/{matricula}',
                    ['as'=> 'MostrarPagamentos', 'uses'=>'Pessoal\FolhaPagamentoController@MostrarPagamentos']);
        Route::get('/folhadepagamento/ShowPagamento', ['as'=> 'ShowPagamento', 'uses'=>'Pessoal\FolhaPagamentoController@ShowPagamento']);

    /* FIM FOLHA DE PAGAMENTO */

        Route::get('/concursos', function () {
            return view('pessoal.concursos');
        });
/* FIM PESSOAL */


/*Patrimonio*/
    /*Bens móveis*/
        Route::get('/patrimonios/bensmoveis/orgao', 'Patrimonio\BensMoveisController@FiltroOrgao');
        Route::post('/patrimonios/bensmoveis/orgao', 'Patrimonio\BensMoveisController@orgao');
        Route::get('/patrimonios/bensmoveis/orgao/{orgao}', ['as'=> 'BensOrgao', 'uses'=>'Patrimonio\BensMoveisController@BensOrgao']);
        Route::get('/patrimonios/bensmoveis/orgao/{orgao}/{tipo}', ['as'=> 'BensOrgaoTipo', 'uses'=>'Patrimonio\BensMoveisController@BensOrgaoTipo']);

        Route::get('/patrimonios/bensmoveis/numeropatrimonio', function () {
            return view('patrimonio.BensMoveis.filtroNumeroPatrimonio');
        });
        Route::post('/patrimonios/bensmoveis/numeropatrimonio', 'Patrimonio\BensMoveisController@numeroPatrimonio');
        Route::get('/patrimonios/bensmoveis/numeropatrimonio/{numeropatrimonio}', ['as'=> 'BensNumeroPatrimonio', 'uses'=>'Patrimonio\BensMoveisController@BensNumeroPatrimonio']);

        Route::get('/patrimonios/bensmoveis/ShowBensMoveis', ['as'=> 'ShowBemMovel', 'uses'=>'Patrimonio\BensMoveisController@ShowBemMovel']);
    /*Bens móveis*/

    /*Almoxarifado*/
        Route::group(['prefix' => 'patrimonios/almoxarifado'], function () {
            Route::post('/porAlmoxarifado', 'Patrimonio\AlmoxarifadoController@filtrar')->name('filtrarAlmoxarifado');
            Route::get('/porAlmoxarifado', ['as' => 'filtroAlmoxarifado','uses' =>'Patrimonio\AlmoxarifadoController@montarFiltroAlmoxarifado']);
            Route::get('/porAlmoxarifado/{tipoConsulta}', ['as'=> 'filtroAlmoxarifado2', 'uses'=>'Patrimonio\AlmoxarifadoController@FiltrarAlmoxarifado']);
            Route::get('/ShowAlmoxarifado', ['as'=> 'ShowAlmoxarifado', 'uses'=>'Patrimonio\AlmoxarifadoController@ShowAlmoxarifado']);
        });
    /*fim licitacoes em adamento*/

/*Fim Patrimonio*/

/*Obras*/
        Route::get('/obras', 'Obras\ObrasController@listarObras');
        Route::get('/obras/showobra', ['as' => 'ShowObra','uses' =>'Obras\ObrasController@ShowObra']);
/*Fim Obras*/

/*Api */
        Route::group(['prefix' => 'api'], function () {
    
            //Despesas
            Route::get('/despesas/empenhos/{dataInicial}/{dataFinal}', ['uses'=>'API\ApiDespesasController@empenhos']);
            Route::get('/despesas/notaempenho/{numeronota}/{ano}', ['uses'=>'API\ApiDespesasController@notaEmpenho']);
            Route::get('/despesas/liquidacao/{dataInicial}/{dataFinal}', ['uses'=>'API\ApiDespesasController@liquidacoes']);
            Route::get('/despesas/notaliquidacao/{numeronota}/{ano}', ['uses'=>'API\ApiDespesasController@notaLiquidacao']);
            Route::get('/despesas/pagamentos/{dataInicial}/{dataFinal}', ['uses'=>'API\ApiDespesasController@pagamentos']);
            Route::get('/despesas/notapagamentos/{numeronota}/{ano}', ['uses'=>'API\ApiDespesasController@notaPagamento']);
            Route::get('/despesas/restospagar/{dataInicial}/{dataFinal}', ['uses'=>'API\ApiDespesasController@restospagar']);
            Route::get('/despesas/notarestopagar/{numeronota}/{ano}', ['uses'=>'API\ApiDespesasController@notaRestoPagar']);

            //Receitas
            Route::get('/receitas/arrecadadas/{dataInicial}/{dataFinal}', ['uses'=>'API\ApiReceitasController@arrecadadas']);

            //Licitacoes e Contratos
            Route::get('/licitacoescontratos/licandamento/{dataInicial}/{dataFinal}', ['uses'=>'API\ApiLicContratosController@andamento']);
            Route::get('/licitacoescontratos/contratos', ['uses'=>'API\ApiLicContratosController@contratos']);
            Route::get('/licitacoescontratos/bensadquiridos/{dataInicial}/{dataFinal}', ['uses'=>'API\ApiLicContratosController@bens']);

            //Patrimonio
            Route::get('/patrimonios/almoxarifado', ['uses'=>'API\ApiPatrimoniosController@almoxarifado']);
            Route::get('/patrimonios/bensmoveis', ['uses'=>'API\ApiPatrimoniosController@bensmoveis']);
    
            //Pessoal
            Route::get('/pessoal/servidores/nome/{nome}', ['uses'=>'API\ApiPessoalController@servidoresnome']);
            Route::get('/pessoal/servidores/matricula/{matricula}', ['uses'=>'API\ApiPessoalController@servidormatricula']);
            Route::get('/pessoal/servidores/pagamento/{matricula}', ['uses'=>'API\ApiPessoalController@pagamento']);

            //convenios
            Route::get('/convenios/concedidos', ['uses'=>'API\ApiConveniosController@concedidos']);
            Route::get('/convenios/recebidos', ['uses'=>'API\ApiConveniosController@recebidos']);
        });
/* FIm API */

/*Almoxarifado*/
        Route::group(['prefix' => 'patrimonios/almoxarifado'], function () {
            Route::post('/porAlmoxarifado', 'Patrimonio\AlmoxarifadoController@filtrar')->name('filtrarAlmoxarifado');
            Route::get('/porAlmoxarifado', ['as' => 'filtroAlmoxarifado','uses' =>'Patrimonio\AlmoxarifadoController@montarFiltroAlmoxarifado']);
            Route::get('/porAlmoxarifado/{tipoConsulta}', ['as'=> 'filtroAlmoxarifado2', 'uses'=>'Patrimonio\AlmoxarifadoController@FiltrarAlmoxarifado']);
            Route::get('/ShowAlmoxarifado', ['as'=> 'ShowAlmoxarifado', 'uses'=>'Patrimonio\AlmoxarifadoController@ShowAlmoxarifado']);
        });
/*fim licitacoes em adamento*/

/*dados abertos*/
        Route::group(['prefix' => 'dadosabertos'], function () {
            Route::get('/despesas', function () {
                return view('dadosAbertos.despesas');
            });
            Route::post('/despesa/empenhos', 'Download\DownloadDespesaController@empenho');
            Route::get('/despesa/empenhos/{datainicio}/{datafim}', ['as' => 'downloadEmpenho','uses' =>'Download\DownloadDespesaController@downloadEmpenho']);
            Route::post('/despesa/liquidacoes', 'Download\DownloadDespesaController@liquidacao');
            Route::get('/despesa/liquidacoes/{datainicio}/{datafim}', ['as' => 'downloadLiquidacao','uses' =>'Download\DownloadDespesaController@downloadLiquidacao']);
            Route::post('/despesa/pagamentos', 'Download\DownloadDespesaController@pagamento');
            Route::get('/despesa/pagamentos/{datainicio}/{datafim}', ['as' => 'downloadPagamento','uses' =>'Download\DownloadDespesaController@downloadPagamento']);
            Route::post('/despesa/restospagar', 'Download\DownloadDespesaController@restoPagar');
            Route::get('/despesa/restoaspagar/{datainicio}/{datafim}', ['as' => 'downloadRestoPagar','uses' =>'Download\DownloadDespesaController@downloadRestoPagar']);

            Route::get('/receitas', function () {
                return view('dadosAbertos.receitas');
            });
            Route::post('/receitas/arrecadadas', 'Download\DownloadReceitasController@arrecadada');
            Route::get('/receitas/arrecadadas/{datainicio}/{datafim}', ['as' => 'downloadArrecadada','uses' =>'Download\DownloadReceitasController@downloadArrecadada']);

            Route::get('/licitacoescontratos', function () {
                return view('dadosAbertos.licitacoescontratos');
            });
            Route::post('/licitacoescontratos/andamento', 'Download\DownloadLicitacoesContratosController@andamento');
            Route::get('/licitacoescontratos/andamento/{datainicio}/{datafim}', ['as' => 'downloadAndamento','uses' =>'Download\DownloadLicitacoesContratosController@downloadAndamento']);
            Route::post('/licitacoescontratos/contrato', 'Download\DownloadLicitacoesContratosController@contrato');
            Route::get('/licitacoescontratos/contrato', ['as' => 'downloadContrato','uses' =>'Download\DownloadLicitacoesContratosController@downloadContrato']);
            Route::post('/licitacoescontratos/bensadquiridos', 'Download\DownloadLicitacoesContratosController@bensAdquiridos');
            Route::get('/licitacoescontratos/bensadquiridos/{datainicio}/{datafim}', ['as' => 'downloadBensAdquirido','uses' =>'Download\DownloadLicitacoesContratosController@downloadBensAdquiridos']);

            Route::get('/patrimonios', function () {
                return view('dadosAbertos.patrimonios');
            });
            Route::post('/patrimonios/almoxarifado', 'Download\DownloadPatrimoniosController@almoxarifado');
            Route::get('/patrimonios/almoxarifado', ['as' => 'downloadAlmoxarifado','uses' =>'Download\DownloadPatrimoniosController@downloadAlmoxarifado']);
            Route::post('/patrimonios/bensmoveis', 'Download\DownloadPatrimoniosController@bensMoveis');
            Route::get('/patrimonios/bensmoveis', ['as' => 'downloadBensMoveis','uses' =>'Download\DownloadPatrimoniosController@downloadBensMoveis']);

            Route::get('/pessoal', function () {
                return view('dadosAbertos.pessoal');
            });
            Route::post('/pessoal/servidores', 'Download\DownloadPessoalController@servidor');
            Route::get('/pessoal/servidores/{nome}', ['as' => 'downloadServidor','uses' =>'Download\DownloadPessoalController@downloadServidor']);
            Route::post('/pessoal/folhapagamento', 'Download\DownloadPessoalController@folhapagamento');
            Route::get('/pessoal/folhapagamento/{mes}/{ano}', ['as' => 'downloadFolhaPagamento','uses' =>'Download\DownloadPessoalController@downloadFolhaPagamento']);


            Route::get('/convenios', function () {
                return view('dadosAbertos.convenios');
            });
            Route::post('/convenios/recebidos', 'Download\DownloadConveniosController@recebidos');
            Route::get('/convenios/recebidos', ['as' => 'downloadRecebidos','uses' =>'Download\DownloadConveniosController@downloadRecebidos']);
            Route::post('/convenios/cedidos', 'Download\DownloadConveniosController@cedidos');
            Route::get('/convenios/cedidos', ['as' => 'downloadCedidos','uses' =>'Download\DownloadConveniosController@downloadCedidos']);
        });
/*dados abertos*/

/* FILTROS */
        Route::post('/filtro', 'FiltroController@filtrar')->name('filtrar');
        Route::get('{consulta}', ['as'=> 'filtroConsulta', 'uses'=>'FiltroController@consulta']);
        Route::get('{consulta}/{subconsulta?}', ['as'=> 'filtroSubconsulta', 'uses'=>'FiltroController@subConsulta']);
        Route::get('{consulta}/{subconsulta?}/{tipoConsulta?}', ['as'=> 'filtroIndex', 'uses'=>'FiltroController@index']);
/* FIM FILTROS */

/* CONSULTAS */
        Route::get('{consulta}/{subconsulta}/{tipoFiltro}/{nivel1?}', ['as' => 'rota.consulta', 'uses' => 'ConsultasController@index']);
        Route::get('{consulta}/{subconsulta}/{tipoFiltro}/{nivel1?}/{nivel2?}', ['as' => 'rota.consulta', 'uses' => 'ConsultasController@index']);
        Route::get('{consulta}/{subconsulta}/{tipoFiltro}/{nivel1?}/{nivel2?}/{nivel3?}', ['as' => 'rota.consulta', 'uses' => 'ConsultasController@index']);
        Route::get('{consulta}/{subconsulta}/{tipoFiltro}/{nivel1?}/{nivel2?}/{nivel3?}/{nivel4?}', ['as' => 'rota.consulta', 'uses' => 'ConsultasController@index']);
/* FIM CONSULTAS */

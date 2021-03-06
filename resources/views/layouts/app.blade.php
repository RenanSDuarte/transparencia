<html>
    <head>
        <title>Transparência - @yield('htmlheader_title') </title>
		@section('htmlheader')
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">			
			<meta name="theme-color" content="#007EBC">
			<title>Transparencia - @yield('htmlheader_title')</title>
			<!-- Tell the browser to be responsive to screen width -->
			<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
			<!-- Bootstrap 3.3.6 -->
			<link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}" />
			
			<!-- Font Awesome -->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
			<!-- Ionicons -->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
			
			@section('cssheader')
			@show

            <!-- Theme style -->
            <link rel="stylesheet" href="{{ asset('/dist/css/AdminLTE.min.css') }}">
            <!-- AdminLTE Skins. Choose a skin from the css/skins
                folder instead of downloading all of them to reduce the load. -->
            <link rel="stylesheet" href="{{ asset('/dist/css/skins/_all-skins.min.css') }}">
        @show
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="{{ ('/') }}" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini"><b>T</b></span>
				<!-- logo for regular state and mobile devices -->
				<!--<span class="logo-lg"><b>Transparência</b></span>-->
				<span class="logo-lg">
					<img src="/img/logo.png" class="img-responsive img-center"  alt="Cachoeiro De Itapemirim">
				</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
			<h1 id="NomeHeader" class="text-center">Prefeitura Municipal de Cachoeiro <br/>Portal da Transparência</h1>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar" style="height: auto;">
            <!-- search form -->
            <form action="/resultado" method="get" class="sidebar-form" id="cse-search-box">
                <div class="input-group">
				<input type="hidden" name="cx" value="010719052729445061611:ntj0aehspma" />
				<input type="hidden" name="cof" value="FORID:10" />
				<input type="hidden" name="ie" value="utf-8" />
                <input type="text" name="q" class="form-control" placeholder="Pesquisar...">
                    <span class="input-group-btn">
                        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- Sidebar Menu -->
				<ul class="sidebar-menu">					
					<!--Home-->
					<li id="Home" class="active">
						<a href="{{ ('/') }}">
							<i class="fa fa-home"></i>
							<span>Home</span>
						</a>
					</li>
					<!--O Portal-->
					<li id="Portal" class="treeview">
						<a href="#">
							<i class="fa fa-info-circle"></i>
							<span>O Portal</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu itens">
							<li id="InfoGerais" class='treeview'>
								<a href="#">Informações Gerais<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
								</a>
								<ul class="treeview-menu itens">
									<li id="OqueTem">
										<a href="/portal">O que tem no Portal</a>
									</li>
									<li id="LAI">
										<a href="/lai">Sobre a LAI</a>
									</li>
									<li id="EstrutOrg">
										<a href="/estruturaorganizacional">Estrutura Organizacional</a>
									</li>
								</ul>
							</li>
							<li id="Glossario">
								<a href="{{ ('/glossario') }}">Glossário</a>
							</li>
							<!--<li>
								<a href="{{ ('/manual') }}">Manual de Navegação</a>
							</li>-->
							<li id="Legislacao">
								<a href="{{ ('/legislacao') }}">Legislação</a>
							</li>
							<li id="Faq">
								<a href="{{ ('/faq') }}">Perguntas Frequentes</a>
							</li>

							<li id="QuemSomos">
								<a href="{{ ('/quemsomos') }}">Quem Somos</a>
							</li>
						</ul>
					</li>
					<!--Despesas-->
					<li id="Despesas" class="treeview">
						<a href="#">
							<i class="fa fa-area-chart"></i>
							<span>Despesas</span>
							<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
						</a>
						<ul class="treeview-menu itens">
						   <!--Empenhos-->
							<li id="Empenhos" class="treeview">
								<a href="#">
									<span>Empenhos</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
								</a>
								<ul class="treeview-menu itens">
									<li id="EmpenhosOrgaos">
										<a href="{{route('filtroIndex', ['consulta' => 'despesas','subConsulta' => 'empenhos','tipoConsulta' => 'orgaos'])}}">Por Órgão</a>
									</li>
									<li id="EmpenhosFornecedores">
										<a href="{{route('filtroIndex', ['consulta' => 'despesas','subConsulta' => 'empenhos','tipoConsulta' => 'fornecedores'])}}">Por Fornecedor</a>
									</li>
									<li id="EmpenhosFuncoes">
										<a href="{{route('filtroIndex', ['consulta' => 'despesas','subConsulta' => 'empenhos','tipoConsulta' => 'funcoes'])}}">Por Função</a>
									</li>
									<li id="EmpenhosElementos">
										<a href="{{route('filtroIndex', ['consulta' => 'despesas','subConsulta' => 'empenhos','tipoConsulta' => 'elementos'])}}">Por Elemento de Despesa</a>
									</li>
									<li id="EmpenhosNota">
										<a href="{{route('filtroIndex', ['consulta' => 'despesas','subConsulta' => 'empenhos','tipoConsulta' => 'nota'])}}">Por Nota de Empenho</a>
									</li>
								</ul>
							</li>
							<!--Liquidações-->
							<li id="Liquidacoes" class="treeview">
								<a href="#">
									<span>Liquidações</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
								</a>
								<ul class="treeview-menu itens">
									<li id="LiquidacoesOrgaos">
										<a href="{{route('filtroIndex', ['consulta' => 'despesas','subConsulta' => 'liquidacoes','tipoConsulta' => 'orgaos'])}}">Por Órgão</a>
									</li>
									<li id="LiquidacoesFornecedores">
										<a href="{{route('filtroIndex', ['consulta' => 'despesas','subConsulta' => 'liquidacoes','tipoConsulta' => 'fornecedores'])}}">Por Fornecedor</a>
									</li>
									<li id="LiquidacoesFuncoes">
										<a href="{{route('filtroIndex', ['consulta' => 'despesas','subConsulta' => 'liquidacoes','tipoConsulta' => 'funcoes'])}}">Por Função</a>
									</li>
									<li id="LiquidacoesElementos">
										<a href="{{route('filtroIndex', ['consulta' => 'despesas','subConsulta' => 'liquidacoes','tipoConsulta' => 'elementos'])}}">Por Elemento de Despesa</a>
									</li>
									<li id="LiquidacoesNota">
										<a href="{{route('filtroIndex', ['consulta' => 'despesas','subConsulta' => 'liquidacoes','tipoConsulta' => 'nota'])}}">Por Nota de Liquidação</a>
									</li>
								</ul>
							</li>
							<!--Pagamentos-->
                                <li id="Pagamentos" class="treeview">
								<a href="#">
									<span>Pagamentos</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
								</a>
								<ul class="treeview-menu itens">
									<li id="PagamentosOrgaos">
										<a href="{{route('filtroIndex', ['consulta' => 'despesas','subConsulta' => 'pagamentos','tipoConsulta' => 'orgaos'])}}">Por Órgão</a>
									</li>
									<li id="PagamentosFornecedores">
										<a href="{{route('filtroIndex', ['consulta' => 'despesas','subConsulta' => 'pagamentos','tipoConsulta' => 'fornecedores'])}}">Por Fornecedor</a>
									</li>
									<li id="PagamentosFuncoes">
										<a href="{{route('filtroIndex', ['consulta' => 'despesas','subConsulta' => 'pagamentos','tipoConsulta' => 'funcoes'])}}">Por Função</a>
									</li>
									<li id="PagamentosElementos">
										<a href="{{route('filtroIndex', ['consulta' => 'despesas','subConsulta' => 'pagamentos','tipoConsulta' => 'elementos'])}}">Por Elemento de Despesa</a>
									</li>
									<li id="PagamentosNota">
										<a href="{{route('filtroIndex', ['consulta' => 'despesas','subConsulta' => 'pagamentos','tipoConsulta' => 'nota'])}}">Por Nota de Pagamento</a>
									</li>
								</ul>
							</li>
							<!--Restos a Pagar-->
							<li id="Restos-A-Pagar" class="treeview">
								<a href="#">
									<span>Restos a Pagar</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
								</a>
								<ul class="treeview-menu itens">
									<li id="RestosOrgaos">
										<a href="{{route('filtroIndex', ['consulta' => 'despesas','subConsulta' => 'restosapagar','tipoConsulta' => 'orgaos'])}}">Por Órgão</a>
									</li>
									<li id="RestosFornecedores">
										<a href="{{route('filtroIndex', ['consulta' => 'despesas','subConsulta' => 'restosapagar','tipoConsulta' => 'fornecedores'])}}">Por Fornecedor</a>
									</li>
									<li id="RestosFuncoes">
										<a href="{{route('filtroIndex', ['consulta' => 'despesas','subConsulta' => 'restosapagar','tipoConsulta' => 'funcoes'])}}">Por Função</a>
									</li>
									<li id="RestosElementos">
										<a href="{{route('filtroIndex', ['consulta' => 'despesas','subConsulta' => 'restosapagar','tipoConsulta' => 'elementos'])}}">Por Elemento de Despesa</a>
									</li>
									<li id="RestosNota">
										<a href="{{route('filtroIndex', ['consulta' => 'despesas','subConsulta' => 'restosapagar','tipoConsulta' => 'nota'])}}">Por Nota de resto a Pagar</a>
									</li>
								</ul>
							</li>
						</ul>
							
					<!--Receitas-->
					<li id="Receitas" class="treeview">
						<a href="#">
							<i class="fa fa-line-chart"></i>
							<span>Receitas</span>
							<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
						</a>
						<!--Lançamentos-->
						<ul class="treeview-menu itens">
							<!--<li id="Lancamentos" class="treeview">
								<a href="#">
									<span>Lançada</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
								</a>
								<ul class="treeview-menu itens">
									<li id="LancamentosOrgao">
										<a href="/construcao">Por Órgão</a>
									</li>
									<li id="LancamentosCatedoria">
										<a href="/construcao">Por Categoria</a>
									</li>
								</ul>
							</li>-->
						<!--Recebimentos-->
							<li id="Recebimentos" class="treeview">
								<a href="#">
									<span>Arrecadada</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
								</a>
								<ul class="treeview-menu itens">
									<li id="RecebimentosOrgao">
										<a href="/receitas/recebimentos/orgao">Por Órgão</a>
									</li>
									<li id="RecebimentosCategoria">										
										<a href="/receitas/recebimentos/categoria">Por Categoria</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<!--Licitações e Contratos-->
					<li id="LicitacoesContratos" class="treeview">
						<a href="#">
							<i class="fa fa-shopping-cart"></i>
							<span>Licitações e Contratos</span>
							<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
						</a>
						<ul class="treeview-menu itens">
							<li id="LCAndamento">
								<a href="/licitacoescontratos/andamento/orgao">Licitações em Andamento</a>
							</li>
							<!-- Corrigi depois do lançamento
							<li id="LCConcluido">  
								<a href="/construcao">Licitações Concluídas</a>
							</li>-->
							<li id="LCContratos">
								<a href="/licitacoescontratos/contratos">Contratos</a>
							</li>
							<li id="LCBensAdquiridos">
								<a href="/licitacoescontratos/bensadquiridos/orgao">Bens e Produtos Adquiridos</a>
							</li>
						</ul>
					</li>
					<!--Gestão Fiscal-->
					<li id="GestaoFiscal" class="treeview">
						<a href="#">
							<i class="fa fa-exclamation-triangle"></i>
							<span>Gestão Fiscal</span>
							<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
						</a>
						<!--Registro Orçamentário-->
						<ul class="treeview-menu itens">
							<li id="LegislacaoOrc" class="treeview">
								<a href="#">
									<span>Legislação Orçamentária</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
								</a>
								<ul class="treeview-menu itens">
									<li id="PPA">
										<a href="/gestaofiscal/legislacao/ppa">PPA</a>
									</li>
									<li id="LDO">
										<a href="/gestaofiscal/legislacao/ldo">LDO</a>
									</li>
									<li id="LOA">
										<a href="/gestaofiscal/legislacao/loa">LOA</a>
									</li>
								</ul>
							</li>
						<!--Relatório LRF-->
							<li id="LRF" class="treeview">
								<a href="#">
									<span>Relatórios da LRF</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
								</a>
								<ul class="treeview-menu itens">
									<li id="RGF">
										<a href="/gestaofiscal/lrf/rgf">RGF</a>
									</li>
									<li id="RREO">
										<a href="/gestaofiscal/lrf/rreo">RREO</a>
									</li>
								</ul>
							</li>
							<li id="PrestacaoConta">
								<a href="/gestaofiscal/prestacaoconta">Prestações de Contas</a>
							</li>							
							<li id="AuditoriasInsp">
								<a href="/gestaofiscal/auditorias/">Auditorias e Inspeções</a>
							</li>
						</ul>
					</li>
					<!--Patrimônio-->
					<li id="Patrimonios" class="treeview">
						<a href="#">
							<i class="fa fa-institution"></i>
							<span>Patrimônio</span>
							<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
						</a>
						<ul class="treeview-menu itens">
							<li id="Almoxarifado">
								<a href="/patrimonios/almoxarifado/porAlmoxarifado">Almoxarifado</a>
							</li>
							<li id="BensMoveis" class="treeview">
								<a href="#">
								<span>Bens Móveis</span>
								<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
								</a>
								<ul class="treeview-menu itens">
									<li id="BensMovOrgao">
										<a href="{{'/patrimonios/bensmoveis/orgao'}}">Por Orgão</a>
									</li>
									<li id="BensMovNumero">
										<a href="{{('/patrimonios/bensmoveis/numeropatrimonio')}}">Por Número Patrimônio</a>
									</li>
								</ul>
							</li>

							<!--Corrigir Depois do Lançamento
								<li id="BensImoveis">
								<a href="/construcao">Bens Imóveis</a>
							</li>
							-->
							<!-- Corrigir depois do Lançamento
							<li id="Frota">
								<a href="/construcao">Frota</a>
							</li>							-->
						</ul>
					</li>
					<!--Pessoal-->
					<li id="Pessoal" class="treeview">
						<a href="#">
							<i class="fa fa-users"></i>
							<span>Pessoal</span>
							<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
						</a>
						<!--Servidores-->
						<ul class="treeview-menu itens">
							<li id="Servidores" class="treeview">
								<a href="#">
									<span>Servidores e Salários</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
								</a>
								<ul class="treeview-menu itens">
									<li id="ServidoresNome">
										<!--<a href="{{route('filtroIndex', ['consulta' => 'pessoal','subConsulta' => 'servidores','tipoConsulta' => 'nome'])}}">Por Nome</a>-->
										<a href="{{'/servidores/nome'}}">Por Nome</a>
									</li>
									<li id="ServidoresOrgao">
										<a href="{{'/servidores/orgao'}}">Por Órgão</a>
									</li>
									<li id="ServidoresCargoFuncao">
										<a href="{{'/servidores/cargofuncao'}}">Por Cargo/Função</a>
									</li>
									<li id="ServidoresMatricula">
										<a href="{{'/servidores/matricula'}}">Por Matrícula</a>
									</li>
								</ul>
							</li>							
							<li id="EstruturaP" class="treeview">
								<a href="/estruturapessoal">Estrutura de Pessoal</a>
							</li>
							<!--<li id="FolhaPagamento">
								<a href="{{('/folhadepagamento/matricula')}}">Folha de Pagamento</a>
							</li>-->
							<li id="ConcursoPublico" class="treeview">
								<a href="/concursos">Concurso Público</a>								
							</li>
						</ul>
					</li>
					<!--Convênios e Transferências-->
					<li id="Convenios" class="treeview">
						<a href="#">
							<i class="fa fa-chain"></i>
							<span>Convênios e Transferências</span>
							<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
						</a>
						<ul class="treeview-menu itens">
							<li id="RecursosRecebidos">
								<a href="/convenios/recebidos/todos">Recursos Recebidos</a>
							</li>
							<!--<li>
								<a href="/convenios/recebidos/todos">Recursos Recebidos do Estado</a>
							</li>-->
							<li id="RecursosConcedidos">
								<a href="/convenios/cedidos/todos">Recursos Concedidos</a>
							</li>
						</ul>
					</li>
					<!--Mais Informações-->
					<li id="MaisInfo" class="treeview">
						<a href="#">
							<i class="fa fa-info"></i>
							<span>Mais Informações</span>
							<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
						</a>
						<ul class="treeview-menu itens">							
							<li id="Obras" class="treeview">
								<a href="/obras">Obras</a>
							</li>
							<!--Corrigir depois do lançamento
								<li>
								<a href="/construcao">Outros</a>
							</li>-->
							<li class="treeview">
								<a href="#">
									<span>Administração Indireta</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
								</a>
								<ul class="treeview-menu itens">
									<li>
										<a href="http://agersa.es.gov.br/transparencia/" target="_blank">Agersa</a>
									</li>
									<li>
										<a href="http://ipaci.es.gov.br/transparencias.aspx" target="_blank">Ipaci</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<!--Áreas Temáticas--
					<li class="treeview">
						<a href="#">
							<i class="fa fa-university"></i>
							<span>Áreas Temáticas</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li>
								<a href="#">Educação</a>
							</li>
							<li>
								<a href="#">Obras</a>
							</li>
							<li>
								<a href="#">Saúde</a>
							</li>
							<li>
								<a href="#">Segurança</a>
							</li>
						</ul>
					</li>
					<!--Mapa--
					<li>
						<a href="#">
							<i class="fa fa-map"></i>
							<span>Mapas</span>
						</a>
					</li>
					<!--Dados Abertos-->
					<li id="DadosAbertos" class="treeview">
						<a href="#">
							<i class="fa fa-folder-open"></i>
							<span>Dados Abertos</span>
							<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
						</a>
						<ul class="treeview-menu itens">
							<li id="Downloads" class="treeview">
								<a href="#">
									<span>Downloads</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
								</a>
								<ul class="treeview-menu itens">
									<li id="DownDespesas">
										<a href="/dadosabertos/despesas">Despesas</a>
									</li>
									<li id="DownReceitas">
										<a href="/dadosabertos/receitas">Receitas</a>
									</li>
									<li id="DownLiciCon">
										<a href="/dadosabertos/licitacoescontratos">Licitações e Contratos</a>
									</li>
									<li id="DownPat">
										<a href="/dadosabertos/patrimonios">Patrimônios</a>
									</li>
									<li id="DownPessoal">
										<a href="/dadosabertos/pessoal">Pessoal</a>
									</li>
									<li id="DownConvenios">
										<a href="/dadosabertos/convenios">Convênios e Transferências</a>
									</li>
								</ul>
							</li>
							<li id="API">
								<a href="/api">WebService</a>
							</li>
						</ul>
					</li>
					@section('nav')
					@show
				</ul>
				<!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" >
            <!-- Content Header (Page header) -->
			@section('header')
            <section class="content-header">
            <h1>
				@yield('htmlheader_title', '')
            </h1>
            <!--<ol class="breadcrumb">
                <li><spam>Home</spam></li>                
				@yield('breadcrumb')
            </ol>-->
            </section>
			@Show

            <!-- Main content -->
            <section class="content" style="min-height:771px;">
                @yield('main-content')
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer row formatacao-footer">
			<div class="row">
				<div class="col-sm-12 col-md-7">
					<strong>
						Prefeitura Municipal de Cachoeiro de Itapemirim. Controladoria Interna de Governo
					</strong>
					<br/>
						Rua Brahim Antônio Seder, 96/102, Centro - CEP: 29300-060.
					<br/>	 
						Cachoeiro de Itapemirim, Espírito Santo
					<br />
						Tel: (028) 3155-5237 / Ouvidoria: 156 
					<br/>	
						E-mail: <a href="mailto:controladoria@cachoeiro.es.gov.br" target="_top"> controladoria@cachoeiro.es.gov.br</a>
				</div>

				<div class="col-sm-12 col-md-5 icones-footer4" >
					<ul class="list-inline text-center ">
						<li>
						<a href="http://www.cachoeiro.es.gov.br" target="_blank">
							<img src="{{ ('/img/cachoeiro.png') }}" class="icones-footer2" alt="Cachoeiro De Itapemirim" ></a>
						</li>
						<li>
							<a href="http://www.dataci.es.gov.br" target="_blank">
							<img src="{{ ('/img/dataci.png') }}" class="icones-footer3"  alt="DATACI"></a>
						</li>
						<li>
							<a href="https://github.com/controladoriacachoeiro/transparencia" target="_blank">
							<img src="{{ ('/img/github.png') }}" class="icones-footer2"  alt="Github" ></a>
						</li>
					</ul>
				</div>
			</div>

			<div id="footer2" class="row">
				<div class="col-md-12 text-center icones-footer" >
					<div class="row">
						<a  rel="license" href="http://creativecommons.org/licenses/by/4.0/" target="_blank"><img alt="Licença Creative Commons" style="border-width:0;padding-top: 5px;" src="https://i.creativecommons.org/l/by/4.0/88x31.png" /></a>	
						</br>
					</div>	
					<div class="row text-center " style="margin-right: 10px;">
						<strong>
							Essa obra está licenciada com uma Licença <a rel="license" href="http://creativecommons.org/licenses/by/4.0/" target="_blank">Creative Commons Atribuição 4.0 Internacional</a>
						</strong>
					</div>		
				</div>
			</div>
        </footer>
        <!-- ./wrapper -->

		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel"><span id="titulo"></span></h4>
				</div>
				<div class="modal-body" id="modal-body">
				</div>								
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>					
				</div>
				</div>
			</div>
		</div>

        @section('scripts')
            <!-- jQuery 2.2.3 -->
            <script src="{{ asset('/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
            <!-- jQuery UI 1.11.4 -->
            <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
            <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
            <script>
            $.widget.bridge('uibutton', $.ui.button);
            </script>
            <!-- Bootstrap 3.3.6 -->
            <script src="{{ asset('/bootstrap/js/bootstrap.min.js') }}"></script>
            <!-- Slimscroll -->
            <script src="{{ asset('/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
            <!-- FastClick -->
            <script src="{{ asset('/plugins/fastclick/fastclick.js') }}"></script>
            <!-- AdminLTE App -->
            <script src="{{ asset('/dist/js/app.min.js') }}"></script>
			<!--Script ppara destacar no menu qual pagina que esta sendo exibida-->
			<script src="{{ asset('js/menu.js') }}"></script>

			<script src="{{ asset('/dist/js/lightbox.js') }}"></script>

        @show
        @section('scriptsadd')
        @show
    </body>

</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-100688690-1', 'auto');
  ga('send', 'pageview');

</script>
</html>
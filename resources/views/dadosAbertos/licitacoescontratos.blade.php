@extends('formFiltro')

@section('htmlheader_title')
    Licitações e Contratos
@stop
@section('contentForm')

<div class="box-group" id="accordion">

<!--Licitações em Andamento-->
  <div class="panel box box-primary">
    <div class="box-header with-border">
      <h4 class="box-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
          Licitações em Andamento
        </a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse">
      <div class="box-body">
        {{ Form::open(array('url' => '/dadosabertos/licitacoescontratos/andamento', 'method' => 'POST')) }}
        <div class="row form-group">    
          <div id='divDataInicio'>
            <div class="col-md-2">
              {{ Form::label('dataInicio', 'Data Início') }}
              <div class="input-group ">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                {{ Form::text('datetimepickerDataInicio1', '', array('id'=>'datetimepickerDataInicio1', 'class' => 'form-control')) }}
              </div>
            </div>
          </div>
          <div id='divDataFim'>
            <div class="col-md-2">
              {{ Form::label('dataFim', 'Data Fim') }}
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                {{ Form::text('datetimepickerDataFim1', '', array('id'=>'datetimepickerDataFim1', 'class' => 'form-control')) }}
              </div>
            </div>
          </div>    
        </div>                                              
        <div class="row form-group">
            <div class="col-md-6">
                {{ Form::submit('Download', array('class'=>'btn btn-primary')) }}
            </div>
        </div>
        {{ Form::close() }}
      </div>
    </div>
  </div>

<!--Contratos-->
  <div class="panel box box-primary">
    <div class="box-header with-border">
      <h4 class="box-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
          Contratos
        </a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="box-body">
        {{ Form::open(array('url' => '/dadosabertos/licitacoescontratos/contrato', 'method' => 'POST')) }}
        <div class="row form-group">    
          <!-- <div id='divDataInicio'>
            <div class="col-md-2">
              {{ Form::label('dataInicio', 'Data Início') }}
              <div class="input-group ">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                {{ Form::text('datetimepickerDataInicio2', '', array('id'=>'datetimepickerDataInicio2', 'class' => 'form-control')) }}
              </div>
            </div>
          </div>
          <div id='divDataFim'>
            <div class="col-md-2">
              {{ Form::label('dataFim', 'Data Fim') }}
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                {{ Form::text('datetimepickerDataFim2', '', array('id'=>'datetimepickerDataFim2', 'class' => 'form-control')) }}
              </div>
            </div>
          </div>     -->
        </div>                                              
        <div class="row form-group">
            <div class="col-md-6">
                {{ Form::submit('Download', array('class'=>'btn btn-primary')) }}
            </div>
        </div>
        {{ Form::close() }}
      </div>
    </div>
  </div>

  <!--Bens e produtos Adquiridos-->
  <div class="panel box box-primary">
    <div class="box-header with-border">
      <h4 class="box-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
          Bens e Produtos Adquiridos
        </a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="box-body">
        {{ Form::open(array('url' => '/dadosabertos/licitacoescontratos/bensadquiridos', 'method' => 'POST')) }}
        <div class="row form-group">    
          <div id='divDataInicio'>
            <div class="col-md-2">
              {{ Form::label('dataInicio', 'Data Início') }}
              <div class="input-group ">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                {{ Form::text('datetimepickerDataInicio3', '', array('id'=>'datetimepickerDataInicio3', 'class' => 'form-control')) }}
              </div>
            </div>
          </div>
          <div id='divDataFim'>
            <div class="col-md-2">
              {{ Form::label('dataFim', 'Data Fim') }}
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                {{ Form::text('datetimepickerDataFim3', '', array('id'=>'datetimepickerDataFim3', 'class' => 'form-control')) }}
              </div>
            </div>
          </div>    
        </div>                                              
        <div class="row form-group">
            <div class="col-md-6">
                {{ Form::submit('Download', array('class'=>'btn btn-primary')) }}
            </div>
        </div>
        {{ Form::close() }}
      </div>
    </div>
  </div>

</div>

@endsection

@section('scriptsadd')
    <script src="{{ asset('/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('/js/options.js') }}"></script> 
        <script src="https://rawgit.com/digitalBush/jquery.maskedinput/master/dist/jquery.maskedinput.min.js"></script>
    <script>
    for (i = 1; i <= 4 ; i++) { 
        jQuery(function($) {
            $(document).on('focus', '#datetimepickerDataInicio'+i, function () {
                var me = $("#datetimepickerDataInicio"+i);
                me.mask('99/99/9999');
            });
            $(document).on('focus', '#datetimepickerDataFim'+i, function () {
                var me = $("#datetimepickerDataFim"+i);
                me.mask('99/99/9999');
            });  
        });
        //configura os calendários de data de início e data fim
        datepickerFiltro('#datetimepickerDataInicio'+i, '#datetimepickerDataFim'+i);
    }
    </script> 
@endsection
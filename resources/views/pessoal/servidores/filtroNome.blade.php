@extends('formFiltro')

@section('htmlheader_title')
    Servidores
@stop

@section('filtro_titulo')
    Por Nome
@stop

@section('contentForm')
    {{ Form::open(array('url' => '/servidores/nome', 'method' => 'POST')) }}                                                                                                
        <div class="row form-group">
            <div class="col-sm-6 col-lg-4">
                {{ Form::label('Nome', '', array('id'=>'lblTipoConsulta')) }}
                {{ Form::text('txtNome', '', array('id'=>'txtTipoConsulta', 'class' => 'form-control')) }}                                
            </div>
            <div class="col-sm-6 col-lg-4">
                {{ Form::label('Situação', '', array('id'=>'lblTipoConsulta2')) }}
                {{ Form::select('selectTipoConsulta', array(), 'default', array('id'=>'selectTipoConsulta', 'class'=>'form-control')) }}
            </div>             
        </div>                                                
        <div class="row form-group">
            <div class="col-lg-6">
                {{ Form::submit('Pesquisar', array('class'=>'btn btn-primary')) }}
            </div>
        </div>
    {{ Form::close() }}
@stop

@section('scriptsadd')
    <script src="{{ asset('/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('/js/options.js') }}"></script>  
    <script>
            $(document).ready(function() {        
                var dadosDb=<?php echo $dadosDb ?>;
                $('#selectTipoConsulta').show();
                $('#selectTipoConsulta').addClass("select2");
                var select = document.getElementById("selectTipoConsulta");
                arrayTipoConsulta2(dadosDb,select);
                $(".select2").select2();
             });    

    </script>
@endsection
@extends('adminlte::page')

@section('title', 'Crear encuesta')

@section('content_header')

    <div class="container-fluid">
            
        <div class="row mb-2">
            
            <div class="col-sm-6">

                <h1>Crear una encuesta</h1>

            </div>
            
            <div class="col-sm-6">

                <ol class="breadcrumb float-sm-right">

                    <li class="breadcrumb-item"><a href="{{ route('dash')}}"><i class="fa fa-dashboard"></i>Inicio</a></li>
                    
                    <li class="breadcrumb-item active">

                        <a href="{{ route('admin.encuestas.index')}}"><i class="fa fa-dashboard"></i>Encuestas</a>

                    </li>

                    <li class="breadcrumb-item active">Crear encuesta</li>
            
                </ol>

            </div>
        </div>

    </div

@stop

@section('content')

    <div class="container-fluid">

        <div class="row">
       
            <div class="col-12">

                {{-- DATOS DE LA ENCUESTA --}}
           
                <div class="card card-primary">
           
                    <div class="card-header">
                        
                        <h3 class="card-title">Datos de la encuesta</h3>
    
                    </div>
    
                    <div class="card-body">

                        {!! Form::open(['route' => 'admin.encuestas.store']) !!}

                        <div class="form-group">

                            {!! Form::label('nombre_encuesta', 'Titulo de la encuesta') !!}

                            {!! Form::text('nombre_encuesta', null, ['class' => 'form-control','placeholder' => 'Titulo de la encuesta']) !!}

                        </div>

                        <div class="form-group">

                            {!! Form::label('descripcion_encuesta', 'Descripción de la encuesta') !!}

                            {!! Form::textarea('descripcion_encuesta', null, ['rows' => '3','class' => 'form-control','placeholder' => 'Descripción de la encuesta']) !!}

                        </div>

                        <div class="form-group">

                            {!! Form::label('instrucciones_encuesta', 'Instrucciones de la encuesta') !!}

                            {!! Form::textarea('instrucciones_encuesta', null, ['rows' => '3','class' => 'form-control','placeholder' => 'Instrucciones de la encuesta']) !!}

                        </div>

                        <div class="form-group">

                            {!! Form::label('agradecimientos_encuesta', 'Agradecimientos de la encuesta') !!}

                            {!! Form::textarea('agradecimiento_encuesta', null, ['rows' => '3','class' => 'form-control','placeholder' => 'Agradecimientos de la encuesta']) !!}

                        </div>

                        <div class="row">
                            
                            <div class="form-group col-md-6">

                                {!! Form::label('vigencia', 'Vigencia') !!}

                                {!! Form::date('fecha_vencimiento', null, ['class' =>'form-control']) !!}
    
                            </div>
    
                            <div class="form-group col-md-6">

                                {!! Form::label('categoria', 'Categoria') !!}

                                {!! Form::select('id_categoria', $categorias, null, ['class' =>'form-control','placeholder' => 'Selecciona una categoria']); !!}
    
                            </div>

                            <div class="form-group col-md-6">

                                {!! Form::label('estado', 'Estado') !!}

                                {!! Form::select('estado', ['0' => 'Borrador', '1' => 'Publicado'], '0', ['class' =>'form-control']); !!}
    
                            </div>

                        </div>

                            {!! Form::submit('Crear encuesta', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}

                    </div>
           
                </div>

            </div>
        
        </div>

    </div>


@stop

@section('js')

    <script>

        

    </script>

@stop
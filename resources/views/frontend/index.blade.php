@extends('layouts.sitio')

@section('title', 'SEDEC | Inicio')

@section('navbar')

@section('contenido')

    @php

    $inicio = [
        'titulo' => 'Primera Campaña de Opinión Ciudadana sobre Trámites Gubernamentales',
        'descripcion' => "Bienvenido a la <strong>Primera Campaña de Opinión Ciudadana sobre Trámites Gubernamentales 
            </strong>del Estado de Tabasco, con tu participación nos ayudarás a identificar los trámites que impactan en 
        la población, por la complejidad de los mismos al momento de realizarlos, así como a combatir 
        los posibles actos proclives de corrupción .
",
    ];

    @endphp

    <div class="container">

        {{-- SECCION INICIAL --}}

        <section class="py-md-5">

            <div class="col-md-12">
    
                <div class="mw-100 col-auto text-center">
    
                    <div class="mx-auto align-self-center px-4 my-5">
    
                        <h1 class="display-4 fw-bold mb-4 text-primary text-center">{{ $inicio['titulo'] }}</h1>
    
                        <p class="lead mb-4 text-center">{!! $inicio['descripcion'] !!}</p>

                        <p class="lead mb-4 text-center">(Favor de dar click en el siguiente botón para comenzar el proceso)
                        </p>
    
                        <a href="{{ route('home.usuarios.index') }}" class="btn btn-primary mb-5">Registrate</a>
    
                    </div>
    
                </div>
            
            </div>
    
        </section>
        
        {{-- LOGOTIPOS --}}

        <section class="py-md-5">

            <div class="m-0 row justify-content-center">
            
                <div class="col-auto col-lg-4 col-md-4 col-sm-8 p-5 text-center">
    
                    <div class="thumbnail">
    
                        <img src="{{ asset('storage/firmas/cemer.png') }}" style=" width: 90%;"class="rounded">
    
                    </div>
    
                </div>
    
                <div class="col-auto col-lg-4 col-md-4 col-sm-8 p-5 text-center">
    
                    <img src="{{ asset('storage/firmas/sedec_logo.png') }}" style=" width: 100%;" class="rounded">
    
                </div>
    
                <div class="col-auto col-lg-4 col-md-4 col-sm-8 p-5 text-center">
    
                    <img src="{{ asset('storage/firmas/logo-web.png') }}" style=" width: 100%;" class="rounded">
    
                </div>
    
                <div class="col-auto col-lg-4 col-md-4 col-sm-8 p-5 text-center">
    
                    <img src="{{ asset('storage/firmas/funcion-publica.png') }}" style=" width: 100%;" class="rounded">
    
                </div>
    
                <div class="col-auto col-lg-4 col-md-4 col-sm-8 p-5 text-center">
    
                    <img src="{{ asset('storage/firmas/saig2.png') }}" style=" width: 100%;" class="rounded">
    
                </div>

            </div>

        </section>

        {{-- END LOGOTIPOS --}}

    </div>


@endsection

@section('footer')

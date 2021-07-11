@extends('layouts.sitio')

@section('title', 'Categoria | ' . $categoria->nombre_categoria)

@section('navbar')

@section('contenido')

    @if ($categoria->id == '2')

        <div class="container">

            {{-- TITULO --}}

            <div class="col-md-12 py-md-5">

                <div class="mw-100 col-auto text-center">

                    <div class="mx-auto align-self-center px-4 my-5">

                        <h1 class="display-4 fw-bold mb-4 text-primary text-center">Selecciona tu Municipio</h1>

                    </div>

                </div>

            </div>

            {{-- END TITULO --}}

            {{-- MUNICIPIOS --}}

            <div class="row justify-content-around align-items-center py-md-5">

                @foreach ($municipios as $municipio)

                    <div class="col-md-2 py-md-5">

                        <img src="{{ asset('storage/' . $municipio->icono) }}" class="img-fluid mx-auto d-block">

                        <div class="mx-auto align-self-center my-3">

                            <a href="{{ route('home.encuesta.index', ['categoria' => $categoria->id, 'encuesta' => $encuestas[0]->id, 'municipio' => $municipio->id]) }}"
                                class="text-decoration-none">

                                <p class="lead text-dark text-center">{{ $municipio->nombre_municipio }}</p>

                            </a>

                        </div>

                    </div>

                @endforeach

            </div>

            {{-- END MUNICIPIOS --}}

        </div>

    @endif

@endsection

@section('footer')

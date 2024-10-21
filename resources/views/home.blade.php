@extends('layouts.app')

@section('title', 'Inicio')

@push('css')
    <style>
        body{
            background-color: aquamarine
        }
    </style>
@endpush

@section('content')
    <div class="max-w-4xl mx-auto px-4">

        <h1 class="py-2">Bienvenido a la pagina principal</h1>

        <x-alert2 type="warning" class="mb-4">
            <x-slot name="title">
                Alerta!
            </x-slot>

            Contenido de la alerta {{-- Se le asigna el contenido a mostar a la variable / lo que se muestra en la alerta de la pagina --}}
        </x-alert2>

        <p>hola mundo</p>

    </div>
@endsection

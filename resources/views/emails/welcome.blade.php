@extends('beautymail::templates.ark')

@section('content')

    @include('beautymail::templates.ark.heading', [
		'heading' => 'Bienvenido a nuestro sistema',
		'level' => 'h1'
	])

    @include('beautymail::templates.ark.contentStart')

        <p>Ingrese al sistema utilizando los siguientes datos</p>

        <h4 class="secondary"><strong>Correo:</strong></h4> {{ $email_data['email'] }}
        <h4 class="secondary"><strong>Clave temporal:</strong></h4> {{ $email_data['password'] }}


    @include('beautymail::templates.ark.contentEnd')


@stop

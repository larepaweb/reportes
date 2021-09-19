@extends('beautymail::templates.ark')

@section('content')

    @include('beautymail::templates.ark.heading', [
		'heading' => 'Cotización de servicio',
		'level' => 'h1'
	])

    @include('beautymail::templates.ark.contentStart')

        <p>Gracias por contactarnos, adjunto le compartimos la cotización solicitada</p>


    @include('beautymail::templates.ark.contentEnd')


@stop

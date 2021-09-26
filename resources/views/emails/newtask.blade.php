@extends('beautymail::templates.ark')

@section('content')

    @include('beautymail::templates.ark.heading', [
		'heading' => 'Se creo una nueva Actividad',
		'level' => 'h1'
	])

    @include('beautymail::templates.ark.contentStart')

        se debe atender en la fecha <b>{{ $data['fecha'] }}</b>:<br><br>
        <h4 class="secondary"><strong>Cliente:</strong></h4> {{ $data['cliente'] }}<br><br>
        <h4 class="secondary"><strong>La actividad a realizar es:</strong></h4> {{ $data['desc'] }}<br><br>

        @if ($data['comentario'] )
        <h4 class="secondary"><strong>Comentarios adicionales:</strong></h4> {{ $email_data['comentario'] }}
        @endif


    @include('beautymail::templates.ark.contentEnd')


@stop

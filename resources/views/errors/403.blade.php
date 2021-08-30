@extends('errors::minimal')

@section('title', __('Permisos insuficientes'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Acceso denegado. No tiene permiso para acceder a esta página en este servidor'))



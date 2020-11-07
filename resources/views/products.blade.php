@extends('layouts.main')

@section('title', 'Events')

@section('content')
        <h1>Lista de Produtos</h1>
        @if($busca != '')
                <p>O usuário está buscando por: {{ $busca }}</p>
        @endif
@endsection
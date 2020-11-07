@extends('layouts.main')

@section('title', 'Events')

@section('content')
        <h1>aaaa</h1>
        <img src="/img/banner.jpg" alt="">
        @if(4>5)
            <p>HEHE</p>
        @endif
        @if($nome == "Pedro")
            <p>O nome é: {{$nome}} haha</p>
        @elseif($nome == "Gian")
            <p>O nome é: {{$nome}} hehe</p>
        @else
            <p>Voce parece que é burro {{$nome}}</p>
        @endif

        @for($i = 0; $i < count($arr); $i++)
            <p>{{ $arr[$i]}}</p>
        @endfor

        @foreach($nomes as $nome)
            <p>{{ $loop->index }}</p>
            <p>{{ $nome }}</p>
        @endforeach
        
        @php
            $name = "a";
            echo $name;
        @endphp
@endsection
@extends('template.template')
@section('content')
<h1 class="text-center">Visualizar</h1>

<div class="col-8 m-auto">
        @if(isset($receita))
            <h4> Receita de id  {{$receita->id}}</h4>           
            <ul>
                <li>Valor   : {{$receita->valor}}  </li>
                <li>Fonte   : {{$receita->fonte}}</li>
                <li>Recebido: {{$receita->recebido}} </li>
                <li>Data: {{$receita->quando}} </li>
                <li>Fixa   : {{$receita->fixa}} </li>
            </ul>
            <a href="{{url("/index/receita/view/$receita->id/edit")}}">
                <button class="btn btn-primary">Editar</button>
            </a>
            <a href="{{url("index")}}">
                <button class="btn btn-dark">voltar</button>
            </a>   
            

        @endif
        @if(isset($despesa))
            <h4> Despesa de id  {{$despesa->id}}</h4>           
            <ul>
                <li>Valor   : {{$despesa->valor}}  </li>
                <li>Fonte   : {{$despesa->fonte}}</li>
                <li>Recebido: {{$despesa->recebido}} </li>
                <li>Data    : {{$despesa->quando}} </li>
                <li>Pago    : {{$despesa->pago}} </li>
                <li>Como Foi pago: {{$despesa->como_foi_pago}}
                <li>Fixa   : {{$despesa->fixa}} </li>
            </ul>
            <a href="{{url("index/despesa/view/$despesa->id/edit")}}">
                <button class="btn btn-primary">Editar</button>
            </a>
            <a href="{{url("index")}}">
                <button class="btn btn-dark">voltar</button>
            </a>   
            
        @endif 
<div>




@endsection
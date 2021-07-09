@extends('template.template')
@section('content')
<h1 class="text-center">Gerenciador de Finanças</h1>
<hr>


<div class="col-8 m-auto">
    @csrf
    <table class="table table-hover text center">
        <thead>
            <tr>
                
                <th scope="col"> Tipo </th>
                <th scope="col"> valor </th>
                <th scope="col"> recebido </th>
                <th scope="col"> quando </th>
                <th scope="col"> fixa? </th>
                <th scope="col"> operacoes</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($receita))
                    @foreach ($receita as $receita)
                    <tr>
                        
                        <td>receita</td>
                        <td>{{$receita->valor}} R$</td>
                    
                        <td>{{$receita->recebido}} </td>
                        <td>{{$receita->quando}} </td>
                        <td>{{$receita->fixa}} </td>
                        <td>
                            <a href="{{url("/index/$receita->id")}}">
                                <button class="btn btn-dark">Visualizar</button>
                            </a>
                            <a href="{{url("index/receita/view/$receita->id")}}" class="js-del">
                                <button class="btn btn-danger">Deletar</button>
                            </a>
                        </td>
                    </tr>
                    
                    @endforeach
            @endif
        

        
            </h2>
            @if(isset($despesa))
                    @foreach ($despesa as $despesa)
                    <tr>
                    
                        <td>despesa</td>
                        <td>{{$despesa->valor}} R$</td>
                        <td>{{$despesa->pagou}}  </td>
                        <td>{{$despesa->quando}} </td>
                        <td>{{$despesa->fixa}} </td>
                        <td>
                            <a href="{{url("index/$despesa->id")}}">
                                <button class="btn btn-dark">Visualizar</button>
                            </a>
                            <a href="{{url("index/despesa/view/$despesa->id")}}" class="js-del">
                                <button class="btn btn-danger">Deletar</button>
                            </a>
                        </td>
                    </tr>
                    
                    @endforeach
            @endif
        </tbody>
    </table>
    
    
    
    
</div>
<div class="text-center mt-5 mb-4">
    <a href="{{url('/index/receita/create')}}">
        <button class="btn btn-success" type="button" 
        data-toggle="collapse" data-target="#collapseExample" 
        aria-expanded="false" aria-controls="collapseExample">
            Cadastrar Receita
        </button>
    </a>
    <a href="{{url('/index/despesa/create')}}">
        <button class="btn btn-secondary">Cadastrar Despesa</button>
    </a>

</div>


@endsection
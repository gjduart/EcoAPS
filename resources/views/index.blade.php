@extends('template.template')
@section('content')
<h1 class="text-center">Easycoin</h1>
<hr>



<div class="col-8 m-auto">
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
            @foreach ($receita as $receita)
            <tr>
                
                <td>receita</td>
                <td>{{$receita->valor}} </td>
                <td>{{$receita->recebido}} </td>
                <td>{{$receita->quando}} </td>
                <td>{{$receita->fixa}} </td>
                <td>
                    <a href="">
                        <button class="btn btn-dark">Visualizar</button>
                    </a>
                    <a href="">
                        <button class="btn btn-primary">Editar</button>
                    </a>
                    <a href="">
                        <button class="btn btn-danger">Deletar</button>
                    </a>
                </td>
            </tr>
            
            @endforeach

            @foreach ($despesa as $despesa)
            <tr>
               
                <td>despesa</td>
                <td>{{$despesa->valor}} </td>
                <td>{{$despesa->pagou}} </td>
                <td>{{$despesa->quando}} </td>
                <td>{{$receita->fixo}} </td>
                <td>
                    <a href="">
                        <button class="btn btn-dark">Visualizar</button>
                    </a>
                    <a href="">
                        <button class="btn btn-primary">Editar</button>
                    </a>
                    <a href="">
                        <button class="btn btn-danger">Deletar</button>
                    </a>
                </td>
            </tr>
            
            @endforeach
        </tbody>
    </table>
    
    
    
    
</div>
<div class="text-center mt-5 mb-4">
    <a href="">
        <button class="btn btn-success" type="button" 
        data-toggle="collapse" data-target="#collapseExample" 
        aria-expanded="false" aria-controls="collapseExample">
            Cadastrar Receita
        </button>
    </a>
    {{-- <a href="">
        <button class="btn btn-secondary">Cadastrar Despesa</button>
    </a> --}}
</div>

<div class="collapse m-auto" id="collapseExample">
    <div class="card card-body">
      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
    </div>
  </div>
@endsection
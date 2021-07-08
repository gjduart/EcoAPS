@extends('template.template')
@section('content')
<h1 class="text-center">Editar Receita</h1>

<div class="col-5 m-auto">
    

<p id='form'></p>

<form name="formEdit" id="formEdit" method="post" action="{{url("/index/receita/view/$receita->id")}}">
    @method('PUT')
     @csrf
    <input class="hidden" type="hidden" name="id" id="id" value="{{$receita->id ?? ''}}"> 
    <input class="form-control" type="text" name="valor" id="valor" placeholder="valor" value="{{$receita->valor ?? ''}}" required>
    <input class="form-control mt-3" type="text" name="fonte" id ="fonte" placeholder="fonte" value="{{$receita->fonte ?? ''}}"required>
    Recebeu?
    <input class="mt-3 "type="text" name="recebido" id ="recebido" placeholder="recebeu?" value = "{{$receita->recebido ?? ''}}" required>  <br >
    Quando Recebeu <br >
    <input class="form-control mt-3" type="date" name="quando" id ="quando" placeholder="data"  value = "{{$receita->quando ?? ''}}"required>
    <br > A Renda é Fixa?
    <input class=" mt-3" type="text" name="fixa" id ="fixa" placeholder="fixa"  value = "{{$receita->fixa ?? ''}}" required>
    <input class="btn btn-primary" type="submit" value="Editar">

</form> 

<div>

    <a href="{{url("index")}}">
        <button class="btn btn-danger">cancelar</button>
    </a>   


@endsection    
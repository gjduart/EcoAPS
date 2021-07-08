@extends('template.template')
@section('content')
<h1 class="text-center">Cadastrar receita</h1>

<div class="col-5 m-auto">
    

<p id='form'></p>

    <form name="formCad" id="formCad" method="post" action="{{url('/index/receita')}}">
     @csrf
     <input class="hidden" type="hidden" name="id" id="id", value="{{random_int(1, 999)}}"> 
     Valor: <br >
    <input class="form-control" type="text" name="valor" id="valor" placeholder="valor"  required><br >
    Fonte da Renda:<br >
    <input class="form-control mt-3" type="text" name="fonte" id ="fonte" placeholder="fonte" required><br >

    Já Recebeu?<br>
    <input class="mt-3 mb-3"type="text" name="recebido" id ="recebido" placeholder="recebeu?"  required>  <br >
    Quando Recebeu <br >
    <input class="form-control mt-3" type="date" name="quando" id ="quando" placeholder="data"  required>
    <br > A Renda é Fixa?
    <input class=" mt-3" type="text" name="fixa" id ="fixa" placeholder="fixa"   required>
    <input class="btn btn-primary" type="submit" value="Cadastrar">


</form> 
    <a href="{{url("index")}}">
        <button class="btn btn-danger">cancelar</button>
    </a>   
<div>




@endsection
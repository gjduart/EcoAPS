@extends('template.template')
@section('content')
<h1 class="text-center">Cadastrar despesa</h1>

<div class="col-5 m-auto">
    

<p id='form'></p>

    <form name="formCad" id="formCad" method="post" action="{{url('/index/despesa')}}">
     @csrf
    <input class="hidden" type="hidden" name="id" id="id", value="{{random_int(1, 999)}}"> 
    Valor: <br >
    <input class="form-control" type="text" name="valor" id="valor" placeholder="valor"  required><br >
    Fonte: <br >
    <input class="form-control mt-3" type="text" name="fonte" id ="fonte" placeholder="fonte" required> <br >
  
    Quando Recebeu:<br >
    <input class="form-control mt-3" type="date" name="quando" id ="quando" placeholder="data"  required> <br >
    Foi pago?
    <input class="form-control mt-3" type="text" name="pago" id ="pago" placeholder="pago"  required><br >
    Como foi pago:
    <input class=" form-control mt-3" type="text" name="como_foi_pago" id ="como_foi_pago" placeholder="como foi pago"   required> 
    <br > A Renda é Fixa?
    <input class=" mt-3" type="text" name="fixa" id ="fixa" placeholder="fixa"   required>
    <input class="btn btn-primary" type="submit" value="Cadastrar">


</form> 

<div>
    <a class="mt-5" href="{{url("index")}}">
        <button class="btn btn-danger">cancelar</button>
    </a>   



@endsection
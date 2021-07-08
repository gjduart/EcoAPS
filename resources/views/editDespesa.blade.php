@extends('template.template')
@section('content')
<h1 class="text-center">Editar</h1>

<div class="col-5 m-auto">
    
{{-- <button class="btn btn-dark" onclick="cadReceita()">Receita</button> --}}
<p id='form'></p>

<form name="formEdit" id="formEdit" method="post" action="{{url("index/despesa/view/$despesa->id")}}">
    @method('PUT')
        @csrf
       <input class="hidden" type="hidden" name="id" id="id", value="{{$despesa->id ?? ''}}"> 
       <input class="form-control" type="text" name="valor" id="valor" placeholder="valor"  value="{{$despesa->valor ?? ''}}" required>
       <input class="form-control mt-3" type="text" name="fonte" id ="fonte" placeholder="fonte"  value="{{$despesa->fonte ?? ''}}"required>
     
       Quando Recebeu <br >
       <input class="form-control mt-3" type="date" name="quando" id ="quando" placeholder="data"   value="{{$despesa->quando ?? ''}}"required>
       <br > A Renda é Fixa?
       <input class="form-control mt-3" type="text" name="pago" id ="pago" placeholder="pago"  value="{{$despesa->pago ?? ''}}" required>
       <input class=" form-control mt-3" type="text" name="como_foi_pago" id ="como_foi_pago" placeholder="como foi pago"  value="{{$despesa->como_foi_pago ?? ''}}"  required>
       <input class=" mt-3" type="text" name="fixa" id ="fixa" placeholder="fixa"  value="{{$despesa->fixa ?? ''}}"  required>
       <input class="btn btn-primary" type="submit" value="Editar">
 
</form> 

<div>
    <a href="{{url("index")}}">
        <button class="btn btn-danger">cancelar</button>
    </a>   



@endsection    
@extends('template.template')
@section('content')
<h1 class="text-center">Gerenciador de Finanças - Login</h1>
<hr>


<div class="col-5 m-auto">
<form name="formLogin" id="formLogin" method="post" action="{{url('/login')}}">
  @csrf
  Login:
  <input class="form-control" type="email" name="email" id="email" placeholder="XYZ@gmail.com"  required><br >
  Senha:
  <input class="form-control" type="password" name="passwod" id="password" placeholder="111"  required> <br >
</form>
<div>
<input class="btn btn-primary" type="submit" value="Login">

@endsection

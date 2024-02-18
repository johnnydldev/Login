@extends('index')

@section('seccion')
<br>
<div class="card text-white bg-secondary mb-12">
  <div class="card-header">Información del registro</div>
  <div class="card-body">
    <h3 class="card-title">Información del usuario</h3>
   <div class="row"> 
	<div class="col-8">
    <h4>Id: {{$registro->id}}</h4>
    <br>
    <h4>Nickname: {{$registro->nickname}}</h4>
    <br>
    <h4>Email: {{$registro->email}}</h4>
    <br>
    <h4>Password: {{$registro->password}}</h4>
	</div>
	</div>
  </div>
</div>
@endsection
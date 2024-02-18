@extends('index')

@section('seccion')
<br>
<!-- card -->
@if (session('mensaje'))
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>{{session('mensaje')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
     </div>
@endif

<form action="{{route('registro.nuevoUsuario')}}" method="POST"> 
<div class="card text-white bg-info mb-12">
  <div class="card-header">Registro</div>
  <div class="card-body">
    <h6 class="card-title">Información del usuario</h6>
   <div class="row"> 
	<div class="col-8">

		
			@csrf
			@error('nombre')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Holy guacamole!</strong> Falta el nombre.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
            @enderror

		 	<div class="form-group">
				<label for="nickname">Nickname</label>
				<input type="text"class="form-control"id="nickname"name="nickname">
			</div>
			<div class="form-group">
				<label for="email">Correo electronico</label>
				<input type="text"class="form-control"id="email"name="email">
			</div>
			<div class="form-group">
				<label for="Contraseña">Contraseña</label>
				<input type="text"class="form-control"id="contraseña"name="contraseña">
			</div>
		
			<button type="submit"class="btn btn-success">Enviar</button>
		

	</div>
</div>
  </div>
</div>
<!-- card -->
</form>
<table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nickname</th>
            <th scope="col">email</th>
            <th scope="col">password</th>
            <th scope="col"></th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($coleccion as $item)
            <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->nickname}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->password}}</td>
            <td><a href="{{route('informacionUsuarios',$item->id)}}" class="btn btn-info btn-sm">Detalles</a></td>
            <td><a href="{{route('editarUsuarios',$item->id)}}" class="btn btn-warning btn-sm">Editar</a></td>
            <td>
              <form action="{{route('eliminarUsuario',$item->id)}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-sm"> Eliminar </button>
              </form>
            </td>
          </tr>
         @endforeach
        </tbody>
      </table>
    <div class="d-flex justify-content-center">
        {!! $coleccion->links() !!}
    </div>

@endsection
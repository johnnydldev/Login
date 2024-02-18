@extends('index')
@section('seccion')
<br>
<div class="card text-white bg-info mb-12">
  <div class="card-header"><h5> Editar Usuario {{$registro->id}}</h5></div>
  <div class="card-body">
    <h6 class="card-title">Información del usuario</h6>
    <div class="row">
        <div class="col-8">
            <form action="{{route('registro.actualizarUsuario',$registro->id)}}" method="POST">
                @method ('PUT')
                @csrf
                <div class="form-group">
                  <label for="nickname">Nickname</label>
                <input type="text" class="form-control" id="nickname" name="nickname" value="{{$registro->nickname}}">                  
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{$registro->email}}">                  
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" id="password" name="password" value="{{$registro->password}}">                  
                  </div>
                
                <button type="submit" class="btn btn-primary">Enviar</button>
              </form>
        </div>
    </div>
</div>
</div>
</div>
@endsection
<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App;

class Controlador extends Controller
{
    //
    public function inicio(){
        return view('index');
    }

     public function registro(){
        $coleccion = App\Models\Usuario::paginate(5);
        return view('registro',compact('coleccion'));
    }


   public function nuevoUsuario(Request $request){
        $nuevoUsuario = new App\Models\Usuario;
        $request->validate([
            'nickname'=>'required',
            'email' =>'required',
            'password'=>'required'
        ]);
        
        $nuevoUsuario->nickname = $request->nickname;
        $nuevoUsuario->email = $request->email;
        $nuevoUsuario->password = $request->password;
        $nuevoUsuario->save();
        return back()->with('mensaje','Usuario agregado');
    }

    public function informacionUsuarios($id){
        $registro = App\models\Usuario::findOrFail($id);
        return view('informacionUsuarios', compact( 'registro'));
    }

    public function editarUsuarios($id){
        $registro = App\models\Usuario::findOrFail($id);
        return view('editarUsuarios',compact('registro'));
    }

    public function actualizarUsuario(Request $request, $id){
        $usuarioActualizar = App\models\Usuario::findOrFail($id);
        $usuarioActualizar->nickname = $request->nickname;
        $usuarioActualizar->email = $request->email;
        $usuarioActualizar->password = $request->password;
        $usuarioActualizar->save();
        return back()->with('mensaje','Usuario modificado');
    }

    public function eliminarUsuario($id){
        $usuarioEliminar = App\models\Usuario::findOrFail($id);
        $usuarioEliminar->delete();
        return back()->with('mensaje','Usuario eliminado'); 
    }

}

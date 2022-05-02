<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class listUsersController extends Controller
{
    public function show(){
        $users = \DB::connection('mysql')
        ->table('users')
        ->get();

        if(sizeof($users) > 0){
            return response()->json([
                "success" => true,
                "action" => "Listado Usuarios",
                "message" => "Operacion exitosa.",
                "code" => 200,
                "data" => [
                    "usuarios" => $users]
            ], 200);
        }else{
            return response()->json([
                "success" => true,
                "action" => "Listado Usuarios",
                "message" => "Operacion erronea.",
                "code" => 200,
                "data" => [
                    "usuarios" => null]
            ], 200);
        }
    }

    public function getUserById($id){
        $users = \DB::connection('mysql')
        ->table('users')
        ->where('id',$id)
        ->get();

        if(sizeof($users) > 0){
            return response()->json([
                "success" => true,
                "action" => "Usuario buscado por id",
                "message" => "Operacion exitosa.",
                "code" => 200,
                "data" => [
                    "usuarios" => $users]
            ], 200);
        }else{
            return response()->json([
                "success" => true,
                "action" => "Usuario buscado por id",
                "message" => "Operacion erronea.",
                "code" => 200,
                "data" => [
                    "usuarios" => null]
            ], 200);
        }
    }
}

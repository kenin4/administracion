<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


class UserController extends Controller
{
    public function getAll( ){

        $users = User::all();

        return View::make('usuarios')->with("users", $users );
    }

    public function addUser( Request $data ){


        $user = new User;

        $user->nombre               = $data->nombre;
        $user->apellidos            = $data->apellidos;
        $user->email                = $data->email;
        $user->password             = bcrypt( $data->password );


        $user->save();

        return redirect()->action('UserController@getAll');

    }


    public function deleteUser( $id ){

        $user = User::find($id);
        $user->delete();
    }

    public function editUser( Request $data ){

        $user = User::find( $data->id );

        $user->nombre               = $data->nombre;
        $user->apellidos            = $data->apellidos;
        $user->email                = $data->email;

        $user->save();


        return redirect()->action('UserController@getAll');

    }


}

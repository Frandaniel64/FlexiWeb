<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{


    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     * @return \Illuminate\Http\Response
     * 
     */

    public function index()
    {
            ///validamos el rol del usuario
           /*  $this->authorize('viewAny', User::class); */
    }


    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     * 
     */
    public function create()

    {
 /*        $this->authorize('create', User::class); */
    }




    /**
     * autorizamos la edicion de un usuario
     */

     public function authorize(User $user)
     {
            //validamos los permisos del rol del susuario
            
     }
}
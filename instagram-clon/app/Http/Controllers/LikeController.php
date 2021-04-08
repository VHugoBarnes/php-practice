<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Like;

class LikeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function like($image_id)
    {
        // Recoger datos del usuario y la imagen
        $user = \Auth::user();

        $like = new Like();
        $like->user_id = $user->id;
        $like->image_id = (int)$image_id;

        // Guardar
        $like->save();
    }

    public function dislike($image_id)
    {

    }

}

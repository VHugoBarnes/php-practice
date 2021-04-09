<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

use App\Image;
use App\Comment;
use App\Like;

class ImageController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('image.create');
    }

    public function save(Request $request) 
    {
        // Validación
        $validate = $this->validate($request, [
            'description' => 'required',
            'image_path' => 'required|mimes:png,jpg,jpeg'
        ]);

        // Recogiendo los datos
        $image_path  = $request->file('image_path');
        $description = $request->input('description');

        // Asignar valores al nuevo objeto
        $user = \Auth::user();
        $image = new Image();
        $image->user_id = $user->id;
        $image->description = $description;

        // Subir fichero de imagen
        if($image_path) {
            $image_path_name = time().$image_path->getClientOriginalName();
            Storage::disk('images')->put($image_path_name, File::get($image_path));
            $image->image_path = $image_path_name;
        }

        // Ejecutar cambios
        $image->save();

        return redirect()->route('home')->with(['message' => 'La foto ha sido subida correctamente']);
    }

    public function getImage($filename)
    {
        $file = Storage::disk('images')->get($filename);
        return new Response($file, 200);
    }

    public function detail($id)
    {
        $image = Image::find($id);

        return view('image.detail', [
            'image' => $image
        ]);
    }

    public function delete($id)
    {
        $user = \Auth::user();
        $image = Image::find($id);

        // Borrar posibles comentarios y likes
        $comments = Comment::where('image_id', $id)->get();
        $likes = Like::where('image_id', $id)->get();

        if($user && $image && $image->user->id == $user->id) {
            // Eliminar comentarios
            if($comments && count($comments) >= 1) {
                foreach($comments as $comment) {
                    $comment->delete();
                }
            }
            // Eliminar likes
            if($likes && count($likes) >= 1) {
                foreach($likes as $like) {
                    $like->delete();
                }
            }

            // Eliminar ficheros de imagen
            Storage::disk('images')->delete($image->image_path);

            // Eliminar registros de la base de datos
            $image->delete();

            $message = array('message' => 'La imagen se ha borrado correctamente');
        } else {
            $message = array('message' => 'La imagen no se ha borrado correctamente');
        }

        return redirect()->route('home')->with($message);
    }

}

<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Image;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $images = Image::all();

    foreach ($images as $key => $image) {
        echo "<pre>" . $image->image_path . "</pre>";
        echo "<pre>" . $image->description . "</pre>";
        echo "<pre>" . $image->user->name . ' ' . $image->user->surname . "</pre>";

        if (count($image->comments) > 0) {
            echo "<h4>Comentarios</h4>";
            foreach ($image->comments as $comment) {
                echo "<pre>" . $comment->user->nick . ' - ' . $comment->content . "</pre>";
            }
        }

        echo "<h4>Likes: ". count($image->likes)."</h4>";

        echo "<hr>";
    }
    die();

    return view('welcome');
});

<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('posts');
});

Route::get('/json', function () {
    return ["msg"=> "hello"];
});


Route::get('posts/{post}', function ($slug) {
    $path = __DIR__."/../resources/posts/{$slug}.html";

    if(! file_exists($path)){
        // Die Dump Debug
        // ddd("file does not exist");
        
        // Throws 404 Not Found
        abort(404);
        
        // Redirect
        // return redirect("/");
    }

    // $post = cache()->remember("posts.{$slug}", 5, function() use ($path) {
    //     var_dump("test");
    //     return file_get_contents($path);
    // });

    /**
     * THEY HAVE ARROW FUNCTIONS??? Simliar to block above
     */ 
    $post = cache()->remember("posts.{$slug}", now()->addHours(), fn() => file_get_contents($path));

    
    
    return view('post', [
        'post' => $post
    ]);
}) -> where('post', '[A-z_\-]+');

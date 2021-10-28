<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /*
    index mostrar
    store guardar
    update para actualizar
    destroy para eliminar
    edit para mostrar
    */
    public function store(Request $request){
        $request->validate([
            'Titulo' => 'required|min:3',
            'Contenido'=> 'required|min:4'
        ]);

        $post = new Post;
        $post->Titulo = $request->Titulo;
        $post->Contenido = $request->Contenido;
        $post->save();

        return redirect()->route('post')->with('success','Publicación creada correctamente');

    }

    public function crear(){
        
        return view('post.create');
    }

    public function index(){
        $post = Post::all();
        return view('post.index',['post' => $post]);
    }

    public function show($id){
        $post = Post::find($id);
        return view('post.update',['post' => $post]);
    }

    public function update(Request $request, $id){
        $post = Post::find($id);
        $post->Titulo = $request->Titulo;
        $post->Contenido = $request->Contenido;
        $post->save();

        return redirect()->route('post')->with('success','Publicación actualizada');
    }
    public function destroy($id){
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('post')->with('success','Publicación eliminada');
    }
}

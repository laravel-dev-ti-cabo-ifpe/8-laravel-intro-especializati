<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePost;
use Illuminate\Http\Request;

use App\Models\Post;
use Illuminate\Support\Str;



class PostController extends Controller
{

    public function index(){
        $posts = Post::get();
        return view('admin.posts.index', compact('posts'));
    }
    public function create(){
        return view('admin.posts.create');
    }

    //public function store(Request $request){
    public function store(StoreUpdatePost $request){
        $data = $request->all();
        if($request->image->isValid()){
            //Pegando o nome do arquivo
            $nameFile = Str::of($request->title)->slug('-') . '.' . $request->image->getClientOriginalExtension();            
        
            $image = $request->image->storeAs('posts', $nameFile);
            $data['image'] = $image;

        }
        //$post = Post::create($request->all());
        Post::create($data);
        return redirect()->route('posts.index');
    }
}

## Insert Registers

## Edit route

``` 
use  App\Http\Controllers\{
    PostController
};

Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::get('/posts', [PostController::class, 'index'])->name('posts.index'); 
```

## Edit Model
``` protected $fillable = ['title', 'content'];```

## Edit Controller

```use App\Models\Post;

class PostController extends Controller
{

    public function index(){
        $posts = Post::get();
        return view('admin.posts.index', compact('posts'));
    }
    public function create(){
        return view('admin.posts.create');
    }

    public function store(Request $request){
        $post = Post::create($request->all());
        return redirect()->route('posts.index');
    }
} ```

## Edit View List

```    <a href="{{ route('posts.create') }}"> Criar Novo </a>
    <hr>
    <h1>Posts</h1>

    @foreach ($posts as $post)
            <p> {{$post->title}} -  {{$post->content}}</p>
           
    @endforeach
```

## Edit View Create
```    <h1> Cadastra Novo Post</h1>

    <form action="{{ route('posts.store') }}" method="post" >
        @csrf
        <input type="text" name="title" id="title" placeholder="Titulo">
        <textarea name="content" id="content" cols="100" rows="4" placeholder="Conteudo"> </textarea>
        <button type="submit"> Enviar </button>
    </form>```
  
https://academy.especializati.com.br/aula/inserir-registros-com-laravel

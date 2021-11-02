## Pagination

## Add paginate method in model in controller

``` 
$post = Post::paginate(1);

```

## Orderning Old Registers
```
$post = Post::latest()->paginate(1);
``` 

## Call links method in view
```
{{ $posts->links() }}
``` 
 
## References
https://academy.especializati.com.br/aula/paginacao-ordem-das-rotas-laravel

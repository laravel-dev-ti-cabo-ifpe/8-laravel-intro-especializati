## Validation


## Create class for manage the store and update the model
``` 
            php artisan make:request StoreUpdatePost
```

 ## Import The Form Rule 
 
 ```

use App\Http\Requests\StoreUpdatePost;
 ```
 
 ## Change the parameter  the store method
 
 ```
public function store(StoreUpdatePost $request)

 ```
 
## Add the helper to view

``` 
<input type="text" name="title" id="title" placeholder="Titulo " value="{{ old('title') }}" > </input>
``` 

## Add constant .env file 
FILESYSTEM_DRIVER = public

## References
https://academy.especializati.com.br/aula/autenticacao-laravel-8

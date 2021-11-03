## Authentication

## Download and Installing breeze via composer

``` 
composer require laravel/breeze --dev 
```

## Install breez via artisan

``` 
php artisan breeze:install

```

# Add dashboard route

``` 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
```


npm -v

## Downloa all dependencies
npm install  && run npm dev


## Add Authentique middleware method by route
``` 
Route::get("/posts", [PostController::class, 'index'])->name('posts.index')->middleware(['auth']);

```
 
## Add Authentique  middleware method by routes group 
``` 
Route::middleware(['auth'])->group(function(){
//route 1
//route 2
//route 3
});

``` 

## References
https://academy.especializati.com.br/aula/autenticacao-laravel-8

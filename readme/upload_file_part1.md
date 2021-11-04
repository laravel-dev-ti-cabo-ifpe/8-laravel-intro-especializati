## Upload


## Validate the image field an store public resource
``` 
           if($request->image->isValid()){
            $image =  $request->image->storage('posts');
           
        }
```

## Get all request data
``` 
   $data = $request->all();     
```
 ## Update from request
 
 ```
 $data['image'] = $image;
 ```
 
## add view component
``` 
<img src="{{ url("storage/{$post->image}") }}" alt="{{ $post->title }}" class="w-16">
``` 

## Import str helper
``` 
use Illuminate\Support\Str;
``` 

## Using the helper
``` 
$nameFile =Str::of($request-title)->slug('-'). '.' . $request->image->getClienOriginalNameExtension();
``` 

## Add constant .env file 
FILESYSTEM_DRIVER = public

## References
https://academy.especializati.com.br/aula/configuracoes-laravel-upload-arquivos
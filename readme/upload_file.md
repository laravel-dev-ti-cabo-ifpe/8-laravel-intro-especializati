## Upload


## Add Model attribute
``` 
            $table->string('title', 160).unique();
			$table->string('image');   
            $table->text('content')->nullable();
```
 ## Apply the change in the model
 
 ```
 php artisan migrate:refresh
 ```
 
## Add fields image for the model
``` 
protected $fillable = ['title', 'content','image'];
``` 

## Edit the Form Rule
``` 
public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'title' => 'required|min:3|max:160',
            'content' => 'required|min:5|max:255',
            'image' => 'required|image',
        ];
    }
``` 

## Add constant .env file 
FILESYSTEM_DRIVER = public

## References
https://academy.especializati.com.br/aula/configuracoes-laravel-upload-arquivos
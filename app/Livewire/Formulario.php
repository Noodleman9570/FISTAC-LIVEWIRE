<?php

namespace App\Livewire;

use App\Livewire\Forms\PostCreateForm;
use App\Livewire\Forms\PostEditForm;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Post;
use Livewire\Attributes\Lazy;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Formulario extends Component
{

    public $categories, $tags;

    // #[Rule([
    //     'postCreate.title' => 'required',
    //     'postCreate.content' => 'required',
    //     'postCreate.category_id' => 'required|exists:categories,id',
    //     'postCreate.tags' => 'required|array'
    // ],[],[
    //     'postCreate.title' => 'titulo',
    //     'postCreate.content' => 'contenido',
    //     'postCreate.category_id'=> 'categoria',
    //     'postCreate.tags' => 'etiquetas'
    // ])]
    
    public PostCreateForm $postCreate;
    
    public PostEditForm $postEdit;


    public $posts;
    
    //Ciclo de vida de un componente
    public function mount()
    {
        
        $this->categories = Category::all();
        $this->tags = Tag::all();
        $this->posts = Post::orderBy('updated_at', 'desc')->get();

    }

    public function updating($property, $value)
    {

        $cant = count(Category::all());

        if ( $property === "postCreate.category_id") {
            if ($value > $cant) {
                throw new \Exception("No puedes seleccionar esta categoria");
            }
            
        }
    }

    public function save()
    {
        $this->postCreate->save();
        $this->posts = Post::all();

        $this->dispatch('post-action', 'Nuevo articulo creado');
    }

    public function edit($postId)
    {
        $this->resetValidation();
        $this->postEdit->edit($postId);
    }

    public function update()
    {
        $this->postEdit->update();
        $this->posts = Post::all();

        $this->dispatch('post-action', 'Articulo actualizado');
    }

    public function destroy($postId)
    {
        $post = Post::find($postId);

        $post->delete();

        $this->posts = Post::all();

        $this->dispatch('post-action', 'Articulo eliminado');
    }

 

    public function render(){
        return view('livewire.formulario');
    }
        
    
}
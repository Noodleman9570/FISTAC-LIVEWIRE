<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Tag;
use App\Models\Post;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Formulario extends Component
{

    public $categories, $tags;

    #[Rule([
        'postCreate.title' => 'required',
        'postCreate.content' => 'required',
        'postCreate.category_id' => 'required|exists:categories,id',
        'postCreate.tags' => 'required|array'
    ],[],[
        'postCreate.title' => 'titulo',
        'postCreate.content' => 'contenido',
        'postCreate.category_id'=> 'categoria',
        'postCreate.tags' => 'etiquetas'
    ])]

    public $postCreate = [
        'category_id' => '',
        'title' => '',
        'content' => '',
        'tags' => []
    ];

    public $postEdit = [
        'category_id' => '',
        'title' => '',
        'content' => '',
        'tags' => []
    ];


    public $posts;
    public $open = false;
    public $postEditId = '';
   
    public function mount()
    {
        $this->categories = Category::all();
        $this->tags = Tag::all();

        $this->posts = Post::orderBy('updated_at', 'desc')->get();
    }

    public function save()
    {

        $this->validate();

        // $this->validate([//reglas
        //     'title' => 'required|min:4',
        //     'content' => 'required',
        //     'category_id' => 'required|exist:categories,id',
        //     'selectedTags' => 'required|array'
        // ],[//mensajes
    
        // ],[//atributos
        //     'category_id' => 'categoria',
        //     'selectedTags' => 'etiquetas'
        // ]);


        // $post = Post::create([
        //     'category_id' => $this->category_id,
        //     'title' => $this->title,
        //     'content' => $this->content,
        // ]);

        $post = Post::create([
            'category_id' => $this->postCreate['category_id'],
            'title' => $this->postCreate['title'],
            'content' => $this->postCreate['content']
        ]);

        $post->tags()->attach($this->postCreate['tags']);

        $this->reset(['postCreate']);

        $this->posts = Post::all();
    }

    public function edit($postId)
    {
        $this->resetValidation();
        
        $this->open = true;

        $this->postEditId = $postId;

        $post = Post::find($postId);

        $this->postEdit['category_id'] = $post->category_id;
        $this->postEdit['title'] = $post->title;
        $this->postEdit['content'] = $post->content;
        $this->postEdit['tags'] = $post->tags->pluck('id')->toArray();

    }

    public function update()
    {

       
       $this->validate([
            'postEdit.title' => 'required',
            'postEdit.content' => 'required',
            'postEdit.category_id' => 'required|exists:categories,id',
            'postEdit.tags' => 'required|array'
        ],[],[
            'postEdit.title' => 'titulo',
            'postEdit.content' => 'contenido',
            'postEdit.category_id'=> 'categoria',
            'postEdit.tags' => 'etiquetas'
        ]);

        $post = Post::find($this->postEditId);

        $post->update([
            'category_id' => $this->postEdit['category_id'],
            'title' => $this->postEdit['title'],
            'content' => $this->postEdit['content'],
        ]);

        $post->tags()->sync($this->postEdit['tags']);

        $this->reset(['postEditId', 'postEdit', 'open']);

        $this->posts = Post::all();
    }

    public function destroy($postId)
    {
        $post = Post::find($postId);

        $post->delete();

        $this->posts = Post::all();
    }

    public function render(){
        return view('livewire.formulario');
    }
        
    
}
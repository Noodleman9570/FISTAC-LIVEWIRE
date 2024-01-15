<?php

namespace App\Livewire\Contribuyentes\Forms;

use App\Models\Post;
use Livewire\Attributes\Validate;

use Livewire\Attributes\Rule;
use Livewire\Form;

class ContribuyenteCreateForm extends Form
{
    public $req = true;
    public $open = false;

    #[Rule('required')]
    public $prefijo;

    #[Rule('required|number|between:100000,100000000')]
    public $cedula;

    #[Rule('required|alpha|min:3|max:25')]
    public $nombre1st;

    #[Rule('required|min:3|max:25')]
    public $nombre2nd;

    #[Rule('required|alpha|min:3|max:25')]
    public $apellido1st;

    #[Rule('required|min:3|max:25')]
    public $apellido2nd;

    #[Rule('required|min:10|max:100')]
    public $direccion = '';

    #[Rule('required|required|regex:/^(0412|0414|0424|0416|0426|0234|0241|0251|0235|0271|0261|0271|0281|0291)\d{7}$/')]
    public $telefono;

    public function reqSwitch()
    {
        
        $this->req = !$this->req;

    }

    public function create()
    {
        $this->open = true;
    }

    // public function save ()
    // {
    //     $this->validate();

    //     $post = Post::create(
    //         $this->only('title','content','category_id')
    //     );

    //     $post->tags()->attach($this->tags);

    //     $this->reset();
    // }

    protected function messages() {
        return [
        'category_id.required' => 'La categoría es requerida',
        'tags.required' => 'Las etiquetas son requeridas',
        ];
    }

}

<?php

namespace App\Livewire\Category;

use App\Models\Category;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
    #[Validate('required')]
    public $name = '';

    public function store(){

        $this->validate();

        $categories = Category::create([
            'name' => $this->name
        ]);

        $this->name= '';
    }

    public function render()
    {

        return view('livewire.category.create');
    }
}

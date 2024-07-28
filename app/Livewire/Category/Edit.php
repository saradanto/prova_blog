<?php

namespace App\Livewire\Category;

use App\Models\Category;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{

    public $category;
    #[Validate('required')]
    public $name;

    public function mount(){
        $this->name = $this->category->name;
    }

    public function update(){
        $this->category->update([
            'name' => $this->name
        ]);

        session()->flash('status', 'Aggiornamento riuscito!');

        return redirect()->route('categories.index');
    }

    public function render()
    {


        return view('livewire.category.edit');
    }

}

<?php

namespace App\Livewire\Category;

use App\Models\Category;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $categories = Category::all();
        return view('livewire.category.index', ['categories' => $categories]);
    }
}

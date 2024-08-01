<?php

namespace App\Livewire\Article;

use App\Models\Article;
use Livewire\Component;

class Mainsearch extends Component
{
    public $search = '';

    public function render()
    {
        $query = Article::query();

        if ($this->search) {
            $query->where('title', 'LIKE', '%' . $this->search . '%');
        }

        $articles = $query->orderBy('created_at', 'desc')->paginate(6);

        return view('livewire.article.mainsearch', ['articles' => $articles]);
    }
}

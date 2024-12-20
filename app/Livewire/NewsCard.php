<?php

namespace App\Livewire;

use Livewire\Component;

class NewsCard extends Component
{

    public $title = 'Default Title';
    public $description = 'Default description.';
    public $image = 'https://via.placeholder.com/300';

    public function render()
    {
        return view('livewire.news-card', [
            'title' => $this->title,
            'description' => $this->description,
            'image' => $this->image,
        ]);
    }
}

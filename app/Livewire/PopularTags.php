<?php

namespace App\Livewire;

use App\Models\Tag;
use Livewire\Component;

class PopularTags extends Component
{
    public function render()
    {
        $popularTags = Tag::all();
        return view('livewire.popular-tags',compact('popularTags'));
    }
}

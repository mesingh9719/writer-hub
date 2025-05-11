<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class FeaturedPosts extends Component
{
    public function render()
    {
        $featuredPosts = Post::where('is_featured',1)->get();
        return view('livewire.featured-posts',[
            'featuredPosts' => $featuredPosts
        ]);
    }
}

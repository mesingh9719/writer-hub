<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class TrendingPosts extends Component
{
    public function render()
    {
        $trendingPosts = Post::where('is_trending',1)->get();
        return view('livewire.trending-posts',compact('trendingPosts'));
    }
}

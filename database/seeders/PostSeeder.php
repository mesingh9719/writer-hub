<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 5; $i++) {
            Post::create([
                'user_id'        => 1, // Ensure this user exists
                'title'          => "Featured Post Title $i",
                'slug'           => Str::slug("Featured Post Title $i"),
                'featured_image' => 'https://via.placeholder.com/800x400?text=Post+' . $i,
                'body'           => "This is the body content of featured post number $i.",
                'is_published'   => true,
                'is_draft'       => false,
                'is_featured'    => true,
                'is_trending'    => $i % 2 === 0, // alternate trending posts
            ]);
        }
    }
}

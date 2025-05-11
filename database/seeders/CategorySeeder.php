<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Technology', 'icon' => 'fa fa-laptop'],
            ['name' => 'Health', 'icon' => 'fa fa-heartbeat'],
            ['name' => 'Travel', 'icon' => 'fa fa-plane'],
            ['name' => 'Education', 'icon' => 'fa fa-graduation-cap'],
            ['name' => 'Lifestyle', 'icon' => 'fa fa-leaf'],
        ];

        foreach ($categories as $data) {
            Category::create([
                'name' => $data['name'],
                'slug' => Str::slug($data['name']),
                'icon' => $data['icon'],
                'is_active' => true,
            ]);
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Sport',
            'slug' => Str::slug(request('sport'), '-')
        ]);

        Category::create([
            'name' => 'Technology',
            'slug' => Str::slug(request('technology'), '-')
        ]);

        Category::create([
            'name' => 'Knowledge',
            'slug' => Str::slug(request('knowledge'), '-')
        ]);

        Category::create([
            'name' => 'Other',
            'slug' => Str::slug(request('other'), '-')
        ]);
    }
}

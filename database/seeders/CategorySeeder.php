<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{

    public function run()
    {
        Category::create([
            'name'=>'Food',
            'slug'=>Str::slug('food'),
            'name_ar'=>'طعام',
            'slug_ar'=>'طعام',
        ]);

        Category::create([
            'name'=>'Home furniture',
            'slug'=>Str::slug('home furniture'),
            'name_ar'=>'أثاث منزلي',
            'slug_ar'=>'أثاث_منزلي',
        ]);
    }
}

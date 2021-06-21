<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'پیاده روی'
        ]);

        Category::create([
            'name' => 'رانینگ'
        ]);

        Category::create([
            'name' => 'اسپرت'
        ]);

        Category::create([
            'name' => 'بسکتبال'
        ]);

        Category::create([
            'name' => 'استوک'
        ]);

        Category::create([
            'name' => 'سالن'
        ]);

        Category::create([
            'name' => 'والیبال'
        ]);

        Category::create([
            'name' => 'کوه نوردی'
        ]);
    }
}

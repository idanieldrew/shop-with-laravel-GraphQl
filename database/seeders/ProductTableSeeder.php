<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'کقش اول',
            'color' => 'blue',
            'size' => '42',
            'image' => 'shoe.png',
            'details' => 'کفشی منعطف',
            'description' => ' کفشی با دوام بالا و مناسب برای همه',
            'featured' => true,
            'link' => 'abcdef',
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'کقش دو',
            'color' => 'blue',
            'size' => '42',
            'image' => 'shoe.png',
            'details' => 'کفشی منعطف',
            'description' => ' کفشی با دوام بالا و مناسب برای همه',
            'featured' => true,
            'link' => 'abcdef',
            'category_id' => 2
        ]);

        Product::create([
            'name' => 'کقش سه',
            'color' => 'blue',
            'size' => '42',
            'image' => 'shoe.png',
            'details' => 'کفشی منعطف',
            'description' => ' کفشی با دوام بالا و مناسب برای همه',
            'featured' => true,
            'link' => 'abcdef',
            'category_id' => 3
        ]);

        Product::create([
            'name' => 'کقش چهار',
            'color' => 'blue',
            'size' => '42',
            'image' => 'shoe.png',
            'details' => 'کفشی منعطف',
            'description' => ' کفشی با دوام بالا و مناسب برای همه',
            'featured' => true,
            'link' => 'abcdef',
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'کقش پنج',
            'color' => 'blue',
            'size' => '42',
            'image' => 'shoe.png',
            'details' => 'کفشی منعطف',
            'description' => ' کفشی با دوام بالا و مناسب برای همه',
            'featured' => true,
            'link' => 'abcdef',
            'category_id' => 7
        ]);

        Product::create([
            'name' => 'کقش شش',
            'color' => 'blue',
            'size' => '42',
            'image' => 'shoe.png',
            'details' => 'کفشی منعطف',
            'description' => ' کفشی با دوام بالا و مناسب برای همه',
            'featured' => true,
            'link' => 'abcdef',
            'category_id' => 3
        ]);

        Product::create([
            'name' => 'کقش هفت',
            'color' => 'blue',
            'size' => '42',
            'image' => 'shoe.png',
            'details' => 'کفشی منعطف',
            'description' => ' کفشی با دوام بالا و مناسب برای همه',
            'featured' => true,
            'link' => 'abcdef',
            'category_id' => 3
        ]);

        Product::create([
            'name' => 'کقش هشت',
            'color' => 'blue',
            'size' => '42',
            'image' => 'shoe.png',
            'details' => 'کفشی منعطف',
            'description' => ' کفشی با دوام بالا و مناسب برای همه',
            'featured' => true,
            'link' => 'abcdef',
            'category_id' => 7
        ]);

        Product::create([
            'name' => 'کقش نه',
            'color' => 'blue',
            'size' => '42',
            'image' => 'shoe.png',
            'details' => 'کفشی منعطف',
            'description' => ' کفشی با دوام بالا و مناسب برای همه',
            'featured' => true,
            'link' => 'abcdef',
            'category_id' => 4
        ]);

        Product::create([
            'name' => 'کقش ده',
            'color' => 'blue',
            'size' => '42',
            'image' => 'shoe.png',
            'details' => 'کفشی منعطف',
            'description' => ' کفشی با دوام بالا و مناسب برای همه',
            'featured' => true,
            'link' => 'abcdef',
            'category_id' => 2
        ]);

        Product::create([
            'name' => 'کقش یازده',
            'color' => 'blue',
            'size' => '42',
            'image' => 'shoe.png',
            'details' => 'کفشی منعطف',
            'description' => ' کفشی با دوام بالا و مناسب برای همه',
            'featured' => true,
            'link' => 'abcdef',
            'category_id' => 5
        ]);

        Product::create([
            'name' => 'کقش دوازده',
            'color' => 'blue',
            'size' => '42',
            'image' => 'shoe.png',
            'details' => 'کفشی منعطف',
            'description' => ' کفشی با دوام بالا و مناسب برای همه',
            'featured' => true,
            'link' => 'abcdef',
            'category_id' => 2
        ]);

        Product::create([
            'name' => 'کقش سیزده',
            'color' => 'blue',
            'size' => '42',
            'image' => 'shoe.png',
            'details' => 'کفشی منعطف',
            'description' => ' کفشی با دوام بالا و مناسب برای همه',
            'featured' => true,
            'link' => 'abcdef',
            'category_id' => 8
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Cloth_materials;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Bag_materialsSeeder::class);
        $this->call(Cloths_sizeSeeder::class);
        $this->call(Cloth_materialsSeeder::class);
        $this->call(ColorsSeeder::class);
        $this->call(Decoration_materialsSeeder::class);
        $this->call(Gloves_sizesSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(Photo_materialsSeeder::class);
        $this->call(Ring_sizeSeeder::class);
        $this->call(Sculpture_materialsSeeder::class);
        $this->call(Shoes_materialsSeeder::class);
        $this->call(Shoes_sizesSeeder::class);
        $this->call(Sub_categoriesSeeder::class);
        $this->call(Sub_menuSeeder::class);
        $this->call(sub_categories_sub_menusSeeder::class);

    }
}

<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Category::truncate();
        DB::table('categories')->truncate();

        $faker = Faker::create('en_US');

        for ($i = 0; $i < 6; $i++) {
            Category::create([
                'parent'    => 0,
                'slug'      => $faker->unique()->word(),
                'name'      => ucfirst($faker->unique()->word()),
                'desc'      => $faker->sentence(10),
                'priority'  => $i,
                'is_public' => 1
            ]);
        }
        $cats = Category::where('parent', 0)->get();
        foreach ($cats as $i => $cat) {
            for ($i = 0; $i < rand(2, 4); $i++) {
                Category::create([
                    'parent'    => $cat->id,
                    'slug'      => $faker->unique()->word(),
                    'name'      => ucfirst($faker->unique()->word()),
                    'desc'      => $faker->sentence(10),
                    'priority'  => $i,
                    'is_public' => 1
                ]);
            }
        }

        $cats = Category::where('parent', '<>', 0)->get();
        foreach ($cats as $i => $cat) {
            for ($i = 0; $i < rand(3, 6); $i++) {
                Category::create([
                    'parent'    => $cat->id,
                    'slug'      => $faker->unique()->word(),
                    'name'      => ucfirst($faker->unique()->word()),
                    'desc'      => $faker->sentence(10),
                    'priority'  => $i,
                    'is_public' => 1
                ]);
            }
        }
    }
}

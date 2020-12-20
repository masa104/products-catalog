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
            $name = trim($faker->unique()->sentence(1), '.');
            $slug = strtolower(str_replace(' ', '-', $name));
            Category::create([
                'parent_id' => 0,
                'slug'      => $slug,
                'name'      => $name,
                'desc'      => $faker->sentence(10),
                'priority'  => $i,
                'is_public' => 1
            ]);
        }
        $cats = Category::where('parent_id', 0)->get();
        foreach ($cats as $i => $cat) {
            for ($i = 0; $i < rand(3, 9); $i++) {
                $name = trim($faker->unique()->sentence(1), '.');
                $slug = strtolower(str_replace(' ', '-', $name));
                Category::create([
                    'parent_id' => $cat->id,
                    'slug'      => $slug,
                    'name'      => $name,
                    'desc'      => $faker->sentence(10),
                    'priority'  => $i,
                    'is_public' => 1
                ]);
            }
        }

        // $cats = Category::where('parent_id', '<>', 0)->get();
        // foreach ($cats as $i => $cat) {
        //     for ($i = 0; $i < rand(4, 8); $i++) {
        //         Category::create([
        //             'parent_id'    => $cat->id,
        //             'slug'      => $faker->unique()->word(),
        //             'name'      => ucfirst(trim($faker->unique()->sentence(1), '.')),
        //             'desc'      => $faker->sentence(10),
        //             'priority'  => $i,
        //             'is_public' => 1
        //         ]);
        //     }
        // }
    }
}

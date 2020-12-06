<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Icon;

class IconsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('icons')->truncate();
        $faker = Faker::create('en_US');


        for ($i = 0; $i < 16; $i++) {
            $name = trim($faker->unique()->sentence(1), '.');
            $slug = strtolower(str_replace(' ', '_', $name));
            Icon::create([
                'slug' => $slug,
                'name' => $name,
                'is_public' => 1,
            ]);
        }
    }
}

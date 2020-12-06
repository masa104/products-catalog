<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Item;
use App\Models\Spec;

class SpecsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('specs')->truncate();

        $items = Item::all();

        foreach ($items as $item) {
            $faker = Faker::create('en_US');

            for ($i = 0; $i < rand(1, 6); $i++) {
                Spec::create([
                    'code' => $item->code,
                    'heading' => $faker->unique()->word(),
                    'content' => $faker->unique()->word(),
                    'priority' => $i,
                    'is_public' => 1,
                ]);
            }
        }
    }
}

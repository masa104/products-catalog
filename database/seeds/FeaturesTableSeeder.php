<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Item;
use App\Models\Feature;

class FeaturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('features')->truncate();
        $faker1 = Faker::create('en_US');

        $items = Item::all();

        foreach ($items as $item) {
            $faker2 = Faker::create('en_US');

            for ($i = 0; $i < rand(1, 6); $i++) {
                Feature::create([
                    'code' => $item->code,
                    'heading' => $faker2->unique()->sentence(rand(5, 7)),
                    'content' => $faker2->sentence(rand(24, 48)),
                    'priority' => $i,
                    'is_public' => 1,
                ]);
            }
        }
    }
}

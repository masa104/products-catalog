<?php

use Illuminate\Database\Seeder;
use App\Models\Item;
use App\Models\Icon;
use App\Models\ItemIcon;

class ItemIconTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('icon_item')->truncate();

        $items = Item::all();

        foreach ($items as $item) {
            $icons = Icon::inRandomOrder()->take(rand(1, 4))->get();
            $data = [];
            foreach ($icons as $i => $icon) {
                $data[] = [
                    'created_at' => (new DateTime())->format('Y-m-d H:i:s'),
                    'updated_at' => (new DateTime())->format('Y-m-d H:i:s'),
                    'item_id'    => $item->id,
                    'icon_id'    => $icon->id,
                    'priority'   => $i,
                ];
            }

            ItemIcon::insert($data);
        }
    }
}

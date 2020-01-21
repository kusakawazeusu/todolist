<?php

use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = collect([
            'Pass the tests',
            'Reveals intention',
            'No duplication',
            'Fewest elements',
        ]);

        DB::table('items')->insert($items->map(function ($item) {
            return [
                'item' => $item,
                'isCompleted' => false,
            ];
        })->toArray());
    }
}

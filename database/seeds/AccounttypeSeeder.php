<?php

use Illuminate\Database\Seeder;

class AccounttypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [

            ['id' => 1, 'title'   => 'Saving account'],
            ['id' => 2, 'title'   => 'Current account'],
        ];

        foreach ($items as $item) {
            \App\Models\Accounttype::create($item);
        }
    }
}

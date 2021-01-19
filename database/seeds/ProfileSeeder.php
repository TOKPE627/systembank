<?php

use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [

            ['id' => 1, 'name' => 'admin', 'description'       => 'Profile of Admin'],
            ['id' => 2, 'name' => 'employee', 'description'    => 'Profile of Employee'],
            ['id' => 3, 'name' => 'customer', 'description'    => 'Profile of customer']

        ];

        foreach ($items as $item) {
            \App\Models\Profile::create($item);
        }

    }
}

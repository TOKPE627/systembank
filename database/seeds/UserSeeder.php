<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $items = [
            [
                'lastname'         => 'Henry',
                'firstname'        => 'Suarz',
                'email'            => 'henry@gmail.com',
                'profile_id'       => '1',
                'password'         => \Illuminate\Support\Facades\Hash::make('passer'),
                'date_birth'       => '12-09-1980',
                'picture'          => 'mypicture.png',
                'phone_no'         => '+221772049681',
                'gender'           => 'Male',
                'address'          => 'Rue 34 Ouest Foire',
                'city_name'        => 'Dakar',
                'state'            => 'Fass',
                'zip_code'         => '19192-78282',
                'profession'       => 'Developer',
                'registered_on'    => '12-18-2021',
            ],
            [
                'lastname'         => 'BOSCO',
                'firstname'        => 'Amy',
                'email'            => 'amy@gmail.com',
                'profile_id'       => '2',
                'password'         => \Illuminate\Support\Facades\Hash::make('passer'),
                'date_birth'       => '12-09-1982',
                'picture'          => 'mypicture.png',
                'phone_no'         => '+221772042681',
                'gender'           => 'Female',
                'address'          => 'Rue 54 Ouest Foire',
                'city_name'        => 'Dakar',
                'state'            => 'Colobane',
                'zip_code'         => '39192-58282',
                'profession'       => 'Maintenance',
                'registered_on'    => '12-10-2020',
            ],
            [
                'lastname'         => 'GARITH',
                'firstname'        => 'volt',
                'email'            => 'volt@gmail.com',
                'profile_id'       => '3',
                'password'         => \Illuminate\Support\Facades\Hash::make('passer'),
                'date_birth'       => '12-09-1982',
                'picture'          => 'mypicture.png',
                'phone_no'         => '+221772042681',
                'gender'           => 'Male',
                'address'          => 'Rue 54 Ouest Foire',
                'city_name'        => 'Dakar',
                'state'            => 'Colobane',
                'zip_code'         => '39192-58282',
                'profession'       => 'Shoesmaker',
                'registered_on'    => '12-10-2020',
            ],
        ];

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}

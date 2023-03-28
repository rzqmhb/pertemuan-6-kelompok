<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'username' => 'rzqmhb',
                'name' => 'Roziq Mahbubi',
                'email' => 'roziqmahbubi22@gmail.com',
                'password' => Hash::make('inipassword'),
            ],
            [
                'username' => 'dv.andini',
                'name' => 'Devi Andini Febrianti',
                'email' => 'dv.andinifebrianti@gmail.com',
                'password' => Hash::make('password')
            ]
        ];
        DB::table('users')->insert($data);
    }
}

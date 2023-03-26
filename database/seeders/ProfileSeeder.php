<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            [
                'nama' => 'Roziq Mahbubi',
                'nim' => 2141720086,
                'github' => '@rzqmhb',
                'email' => 'roziqmahbubi22@gmail.com',
                'no_whatsapp' => '+6287762874125',
                'education' => 'D4 TI - Politeknik Negeri Malang',
                'location' => 'Malang, Jawa Timur',
                'note' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem odio, repellat illo quos eius similique, deserunt sint assumenda ipsa eum facere exercitationem esse, nisi voluptatibus corrupti cum rerum nihil necessitatibus.',
                'slug' => 'roziq-mahbubi'
            ]
            ,
            [
                'nama' => 'Devi Andini Febrianti',
                'nim' => '2141720189',
                'github' => 'https://github.com/deviandinifebrianti',
                'email' => 'dv.andinifebrianti@gmail.com',
                'no_whatsapp' => '+81936791863',
                'education' => 'D4 TI/2G - Politeknik Negeri Malang',
                'location' => 'Kediri, Jawa Timur',
                'note' => 'pertemuan 4 - pwl',
                'slug' => 'devi-andini-febrianti'
            ]
        ]);
    }
}

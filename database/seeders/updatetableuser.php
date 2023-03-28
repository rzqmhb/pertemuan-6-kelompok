<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class updatetableuser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->where('id', '1')->update(['profile'=>'roziq.jpg']);
        DB::table('users')->where('id', '2')->update(['profile'=>'devi.jpeg']);
    }
}

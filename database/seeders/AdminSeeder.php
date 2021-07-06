<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'FullName'=>'Seras R. Kansakar',
            'LoginName'=>'AdminSeras',
            'password'=>Hash::make('seras123'),
            'ContactNo'=>'2313122'
            ]);
    }
}

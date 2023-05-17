<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminte\Support\Facades\DB;
use Illuminte\Support\Facades\Hash;
use Illuminte\Support\Facades\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => Srt::random(18),
            'email' => Srt::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}

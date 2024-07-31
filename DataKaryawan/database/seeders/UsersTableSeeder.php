<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'profil_id' => 1, // Pastikan ini adalah ID yang valid dalam tabel profil
                'username'  => 'user',
                'email'     => 'user@gmail.com',
                'password'  => Hash::make('userdata'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('users')->insert($data);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'email' => 'admin@reportes.com',
            'password' => Hash::make('secret')
        ]);

        User::create([
            'email' => 'tecnico@reportes.com',
            'password' => Hash::make('secret')
        ]);

        User::create([
            'email' => 'cliente@reportes.com',
            'password' => Hash::make('secret')
        ]);

    }
}
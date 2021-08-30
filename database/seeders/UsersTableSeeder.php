<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Profile;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $admin = User::create([
            'email' => 'admin@reportes.com',
            'password' => Hash::make('secret'),
            'role_name' => 'admin'

        ]);
        $admin->profile()->save(Profile::factory()->make());

        $tecnico = User::create([
            'email' => 'tecnico@reportes.com',
            'password' => Hash::make('secret'),
            'role_name' => 'tecnico'
        ]);
        $tecnico->profile()->save(Profile::factory()->make());



        $cliente = User::create([
            'email' => 'cliente@reportes.com',
            'password' => Hash::make('secret'),
            'role_name' => 'cliente'
        ]);
        $cliente->profile()->save(Profile::factory()->make());

    }
}

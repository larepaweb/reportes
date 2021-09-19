<?php

namespace Database\Seeders;

use App\Models\Ref;
use Illuminate\Database\Seeder;

class RefSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ref::create([
            'reference_name' => 'Talanqueras'
        ]);

        Ref::create([
            'reference_name' => 'Control de acceso'
        ]);

        Ref::create([
            'reference_name' => 'Soporte Técnico'
        ]);
    }
}

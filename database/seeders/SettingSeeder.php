<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'num_service' => '1234',
            'num_mantain' => '121',
            'moneda' => 'Q',
            'iva' => '12',
            'isr' => '14',
            'logo' => 'default.png',
            'watermark' => 'watermark.png',
            'payment' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis quidem mollitia iure adipisci, aut nostrum at quasi temporibus! Cupiditate hic ut nesciunt ducimus iusto consequuntur cum ullam sint reprehenderit blanditiis?',
            'warranty' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis quidem mollitia iure adipisci, aut nostrum at quasi temporibus! Cupiditate hic ut nesciunt ducimus iusto consequuntur cum ullam sint reprehenderit blanditiis?',
            'requeriments' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis quidem mollitia iure adipisci, aut nostrum at quasi temporibus! Cupiditate hic ut nesciunt ducimus iusto consequuntur cum ullam sint reprehenderit blanditiis?',
            'mail_services' => 'info@reportes.com',
            'mail_mantain' => 'info@reportes.com',

        ]);


    }
}

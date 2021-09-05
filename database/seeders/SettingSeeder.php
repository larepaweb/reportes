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
            'key' => 'num_service',
            'value' => '1234'

        ]);

        Setting::create([
            'key' => 'num_mantain',
            'value' => '121'

        ]);

        Setting::create([
            'key' => 'moneda',
            'value' => 'Q'

        ]);

        Setting::create([
            'key' => 'iva',
            'value' => '12'

        ]);

        Setting::create([
            'key' => 'isr',
            'value' => '14'

        ]);

        Setting::create([
            'key' => 'logo',
            'value' => 'logo.png'

        ]);

        Setting::create([
            'key' => 'watermark',
            'value' => 'watermark.png'

        ]);

        Setting::create([
            'key' => 'payment',
            'value' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis quidem mollitia iure adipisci, aut nostrum at quasi temporibus! Cupiditate hic ut nesciunt ducimus iusto consequuntur cum ullam sint reprehenderit blanditiis?'

        ]);

        Setting::create([
            'key' => 'warranty',
            'value' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis quidem mollitia iure adipisci, aut nostrum at quasi temporibus! Cupiditate hic ut nesciunt ducimus iusto consequuntur cum ullam sint reprehenderit blanditiis?'

        ]);

        Setting::create([
            'key' => 'requeriments',
            'value' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis quidem mollitia iure adipisci, aut nostrum at quasi temporibus! Cupiditate hic ut nesciunt ducimus iusto consequuntur cum ullam sint reprehenderit blanditiis?'

        ]);

        Setting::create([
            'key' => 'mail_services',
            'value' => 'info@reportes.com'

        ]);

        Setting::create([
            'key' => 'mail_mantain',
            'value' => 'info@reportes.com'

        ]);
    }
}

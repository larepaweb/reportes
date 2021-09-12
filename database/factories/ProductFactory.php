<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $cantidad = $this->faker->numberBetween(1,5);
        $pCompra = $this->faker->numberBetween(50,250);
        $pBase = $this->faker->numberBetween($pCompra, $pCompra + $pCompra*0.30);

        $iva = (get_setting_value('iva')/ 100) * $pBase ;
        $isr = (get_setting_value('isr')/ 100) * $pBase ;

        $pventa = $cantidad * ($pBase + $isr + $iva);
        $utilidad = $cantidad * ($pBase - $pCompra);

        return [
            'product_name' => $this->faker->realText(30),
            'cantidad' => $cantidad,
            'pCompra' => $pCompra,
            'pBase' => $pBase ,
            'isr' => $isr,
            'iva' => $iva,
            'pVenta' => $pventa,
            'utilidad' => $utilidad,
            'imagen' => 'https://www.serverrack24.com/media/catalog/product/cache/ade1b490255229c0e2ade60bb5702a2d/c/a/cat6a_rood.jpg',
        ];
    }
}

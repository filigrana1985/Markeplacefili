<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product; //llamamos la clase que determina los productos//

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Combo Dama Thermo Shapers: Faja térmica cinturilla + cintura de avispa reductora',
            'slug' => 'Faja térmica cinturilla',
            'details' => 'Lleva con este fabuloso combo la mezcla ideal de la cinturilla térmica Thermo Shapers con el cinturón reductor y así obtendrás una cintura de avispa perfecta.\r\n\r\n- Ideal para el uso en el gimnasio y rutinas de ejercicio',
            'price' => 49900,
            'shipping_cost' => 5900,
            'description' => 'Fajas y Ropa deportiva',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'fajamegashop.jpg'
        ]);

        Product::create([
            'name' => 'Afilador Cuchillos Profesional seguro y práctico Chef Master',
            'slug' => 'Chef Master Afilador de Cuchillos',
            'details' => 'Mantener tus Cuchillos con filo perfecto y duradero es básico para garantizar la seguridad al manejarlos',
            'price' => 64900,
            'shipping_cost' => 5900,
            'description' => 'Producto Novedoso se encarga de afilar tus cuchillos de manera facil',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'afilador.jpg'
        ]);

        Product::create([
            'name' => 'iPhone 11 Pro',
            'slug' => 'iphone-11-pro',
            'details' => '6.1 pulgadas, 64GB 4GB RAM',
            'price' => 2300000,
            'shipping_cost' => 5900,
            'description' => 'iPhone 11 Pro',
            'category_id' => 2,
            'brand_id' => 1,
            'image_path' => 'iphone11.jpg'
        ]);

        Product::create([
            'name' => 'Remax 610D Headset',
            'slug' => 'remax-610d',
            'details' => '6.1 pulgadas, 64GB 4GB RAM',
            'price' => 350000,
            'shipping_cost' => 5900,
            'description' => 'Remax 610D Headset',
            'category_id' => 3,
            'brand_id' => 3,
            'image_path' => 'remax.jpg'
        ]);

        Product::create([
            'name' => 'Samsung LED TV',
            'slug' => 'samsung-led-24',
            'details' => '24 pulgadas, LED Display, Resolución 1366 x 768',
            'price' => 3200000,
            'shipping_cost' => 5900,
            'description' => 'Samsung LED TV',
            'category_id' => 4,
            'brand_id' => 4,
            'image_path' => 'tv.jpg'
        ]);

        Product::create([
            'name' => 'Samsung Camara Digital',
            'slug' => 'samsung-mv800',
            'details' => '16.1MP, 5x Optical Zoom',
            'price' => 1800000,
            'shipping_cost' => 5900,
            'description' => 'Samsung Digital Camera',
            'category_id' => 5,
            'brand_id' => 4,
            'image_path' => 'camara.jpg'
        ]);

        Product::create([
            'name' => 'Huawei GR 5 2022',
            'slug' => 'gr5-2017',
            'details' => '7.5 pulgadas, 128GB 6GB RAM',
            'price' => 1400000,
            'shipping_cost' => 5900,
            'description' => 'Huawei GR 5 2022',
            'category_id' => 2,
            'brand_id' => 5,
            'image_path' => 'celular.jpg'
        ]);

        Product::create([
            'name' => 'Combo: Freidora de aire 4.3 L + Molino Multiusos Chef Master ',
            'slug' => 'Freidora de aire',
            'details' => 'Polímero de alta resistencia y componentes electrónicos',
            'price' => 439900,
            'shipping_cost' => 5900,
            'description' => 'Para cocinar saludablemente se requiere de habilidad, mucho corazón y este útil combo',
            'category_id' => 2,
            'brand_id' => 5,
            'image_path' => 'freidora.jpg'
        ]);

        Product::create([
            'name' => 'Máquina para moler manual ',
            'slug' => 'Maquina de Moler Manual',
            'details' => 'Polímero de alta resistencia y componentes electrónicos',
            'price' => 89000,
            'shipping_cost' => 5900,
            'description' => 'Molino Multiusos carne, maíz, pasta, coco, puré Chef Master',
            'category_id' => 2,
            'brand_id' => 5,
            'image_path' => 'molino.jpg'
        ]);

        Product::create([
            'name' => 'Camiseta de Entrenamiento America de Cali ',
            'slug' => 'Camiseta America de Cali',
            'details' => 'Camiseta en algodon, con sistema airfresh',
            'price' => 130000,
            'shipping_cost' => 5900,
            'description' => 'Camiseta de Entrenamiento America de Cali',
            'category_id' => 2,
            'brand_id' => 5,
            'image_path' => 'america.jpg'
        ]);

        Product::create([
            'name' => 'Camiseta de Entrenamiento Deportivo Cali ',
            'slug' => 'Camiseta Deportivo Cali',
            'details' => 'Camiseta en algodon, con sistema airfresh',
            'price' => 130000,
            'shipping_cost' => 5900,
            'description' => 'Camiseta de Entrenamiento Deportivo Cali',
            'category_id' => 2,
            'brand_id' => 5,
            'image_path' => 'cali.jpg'
        ]);

    }
}

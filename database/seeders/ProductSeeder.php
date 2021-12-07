<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $products = [
            [
                'name' => 'Appie Macbook Pro 16',
                'details' => 'Apple M1 Pro, 16 CPU, 16GB, 512 GB SSD',
                'description' => 'M1 Pro 및 M1 Max는 놀라운 M1 아키텍처를 
                새로운 차원으로 확장하고 처음으로 SoC(시스템 온 칩) 아키텍처를 프로 노트북에 도입했습니다. 
                둘 다 M1보다 더 많은 CPU 코어, 더 많은 GPU 코어 및 더 많은 통합 메모리를 가지고 있습니다. 
                강력한 머신 러닝을 위한 강력한 Neural Engine과 ProRes를 지원하는 
                업그레이드된 미디어 엔진과 함께 M1 Pro 및 M1 Max를 사용하면 이전에는 불가능했던 작업을 
                전문가가 수행할 수 있습니다.',
                'brand' => 'Apple',
                'price' => 2499,
                'shipping_cost' => 25,
                'image_path' => 'storage/product.png'
            ],
            [
                'name' => 'Samsung Calaxy Book Pro',
                'details' => '13.3 inch, 8GB, DOR4 SDRAM, 256GB',
                'description' => '컬러 볼륨 120 %가 적용된 AMOLED의 생생함을 느껴보세요.
                여기에 블루 라이트를 낮춰 Eye-care까지 신경을 썼습니다.
                깊은 명암비와 빠른 응답속도는 영상 시청 및 게임의 몰입도를 더욱 높여주죠.
                게다가 돌비 애트모스 기술이 적용되어 사운드의 풍성함까지 느낄 수 있습니다.',
                'brand' => 'Samsung',
                'price' => 1400,
                'shipping_cost' => 25,
                'image_path' => 'storage/product2.png'
            ],
        ];

        foreach($products as $key => $value) {
            Product::create($value);
        }
    }
}

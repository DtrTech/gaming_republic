<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Models\ProductVariant;


class ProductVariantSeeder extends Seeder
{

    public function run()
    {
        ProductVariant::truncate();

        $variants = [
            [
                'product_id'=>1,
                'name'=>'65 Shells',
                'short_name'=>'65-shells',
                'image'=>'garena_shell_square.png',
                'sku'=>'GRH001-01',
                'description'=>null,
                'price'=>5.40,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],
            [
                'product_id'=>1,
                'name'=>'130 Shells',
                'short_name'=>'130-shells',
                'image'=>'garena_shell_square.png',
                'sku'=>'GRH001-02',
                'description'=>null,
                'price'=>10.80,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],
            [
                'product_id'=>1,
                'name'=>'260 Shells',
                'short_name'=>'260-shells',
                'image'=>'garena_shell_square.png',
                'sku'=>'GRH001-03',
                'price'=>21.60,
                'discount'=>0,
                'tag'=>null,
                'description'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],
            [
                'product_id'=>1,
                'name'=>'390 Shells',
                'short_name'=>'390-shells',
                'image'=>'garena_shell_square.png',
                'sku'=>'GRH001-04',
                'price'=>32.40,
                'discount'=>2,
                'tag'=>null,
                'description'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],
            [
                'product_id'=>1,
                'name'=>'650 Shells',
                'short_name'=>'650-shells',
                'image'=>'garena_shell_square.png',
                'sku'=>'GRH001-05',
                'price'=>54.00,
                'discount'=>2,
                'tag'=>null,
                'description'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],
            [
                'product_id'=>1,
                'name'=>'1300 Shells',
                'short_name'=>'1300-shells',
                'image'=>'garena_shell_square.png',
                'sku'=>'GRH001-06',
                'price'=>108.00,
                'discount'=>2,
                'tag'=>null,
                'description'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],
            [
                'product_id'=>1,
                'name'=>'2600 Shells',
                'short_name'=>'2600-shells',
                'image'=>'garena_shell_square.png',
                'sku'=>'GRH001-07',
                'price'=>216.00,
                'discount'=>2,
                'tag'=>null,
                'description'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],

            [
                'product_id'=>2,
                'name'=>'Point Card (US$0.99)',
                'short_name'=>'point-card-099',
                'image'=>'conquer_square.png',
                'sku'=>'GRH002-01',
                'description'=>null,
                'price'=>5.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>0,
                'status'=>1,
                'remarks'=>null 
            ],

            [
                'product_id'=>2,
                'name'=>'Point Card (US$1.99)',
                'short_name'=>'point-card-199',
                'image'=>'conquer_square.png',
                'sku'=>'GRH002-02',
                'description'=>null,
                'price'=>10.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>0,
                'status'=>1,
                'remarks'=>null 
            ],

            [
                'product_id'=>2,
                'name'=>'Point Card (US$4.99)',
                'short_name'=>'point-card-499',
                'image'=>'conquer_square.png',
                'sku'=>'GRH002-03',
                'description'=>null,
                'price'=>25.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>0,
                'status'=>1,
                'remarks'=>null 
            ],

            [
                'product_id'=>2,
                'name'=>'Point Card (US$7.99)',
                'short_name'=>'point-card-799',
                'image'=>'conquer_square.png',
                'sku'=>'GRH002-04',
                'description'=>null,
                'price'=>35.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],

            [
                'product_id'=>2,
                'name'=>'Point Card (US$15.99)',
                'short_name'=>'point-card-1599',
                'image'=>'conquer_square.png',
                'sku'=>'GRH002-05',
                'description'=>null,
                'price'=>70.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],

            [
                'product_id'=>2,
                'name'=>'Point Card (US$29.99)',
                'short_name'=>'point-card-2999',
                'image'=>'conquer_square.png',
                'sku'=>'GRH002-06',
                'description'=>null,
                'price'=>130.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],

            [
                'product_id'=>2,
                'name'=>'Point Card (US$59.99)',
                'short_name'=>'point-card-5999',
                'image'=>'conquer_square.png',
                'sku'=>'GRH002-07',
                'description'=>null,
                'price'=>260.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],


            [
                'product_id'=>3,
                'name'=>'Honor of Kings 16 Tokens',
                'short_name'=>'hok-16',
                'image'=>'honor_of_kings_square.png',
                'sku'=>'GRH003-01',
                'description'=>null,
                'price'=>1.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],
            [
                'product_id'=>3,
                'name'=>'Honor of Kings 80 Tokens',
                'short_name'=>'hok-80',
                'image'=>'honor_of_kings_square.png',
                'sku'=>'GRH003-02',
                'description'=>null,
                'price'=>5.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],
            [
                'product_id'=>3,
                'name'=>'Honor of Kings 240 Tokens',
                'short_name'=>'hok-240',
                'image'=>'honor_of_kings_square.png',
                'sku'=>'GRH003-03',
                'description'=>null,
                'price'=>15.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],
            [
                'product_id'=>3,
                'name'=>'Honor of Kings 400 Tokens',
                'short_name'=>'hok-400',
                'image'=>'honor_of_kings_square.png',
                'sku'=>'GRH003-04',
                'description'=>null,
                'price'=>25.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],
            [
                'product_id'=>3,
                'name'=>'Honor of Kings 560 Tokens',
                'short_name'=>'hok-560',
                'image'=>'honor_of_kings_square.png',
                'sku'=>'GRH003-05',
                'description'=>null,
                'price'=>30.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],
            [
                'product_id'=>3,
                'name'=>'Honor of Kings 830 Tokens',
                'short_name'=>'hok-830',
                'image'=>'honor_of_kings_square.png',
                'sku'=>'GRH003-06',
                'description'=>null,
                'price'=>45.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],
            [
                'product_id'=>3,
                'name'=>'Honor of Kings 1245 Tokens',
                'short_name'=>'hok-1245',
                'image'=>'honor_of_kings_square.png',
                'sku'=>'GRH003-07',
                'description'=>null,
                'price'=>65.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],
            [
                'product_id'=>3,
                'name'=>'Honor of Kings 2508 Tokens',
                'short_name'=>'hok-2508',
                'image'=>'honor_of_kings_square.png',
                'sku'=>'GRH003-08',
                'description'=>null,
                'price'=>130.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],

            [
                'product_id'=>3,
                'name'=>'Honor of Kings 4180 Tokens',
                'short_name'=>'hok-4180',
                'image'=>'honor_of_kings_square.png',
                'sku'=>'GRH003-09',
                'description'=>null,
                'price'=>220.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],

            [
                'product_id'=>3,
                'name'=>'Honor of Kings 8360 Tokens',
                'short_name'=>'hok-8360',
                'image'=>'honor_of_kings_square.png',
                'sku'=>'GRH003-10',
                'description'=>null,
                'price'=> 450.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],


            [
                'product_id'=>4,
                'name'=>'Mcash 99',
                'short_name'=>'mcash-99',
                'image'=>'mobile_legends_adventure_square.png',
                'sku'=>'GRH004-01',
                'description'=>null,
                'price'=> 4.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],

            [
                'product_id'=>4,
                'name'=>'Mcash 199',
                'short_name'=>'mcash-199',
                'image'=>'mobile_legends_adventure_square.png',
                'sku'=>'GRH004-02',
                'description'=>null,
                'price'=> 8.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],

            [
                'product_id'=>4,
                'name'=>'Mcash 299',
                'short_name'=>'mcash-299',
                'image'=>'mobile_legends_adventure_square.png',
                'sku'=>'GRH004-03',
                'description'=>null,
                'price'=> 12.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],

            [
                'product_id'=>4,
                'name'=>'Mcash 499',
                'short_name'=>'mcash-499',
                'image'=>'mobile_legends_adventure_square.png',
                'sku'=>'GRH004-04',
                'description'=>null,
                'price'=> 20.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],

            [
                'product_id'=>4,
                'name'=>'Mcash 699',
                'short_name'=>'mcash-699',
                'image'=>'mobile_legends_adventure_square.png',
                'sku'=>'GRH004-05',
                'description'=>null,
                'price'=> 30.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ]
        ];
        ProductVariant::insert($variants);
    }
}
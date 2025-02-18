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
            ],

            [
                'product_id'=>5,
                'name'=>'Steam Wallet Code RM5',
                'short_name'=>'steam-wallet-5',
                'image'=>'steam_wallet_square.png',
                'sku'=>'GRH005-01',
                'description'=>null,
                'price'=> 5.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],

            [
                'product_id'=>5,
                'name'=>'Steam Wallet Code RM10',
                'short_name'=>'steam-wallet-10',
                'image'=>'steam_wallet_square.png',
                'sku'=>'GRH005-02',
                'description'=>null,
                'price'=> 10.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],

            [
                'product_id'=>5,
                'name'=>'Steam Wallet Code RM20',
                'short_name'=>'steam-wallet-20',
                'image'=>'steam_wallet_square.png',
                'sku'=>'GRH005-03',
                'description'=>null,
                'price'=> 20.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],

            [
                'product_id'=>5,
                'name'=>'Steam Wallet Code RM50',
                'short_name'=>'steam-wallet-50',
                'image'=>'steam_wallet_square.png',
                'sku'=>'GRH005-04',
                'description'=>null,
                'price'=> 50.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],

            [
                'product_id'=>5,
                'name'=>'Steam Wallet Code RM100',
                'short_name'=>'steam-wallet-100',
                'image'=>'steam_wallet_square.png',
                'sku'=>'GRH005-05',
                'description'=>null,
                'price'=> 100.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],

            [
                'product_id'=>5,
                'name'=>'Steam Wallet Code RM200',
                'short_name'=>'steam-wallet-200',
                'image'=>'steam_wallet_square.png',
                'sku'=>'GRH005-06',
                'description'=>null,
                'price'=> 200.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],

            [
                'product_id'=>6,
                'name'=>'Razer Gold RM5',
                'short_name'=>'razer-gold-5',
                'image'=>'razer_gold_square.png',
                'sku'=>'GRH006-01',
                'description'=>null,
                'price'=> 5.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],

            [
                'product_id'=>6,
                'name'=>'Razer Gold RM10',
                'short_name'=>'razer-gold-10',
                'image'=>'razer_gold_square.png',
                'sku'=>'GRH006-02',
                'description'=>null,
                'price'=> 10.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],

            [
                'product_id'=>6,
                'name'=>'Razer Gold RM20',
                'short_name'=>'razer-gold-20',
                'image'=>'razer_gold_square.png',
                'sku'=>'GRH006-03',
                'description'=>null,
                'price'=> 20.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],

            [
                'product_id'=>6,
                'name'=>'Razer Gold RM30',
                'short_name'=>'razer-gold-30',
                'image'=>'razer_gold_square.png',
                'sku'=>'GRH006-04',
                'description'=>null,
                'price'=> 30.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],

            [
                'product_id'=>6,
                'name'=>'Razer Gold RM40',
                'short_name'=>'razer-gold-40',
                'image'=>'razer_gold_square.png',
                'sku'=>'GRH006-05',
                'description'=>null,
                'price'=> 40.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],

            [
                'product_id'=>6,
                'name'=>'Razer Gold RM50',
                'short_name'=>'razer-gold-50',
                'image'=>'razer_gold_square.png',
                'sku'=>'GRH006-06',
                'description'=>null,
                'price'=> 50.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],

            [
                'product_id'=>6,
                'name'=>'Razer Gold RM100',
                'short_name'=>'razer-gold-100',
                'image'=>'razer_gold_square.png',
                'sku'=>'GRH006-07',
                'description'=>null,
                'price'=> 100.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],

            [
                'product_id'=>6,
                'name'=>'Razer Gold RM200',
                'short_name'=>'razer-gold-200',
                'image'=>'razer_gold_square.png',
                'sku'=>'GRH006-08',
                'description'=>null,
                'price'=> 200.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],

            [
                'product_id'=>6,
                'name'=>'Razer Gold RM300',
                'short_name'=>'razer-gold-300',
                'image'=>'razer_gold_square.png',
                'sku'=>'GRH006-09',
                'description'=>null,
                'price'=> 300.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],

            [
                'product_id'=>6,
                'name'=>'Razer Gold RM500',
                'short_name'=>'razer-gold-500',
                'image'=>'razer_gold_square.png',
                'sku'=>'GRH006-10',
                'description'=>null,
                'price'=> 500.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],

            [
                'product_id'=>7,
                'name'=>'Gift Card Japan 500 Yen',
                'short_name'=>'nintendo-500',
                'image'=>'nintendo_ecard_square.png',
                'sku'=>'GRH007-01',
                'description'=>null,
                'price'=> 17.50,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],

            [
                'product_id'=>7,
                'name'=>'Gift Card Japan 1000 Yen',
                'short_name'=>'nintendo-1000',
                'image'=>'nintendo_ecard_square.png',
                'sku'=>'GRH007-02',
                'description'=>null,
                'price'=> 35.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],

            [
                'product_id'=>7,
                'name'=>'Gift Card Japan 2000 Yen',
                'short_name'=>'nintendo-2000',
                'image'=>'nintendo_ecard_square.png',
                'sku'=>'GRH007-03',
                'description'=>null,
                'price'=> 70.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],


            [
                'product_id'=>7,
                'name'=>'Gift Card Japan 3000 Yen',
                'short_name'=>'nintendo-3000',
                'image'=>'nintendo_ecard_square.png',
                'sku'=>'GRH007-04',
                'description'=>null,
                'price'=> 105.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],


            [
                'product_id'=>7,
                'name'=>'Gift Card Japan 5000 Yen',
                'short_name'=>'nintendo-5000',
                'image'=>'nintendo_ecard_square.png',
                'sku'=>'GRH007-05',
                'description'=>null,
                'price'=> 175.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],


            [
                'product_id'=>7,
                'name'=>'Gift Card Japan 9000 Yen',
                'short_name'=>'nintendo-9000',
                'image'=>'nintendo_ecard_square.png',
                'sku'=>'GRH007-06',
                'description'=>null,
                'price'=> 315.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],

            [
                'product_id'=>8,
                'name'=>'Gift Card MYR10',
                'short_name'=>'gift-card-myr10',
                'image'=>'google_gift_card_square.png',
                'sku'=>'GRH008-01',
                'description'=>null,
                'price'=> 10.50,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],

            
            [
                'product_id'=>8,
                'name'=>'Gift Card MYR20',
                'short_name'=>'gift-card-myr20',
                'image'=>'google_gift_card_square.png',
                'sku'=>'GRH008-02',
                'description'=>null,
                'price'=> 20.50,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],

            [
                'product_id'=>8,
                'name'=>'Gift Card MYR50',
                'short_name'=>'gift-card-myr50',
                'image'=>'google_gift_card_square.png',
                'sku'=>'GRH008-03',
                'description'=>null,
                'price'=> 50.50,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],

            [
                'product_id'=>8,
                'name'=>'Gift Card MYR100',
                'short_name'=>'gift-card-myr100',
                'image'=>'google_gift_card_square.png',
                'sku'=>'GRH008-04',
                'description'=>null,
                'price'=> 100.50,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],

            [
                'product_id'=>8,
                'name'=>'Gift Card MYR200',
                'short_name'=>'gift-card-myr200',
                'image'=>'google_gift_card_square.png',
                'sku'=>'GRH008-04',
                'description'=>null,
                'price'=> 200.50,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],

            [
                'product_id'=>9,
                'name'=>'GoCash US $5',
                'short_name'=>'go-cash-5',
                'image'=>'go_cash_square.png',
                'sku'=>'GRH009-01',
                'description'=>null,
                'price'=> 25.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],

            [
                'product_id'=>9,
                'name'=>'GoCash US $10',
                'short_name'=>'go-cash-10',
                'image'=>'go_cash_square.png',
                'sku'=>'GRH009-02',
                'description'=>null,
                'price'=> 50.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],

            [
                'product_id'=>9,
                'name'=>'GoCash US $15',
                'short_name'=>'go-cash-15',
                'image'=>'go_cash_square.png',
                'sku'=>'GRH009-03',
                'description'=>null,
                'price'=> 75.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],

            [
                'product_id'=>9,
                'name'=>'GoCash US $20',
                'short_name'=>'go-cash-20',
                'image'=>'go_cash_square.png',
                'sku'=>'GRH009-04',
                'description'=>null,
                'price'=> 100.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],

            [
                'product_id'=>9,
                'name'=>'GoCash US $50',
                'short_name'=>'go-cash-50',
                'image'=>'go_cash_square.png',
                'sku'=>'GRH009-05',
                'description'=>null,
                'price'=> 250.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],

            [
                'product_id'=>9,
                'name'=>'GoCash US $100',
                'short_name'=>'go-cash-100',
                'image'=>'go_cash_square.png',
                'sku'=>'GRH009-06',
                'description'=>null,
                'price'=> 500.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null 
            ],

            
           
        ];
        ProductVariant::insert($variants);
    }
}
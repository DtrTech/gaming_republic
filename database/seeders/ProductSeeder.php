<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Models\Product;


class ProductSeeder extends Seeder
{

    public function run()
    {
        Product::truncate();

        $products = [
            [
                'name'=>'Garena Shell',
                'short_name'=>'garena-shell',
                'description'=>'"<h4>What is Garena Shells?</h4>\n<p>Garena Shells is the online currency of Garena gaming platform and Garena operated games. Garena users can use their Garena Shells to purchase in-game items, products and services.</p>\n\n<p>Popular Garena operated online games include Moonlight Blade, Blade & Soul, Ring of Elysium, PUBG Lite and all time favourites FIFA Online 4.</p>\n\n<p>Garena mobile games include ROV, Call of Duty: Mobile, Contra, Speed Drifters and Free Fire. Head over to the Garena Platform for more fun things that you can do!</p>\n\n<p>All you need to do to get your hands on some Garena Shells and choose the denomination that you want, make the payment with your favourite payment method and redeem it on the Garena website.</p>\n\n<p>What are you waiting for? Buy Garena Shells to enjoy your favourite online games now!</p>"',
                'short_description'=>'Garena Shells are the online currency used in games operated by Garena, a gaming platform. Players can use Garena Shells to buy in-game items, upgrades, and premium mods.',
                'guide'=>'"<h4>How to reload Garena account with Garena Shells?</h4>\n<ol>\n    <li>Go to <a href=\"https://shop.garena.my/\" target=\"_blank\">Garena Topup Center</a>.</li>\n    <li>Login to your Garena Account.</li>\n    <li>Click Shell Top Up and select Garena Prepaid Card.</li>\n    <li>Enter your Garena Shell Prepaid Card Password and click Confirm to complete top up.</li>\n</ol>"',
                'others'=>null,
                'tags'=>'Garena, Game Credits',
                'sku'=>'GRH001',
                'image'=>'garena_shells.png',
                'status'=>1,
            ],
            [
                'name'=>'Conquer Online',
                'short_name'=>'conquer-online',
                'description'=>'"<h4>About Conquer Online</h4>\n<p>Conquer Online is a free-to-play 2.5D MMORPG set in the world of ancient China.</p><p>Set in a wonderfully beautiful and rich fantasy world, you control a strong and gallant hero, slaying dangerous monsters, completing perilous quests and having the most fun of your life!</p><p>The game revealed its first debut back in 2003 and currently has more than 10 million registered users around the world. The game has a massive player base and simple gameplay.</p><p>The combat is fast paced and fluid and it offers a myriad of fun PvP options. Besides, the game has a boat load of features.</p>"',
                'short_description'=>'Conquer Point Card (Global) can be used to top up to the Conquer Online game. Buy Conquer Point Card (Global) now!',
                'guide'=>'"<h4>How to use Conquer Point Card?</h4>\n<ol>\n    <li>Visit <a href=\"https://shoppingmall.99.com/en/web/offline.aspx?gametype=104_100\" target=\"_blank\">Conquer Online / Conquer Online Mobile Webshop</a> to top-up Conquer Online / Conquer Online Mobile.</li></ol>"',
                'others'=>null,
                'tags'=>'MMORPG, Game Credits',
                'sku'=>'GRH002',
                'image'=>'conquer_online.png',
                'status'=>1,
            ],

            [
                'name'=>'Honor of Kings',
                'short_name'=>'honor-of-kings',
                'description'=>'"<h4>About Honor of Kings</h4>\n<p>Honor of Kings is the world\'s most-played mobile MOBA that offers the ultimate competitive experience on mobile. Become immersed in the battlefield as you squad up with your friends, choose from unique heroes with amazing skills, and enjoy the extreme fun of fierce team fights. In each battle, a team of five players advance along three lanes, with the goal of taking down nine towers, and ultimately destroy the enemy\'s crystal to claim victory.</p>"',
                'short_description'=>'Become immersed in the battlefield as you squad up with your friends, choose from unique heroes with amazing skills, and enjoy the extreme fun of fierce team fights.',
                'guide'=>'"<h4>How to redeem Honor of Kings Token Redeem Code?</h4>\n<ol>\n    <li>Visit <a href=\"https://www.midasbuy.com/midasbuy/br/redeem/hok\" target=\"_blank\">MidasBuy</a> and log into your account.</li>\n    <li>Navigate to the Honor of Kings Tokens Top Up page and enter your Honor of Kings Player ID.</li>\n    <li>Go to the Redeem Code page and enter the redemption code provided.</li>\n    <li>The code will be redeemed, and the player will receive their reward.</li></ol>"',
                'others'=>null,
                'tags'=>'Global, PVP',
                'sku'=>'GRH003',
                'image'=>'honor_of_kings.png',
                'status'=>1,
            ],

            [
                'name'=>'Mobile Legends: Adventure',
                'short_name'=>'mobile-legends-adventure',
                'description'=>'"<h4>About Mobile Legends: Adventure</h4>\n<p>Mobile Legends: Adventure (MLA) is a relaxing idle RPG that can be fit perfectly into a busy daily schedule. Embark on the adventure with 100+ unique heroes, to reveal the truth behind a horrifying prophecy and save the Land of Dawn from destruction!.</p>"',
                'short_description'=>'Mobile Legends: Adventure M-Cash allows users to purchase to unlock premium content and style your character. Equip your hero with useful items like skins, rewards, passes and more.',
                'guide'=>'"<h4>How to redeem Mcash?</h4>\n<ol>\n    <li>Go to the official <a href=\"https://m.mladventure.net/assistant/?path=redeem\" target=\"_blank\">Mobile Legends Adventure Gift Redemption</a> page.</li>\n<li>Enter the M-Cash PIN code.</li>\n<li>Input your MLA Account ID and Server.</li>\n<li>Obtain the MLA verification code and enter it, then click on the REDEEM button.</li>\n<li>Return to the MLA game and receive the M-Cash via in-game mail.</li></ol>"',
                'others'=>null,
                'tags'=>'Mobile Game, RPG',
                'sku'=>'GRH004',
                'image'=>'mobile_legends_adventure.png',
                'status'=>1,
            ],
        ];
        Product::insert($products);
    }
}
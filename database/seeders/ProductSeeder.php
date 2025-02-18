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

            [
                'name'=>'Steam Wallet Code (MYR)',
                'short_name'=>'steam-wallet-code-my',
                'description'=>'"<h4>Important</h4>\n<p>Steam users only allowed to redeem the Steam Wallet Code according to your original Steam Wallet\'s currency settings.</p>\n\n<h4>What is STEAM?</h4>\n<p>STEAM is one of the most popular gaming platforms to play your favourite games. Gamers can select from thousands of titles including bestsellers, indie hits, casual favourites, Dota 2 items, PUBG, CSGO, Team Fortress 2 items & more.</p>\n<p>With the Steam Wallet Codes, access to thousands of games - from Action to Indie and everything in between - is now super easy. Just add credit to your Steam account, which can be easily purchased here. You no longer need a credit card on Steam to add funds to your Steam Wallet. Works just like a gift certificate, redeem games, software and more on the Steam platform.</p><h4>What is Steam Wallet Code or Steam Gift Card?</h4>\n<p>Steam Wallet Code or Steam Gift Card is STEAM\'s prepaid card used to deposit and reload the stated value into your Steam Account balance, which you can use to buy your favourite games. Choose from all the best titles from current blockbusters, greatest hits, to the best of the independents.</p>"',
                'short_description'=>'Steam Wallet Code (MYR) can be used to add balance to Steam Wallet. It is usable by all Valve Steam users with Malaysian Ringgit steam wallet.',
                'guide'=>'"<h4>How to Redeem Steam Wallet Code?</h4>\n<ol>\n<li><a href=\"https://store.steampowered.com//login/\" target=\"blank\">Login</a> to your Steam account.</li>\n<li>Go to <a href=\"https://store.steampowered.com/steamaccount/addfunds\" target=\"blank\"> Redeem a Steam Wallet Code</a> page.</li>\n<li>Click Redeem a Steam Gift Card or Wallet Code.</li>\n<li>Enter the Steam Wallet Code and click Continue.</li>\n<li>The funds will be added to your account and be ready for use to buy games on STEAM!.</li></ol>"',
                'others'=>null,
                'tags'=>'Steam',
                'sku'=>'GRH005',
                'image'=>'steam.png',
                'status'=>1,
            ],

            [
                'name'=>'Razer Gold (MYR)',
                'short_name'=>'razer-gold-my',
                'description'=>'"<h4>About Razer Gold Malaysia</h4>\n<p>Razer Gold is the unified virtual credit for gamers worldwide. Use Razer Gold for over 2,500 games and entertainment content to buy games and in-game items.</p>"',
                'short_description'=>'Get more bang for your buck with exclusive game deals and get rewarded with Razer Silver, the loyalty rewards program for gamers.',
                'guide'=>'"<h4>How to use direct top-up with Razer Gold PIN?</h4>\n<ol>\n<li>You can top up by using Razer Gold PIN if the game supports Razer Pin direct top up as payment method.</li>\n<li>On the payment page, select Razer Gold PIN (or Direct Top-up).</li>\n<li>Depending on the game, it may require you to either insert your user id or to log in to your game account or enter your character information.</li>\n<li>Enter your Razer Gold Serial Number and PIN code.</li>\n<li>Follow the on-screen instructions.</li>\n<p>Remember to redeem your Razer Silver if you have an existing Razer Gold wallet or simply sign up for one <a href=\"https://razerid.razer.com/new\" target=\"_blank\">here</a>.</p></ol>"',
                'others'=>null,
                'tags'=>'Razer, Razer Gold',
                'sku'=>'GRH006',
                'image'=>'razer.png',
                'status'=>1,
            ],

            [
                'name'=>'Nintendo eShop Gift Card (JP)',
                'short_name'=>'nintendo-eshop-card',
                'description'=>'"<h4>Nintendo Switch Online</h4>\n<p>The Nintendo eShop Gift Card can also be used to begin a Nintendo Switch Online subscription. Here are the benefits of subscribing to Nintendo Switch Online:</p>\n <li>Play online with other players be it co-op or battle in games like Mario Kart and Super Smash Bros. Ultimate.</li>\n<li>Enjoy classic NES games with newly added online support! Titles are addded regularly.</li>\n<li>With your save data backed up regularly, you can easily retrive them anywhere, anytime.</li>\n<li>Enhance your Switch experience with the smartphone app that lets you voice call other players when playing online.</li>\n<li>Enjoy member-exclusive deals and purchase limited edition products!</li>"',
                'short_description'=>'Buy a Nintendo eShop Gift Card NO and start shopping on the eShop! Redeem the gift card directly into your Nintendo account via Nintendo\'s, Nintendo Switch. Once redeemed, you can start buying any Nintendo games available on the eShop.',
                'guide'=>'"<h4>How to redeem Nintendo eShop Gift Card?</h4>\n<ol>\n<li>Select the Nintendo eShop icon in the HOME menu.</li>\n<li>Scroll left and select \"Add Funds\".</li>\n<li>Select \"Redeem a Nintendo eShop Card\".</li>\n<li>Enter the 16-characters activation code, then select \"OK\" to complete the transaction.</li></p></ol>"',
                'others'=>null,
                'tags'=>'Nitendo',
                'sku'=>'GRH007',
                'image'=>'nintendo.png',
                'status'=>1,
            ],

            [
                'name'=>'Google Play Gift Card (MY)',
                'short_name'=>'google-play-gift-card',
                'description'=>'"<h4>About Google Play Gift Card Malaysia</h4>\n<p>Google Play Gift Card Malaysia is the prepaid top up card for Google Play Balance. It can be redeemed to pay for thousands of books, songs, movies, apps, magazines and many more on Google Play store.</p>\n<p>You can purchase it for yourself or gift it to your friends and family to show them that you are thinking of them. With the Google Play Gift Card, you do not have to worry if you\'re buying the right music album for your nephew or which books your aunt would like to read.</p>\n\n<h4>What can I buy with my Google Play Gift Card?</h4>\n<p>The Google Play Gift Card will give you access to the content available in the Google Store. This includes apps, games, movies, music and many other digital content.</p>\n<p>You will be able to access it anytime, anywhere via any web browser, Android device as well as other devices that are able to support the Google Play store. You can also download movies and TV shows for offline viewing.</p>"',
                'short_description'=>'The Google Play Gift Card is so versatile that it\'s suitable for all ages, and all styles!',
                'guide'=>'"<h4>How to Redeem Google Play Gift Card?</h4>\n<ol>\n<li>Open Google Play Store app.</li>\n<li>Touch the Menu icon on the top left corner.</li>\n<li>Tap Redeem on the Menu.</li>\n<li>Enter your code to redeem.</li></p></ol>"',
                'others'=>null,
                'tags'=>'Google Play',
                'sku'=>'GRH008',
                'image'=>'google_play.png',
                'status'=>1,
            ],

            [
                'name'=>'GoCash',
                'short_name'=>'go-cash',
                'description'=>'"<h4>About GoCash Game Card</h4>\n<p>GoCash Game Card is a currency of choice for gamers that wish to play online games like MMO, FPS, and much more. Users can connect to any GoCash supported content provider and play at leisure without difficulties, providing an easy way for users to access GoCash games from around the world.</p>\n<h4>Why use a GoCash Game Card?</h4>\n<p>With the GoCash Game Card, you will have access to global top rated online games. You will also be able to earn Gopoints and win free rewards with a GoCash membership.</p>\n<p>It’s not just easy, but safe, secure and risk-free. All you need to do is choose the amount that you wish to purchase, add to cart and complete the transaction with your preferred payment methods.</p>"',
                'short_description'=>'GoCash Game Card is a global micro-transaction portal website company. ',
                'guide'=>'"<h4>How to use GoCash Game Card?</h4>\n<ol>\n<li>Purchase a GoCash Game Card.</li>\n<li>Pick a game from GoCash Games or Go directly to game portal</li>\n<li>Select GoCash as Payment Option.</li><li>Enter your GoCash Game Card PIN number</li></ol>"',
                'others'=>null,
                'tags'=>'GoCash',
                'sku'=>'GRH009',
                'image'=>'go_cash.png',
                'status'=>1,
            ],

           

            


        ];
        Product::insert($products);
    }
}
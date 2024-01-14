<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category Coffee
        Product::create([
            'name' => 'Ice Americano',
            'description' => 'Ice Americano: espresso murni, air mineral, dan es batu, memberikan sensasi pait dan kesegaran tanpa campuran lain, kafein kuat.',
            'image' => 'coffee1.png',
            'price' => 1700,
            'category_id' => 9,
        ]);

        Product::create([
            'name' => 'Vanilla Latte',
            'description' => 'Vanilla Latte: espresso, susu, dan sirup vanila, menciptakan minuman creamy dengan sentuhan manis dan pahit espresso yang bersatu.',
            'image' => 'coffee2.png',
            'price' => 2500,
            'category_id' => 9,
        ]);
        Product::create([
            'name' => 'Mochaccino',
            'description' => 'Mochaccino: espresso, susu, dan coklat, menyajikan harmoni "mocha" dan kelembutan "cappuccino" dalam satu minuman kopi.',
            'image' => 'coffee3.png',
            'price' => 2000,
            'category_id' => 9,
        ]);

        Product::create([
            'name' => 'Dalgona Coffee',
            'description' => 'Dalgona Coffee: fresh milk, bubuk kopi, air hangat, diaduk hingga foam mengental, lalu dituang ke atas susu dan es batu dengan indah.',
            'image' => 'coffee4.png',
            'price' => 2300,
            'category_id' => 9,
        ]);

        Product::create([
            'name' => 'Blisspresso',
            'description' => 'Blisspresso Delightful: es kopi susu, gula aren, perpaduan pahit espresso, creamy susu, dan kelezatan manis yang memukau.',
            'image' => 'coffee5.png',
            'price' => 2500,
            'category_id' => 9,
        ]);

        Product::create([
            'name' => 'Affogato',
            'description' => 'Affogato: espresso disiram ke atas es krim, menciptakan kombinasi kopi kuat dan manis yang memikat, lezat, dan menyegarkan.',
            'image' => 'coffee6.png',
            'price' => 1900,
            'category_id' => 9,
        ]);

        // Category Non Coffee
        Product::create([
            'name' => 'Ice Lychee Tea',
            'description' => 'Es Teh Leci: minuman segar dengan jus leci, teh, dan es, sering dihiasi dengan potongan leci yang menyegarkan.',
            'image' => 'noncoffee1.png',
            'price' => 15000,
            'category_id' => 10,
        ]);
        Product::create([
            'name' => 'Matcha Latte',
            'description' => 'Matcha Latte: minuman yang terbuat dari bubuk matcha, susu, dan air panas. Minuman ini memiliki tekstur creamy dan rasa yang sedikit manis.',
            'image' => 'noncoffee2.png',
            'price' => 28000,
            'category_id' => 10,
        ]);
        Product::create([
            'name' => 'Midnight Currant',
            'description' => 'Midnight Currant: mocktail segar dengan dominasi blackcurrant, campuran jus/sirup dan Sprite, memberikan sentuhan bersoda.',
            'image' => 'noncoffee3.png',
            'price' => 23000,
            'category_id' => 10,
        ]);
        Product::create([
            'name' => 'Strawberry Splash',
            'description' => 'Strawberry Splash: mocktail segar dengan rasa strawberry dan sentuhan kesegaran matahari terbit, sirup dan sparkling water.',
            'image' => 'noncoffee4.png',
            'price' => 23000,
            'category_id' => 10,
        ]);
        Product::create([
            'name' => 'Chocolate Blended',
            'description' => 'Chocolate Blended: milkshake yang terbuat dari es krim cokelat, susu, dan sirup cokelat. Ini adalah minuman yang kaya dan lezat.',
            'image' => 'noncoffee5.png',
            'price' => 25000,
            'category_id' => 10,
        ]);
        Product::create([
            'name' => 'Berry Dream',
            'description' => 'Berry Dream: campuran strawberi segar dan susu, di-blend dengan es, disajikan dengan potongan buah strawberry dan whipped cream.',
            'image' => 'noncoffee6.png',
            'price' => 25000,
            'category_id' => 10,
        ]);

        // Snacks
        Product::create([
            'name' => 'French Fries',
            'description' => 'Kentang goreng dengan taburan parsley garam dan keju parmesan yang memiliki rasa gurih asin dan juga disertai dengan dipping cheesy sauce dan juga tobasco ',
            'image' => 'snacks1.png',
            'price' => 15000,
            'category_id' => 11,
        ]);
        
        Product::create([
            'name' => 'Tiramisu',
            'description' => 'Tiramisu adalah hidangan penutup Italia dengan lapisan biskuit ladyfinger, mascarpone lembut, dan kopi, diakhiri dengan bubuk kakao di atasnya.',
            'image' => 'snacks2.png',
            'price' => 35000,
            'category_id' => 11,
        ]);
        
        Product::create([
            'name' => 'Tahu Cabe',
            'description' => 'Tahu Cabe adalah hidangan tahu dadu yang dimasak dengan bumbu cabe. Tahu dicampur dengan cabai + garam untuk rasa pedas dan gurih.',
            'image' => 'snacks3.png',
            'price' => 20000,
            'category_id' => 11,
        ]);
        
        Product::create([
            'name' => 'Blueberry Cake',
            'description' => 'Blueberry Cake terbuat dari remahan biskuit mentega, cheesecake lembut, dilapisi blueberry compote. Nikmati kelezatan paduan ini.',
            'image' => 'snacks4.png',
            'price' => 25000,
            'category_id' => 11,
        ]);

        Product::create([
            'name' => 'Garlic Bread',
            'description' => 'Garlic Bread: roti lezat dengan mentega dan bawang putih, dipanggang hingga kecokelatan, menghadirkan cita rasa yang menggugah selera.',
            'image' => 'snacks5.png',
            'price' => 18000,
            'category_id' => 11,
        ]);
        
        Product::create([
            'name' => 'Croffle',
            'description' => 'Croffle gabungan croissant dan waffle. Croissant dimasak di waffle maker, hasilnya lembut croissant dengan kecokelatan waffle.',
            'image' => 'snacks6.png',
            'price' => 15000,
            'category_id' => 11,
        ]);

        //Main Course
        Product::create([
            'name'=> 'Pasta Carbonara',
            'description'=> 'Pasta Carbonara: hidangan pasta khas Italia yang terbuat dari spaghetti, telur, keju parmesan, dan bacon.',
            'image'=> 'maincourse1.png',
            'price'=> 32000,
            'category_id'=> 12,
        ]);

        Product::create([
            'name'=> 'Curry Katsu Bowl',
            'description'=> 'Curry Katsu Bowl: hidangan Jepang terdiri dari nasi, kari, dan potongan daging ayam yang dilapisi tepung roti dan digoreng dalam minyak.',
            'image'=> 'maincourse2.png',
            'price'=> 35000,
            'category_id'=> 12,
        ]);

        Product::create([
            'name'=> 'Yakiniku Donburi',
            'description'=> 'Yakiniku Donburi: hidangan Jepang yang terdiri dari nasi dengan potongan daging sapi panggang, disajikan di Indonesia.',
            'image'=> 'maincourse3.png',
            'price'=> 30000,
            'category_id'=> 12,
        ]);

        Product::create([
            'name'=> 'Indomie Kuah',
            'description'=> 'Indomie merupakan merek mie instan Indonesia yang populer di seluruh dunia. Tersedia dalam berbagai rasa Indomie kuah.',
            'image'=> 'maincourse4.png',
            'price'=> 10000,
            'category_id'=> 12,
        ]);

        Product::create([
            'name'=> 'Fried Rice',
            'description'=> 'Nasi Goreng: nasi yang digoreng dengan sayuran, telur, dan daging, menciptakan hidangan lezat yang khas.',
            'image'=> 'maincourse5.png',
            'price'=> 28000,
            'category_id'=> 12,
        ]);

        Product::create([
            'name'=> 'Mie Ayam Bakso',
            'description'=> 'Mie Ayam Bakso adalah hidangan mie Indonesia yang terbuat dari kaldu ayam, daging ayam, bakso, dan mie kuning.',
            'image'=> 'maincourse6.png',
            'price'=> 18000,
            'category_id'=> 12,
        ]);
    }
}

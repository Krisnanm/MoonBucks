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
            'description' => 'Ice Americano is a mixture of pure espresso, mineral water, and ice cubes, providing a bitter and refreshing sensation with a strong caffeine kick.',
            'image' => 'coffee1.png',
            'price' => 1700,
            'category_id' => 9,
        ]);

        Product::create([
            'name' => 'Vanilla Latte',
            'description' => 'Vanilla latte is a coffee drink consisting of espresso, milk, and vanilla syrup. This combination results in a creamy drink with sweetness from vanilla and a bitter kick from espresso.',
            'image' => 'coffee2.png',
            'price' => 2500,
            'category_id' => 9,
        ]);
        Product::create([
            'name' => 'Mochaccino',
            'description' => 'Mochaccino is a coffee drink that combines three main elements: espresso, milk, and chocolate. The name "Mochaccino" reflects the blend of "mocha" and "cappuccino."',
            'image' => 'coffee3.png',
            'price' => 2000,
            'category_id' => 9,
        ]);

        Product::create([
            'name' => 'Dalgona Coffee',
            'description' => 'Dalgona Coffee is a mixture of fresh milk and coffee powder that is whipped until thick and forms a foam. This foam is then poured over milk and ice cubes.',
            'image' => 'coffee4.png',
            'price' => 2300,
            'category_id' => 9,
        ]);

        Product::create([
            'name' => 'Moonbucks Signature',
            'description' => 'MoonBucks Signature is a trendy iced coffee drink that combines espresso, milk, and palm sugar, creating a blend of bitterness from espresso, creaminess from milk, and sweetness from palm sugar.',
            'image' => 'coffee5.png',
            'price' => 2500,
            'category_id' => 9,
        ]);

        Product::create([
            'name' => 'Affogato',
            'description' => 'Affogato is a classic Italian dessert that involves pouring a shot of hot espresso over a scoop of vanilla ice cream. The combination of hot and cold creates a delightful contrast in flavors and textures.',
            'image' => 'coffee6.png',
            'price' => 1900,
            'category_id' => 9,
        ]);

        // Category Non Coffee
        Product::create([
            'name' => 'Ice Lychee Tea',
            'description' => 'Ice Lychee Tea is a refreshing and sweet drink made with lychee juice, tea, and ice. It is often garnished with fresh lychee fruit.',
            'image' => 'noncoffee1.png',
            'price' => 15000,
            'category_id' => 10,
        ]);
        Product::create([
            'name' => 'Matcha Latte',
            'description' => 'Matcha Latte is a drink made with matcha powder, milk, and hot water. It has a creamy texture and a slightly sweet taste.',
            'image' => 'noncoffee2.png',
            'price' => 28000,
            'category_id' => 10,
        ]);
        Product::create([
            'name' => 'Blackcurrant Breeze',
            'description' => 'Blackcurrant Breeze is a mocktail made with blackcurrant juice, club soda, and lime wedges. It is a refreshing and tangy drink.',
            'image' => 'noncoffee3.png',
            'price' => 23000,
            'category_id' => 10,
        ]);
        Product::create([
            'name' => 'Strawberry Sunrise Splash',
            'description' => 'Strawberry Sunrise Splash is a mocktail made with strawberry juice, orange juice, and grenadine. It is a sweet and fruity drink with a beautiful sunrise gradient.',
            'image' => 'noncoffee4.png',
            'price' => 23000,
            'category_id' => 10,
        ]);
        Product::create([
            'name' => 'Chocolate Blended',
            'description' => 'Chocolate Deeply Blended is a milkshake made with chocolate ice cream, milk, and chocolate syrup. It is a rich and decadent drink.',
            'image' => 'noncoffee5.png',
            'price' => 25000,
            'category_id' => 10,
        ]);
        Product::create([
            'name' => 'Strawberry Milkshake',
            'description' => 'Strawberry Milkshake is a milkshake made with strawberry ice cream, milk, and strawberry syrup. It is a sweet and refreshing drink.',
            'image' => 'noncoffee6.png',
            'price' => 25000,
            'category_id' => 10,
        ]);

        // Snacks
        Product::create([
            'name' => 'French Fries',
            'description' => 'French fries are a popular side dish made from deep-fried potato strips. They are often served with ketchup or mayonnaise.',
            'image' => 'snacks1.png',
            'price' => 15000,
            'category_id' => 11,
        ]);
        
        Product::create([
            'name' => 'Tiramisu',
            'description' => 'Tiramisu is a classic Italian dessert made with ladyfingers dipped in coffee and layered with a mascarpone cream filling. It is often dusted with cocoa powder before serving.',
            'image' => 'snacks2.png',
            'price' => 35000,
            'category_id' => 11,
        ]);
        
        Product::create([
            'name' => 'Tahu Cabe Garam',
            'description' => 'Tahu Cabe Garam is a simple Indonesian dish of tofu that is fried and then coated in a spicy garlic sauce. It is often served with rice and other side dishes.',
            'image' => 'snacks3.png',
            'price' => 20000,
            'category_id' => 11,
        ]);
        
        Product::create([
            'name' => 'Blueberry Cheesecake',
            'description' => 'Blueberry Cheesecake is a classic dessert made with a cheesecake base and a layer of blueberry filling. It is often topped with fresh blueberries or whipped cream.',
            'image' => 'snacks4.png',
            'price' => 25000,
            'category_id' => 11,
        ]);

        Product::create([
            'name' => 'Garlic Cheese Bread',
            'description' => 'Garlic Cheese Bread is a type of bread that is topped with garlic butter and cheese. It is often baked until the cheese is melted and bubbly.',
            'image' => 'snacks5.png',
            'price' => 18000,
            'category_id' => 11,
        ]);
        
        Product::create([
            'name' => 'Croffle',
            'description' => 'A croffle is a hybrid pastry made by crossing a croissant and a waffle. It is made by rolling out croissant dough and cutting it into squares. The squares are then folded and rolled up, and then placed in a waffle iron to cook.',
            'image' => 'snacks6.png',
            'price' => 15000,
            'category_id' => 11,
        ]);

        //Main Course
        Product::create([
            'name'=> 'Spaghetti Carbonara',
            'description'=> 'Spaghetti Carbonara is an Italian pasta dish made with spaghetti, eggs, cheese, and bacon.',
            'image'=> 'maincourse1.png',
            'price'=> 32000,
            'category_id'=> 12,
        ]);

        Product::create([
            'name'=> 'Curry Katsu Bowl',
            'description'=> 'Curry Katsu Bowl is a Japanese dish made with rice, curry, and a breaded and deep-fried pork cutlet.',
            'image'=> 'maincourse2.png',
            'price'=> 35000,
            'category_id'=> 12,
        ]);

        Product::create([
            'name'=> 'Yakiniku Donburi',
            'description'=> 'Yakiniku Donburi is a Japanese dish made with rice and grilled beef.',
            'image'=> 'maincourse3.png',
            'price'=> 30000,
            'category_id'=> 12,
        ]);

        Product::create([
            'name'=> 'Indomie Goreng/Kuah',
            'description'=> 'Indomie is an Indonesian instant noodle brand that is popular all over the world. It comes in a variety of flavors, including Goreng (fried) and Kuah (soup).',
            'image'=> 'maincourse4.png',
            'price'=> 10000,
            'category_id'=> 12,
        ]);

        Product::create([
            'name'=> 'Moonbucks Fried Rice',
            'description'=> 'Moonbucks Fried Rice is a Chinese dish made with fried rice, moonbucks, and other ingredients such as vegetables, eggs, and meat.',
            'image'=> 'maincourse5.png',
            'price'=> 28000,
            'category_id'=> 12,
        ]);

        Product::create([
            'name'=> 'Mie Ayam Bakso',
            'description'=> 'Mie Ayam Bakso is an Indonesian noodle dish made with chicken broth, chicken meat, meatballs, and yellow noodles.',
            'image'=> 'maincourse6.png',
            'price'=> 18000,
            'category_id'=> 12,
        ]);
    }
}

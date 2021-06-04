<?php

use App\Brand;
use App\Genre;
use App\Shoe;
use App\Type;
use App\User;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Database\Str;
class ShoeSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {   
        
        for ($i=0; $i < 10 ; $i++) { 
            $newShoe = new Shoe();
            $brand = Brand::inRandomOrder()->first();
            $newShoe->brand_id = $brand->id;
            $type = Type::inRandomOrder()->first();
            $newShoe->type_id = $type->id;
            $genre = Genre::inRandomOrder()->first();
            $newShoe->genre_id = $genre->id;
            $user = User::inRandomOrder()->first();
            $newShoe->user_id = $user->id;
            $newShoe->name = $faker->unique()->word();
            $newShoe->price = $faker->randomFloat(2,50,500);  
            $newShoe->number = $faker->numberBetween(35, 47);
            $newShoe->save();
        }
    }
}

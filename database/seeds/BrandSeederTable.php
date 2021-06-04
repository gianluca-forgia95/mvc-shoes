<?php

use App\Brand;
use Illuminate\Database\Seeder;

class BrandSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = ['Nike', 'Adidas', 'Converse', 'Jordan', 'Vans', 'Hawayanas', 'Balenciaga'];
    
        foreach ($brands as $brand) {
            $newBrand = new Brand();
            $newBrand->name = $brand;
            $newBrand->image = 'https://via.placeholder.com/150';
            $newBrand->save();
        }
        
    }
}

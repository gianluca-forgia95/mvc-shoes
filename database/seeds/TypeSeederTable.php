<?php

use App\Type;
use Illuminate\Database\Seeder;

class TypeSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['Sneakers', 'Running', 'Basket', 'Tennis', 'Infradito'];

        foreach($types as $type) {
            $newType = new Type();
            $newType->name = $type;
            $newType->save();
        }
    }
}

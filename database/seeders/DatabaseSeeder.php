<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            CustomerGroupSeeder::class,
            SupplierSeeder::class,
            CustomerSeeder::class,
            CategorySeeder::class,
            BrandSeeder::class,
            GroupSeeder::class,
            UnitSeeder::class,
            ProductSeeder::class,
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class FactorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $petugas = factory(\App\Petugas::class, 10)->create();
        $penerbit = factory(\App\Penerbit::class, 10)->create();
    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         $this->call(UsersSeeder::class);
         $this->call(KategoriSeeder::class);
         $this->call(PenjaminSeeder::class);
         $this->call(GudangSeeder::class);
         $this->call(PoliSeeder::class);
         $this->call(SatuanSeeder::class);
         $this->call(SuplierSeeder::class);
         $this->call(KasSeeder::class);
         $this->call(ProdukSeeder::class);
         $this->call(KategoriTransaksiSeeder::class);
         
    }
}

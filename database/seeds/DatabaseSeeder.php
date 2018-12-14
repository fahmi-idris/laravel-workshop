<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

     // buat jalanin seed pakai php artisan db:seed
    public function run()
    {
      User::create(['name' => 'Fahmi Idris', 'email' => 'fahmi@kata.ai']);
    }
}

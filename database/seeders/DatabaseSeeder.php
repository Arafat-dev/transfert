<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Compte;
use App\Models\Agence;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         
         //User::factory(10)->create();
         Agence::factory(10)->create();
         //Compte::factory(10)->create();
        
       
    }
}

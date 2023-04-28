<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('12345')
         ]);

         User::create([
            'name'=>'Admin2',
            'email'=>'admin2@gmail.com',
            'password'=>bcrypt('12345')
         ]);
        }       
        
    
}

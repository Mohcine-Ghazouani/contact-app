<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       for($i =0 ;$i < 300;$i++){
        DB::table('contacts')->insert([
            'first_name' => $this->generateRandomName(6),
            'last_name' => $this->generateRandomName(10),
            'phone' =>  "06".rand(10000000, 99999999),
            'email' => $this->generateRandomName(10).'@email.com', 
            'adress' => $this->generateRandomName(6)." ".rand(100,9999)." ".$this->generateRandomName(10)." ".rand(100,9999), 
         ]);
       }
    }
    private function generateRandomName($length = 10)
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        return substr(str_shuffle(str_repeat($characters, $length)), 0, $length);
    }
}

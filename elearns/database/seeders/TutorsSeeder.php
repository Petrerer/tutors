<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TutorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("tutors")->truncate();
        for($i=0;$i<1000;$i+=1)
        {
            DB::table("tutors")->insert([
                'name'=>Str::random(10),
                'email'=>Str::random(10).'@gmail.com',
                'phone_number'=>rand(100000000,1000000000),
                'subject'=>Str::random(10),
                'rating'=>rand(1,5),
                'education'=>Str::random(20),
                'experience'=>Str::random(20),
            ]);
        }
    }
}

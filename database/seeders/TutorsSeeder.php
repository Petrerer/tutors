<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory;

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
        $faker = Factory::create();
        for($i=0;$i<20;$i+=1)
        {
            DB::table("tutors")->insert([
                'name'=>$faker->name,
                'email'=>$faker->name.'@gmail.com',
                'phone_number'=>rand(100000000,1000000000),
                'subject'=>$faker->sentence($nbWords = 1, $variableNbWords = true),
                'rating'=>rand(1,5),
                'education'=>$faker->sentence($nbWords = 2, $variableNbWords = true),
                'experience'=>$faker->sentence($nbWords = 6, $variableNbWords = true),
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\demo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\File;

class demoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json =File::get(path:'database/json/demos.json');
        $demos = collect(json_decode($json));
        $demos->each(function($demo){
            demo::create([
                'name'=>$demo->name,
                'email'=>$demo->email,
               // 'add'=>$demo->add,
                //'con_num'=>$demo->con_num
            ]);
        });
        
    }
}

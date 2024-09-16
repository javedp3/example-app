<?php

namespace Database\Seeders;


use App\Models\first;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class firstSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json =File::get(path:'database/json/firsts.json');
        $firsts = collect(json_decode($json));
        $firsts->each(function($first){
            first::create([
                'name'=>$first->name,
                'email'=>$first->email,
                'age'=>$first->age,
                'address'=>$first->address,
               // 'phoneNumber'=>$first->phoneNumber

              
            ]);
        });
        
    }
}

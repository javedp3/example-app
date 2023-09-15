<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\DB;

class FirstController extends Controller
{
    
    
    public function showFirsts(){
        $firsts = DB::table('firsts')->get();
        //return $firsts;
        //dd($firsts);
        //dump($firsts);
        // foreach($firsts as $first){
        //     echo $first->name . "<br>";
        // }

        return view('first',['data'=>$firsts]);
    }
    public function singleFirsts(string $id){
        $first=DB::table('firsts')->where('id',$id)->get();

        return view('firstuser',['data'=>$first]);
    }

    
    
    public function updateFirst(string $id ){
        //$first = DB::table('firsts')->where('id', $id)->get(); 
        $first = DB::table('firsts')->find($id);    

        return view('updatefirst',['data'=>$first]);
    }
    public function userFirst(Request $req,$id){
        $first = DB::table('firsts')->where('id',$id)
            ->insert(
                [
                    'name' => $req->name,
                    'email' => $req->email,
                    'age' => $req->age,
                    'address' => $req->address,
                  

                ]);
                if($first){
                    return redirect('/first');
                    
                     //echo "<h1>data succe upadd...</h1>";
                }else{
                    echo "<h1>data Not up  add...</h1>";
                    
                }
    }
    public function deleteFirst(string $id){
        $first = DB::table('firsts')->where('id',$id)->delete();
        return redirect('/first');


    }
    public function addFirst(Request $req){
        $first = DB::table('firsts')
            ->insert(
                [
                    'name' => $req->name,
                    'email' => $req->email,
                    'age' => $req->age,
                    'address' => $req->address,


                ]);
                if($first){
                    return redirect('/first');
                    
                     //echo "<h1>data succe add...</h1>";
                }else{
                    echo "<h1>data Not add...</h1>";
                    
                }
    }
}

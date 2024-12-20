<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\Contacts;

class C1 extends Controller
{
    public function store(StorePostRequest $request)
    {
        
     $request->validated();

      return view('read');
    }
    public function store1(){
      $users = DB::table('contacts')->where('deleted_at',null)->paginate(10);
 
      return view('layouts.index', ['users' => $users]);

    }
    public function form(){
      return view('layouts.form');
    }
    public function valider(Request $request){
      
       $request->validate([
        
        'first_name' => 'required|max:255',
        'last_name' => 'required|max:255',
        'phone' => 'required', 
        'email' => 'required|email', 
        'adress' => 'required|max:500', 
    ]);
    $first_name=$request->first_name;
    $last_name=$request->last_name;
    $phone=$request->phone;
    $email=$request->email;
    $adress=$request->adress;
    DB::table('contacts')->insert([
      ['first_name'=>$first_name,'last_name' => $last_name, 'phone' => $phone, 'email' => $email,'adress'=>$adress],
      ]);
    return redirect('/list');
    }   
    public function modifier($id){

      $users = DB::table('contacts')->where('id',$id)->first();
      return view('layouts.read',['users'=>$users]);
    }
    

    public function update(Request $request,$id)
    {
        // Validation des données du formulaire
         $request->validate([
          'first_name' => 'required|max:255',
          'last_name' => 'required|max:255',
          'phone' => 'required', 
          'email' => 'required|email', 
          'adress' => 'required|max:500', 
        ]);

        $first_name=$request->first_name;
        $last_name=$request->last_name;
        $phone=$request->phone;
        $email=$request->email;
        $adress=$request->adress;
         DB::table('contacts')->where('id',$id)->update(
          [
            'first_name'=>$first_name,
            'last_name' => $last_name,
            'phone' => $phone,
            'email' => $email,
            'adress'=>$adress        
          ]
        );
        return redirect('/list');
 
  } 
  public function trush($id){
    $contact = contacts::find($id);
    $contact->delete();
    return redirect('/list');

  }
  public function trushed(){
      $users = DB::table('contacts')->where('deleted_at', '!=', null)->get();
 
      return view('layouts.trushed', ['users' => $users]);

  }
  public function restore($id){
    $contact = contacts::withTrashed()->find($id);
    $contact->restore();
    return redirect('/list');
  }
  public function delet($id){
    DB::table('contacts')->where('id',$id)->delete();
    return redirect('/list');

  }  
  public function show($id) {
    // $users = DB::table('contacts')->where('id',$id)->get();
    // return view('layouts.show',['users'=>$users]);
    $users = DB::table('contacts')->where('id',$id)->first();
      return view('layouts.show',['users'=>$users]);
  }
}
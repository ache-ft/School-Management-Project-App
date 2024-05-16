<?php

namespace App\Http\Controllers;

use App\Models\Family;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParentController extends Controller
{
    

    
    public function parent_details_search_data_by_name(Request $request){
        
        $DataById=$request->input('SearchByName');
        $parents= Family::where('first_name','like','%'.$DataById.'%')->get();
        // dd($parents);
        return view('parents/parent_details',[
            'parents'=>$parents,
        ]);
    }
    public function parent_search_data_by_name(Request $request){
        
        $DataById=$request->input('SearchByName');
        $parents= Family::where('first_name','like','%'.$DataById.'%')->get();
        // dd($parents);
        return view('parents/all_parents',[
            'parents'=>$parents,
        ]);
    }


    public function AddParent(){
        return view('parents/add_parent');
    }
    public function ParentDetails(){
        $parents = Family::All();
        return view('parents/parent_details',[
            'parents'=>$parents,
        ]);
        
    }

    public function AllParents(){
        $parents = Family::All();

        return view('parents/all_parents',[
            'parents'=>$parents,
        ]);
    }
    public function store(Request $request){
        $first_name=  $request->first_name;
        $last_name=  $request->last_name;
        $gender=  $request->gender;
        $occupation=  $request->occupation;
        $cin=  $request->cin;
        $email=  $request->email;
        $address=  $request->address;
        $phone=  $request->phone;
        $bio=  $request->bio;
        $image= $request->file('image')->getClientOriginalName();
    
        // ------------------------------------

        
    //-------------------validation-------------
    // $request->validate([
    // 'first_name'=>'required',
    // 'last_name'=>'required',
    // 'gender'=>'required',
    // 'occupation'=>'required',
    // 'cin'=>'required',
    // 'email'=>'required',
    // 'address'=>'required',
    // 'phone'=>'required',
    // 'bio'=>'required',
    // 'image'=>'required',
 

    // ]);
    // ------------------image--------------------
    if($request->hasFile('image')){
     $request->file('image')->storeAs('parentprofile',$image,'public');

    }

    //-------------------insertion------------
    Family::create([
        'first_name'=>$first_name,
        'last_name'=>$last_name,
        'gender'=>$gender,
        'occupation'=>$occupation,
        'cin'=>$cin,
        'email'=>$email,
        'address'=>$address,
        'phone'=>$phone,
        'bio'=>$bio,
        'image'=>$image,
        


    ]);
    return redirect('/all_parents');

    }
    //-------------------destroy(delete)------------

    public function destroy($id){
        $parent= Family::find($id);
        $parent->delete();
        return redirect('/all_parents')->with('success','item deleted successfully');
    }
    //-------------------edit----------------

    public function edit($id){
        $parent = Family::find($id);
        
        return view('parents/update',[
            'parent'=>$parent,
        ]);
    }

    
    //------------------update------------------
    public function update(Request $request){
        $first_name=  $request->first_name;
        $last_name=  $request->last_name;
        $gender=  $request->gender;
        $occupation=  $request->occupation;
        $cin=  $request->cin;
        $email=  $request->email;
        $address=  $request->address;
        $phone=  $request->phone;
        $bio=  $request->bio;
        $id=$request->id;
        // dd($request);
         //-------------------validation-------------
        // $request->validate([
        // 'first_name'=>'required',
        // 'last_name'=>'required',
        // 'gender'=>'required',
        // 'occupation'=>'required',
        // 'cin'=>'required',
        // 'email'=>'required',
        // 'address'=>'required',
        // 'phone'=>'required',
        // 'bio'=>'required',
        // 'image'=>'required',
    

        //  ]);
       

         //-------------------insertion------------
         $parent=Family::find($id);
         $parent->update([
        'first_name'=>$request->first_name,
        'last_name'=>$request->last_name,
        'gender'=>$request->gender,
        'occupation'=>$request->occupation,
        'cin'=>$request->cin,
        'email'=>$request->email,
        'address'=>$request->address,
        'phone'=>$request->phone,
        'bio'=>$request->bio,
        
       
    ]);
        if($request->hasFile(key:'image')){
            $image = $request->file('image')->getClientOriginalName();
            $request->file(key:'image')->storeAs('parentprofile',$image,'public');
            $parent->update([
                'image' => $image,
              ]);
        }

        return redirect('/all_parents');
    }
   
    

  


    }
    

    

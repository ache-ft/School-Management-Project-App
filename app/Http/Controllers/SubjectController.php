<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{
    public function subject_search_data_by_name(Request $request){
        $DataByName=$request->input('SearchByName');
        
        $parents= DB::table('subjects')->where('subject_name','like','%'.$DataByName.'%')->get();
        
        return view('parents/all_parents',[
            'parents'=>$parents,
        ]);
    }
    public function AddSubject(){
        return view('subjects/add_subject');
    }
    
    public function AllSubjects(){
        $subjects = Subject::All();

        return view('subjects/all_subjects',[
            'subjects'=>$subjects,
        ]);
    }
    public function store(Request $request){
        $subject_name=  $request->subject_name;
        $subject_type=  $request->subject_type;
        $level=  $request->level;
       
        // ------------------------------------

        
    //-------------------validation-------------
    // $request->validate([
    // 
    // ]);

    //-------------------insertion------------
    Subject::create([
        'subject_name'=>$subject_name,
        'subject_type'=>$subject_type,
        'level'=>$level,
        

    ]);
    return redirect('/all_subjects');

    }
    //-------------------destroy(delete)------------

    public function destroy($id){
        $subject= Subject::find($id);
        $subject->delete();
        return redirect('/all_subjects')->with('success','item deleted successfully');
    }
    //-------------------edit----------------

    public function edit($id){
        $subject = Subject::find($id);
        
        return view('subjects/update',[
            'subject'=>$subject,
        ]);
    }

    
    //------------------update------------------
    public function update(Request $request){
        $subject_name=  $request->subject_name;
        $subject_type=  $request->subject_type;
        $level=  $request->level;
        $id=$request->id;
        
         //-------------------validation-------------
        // $request->validate([
       

        // ]);
       

         //-------------------insertion------------
         $subject=Subject::find($id);
         $subject->update([
        'subject_name'=>$request->subject_name,
        'subject_type'=>$request->subject_type,
        'level'=>$request->level,
       
       
    ]);
        

        return redirect('/all_subjects');
    }
   
    

}

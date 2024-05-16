<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TeacherController extends Controller
{
    public function teacher_details_search_data_by_name(Request $request)
    {

        $DataById = $request->input('SearchByName');
        $teachers = DB::table('teachers')->where('first_name', 'like', '%' . $DataById . '%')->get();
        // dd($teachers);
        return view('teachers/teacher_details', [
            'teachers' => $teachers,
        ]);

    }
    public function teacher_search_data_by_name(Request $request){
        
        $DataById=$request->input('SearchByName');
        $teachers= DB::table('families')->where('first_name','like','%'.$DataById.'%')->get();
        // dd($teachers);
        return view('teachers/all_teachers',[
            'teachers'=>$teachers,
        ]);
    }


    public function AddTeacher()
    {
        return view('teachers/add_teacher');
    }
    public function TeacherDetails()
    {
        $teachers = Teacher::All();

        return view('teachers/teacher_details',[
            'teachers'=>$teachers,
        ]);
    }
    public function AllTeachers()
    {
        $teachers = Teacher::All();

        return view('teachers/all_teachers',[
            'teachers'=>$teachers,
        ]);
    }
    public function store(Request $request){
        // dd($request);
        $first_name=  $request->first_name;
        $last_name=  $request->last_name;
        $gender=  $request->gender;
        $level=  $request->level;
        $subject=  $request->subject;
        $father_name=  $request->father_name;
        $mother_name=  $request->mother_name;
        $date_of_birth=  $request->date_of_birth;
        $nic=  $request->nic;
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


    // ]);
    // ------------------image--------------------
    if($request->hasFile('image')){
     $request->file('image')->storeAs('teacherprofile',$image,'public');

    }

    //-------------------insertion------------
    Teacher::create([
        'first_name'=>$first_name,
        'last_name'=>$last_name,
        'gender'=>$gender,
        'level'=>$level,
        'nic'=>$nic,
        'subject'=>$subject,
        'father_name'=>$father_name,
        'mother_name'=>$mother_name,
        'date_of_birth'=>$date_of_birth,

        'address'=>$address,
        'phone'=>$phone,
        'email'=>$email,
        'bio'=>$bio,
        'image'=>$image,
        


    ]);
    return redirect('/all_teachers');

    }
    //-------------------destroy(delete)------------

    public function destroy($id){
        $teacher= Teacher::find($id);
        $teacher->delete();
        return redirect('/all_teachers')->with('success','item deleted successfully');
    }
    //-------------------edit----------------

    public function edit($id){
        $teacher = Teacher::find($id);
        
        return view('teachers/update',[
            'teacher'=>$teacher,
        ]);
    }

    
    //------------------update------------------
    public function update(Request $request){
        $first_name=  $request->first_name;
        $last_name=  $request->last_name;
        $gender=  $request->gender;
        $level=  $request->level;
        $subject=  $request->subject;
        $father_name=  $request->father_name;
        $mother_name=  $request->mother_name;
        $date_of_birth=  $request->date_of_birth;
        $nic=  $request->nic;
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

        // ]);
       

         //-------------------insertion------------
         $teacher=Teacher::find($id);
         $teacher->update([
        'first_name'=>$first_name,
        'last_name'=>$last_name,
        'gender'=>$gender,
        'level'=>$level,
        'nic'=>$nic,
        'subject'=>$subject,
        'father_name'=>$father_name,
        'mother_name'=>$mother_name,
        'date_of_birth'=>$date_of_birth,

        'address'=>$address,
        'phone'=>$phone,
        'email'=>$email,
        'bio'=>$bio,
        
        
        
       
    ]);
        if($request->hasFile(key:'image')){
            $image = $request->file('image')->getClientOriginalName();
            $request->file(key:'image')->storeAs('teacherprofile',$image,'public');
            $teacher->update([
                'image' => $image,
              ]);
        }

        return redirect('/all_teachers');
    }
   
    

  
}

<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Family;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StudentController extends Controller
{
    public function student_search_data_by_name(Request $request){
        $DataByName=$request->input('SearchByName');
        
        $students= Student::where('first_name','like','%'.$DataByName.'%')->get();
        // dd($students);
        return view('students/all_students',[
            'students'=>$students,
        ]); 
    }
    public function student_details_search_data_by_name(Request $request){
        $DataByName=$request->input('SearchByName');
        
        $students= Student::where('first_name','like','%'.$DataByName.'%')->get();
        
        return view('students/student_details',[
            'students'=>$students,
        ]);
    }


    public function AddStudent(){
        return view('students/add_student');
    }
    public function StudentDetails(){
        $students= Student::all();

        return view('students/student_details',[
            'students' =>$students
        ]);
    }
    public function AllStudent(){
        $students= Student::all();
        return view('students/all_students',[
            'students' =>$students
        ]);
    }
  
  
    public function store(Request $request){

        // ===========student details=============
        $student_admission_id=  $request->student_admission_id;
        $student_first_name=  $request->student_first_name;
        $student_last_name=  $request->student_last_name;
        $student_gender=  $request->student_gender;
        $student_date_of_birth=  $request->student_date_of_birth;
        $student_level=  $request->student_level;
        $student_email=  $request->student_email;
        $student_address=  $request->student_address;
        $student_phone=  $request->student_phone;
        $student_bio=  $request->student_bio;
        $student_image= $request->file('student_image')->getClientOriginalName();
        // ===========parents details=============
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
 

    // ]);
    // ------------------image student--------------------
    if($request->hasFile('student_image')){
     $request->file('student_image')->storeAs('Studentprofile',$student_image,'public');

    }
    // ------------------image student--------------------
    if($request->hasFile('image')){
        $request->file('image')->storeAs('parentprofile',$image,'public');
   
       }

    
    //------------------- parent insertion ------------
    $family = Family::create([
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
    //------------------- student insertion ------------
    Student::create([
        'admission_id'=>$student_admission_id,
        'family_id'=>$family->id,
        'first_name'=>$student_first_name,
        'last_name'=>$student_last_name,
        'gender'=>$student_gender,
        'date_of_birth'=>$student_date_of_birth,
        'level'=>$student_level,
        'email'=>$student_email,
        'address'=>$student_address,
        'phone'=>$student_phone,
        'bio'=>$student_bio,
        'image'=>$student_image,
        


    ]);


    return redirect('/all_students');

    }
    //-------------------destroy(delete)------------

    public function destroy($id){
        $student= Student::find($id);
        $student->delete();
        return redirect('/all_students')->with('success','item deleted successfully');
    }
    //-------------------edit----------------

    public function edit($id){
        $student = Student::find($id);
        
        return view('students/update',[
            'student'=>$student,
        ]);
    }

    
    //------------------update------------------
    public function update(Request $request){
        $student_admission_id=  $request->student_admission_id;
        $student_first_name=  $request->student_first_name;
        $student_last_name=  $request->student_last_name;
        $student_gender=  $request->student_gender;
        $student_date_of_birth=  $request->student_date_of_birth;
        $student_level=  $request->student_level;
        $student_email=  $request->student_email;
        $student_address=  $request->student_address;
        $student_phone=  $request->student_phone;
        $student_bio=  $request->student_bio;
        $id=$request->id;
        // dd($request);
         //-------------------validation-------------
        // $request->validate([
        // 'first_name'=>'required',
        // 'last_name'=>'required',
    

        // ]);
       

         //-------------------student insertion------------
         $student=Student::find($id);
         $student->update([
            'admission_id'=>$student_admission_id,
            'first_name'=>$student_first_name,
            'last_name'=>$student_last_name,
            'gender'=>$student_gender,
            'date_of_birth'=>$student_date_of_birth,
            'level'=>$student_level,
            'email'=>$student_email,
            'address'=>$student_address,
            'phone'=>$student_phone,
            'bio'=>$student_bio,
        
       
    ]);
        if($request->hasFile(key:'student_image')){
            $student_image = $request->file('student_image')->getClientOriginalName();
            $request->file(key:'student_image')->storeAs('studentprofile',$student_image,'public');
            $student->update([
                'image' => $student_image,
              ]);
        }

         

        return redirect('/all_students');
    }

    
}

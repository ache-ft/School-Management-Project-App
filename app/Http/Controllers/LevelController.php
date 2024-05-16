<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Http\Request;
use PgSql\Lob;

class LevelController extends Controller
{
    public function level_search_data_by_name(Request $request)
    {

        $DataById = $request->input('SearchByName');
        $levels = Level::where('level', 'like', '%' . $DataById . '%')->get();
        // dd($levels);
        return view('levels/all_levels', [
            'levels' => $levels,
        ]);
    }
    public function AddLevel()
    {
       

        return view('levels/add_level');
    }
    
    public function AllLevels()
    {
        $levels = Level::All();
        return view('levels/all_levels', [
            'levels' => $levels,
        ]);
    }
    public function store(Request $request){
        $teacher_name=  $request->teacher_name;
        $gender=  $request->gender;
        $level=  $request->level;
        $subject=  $request->subject;
        $starting_time=  $request->starting_time;
        $ending_time=  $request->ending_time;
        $email=  $request->email;
        
        // ------------------------------------

        
    //-------------------validation-------------
    // $request->validate([
    
    // ]);
    // ------------------image--------------------
    
    //-------------------insertion------------
    Level::create([
        'teacher_name'=>$teacher_name,
        'gender'=>$gender,
        'level'=>$level,
        'subject'=>$subject,
        'email'=>$email,
        'starting_time'=>$starting_time,
        'ending_time'=>$ending_time,
        


    ]);
    return redirect('/all_levels');

    }
    //-------------------destroy(delete)------------

    public function destroy($id){
        $level= Level::find($id);
        $level->delete();
        return redirect('/all_levels')->with('success','item deleted successfully');
    }
    //-------------------edit----------------

    public function edit($id){
        $level = Level::find($id);
        
        return view('levels/update',[
            'level'=>$level,
        ]);
    }

    
    //------------------update------------------
    public function update(Request $request){
        $teacher_name=  $request->teacher_name;
        $gender=  $request->gender;
        $level=  $request->level;
        $subject=  $request->subject;
        $starting_time=  $request->starting_time;
        $ending_time=  $request->ending_time;
        $email=  $request->email;
        $id=$request->id;
        // dd($request);
         //-------------------validation-------------
        // $request->validate([
        //

        // ]);
       

         //-------------------insertion------------
         $Level=Level::find($id);
         $Level->update([
            'teacher_name'=>$teacher_name,
            'gender'=>$gender,
            'level'=>$level,
            'subject'=>$subject,
            'email'=>$email,
            'starting_time'=>$starting_time,
            'ending_time'=>$ending_time,
            
    
       
    ]);
       

        return redirect('/all_levels');
    }
   
    

  

}

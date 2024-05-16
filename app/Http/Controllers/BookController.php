<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\DB;


class BookController extends Controller
{
    public function search_data_by_name(Request $request){
        $DataByName=$request->input('SearchByName');
        $books= DB::table('books')->where('book_name','like','%'.$DataByName.'%')->get();
        // dd($parents);
        return view('books/all_books',[
            'books'=>$books,
        ]);
    }

    public function AddBook(){
        return view('books/add_book');
    }
    public function Books(){
        $books = Book::All();
        return view('books/all_books',[
            'books'=>$books,
        ]);
    }
   
    public function store(Request $request){
        $book_name=  $request->book_name;
        $subject=  $request->subject;
        $writter_name=  $request->writter_name;
        $Level=  $request->level;
        $publishing_date=  $request->publishing_date;
        $upload_date=  $request->upload_date;
    
    //-------------------validation-------------
    // $request->validate([
    // 'book_name'=>'required',
    // 'subject'=>'required',
    // 'writter_name'=>'required',
    // 'Level'=>'required',
    // 'publishing_date'=>'required',
    // 'upload_date'=>'required',
 

    // ]);

    //-------------------insertion------------
    Book::create([
        'book_name'=>$book_name,
        'subject'=>$subject,
        'writter_name'=>$writter_name,
        'Level'=>$Level,
        'publishing_date'=>$publishing_date,
        'upload_date'=>$upload_date,


    ]);
    return redirect('/all_books');

    }
     //-------------------destroy(delete)------------

     public function destroy($id){
        $book= Book::find($id);
        $book->delete();
        return redirect('/all_books')->with('success','item deleted successfully');
    }
    //-------------------edit----------------

    public function edit($id){
        $book = Book::find($id);
        
        return view('books/update',[
            'book'=>$book,
        ]);
    }

    
    //------------------update------------------
    public function update(Request $request){
        $book_name=  $request->book_name;
        $subject=  $request->subject;
        $writter_name=  $request->writter_name;
        $Level=  $request->level;
        $publishing_date=  $request->publishing_date;
        $upload_date=  $request->upload_date;
        $id=$request->id;
        // dd($request);
         //-------------------validation-------------
        // $request->validate([
        
    

        // ]);
       

         //-------------------insertion------------
         $book=Book::find($id);
         $book->update([
            'book_name'=>$book_name,
            'subject'=>$subject,
            'writter_name'=>$writter_name,
            'Level'=>$Level,
            'publishing_date'=>$publishing_date,
            'upload_date'=>$upload_date,
        
       
    ]);
       

        return redirect('/all_books');
    }
   
}

<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\LocalizatioController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\StudentController;

use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/ma', function () {
    return view('layouts.master');
});
Route::get('/locale/{lang}',[LocalizatioController::class,'setLang']);
 
// ------------------authentication---------------------

Route::get('/register',[AuthController::class,'register']);
Route::post('/register/save',[AuthController::class,'registerSave']);
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::POST('/login/action',[AuthController::class,'loginAction']);
Route::get('/logout',[AuthController::class,'logOut']);

Route::middleware('auth')->group(function(){

Route::get('/dashboard',[DashboardController::class,'index']);



// ------------------student---------------------
Route::get('/add_student',[StudentController::class,'AddStudent']);
Route::post('/add_student/store',[StudentController::class,'store']);
Route::get('/student_details',[StudentController::class,'StudentDetails']);
Route::get('/all_students',[StudentController::class,'AllStudent']);
Route::delete('/all_students/destroy/{id}',[StudentController::class,'destroy']);
Route::get('/all_students/edit/{id}', [StudentController::class,'edit']);
Route::post('/all_students/update', [StudentController::class,'update']);
// =========search===========
Route::get('/student_search_data_by_name',[StudentController::class,'student_search_data_by_name']);
Route::get('/student_details_search_data_by_name',[StudentController::class,'student_details_search_data_by_name']);


// ------------------teacher---------------------
Route::get('/add_teacher',[TeacherController::class,'AddTeacher']);
Route::post('/add_teacher/store',[TeacherController::class,'store']);
Route::get('/teacher_details',[TeacherController::class,'TeacherDetails']);
Route::get('/all_teachers',[TeacherController::class,'AllTeachers']);
// Route::get('/payment',[TeacherController::class,'Payment']);
Route::delete('/all_teachers/destroy/{id}',[TeacherController::class,'destroy']);
Route::get('/all_teachers/edit/{id}', [TeacherController::class,'edit']);
Route::post('/all_teachers/update', [TeacherController::class,'update']);
// =========search===========
Route::get('/teacher_search_data_by_name',[TeacherController::class,'teacher_search_data_by_name']);
Route::get('/teacher_details_search_data_by_name',[TeacherController::class,'teacher_details_search_data_by_name']);



// ------------------parent---------------------
Route::get('/add_parent',[ParentController::class,'AddParent']);
Route::post('/add_parent/store',[ParentController::class,'store']);
Route::get('/parent_details',[ParentController::class,'ParentDetails']);
Route::get('/all_parents',[ParentController::class,'AllParents']);
Route::delete('/all_parents/destroy/{id}',[ParentController::class,'destroy']);
Route::get('/all_parents/edit/{id}', [ParentController::class,'edit']);
Route::post('/all_parents/update', [ParentController::class,'update']);
// =========search===========
Route::get('/parent_search_data_by_name',[ParentController::class,'parent_search_data_by_name']);
Route::get('/parent_details_search_data_by_name',[ParentController::class,'parent_details_search_data_by_name']);


// ------------------book---------------------
Route::get('/add_book',[BookController::class,'AddBook']);
Route::post('/add_book/store',[BookController::class,'store']);
Route::get('/all_books',[BookController::class,'Books']);
Route::delete('/all_books/destroy/{id}',[BookController::class,'destroy']);
Route::get('/all_books/edit/{id}', [BookController::class,'edit']);
Route::post('/all_books/update', [BookController::class,'update']);
// =========search===========
Route::get('/search_data_by_name',[BookController::class,'search_data_by_name']);
Route::get('/search_data_by_id',[BookController::class,'search_data_by_id']);


// ------------------level---------------------
Route::get('/add_level',[LevelController::class,'AddLevel']);
Route::post('/add_level/store',[LevelController::class,'store']);
Route::get('/all_levels',[LevelController::class,'AllLevels']);
Route::delete('/all_levels/destroy/{id}',[LevelController::class,'destroy']);
Route::get('/all_levels/edit/{id}', [LevelController::class,'edit']);
Route::post('/all_levels/update', [LevelController::class,'update']);
// =========search===========
Route::get('/level_search_data_by_name',[LevelController::class,'level_search_data_by_name']);



// ------------------subject---------------------
Route::get('/add_subject',[SubjectController::class,'AddSubject']);
Route::post('/add_subject/store',[SubjectController::class,'store']);
Route::get('/all_subjects',[SubjectController::class,'AllSubjects']);
Route::delete('/all_subjects/destroy/{id}',[SubjectController::class,'destroy']);
Route::get('/all_subjects/edit/{id}', [SubjectController::class,'edit']);
Route::post('/all_subjects/update', [SubjectController::class,'update']);
// =========search===========
Route::get('/subject_search_data_by_name',[SubjectController::class,'subject_search_data_by_name']);


});


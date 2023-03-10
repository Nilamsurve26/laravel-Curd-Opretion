

<?php
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
 Route::get('/students', 'studentsController@index');
 Route::get('/create', 'studentsController@create');
 Route::post('/insert','studentsController@store')->name('insert');
 Route::get('/edit/{id}','studentsController@edit')->name('edit');
 Route::post('/update/{id}','studentsController@update')->name('update');
//  Route::resource('students','studentsController');
Route::get('/delete/{id}', 'studentsController@destroy')->name('delete');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

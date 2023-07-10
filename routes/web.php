<?php

use App\Http\Controllers\ProductController;
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
    $arrayFields=[
     [
        'type'=>'email',
        'name'=>"floating_email",
        "id"=>"floating_email" ,
        'label'=>'Email address'
     ],
     [
        'type'=>'password',
        'name'=>"floating_password",
        "id"=>"floating_password" ,
        'label'=>'Password'
     ]
     ,
     [
        'type'=>'password',
        'name'=>"repeat_password",
        "id"=>"floating_repeat_password" ,
        'label'=>'Confirm password'
     ]
     ,
     [
        'type'=>'text',
        'name'=>"floating_first_name",
        "id"=>"floating_first_name" ,
        'label'=>'First name'
     ]
     ,
     [
        'type'=>'text',
        'name'=>"floating_last_name",
        "id"=>"floating_last_name" ,
        'label'=>'Last name'
     ]
     ,
     [
        'type'=>'tel',
        'name'=>"floating_phone",
        "id"=>"floating_phone" ,
        'label'=>'Phone number (123-456-7890)'
     ]
     ,

     [
        'type'=>'text',
        'name'=>"floating_company",
        "id"=>"floating_company" ,
        'label'=>'Company (Ex. Google)'
     ]
    ];
    return view('welcome')->with('arrayFields',$arrayFields);
});

Route::get('/products',[ProductController::class,'index']);
Route::get('/infinitScrollproducts',[ProductController::class,'infinitScroll']);
Route::get('/search', [ProductController::class, 'search'])->name('search');
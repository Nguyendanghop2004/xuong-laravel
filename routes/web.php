<?php

use App\Http\Controllers\CategoriesController;
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

// Client Route
Route::prefix('categories')->group(function () {
   Route::get('/', [CategoriesController::class, 'index']);

   Route::get('edit/{id}', [CategoriesController::class, 'index']);
   Route::post('edit/{id}', [CategoriesController::class, 'index']);







   //    //đây là điều kiện bắt buộc
   //    Route::get('/{value}-{id}',function($value,$id,)  {
   //       $conten = 'hop dep trai ' .$id .$value;
   //       return $conten;
   //    }) ;

   //    //điều kiện không bắt buộc phải gán giá trị bằng null;
   //    Route::get('hop/{id?}',function($id=null)  {
   //       $conten = 'hop dep trai ' .$id;
   //       return $conten;
   //    });

   //    //
   //    Route::get('valeder/{id?}',function($id=null)  {
   //       $conten = 'hop dep trai ' .$id;
   //       return $conten;
   //    })->where([
   //       'id' =>'[0-9]+'
   //    ])->name('categories.valeder');
   //    // sử dụng hàm route để gọi tên route;
});

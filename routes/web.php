<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\AdminController;
use App\Mail\SendMail;
use App\Models\PostModel;
use Illuminate\Support\Str;
use App\Models\CategoryModel;


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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/',[ClientsController::class,'index']);
Route::get('/post/{slug}',[ClientsController::class,'detail']);

Route::get('/post/{slugct}/{slug}',[ClientsController::class,'detail2']);

Route::get('/category/{slug}',[ClientsController::class,'category']);
// routes/web.php (hoặc routes/api.php, tùy vào loại route bạn đang sử dụng)

// Định nghĩa group middleware cho tất cả các route bắt đầu bằng /admins
Route::group(['prefix' => 'admins', 'middleware' =>  ['auth', 'RoleLogin']], function () {
    Route::get('/', [AdminController::class, 'index']);
    //Bài viết
    Route::get('/post', [AdminController::class, 'postDefault']);
    Route::get('/post/{id}', [AdminController::class, 'post']);
    Route::get('/post/{id}/add', [AdminController::class, 'postAdd']);
    Route::get('/post/{id}/addSlug', [AdminController::class, 'addSlug']);

    Route::post('/post/{id}/add', [AdminController::class, 'postAdd_']);
    Route::get('/post/{id}/edit/{idPost}', [AdminController::class, 'postEdit']);
    Route::post('/post/{id}/edit/{idPost}', [AdminController::class, 'postEdit_']);
    Route::get('/post/{id}/delete/{idPost}', [AdminController::class, 'postDelete']);
   
   //Danh mục
    Route::get('category', [AdminController::class, 'category']);
    Route::get('/category/add', [AdminController::class, 'categoryAdd']);
    Route::post('/category/add', [AdminController::class, 'categoryAdd_']);
    Route::get('/category/edit/{id}', [AdminController::class, 'categoryEdit']); 
    Route::post('/category/edit/{id}', [AdminController::class, 'categoryEdit_']);  
    Route::get('/category/delete/{id}', [AdminController::class, 'categoryDelete']);
    Route::get('/sendmail',function(){
        Mail::mailer('mailgun')->send(new SendMail());
     });
    //

});
Route::get('/thongbaoadmin',[AdminController::class,'thongbao']);
Route::get('/addSlug',function(){
    $post = PostModel::all();
    foreach($post as $p){
        $p->created_at = date('Y-m-d H:i:s');
        $p->updated_at = date('Y-m-d H:i:s');
        $p->save();
    }
});
Route::get('/addSlug2',function(){
    $Category = CategoryModel::all();
    foreach($Category as $p){
        $p->slug = Str::slug($p->ten);
        $p->save();
    }
});

require __DIR__.'/auth.php';

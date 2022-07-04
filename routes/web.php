<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('', 'PagesController@home');
Route::get('/', [PagesController::class, 'index']);

// Route::get('', function(){
//    return view('home',[
//       "title"=>"Posts",
//       "posts"=>Post::all()
//    ]);
// });


// Route::get('/', function () {
//     return view('home',[
//         "title" => "Home"
//     ]);
// });

// news route
Route::get('news', 'PagesController@news');


// Route::get('news_kamera/{slug}', 'PagesController@show');
Route::get('/show/{post:slug}', [PagesController::class, 'show']);
// Route::get('news', function () {
//     return view('news',[
//         "title"=>"News"
//     ]);
// });


// Route::get('news_kamera/{slug}', function ($slug) {
//     return view('news/news_kamera',[
//         "title"=>"News",
//         "posts"=> Post::find($slug)
//     ]);
// });

// end of news route




// smartphone route xiaomi



Route::get('/smartphone', 'PagesController@smartphone');
Route::get('/postSmartphone/{post:slug}', 'PagesController@postSmartphone');



Route::get('/laptop', 'PagesController@laptop');

Route::get('/postLaptop/{post:slug}', 'PagesController@postLaptop');


// smartphone route samsung

// Route::get('smartphone_samsung', 'PagesController@smartphone_samsung');

// Route::get('/samsungS22/{post:slug}', 'PagesController@samsungS22');

// smartphone route asus

// Route::get('smartphone_asus', 'PagesController@smartphone_asus');

// Route::get('/asusM2/{post:slug}', 'PagesController@asusM2');





// Route::get('smartphone_xiaomi', function () {
//     return view('smartphone_xiaomi',[
//         "title"=>"Smartphone"
//     ]);
// });



// Route::get('renot_11', function () {
//     return view('smartphone/xiaomi/xiaomi_renot11',[
//         "title"=>"Smartphone"
//     ]);
// });


// end of smartphone route


// gadget route

Route::get('gadget', 'PagesController@gadget');
Route::get('postGadget/{post:slug}', "PagesController@postGadget");
// Route::get('gadget', function () {
//     return view('gadget',[
//         "title"=>"Gadget"
//     ]);
// });
// Route::get('ipad_pro', function () {
//     return view('gadget\ipad_pro',[
//         "title"=>"Gadget"
//     ]);
// });

// end of gadget route


// laptop route
Route::get('laptop_acer', 'PagesController@laptop_acer');
// Route::get('acer_1', 'PagesController@acer_1');
Route::get('/acer_1/{laptop:slug}', 'PagesController@acer_1');


Route::get('laptop_asus', 'PagesController@laptop_asus');

Route::get('/asus_1/{laptop:slug}', 'PagesController@asus_1');

Route::get('laptop_axioo', 'PagesController@laptop_axioo');

Route::get('/axioo_1/{laptop:slug}', 'PagesController@axioo_1');


// Route::get('laptop_acer', function () {
//     return view('laptop_acer',[
//         "title"=>"Laptop"
//     ]);
// });
// Route::get('acer_1', function () {
//     return view('laptop/acer/acer_1',[
//         "title"=>"Laptop"
//     ]);
// });



// end of laptop route

// tutorial route

Route::get('tutorial', 'PagesController@tutorial');
Route::get('ganti_baterai_hp', 'PagesController@baterai_hp');

// Route::get('tutorial', function () {
//     return view('tutorial',[
//         "title"=>"Tutorial"
//     ]);
// });
// Route::get('ganti_baterai_hp', function () {
//     return view('tutorial/ganti_baterai_hp',[
//         "title"=>"Tutorial"
//     ]);
// });


// end of tutorial route

// about route
Route::get('about_us', 'PagesController@about_us');
// Route::get('about_us', function () {
//     return view('about/about_us',[
//         "title"=>"About"
//     ]);
// });

// end of about route


// login route



Route::get('login', [LoginController::class, 'index'])->name('login')->middleware('guest');  
Route::post('login', [LoginController::class, 'authenticate']);  
Route::post('/logout', [LoginController::class, 'logout']);  

Route::get('register', [RegisterController::class, 'index'])->middleware('guest');   
Route::post('register', [RegisterController::class, 'store']);   

// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard', function(){
    return view('dashboard.index',[
        'title' => 'Dashboard',
        'active' => 'dashboard'

    ]);
})->middleware('auth');

// Route::resource('dashboard/posts', DashboardPostController::class)->middleware('auth');



Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/posts', 'DashboardPostController')->middleware('auth');





// Route::get('register', 'RegisterController@index');   
// Route::post('register', 'RegisterController@store');   



// Route::get('/login-register', [LoginController::class, 'index']);


// end of login route

// route model post and controller

// Route::get('news', [PostController::class, 'index']);

// Route::get('posts', function(){
//    return view('news.news_kamera',[
//       "title"=>"Posts",
//       "posts"=>Post::all()
//    ]);
// });


// end of route model and controller

// Route::get('blog', [PagesController::class, 'blog']);

// Route::get('posts/{slug}', [PagesController::class, 'BlogShow']);



// route categories
Route::get('/categories/', [PagesController::class, 'categories'] );
Route::get('/categories/{category:slug}', [PagesController::class, 'category']);
Route::get('/showCategories', 'PagesController@showCategories');

// laptop
Route::get('/categories_laptop', [PagesController::class, 'categories_laptop'] );
Route::get('/categories_laptop/{category:slug}', [PagesController::class, 'category_laptop']);

Route::get('/categories_laptop_acer/{category:slug}', [PagesController::class, 'category_laptop_acer']);

Route::get('/categories_laptop_asus/{category:slug}', [PagesController::class, 'category_laptop_asus']);
Route::get('/categories_laptop_axioo/{category:slug}', [PagesController::class, 'category_laptop_axioo']);


// Route::get('/smartphones', [PagesController::class, 'smartCategories'] );
// Route::get('/smartphones/{smartphone:slug}', [PagesController::class, 'smartCategory']);

Route::get('/authors/{author:username}', [PagesController::class, 'author']);
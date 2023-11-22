<?php
namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PhotoCommentController;
use App\Http\Controllers\imcController;
use App\Http\Middleware;
use App\Http\Controllers\PackageController;
use Illuminate\Support\Facades\DB;


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
Route::prefix('admin')->group(function(){
    Route::get('/user/{id}/profile', function (string $id) {
        return $id;
        
    })->where('id','[0-9]');
    
});
Route::get('',function(){
    // return view('dashbord');
//    return User::find(1)->profile;
    $posts = Post::where('id',1)->where('user_id',1)->get();
    foreach($posts as $post){
        print_r($post['title']);
    }
        
    
//    return 'User created successfully.';

});

Route::get('/user/{id}',[UserController::class,'index']);
 


Route::post('/form','UserController@check')->name('processForm');

Route::get('/films/{category}',function (string $category){
    return view('index');

})->whereIn('category',['drama','painting']);

Route::resource('photos.comments',PhotoController::class);


































Route::get('/imc',function(){
    return view('imc');
});






// Route::post('/processImc',[imcController::class,'processImc']);

use Illuminate\Http\Request;

Route::post('/processImc', [ImcController::class, 'processImc']);









Route::get('/pretbancaire',function(){
    return view('pretBancaire');
});
Route::post('pretCalculer',[PretCalculator::class,'index']);
    






Route::get('/convertisseur',function(){
    return view('convertisseur');
});
Route::post('convert',[MoneyConvert::class,'index']);






Route::get('/login',function(){
    return view('login');
});
Route::post('/authentification',function(){return view('home');} )->middleware('authMiddleware');




Route::get('/homie',[IndexController::class,'index']);

Route::get('/accueil', function () {
    return view('pages.accueil');
    });
    Route::get('/apropos', function () {
    return view('pages.apropos'); }); 


    Route::get('/packages', 'App\Http\Controllers\PackageController@index')->name('packages.index');
    Route::get('/packages/{slug}', 'App\Http\Controllers\PackageController@show')->name('packages.show');
    // Route::get('/packages', 'App\Http\Controllers\PackageController@show')->name('packages.show');    


// Route::get('/',function(){
//     $users = DB::table('users')->where('email','john@example.com')->value('name'); 
//     // foreach ($users as $user){
//         print_r($users);
//     // }
// });

Route::get('/fournisseurData',function(){
        return view('data');
});

Route::get('/getfromDb', function () {
    $result = DB::table('fournisseurs')->get();
    return $result;
})->name('getfromDb');


Route::get('/getfournisseurs', function () {
    $result = DB::table('fournisseurs')->get();
    return $result;
})->name('getfournisseurs');


Route::get('/get-ville-agadir', function () {
    $result = DB::table('fournisseurs')->where('ville', 'Agadir')->get();
    return $result;
})->name('getVilleAgadir');


Route::get('/get-ville', function () {
    $result = DB::table('fournisseurs')->select('nom', 'ville')->get();
    return $result;
})->name('getVille');


Route::get('/get-fournisseur-ville', function () {
    $result = DB::table('fournisseurs')->distinct()->select('ville')->get();
    return $result;
})->name('getFournisseurVille');


Route::get('/get-articles', function () {
    $result = DB::table('articles')->get();
    return $result;
})->name('getArticles');


Route::get('/get-description-poids', function () {
    $result = DB::table('articles')->select('description', 'poids')->get();
    return $result;
})->name('getDescriptionPoids');


Route::get('/get-articles-id', function () {
    $result = DB::table('articles')->where('id', 1)->first();
    return $result;
})->name('getArticlesId');

Route::get('/get-articles-couleur-vert', function () {
    $result = DB::table('articles')->where('couleur', 'Vert')->select('id', 'description')->get();
    return $result;
})->name('getArticlesCouleurVert');

Route::get('/get-article-prix', function () {
    $result = DB::table('articles')->where('couleur', 'Vert')->where('prix_achat', '>', 500)->select('description')->get();
    return $result;
})->name('getArticlePrix');


Route::get('/get-article-poids', function () {
    $result = DB::table('articles')->whereBetween('poids', [200, 300])->get();
    return $result;
})->name('getArticlePoids');


Route::get('/get-nombre-count', function () {
    $result = DB::table('articles')->count();
    return $result;
})->name('getNombreCount');


Route::get('/get-article-avg', function () {
    $result = DB::table('articles')->avg('prix_achat');
    return $result;
})->name('getArticleAvg');





    // 2
// $result = DB::table('fournisseurs')->where('ville', 'Agadir')->get();

// 3. 
// $result = DB::table('fournisseurs')->select('nom', 'ville')->get();

// 4
// $result =DB::table('fournisseurs')->distinct()->select('ville')->get();

// 5.
// $result = DB::table('articles')->get();

// 6.
// $result = DB::table('articles')->select('description', 'poids')->get();

// 7.
// $result = DB::table('articles')->where('id', 1)->first();

// 8. 
// $result = DB::table('articles')->where('couleur', 'Vert')->select('id', 'description')->get();

// 9. 
// $result = DB::table('articles')->where('couleur', 'Vert')->where('prix_achat', '>', 500)->select('description')->get();

// 10. 
// $result = DB::table('articles')->whereBetween('poids', [200, 300])->get();

// 11.
// $result = DB::table('articles')->count();

// 12.
// $result = DB::table('articles')->avg('prix_achat');


use App\Http\Controllers\ArticlesController;

Route::get('/show-fournisseurs', [ArticlesController::class, 'showFournisseurs'])->name('showFournisseurs');
Route::get('/get-articles-by-fournisseur', [ArticlesController::class, 'getArticlesByFournisseur'])->name('getArticlesByFournisseur');

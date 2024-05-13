<?php
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\fronted\CustomersController;
use App\Http\Controllers\admin\CustomersController as AdminCustomersController;
use App\Http\Controllers\fronted\EmployeesController;
use Illuminate\Support\Facades\Auth;
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


// public 

    Route::get('/lang/{locale}',[ CustomersController::class,'switch'])->name('lang');

    Route::get('/logout', function () {
        Auth::logout();
        return redirect()->route('fronted.customers.index');
    })->name('logout');


// front
Route::group(['as'=>'fronted.customers.' ], function () {
    
    //customers
    Route::get('/', [CustomersController::class,'index'])->name('index'); 
    Route::get('/ourwork', [CustomersController::class,'ourwork'])->name('ourwork'); 
    Route::get('/articles', [CustomersController::class,'articles'])->name('articles'); 
    Route::get('/engaz', [CustomersController::class,'engaz'])->name('engaz'); 

    Route::get('/articleDetail/{i}', [CustomersController::class,'articleDetail'])->name('articleDetail')->middleware('auth'); 

});



// backend
Route::group(['prefix'=>'admin','as'=>'dashboard.','middleware'=>['auth', 'admin']], function () {
    
    Route::get('/', [HomeController::class,'index'])->name('index'); 


    // customers

    //home
    
    //intro 
    Route::get('/intro', [AdminCustomersController::class,'intro'])->name('customers'); 
    Route::post('/update_intro', [AdminCustomersController::class,'updateintro'])->name('customers.update'); 

    //about 
    Route::get('/about', [AdminCustomersController::class,'about'])->name('customers.about'); 
    Route::post('/update_about', [AdminCustomersController::class,'updateabout'])->name('customers.aboutupdate'); 
   
    //services 
    Route::get('/service', [AdminCustomersController::class,'service'])->name('customers.service'); 
    Route::post('/update_service', [AdminCustomersController::class,'updateservice'])->name('customers.updateservice'); 
    
    //excellence 
    Route::get('/excellence', [AdminCustomersController::class,'excellence'])->name('customers.excellence'); 
    Route::post('/update_excellence', [AdminCustomersController::class,'updatexcellence'])->name('customers.updatexcellence'); 
    
    //contact 
    Route::get('/contact', [AdminCustomersController::class,'contact'])->name('customers.contact'); 
    Route::post('/update_contact', [AdminCustomersController::class,'updatecontact'])->name('customers.updatecontact'); 




    //our work 

    //Images 
    Route::get('/work', [AdminCustomersController::class,'images'])->name('customers.images.work');
    Route::get('/work/images', [AdminCustomersController::class,'images'])->name('customers.images.work');
    Route::get('/work/images/add', [AdminCustomersController::class,'addimages'])->name('customers.images.work.add'); 
    Route::post('/work/images/store', [AdminCustomersController::class,'storeimages'])->name('customers.images.work.store'); 
    Route::get('/work/images/edit/{id}', [AdminCustomersController::class,'editimages'])->name('customers.images.work.edit'); 
    Route::post('/work/images/update/', [AdminCustomersController::class,'updateimages'])->name('customers.images.work.update'); 
    Route::get('/work/images/delete/{id}', [AdminCustomersController::class,'deleteimages'])->name('customers.images.work.delete');

    //fields
    Route::get('/work/fields', [AdminCustomersController::class,'fields'])->name('customers.fields');
    Route::get('/work/fields/add', [AdminCustomersController::class,'addfields'])->name('customers.fields.add'); 
    Route::post('/work/fields/store', [AdminCustomersController::class,'storefields'])->name('customers.fields.store'); 
    Route::get('/work/fields/edit/{id}', [AdminCustomersController::class,'editfields'])->name('customers.fields.edit'); 
    Route::post('/work/fields/update/', [AdminCustomersController::class,'updatefields'])->name('customers.fields.update'); 
    Route::get('/work/fields/delete/{id}', [AdminCustomersController::class,'deletefields'])->name('customers.fields.delete');



    //rates
    Route::get('/work/rates', [AdminCustomersController::class,'rates'])->name('customers.rates');
    Route::get('/work/rates/add', [AdminCustomersController::class,'addrates'])->name('customers.rates.add'); 
    Route::post('/work/rates/store', [AdminCustomersController::class,'storerates'])->name('customers.rates.store'); 
    Route::get('/work/rates/edit/{id}', [AdminCustomersController::class,'editrates'])->name('customers.rates.edit'); 
    Route::post('/work/rates/update/', [AdminCustomersController::class,'updaterates'])->name('customers.rates.update'); 
    Route::get('/work/rates/delete/{id}', [AdminCustomersController::class,'deleterates'])->name('customers.rates.delete');



    // Articles 

    // articles
    Route::get('/articles', [AdminCustomersController::class,'articles'])->name('customers.articles'); 
    Route::get('/articles/add', [AdminCustomersController::class,'addarticles'])->name('customers.articles.add'); 
    Route::post('/articles/store', [AdminCustomersController::class,'storearticles'])->name('customers.articles.store'); 
    Route::get('/articles/edit/{id}', [AdminCustomersController::class,'editarticles'])->name('customers.articles.edit'); 
    Route::post('/articles/update/', [AdminCustomersController::class,'updatearticles'])->name('customers.articles.update'); 
    Route::get('/articles/delete/{id}', [AdminCustomersController::class,'deletearticles'])->name('customers.articles.delete');

    // purvies
    Route::get('/purvies', [AdminCustomersController::class,'purvies'])->name('customers.purvies'); 
    Route::get('/purvies/add', [AdminCustomersController::class,'addpurvies'])->name('customers.purvies.add'); 
    Route::post('/purvies/store', [AdminCustomersController::class,'storepurvies'])->name('customers.purvies.store'); 
    Route::get('/purvies/edit/{id}', [AdminCustomersController::class,'editpurvies'])->name('customers.purvies.edit'); 
    Route::post('/purvies/update/', [AdminCustomersController::class,'updatepurvies'])->name('customers.purvies.update'); 
    Route::get('/purvies/delete/{id}', [AdminCustomersController::class,'deletepurvies'])->name('customers.purvies.delete');


    // about 

    // us
    Route::get('/aboutus', [AdminCustomersController::class,'aboutus'])->name('customers.aboutus'); 
    Route::post('/update_aboutus', [AdminCustomersController::class,'updateaboutus'])->name('customers.updateaboutus'); 

    // Servise
    Route::get('/services', [AdminCustomersController::class,'services'])->name('customers.services'); 
    Route::get('/services/add', [AdminCustomersController::class,'addservices'])->name('customers.services.add'); 
    Route::post('/services/store', [AdminCustomersController::class,'storeservices'])->name('customers.services.store'); 
    Route::get('/services/edit/{id}', [AdminCustomersController::class,'editservices'])->name('customers.services.edit'); 
    Route::post('/services/update/', [AdminCustomersController::class,'updateservices'])->name('customers.services.update'); 
    Route::get('/services/delete/{id}', [AdminCustomersController::class,'deleteservices'])->name('customers.services.delete');
    

    // why
    Route::get('/whyus', [AdminCustomersController::class,'whyus'])->name('customers.whyus'); 
    Route::post('/update_whyus', [AdminCustomersController::class,'updatewhyus'])->name('customers.updatewhyus'); 



});








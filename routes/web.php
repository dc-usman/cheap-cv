<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Web;
use Illuminate\Support\Facades\Artisan;


Auth::routes([
    'register' => false
]);

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function(){

    Route::get('/', 'DashboardController@index')->name('home');

    //Contact lists
    Route::get('/contacts', 'ContactController@index')->name('contacts.index');
    Route::get('/contacts/{id}', 'ContactController@show')->name('contacts.show');

    //OrderQueries
    Route::get('/order-queries', 'OrdersController@query')->name('order.query');
    Route::get('/order-queries/{id}', 'OrdersController@queryShow')->name('order.query.show');

    //Orders
    Route::get('/orders', 'OrdersController@index')->name('orders.index');
    Route::get('/orders/{id}', 'OrdersController@show')->name('orders.show');
    Route::post('/orders/{id}/complete', 'OrdersController@complete')->name('orders.complete');


    //Category
    Route::resource('categories', 'CategoryController');

    //Tags
    Route::resource('tags', 'TagsController');

    

    //Blogs
     Route::post('blogs/slug', 'BlogsController@getSlug')->name('blogs.getSlug');
     Route::resource('blogs', 'BlogsController');

    //Fare
     Route::resource('fare', 'FareController');

    //Web Setting
    Route::resource('web-setting', 'WebSettingController', ['only' => ['index', 'edit', 'update']]);

    //Change Password
    Route::get('/change-password', 'ProfileController@changePassword')->name('change.password');
    Route::post('/change-password', 'ProfileController@changePasswordUpdate')->name('change.password.update');

    //data from Admin
   //Services
   Route::post('/services/slug', 'ServicesController@getSlug')->name('services.getSlug');
   Route::resource('services', 'ServicesController');
});

Route::get('/orderadmin','OrderAdminController@show'); 


Route::group(['namespace' => 'Web' ], function() {

    // Route::get('run_cmd', function () {
    //     Artisan::call('cache:clear');
    //     Artisan::call('config:cache');
    //     dd("Cache is cleared");
    // });

    //Google index
    // Route::get('/google-index', 'GoogleIndexController@index');


    // PagesController
    Route::get('/',             "PagesController@index")->name('home');
    Route::get('/about',        "PagesController@about")->name('about');
    Route::get('/reviews',      "PagesController@reviews")->name('reviews');
    Route::get('/samples',      "PagesController@sample")->name('sample');
    Route::post('/get-fare',    "PagesController@getFare")->name('get.fare');
    Route::post('/order-query', "PagesController@orderQuery")->name('order.query');
    Route::get('/sitemap',      "PagesController@sitemap")->name('sitemap');
    
    // ContactController
    Route::get('/contact-us',    "ContactController@create")->name('contact');
    Route::post('/contact-us',   "ContactController@store")->name('contact.store');

    // OrdersController
    Route::get('/order',         "OrdersController@create")->name('order');
    Route::post('/order',        "OrdersController@store")->name('order.store');



    // PoliciesController
    Route::get('/revision-policy',                      "PoliciesController@refundPolicy")->name('policy.revision-and-refund');
    Route::get('/terms-and-conditions',                 "PoliciesController@termsAndConditions")->name('policy.terms-and-conditions');
    Route::get('/privacy-policy',                       "PoliciesController@privacyPolicy")->name('policy.privacy-policy');

    
   
    // Route::get('/services', "ServicesController@create")->name('services');


    // BlogController
     Route::get('/blogs',             "BlogController@create")->name('blogs');
     Route::get('/blogs/{slug}',      "BlogController@show")->name('blog.show');

     // ServicesController
     Route::get('/services',             "ServicesController@create")->name('services');
     Route::get('{slug}',      "ServicesController@show")->name('services.show');

});

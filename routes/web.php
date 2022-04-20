<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('product/category', 'ProductController@category')->name('category');
Route::get('product/{id}', 'ProductController@show')->name('product-show');
Route::get('/favorites', 'ProductController@favorites')->name('favorites');
Route::get('/cart', 'CartController@show')->name('cart');
Route::get('/delivery', 'CartController@delivery')->name('delivery');

Route::name('admin.')->prefix('admin')->group(function() {
    Route::get('users', 'AdminController@users')->name('users');
    Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');

    Route::get('subcategories', 'AdminController@subcategories')->name('subcategories');
    Route::post('subcategories/store', 'AdminController@subcategoriesStore')->name('store-subcategories');
    Route::delete('subcategories/destroy/{id}', 'AdminController@subcategoriesDestroy')->name('destroy-subcategories');

    Route::get('promocodes', 'AdminController@promocodes')->name('promocodes');
    Route::post('promocodes/store', 'AdminController@promocodesStore')->name('store-promocodes');
    Route::get('promocodes/edit/{id}', 'AdminController@promocodesEdit')->name('edit-promocodes');
    Route::put('promocodes/update/{id}', 'AdminController@promocodesUpdate')->name('update-promocodes');
    Route::delete('promocodes/destroy/{id}', 'AdminController@promocodesDestroy')->name('destroy-promocodes');
});

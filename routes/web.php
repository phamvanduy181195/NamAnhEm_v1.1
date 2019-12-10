<?php

Route::get('/', function () {
    return view('admin.index');
});
//language
Route::get('language/{language}', 'LanguageController@changeLanguage')->name('language');

//admin
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin::'], function () {
    Route::get('category/get-item', 'CategoryController@getItemCategoryByType');
    Route::post('category/update-category', 'CategoryController@updateCategory')->name('category.update-category');
    Route::resource('category', 'CategoryController');
});

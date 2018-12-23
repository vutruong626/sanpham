<?php  
// Route::get('/test', function () {
//     echo 'test';
// });
/*
|--------------------------------------------------------------------------
| Web LayoutAdminController
|--------------------------------------------------------------------------
|
|
*/
Route::get('/','Admin\\LayoutAdminController@index')->name('dashboard');
/*
|--------------------------------------------------------------------------
| Web UserAdminController
|--------------------------------------------------------------------------
|
|
*/

Route::prefix('user')->group(function () {
    Route::get('/','Admin\\UserAdminController@getUser')->name('user_admin');
    Route::get('/create-user','Admin\\UserAdminController@createUser')->name('create_user');
    Route::post('/create-user','Admin\\UserAdminController@postUser');
    // edit
    Route::get('/edit-user/{id}','Admin\\UserAdminController@geteditUser')->name('edit_user');
    Route::post('/edit-user/{id}','Admin\\UserAdminController@posteditUser');
    Route::post('/update-user/{id}','Admin\\UserAdminController@postupdatUser');

    Route::get('/delete-user/{id}','Admin\\UserAdminController@getedeleteUser')->name('delete_user');
	 
});
/*
|--------------------------------------------------------------------------
| Web UserAdminController
|--------------------------------------------------------------------------
|
|
*/
Route::prefix('banner')->group(function () {
    Route::get('/','Admin\\BannerController@getBanner')->name('banner_admin');
    Route::get('/create-images','Admin\\BannerController@createimages')->name('create_images');
    Route::post('/create-images','Admin\\BannerController@postcreateimages');
    //edit
    Route::get('/edit-images/{id}','Admin\\BannerController@editimages')->name('edit_images');
    Route::post('/edit-images/{id}','Admin\\BannerController@posteditimages');
    // delete
    Route::get('/delete-images/{id}','Admin\\BannerController@deleteimages')->name('delete_images');
});


Route::prefix('contact')->group(function () {
    Route::get('/','Admin\\ContactController@index')->name('list_contact');
    Route::get('/create-contact','Admin\\ContactController@createContact')->name('create_contact');
    Route::post('/create-contact','Admin\\ContactController@postcontact');
    //edit
    Route::get('/edit-contact/{id}','Admin\\ContactController@editContact')->name('edit_contact');
    Route::post('/edit-contact/{id}','Admin\\ContactController@posteditcontact');
    //delete
    Route::get('/delete-contact/{id}','Admin\\ContactController@deleteContact')->name('delete_contact');
});
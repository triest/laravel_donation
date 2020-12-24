<?php

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

/* Home & Dashboard */

use App\Http\Controllers\LkController;

{
    Route::get('/', ['uses' => 'HomeController@getHome', 'as' => 'home']);
}


/* Auth */
/*{
    Route::get('/auth', ['uses' => 'Auth\AuthController@getLogin', 'as' => 'login']);
    Route::get('/auth/check', ['uses' => 'Auth\AuthController@getCheck', 'as' => 'auth.check']);
    Route::get('/auth/success', ['uses' => 'Auth\AuthController@getSuccess', 'as' => 'auth.success']);
    Route::get('/auth/logout', ['uses' => 'Auth\AuthController@getLogout', 'as' => 'auth.logout']);

    Route::get('/auth/{slug}', ['uses' => 'Auth\AuthController@getRedirect', 'as' => 'auth.redirect'])->where(['slug' => '[A-Za-z]+']);
    Route::any('/auth/{slug}/callback', ['uses' => 'Auth\AuthController@getCallback', 'as' => 'auth.service.callback'])->where(['slug' => '[A-Za-z]+']);
}
*/
/* Settings */

// Account Settings

Route::prefix('anket')->name('anket.')->group(
    function () {
        Route::get('/settings/account', ['uses' => 'SettingsController@getAccount', 'as' => 'settings.account']);
        Route::post('/settings/account', ['uses' => 'SettingsController@postAccount', 'as' => 'settings.account.save']);
        // Donation Settings
        Route::get('/settings/donation', ['uses' => 'SettingsController@getDonation', 'as' => 'settings.donation']);
        Route::post('/settings/donation', ['uses' => 'SettingsController@postDonation', 'as' => 'settings.donation.save']);
    });

Route::prefix('lk')->name('lk.')->group(
    function () {
        Route::get('/', ['uses' => 'LkController@index', 'as' => 'index']);
    }
);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


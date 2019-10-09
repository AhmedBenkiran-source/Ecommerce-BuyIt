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

Auth::routes();
Route::get('/', 'customer\HomeController@index')->name('home');

Route::prefix('/')->group(function(){
    Route::get('home', 'customer\HomeController@index')->name('home');
    Route::resource('PosterCategory', 'customer\CategoryController');
    Route::resource('All', 'customer\AllController');
    Route::resource('PosterProduct', 'customer\ProductController');
    Route::resource('Contact', 'customer\ContactController');
    Route::resource('Wishlist', 'customer\WishlistController');
    Route::resource('Account', 'customer\AccountController');
    Route::resource('Carts', 'customer\PanieController');
    Route::resource('Orders', 'customer\OrderController');
    Route::resource('AllOrders', 'customer\AllOrderController');

});
Route::post('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');


Route::get('auth/{provider}', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\RegisterController@handleProviderCallback');

Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');

Route::prefix('admin')->group(function() {
    Route::get('/login', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'AuthAdmin\LoginController@login')->name('admin.login.submit');
    Route::post('/logout', 'AuthAdmin\LoginController@logout')->name('admin.logout');
    Route::get('/password/reset', 'AuthAdmin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/email', 'AuthAdmin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset/{token}', 'AuthAdmin\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('/password/reset', 'AuthAdmin\ResetPasswordController@reset');
});

Route::prefix('admin')->group(function() {
    Route::get('/home', 'admin\HomeController@index')->name('admin.home');;

});
Route::prefix('system-management')->group(function() {
    Route::resource('/product', 'admin\ProductController');
    Route::resource('/brand', 'admin\BrandController');
    Route::resource('/category', 'admin\CategoryController');
    Route::resource('/provider', 'admin\ProviderController');
    Route::resource('/country', 'admin\CountryController');
    Route::resource('/city', 'admin\CityController');
    Route::resource('/mailbox', 'admin\MailController');
    Route::resource('/order', 'admin\OrderController');
    Route::resource('/bills', 'admin\BillsController');

    Route::get('/Impression', 'admin\ImpressionController@index');
    Route::get('/impression/excel', 'admin\ImpressionController@exportExcelProduct')->name('report.excel');
    Route::get('/impression/pdf', 'admin\ImpressionController@exportPDFProduct')->name('report.pdf');
    Route::get('/impression/admin/excel', 'admin\AdminImpController@exportExcelProduct')->name('report.excel');
    Route::get('/impression/admin/pdf', 'admin\AdminImpController@exportPDFProduct')->name('report.pdf');
    Route::get('/impression/customer/excel', 'admin\CustomerImpController@exportExcelProduct')->name('report.excel');
    Route::get('/impression/customer/pdf', 'admin\CustomerImpController@exportPDFProduct')->name('report.pdf');
    Route::get('/impression/bills/excel', 'admin\BillsImpController@exportExcelBills')->name('report.excel');
    Route::resource('/impression', 'admin\BillsImpController');


    
});
Route::prefix('user-management')->group(function() {
    Route::resource('/admin', 'admin\AdminController');
    Route::resource('/customer', 'admin\CustomerController');
});

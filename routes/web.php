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

//users routes
	//index routes
Route::get('/','User\HomeController@index')->name('home');
Route::get('contact-us','User\HomeController@contact')->name('user.contact');
Route::get('about-us','User\HomeController@about')->name('user.about');
Route::get('terms-and-conditions','User\HomeController@termsofUse')->name('user.termsofUse');
Route::get('Privacy','User\HomeController@privacy')->name('user.privacy');
Route::get('Personal-Safety','User\HomeController@personalsafety')->name('user.personalsafety');
Route::get('Disclaimer','User\HomeController@disclaimer')->name('user.disclaimer');

	//search routes
Route::get('/search','User\SearchController@search')->name('user.search');

	//review routes
Route::post('review','User\ServiceController@serviceeview')->name('user.review.submit');

	//authentication routes
Route::post('/user/registration','User\RegisterController@registerUser')->name('user.submit');
Route::post('/login','User\LoginController@login')->name('user.login.submit');
Route::post('/logout','User\LoginController@logout')->name('user.logout');
//Route::get('/login','User\LoginController@registerUser')->name('user.login');

//User blog routes
Route::get('blog','User\UserBlogPostsController@getAllPosts')->name('user.blog.posts');
Route::get('blog/{slug}','User\UserBlogPostsController@showPost')->name('user.show.posts');
Route::post('comment','User\UserBlogPostsController@postComment')->name('user.comment.submit');

//service routes
Route::get('/user/select-package','User\UserCreateServiceController@showSelectPackage')->name('user.select.package');
Route::post('/user/select-package','User\UserCreateServiceController@addPackage')->name('user.select.package.submit');
Route::get('/user/add-new-service','User\UserCreateServiceController@showNewServiceForm')->name('user.create.service');
Route::post('/user/submit-new-service','User\UserCreateServiceController@createService')->name('user.create.service.submit');
Route::get('/user/add-payment','User\UserCreateServiceController@showPaymentForm')->name('user.payment.form');
Route::post('/user/add-payment','User\UserCreateServiceController@addPayment')->name('user.payment.submit');
Route::get('/user/{id}/edit-service','User\UserCreateServiceController@editServiceForm')->name('user.edit.service');
Route::get('/user/{id}/delete-service','User\UserCreateServiceController@deleteService')->name('user.delete.service');
Route::get('/services','User\ServiceController@getAll')->name('services.all');
Route::get('/services/{category}','User\ServiceController@getCategory')->name('services.category');

//user account
Route::get('/user','User\UserProfileController@showUserProfile')->name('user.profile');
Route::post('/user_data','User\UserProfileController@addUserProfileData')->name('user.profile_data');
Route::post('/user/edit','User\UserProfileController@userEditSubmit')->name('user.edit.submit');
Route::post('/user/update','User\UserProfileController@userUpdatePassword')->name('user.update.submit');


//newsletter routes
Route::post('/subscribe-to-newsletter','User\NewsletterSubscriptionController@subscribe')->name('subscribe.to.newsletter');


//Socialite logins
Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');




/*
* Begining of Admin routes
*/
	//login routes
Route::get('/admin', 'Admin\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin','Admin\AdminLoginController@login')->name('admin.login.submit');
Route::post('/admin/logout','Admin\AdminLoginController@logout')->name('admin.logout');

	//dashboard routes
Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin/dashboard', 'Admin\AdminDashboard@index')->name('admin.dashboard');
    Route::get('/admin/users', 'Admin\AdminUsersController@getAllUsers')->name('admin.user.list');
    Route::get('/admin/users/{id}', 'Admin\AdminUsersController@showUser')->name('admin.user');
    Route::get('/admin/users/{id}/edit', 'Admin\AdminUsersController@editUser')->name('admin.user.edit.form');
    Route::post('/admin/users/save', 'Admin\AdminUsersController@save')->name('admin.user.edit.submit');
    Route::get('/admin/users/{id}/delete', 'Admin\AdminUsersController@delete')->name('admin.user.delete');
    Route::post('/admin/users/delete', 'Admin\AdminUsersController@destroy')->name('admin.user.destroy');
});




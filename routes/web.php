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
Route::post('review','User\ReviewsController@serviceReview')->name('user.review.submit');

	//authentication routes
Route::post('/user/registration','User\RegisterController@registerUser')->name('user.submit');
Route::post('/login','User\LoginController@login')->name('user.login.submit');
Route::post('/logout','User\LoginController@logout')->name('user.logout');
Route::get('/register','User\RegisterController@userRegister')->name('user.register');
Route::get('/login','User\LoginController@userLogin')->name('user.login');

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
Route::get('/services/{id}/category','User\ServiceController@getCategory')->name('services.category');
Route::get('/services/{id}/details','User\AdsController@adsDetails')->name('services.details');

//user account
Route::get('/user','User\UserProfileController@showUserProfile')->name('user.profile');
Route::get('/user/package','User\UserPackageController@getPackages')->name('user.package');
Route::get('/user/{userId}/myads','User\AdsController@myAds')->name('user.myads');
Route::get('/user/{userId}/favourites','User\FavouritesController@myFavourites')->name('user.favourites');
Route::get('/user/{userId}/mysearch','User\UserProfileController@mySearch')->name('user.search');
Route::get('/user/{userId}/archived','User\UserProfileController@showArchived')->name('user.archived');
Route::get('/user/{userId}/pending','User\UserProfileController@pendingAds')->name('user.pending');
Route::post('/user_data','User\UserProfileController@addUserProfileData')->name('user.profile_data');
Route::post('/user/edit','User\UserProfileController@userEditSubmit')->name('user.edit.submit');
Route::post('/user/update','User\UserProfileController@userUpdatePassword')->name('user.update.submit');
Route::get('/user/company','User\CompanyController@newCompany')->name('company.create');
Route::post('/user/company','User\CompanyController@postCompany')->name('company.submit');


//newsletter routes
Route::post('/subscribe-to-newsletter','User\NewsletterController@subscribe')->name('subscribe.to.newsletter');


//Socialite logins
Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

//ajax routes
Route::get('/ajax-subcat',function(){

 $cat_id = Input::get('cat_id');

 $subcategories = App\SubCategory::where('category_id','=',$cat_id)->get();

 return Response::json($subcategories);
 //echo json_encode($subcategories);

});





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

    //servises routes
    Route::get('/admin/services', 'Admin\AdminServicesController@showAll')->name('admin.all.services');
    Route::get('/admin/suspended/services', 'Admin\AdminServicesController@suspended')->name('admin.suspended.services');
    Route::get('/admin/pending/services', 'Admin\AdminServicesController@pending')->name('admin.pending.services');
    Route::get('/admin/{id}/approve', 'Admin\AdminServicesController@approve')->name('admin.approve.services');
    Route::get('/admin/service/{id}','Admin\AdminServicesController@getService')->name('admin.service.show');
    Route::get('/admin/service/{id}/delete','Admin\AdminServicesController@delete')->name('admin.service.delete');

    //types routes
    Route::get('/admin/types', 'Admin\AdminTypesController@showAll')->name('admin.all.types');
    Route::get('/admin/type/new', 'Admin\AdminTypesController@typeForm')->name('admin.new.type');
    Route::post('/admin/type', 'Admin\AdminTypesController@submitType')->name('admin.new.type.submit');

    //Admin news letter routes
    Route::get('/admin/news-letters','Admin\AdminNewsLetterController@createNewsLetter')->name('admin.create.news.letter.form');
    Route::post('/admin/news-letters','Admin\AdminNewsLetterController@saveNewsLetter')->name('admin.create.news.letter.submit');
    Route::get('/admin/subscribers','Admin\AdminNewsLetterSubscribersController@getSubscribers')->name('admin.subscribers.listings');

    //Categories routes
    Route::get('/admin/all-categories', 'Admin\AdminCategoriesController@showAll')->name('admin.all.categories');
    Route::get('/admin/categories', 'Admin\AdminCategoriesController@categoriesForm')->name('admin.new.category');
    Route::post('/admin/categories', 'Admin\AdminCategoriesController@submitCategory')->name('admin.new.category.submit');

    //Sub-Categories routes
    Route::get('/admin/all-Sub-categories', 'Admin\AdminSubCategoriesController@showAll')->name('admin.all.subcategories');
    Route::get('/admin/sub-categories', 'Admin\AdminSubCategoriesController@subcategoriesForm')->name('admin.new.subcategory');
    Route::post('/admin/sub-categories', 'Admin\AdminSubCategoriesController@submitCategory')->name('admin.new.subcategory.submit');

    //Suspend property
    Route::get('/admin/suspend-service','Admin\AdminSuspendServicesController@suspendService')->name('suspend.service');
    Route::get('/admin/get-suspended-services','Admin\AdminSuspendServicesController@getSuspendedServices')->name('suspended.services');
    Route::get('/admin/{id}/reactivate','Admin\AdminSuspendServicesController@reactivateService')->name('reactivate.services');

    //Recommend property
    Route::get('/admin/recommend-service','Admin\AdminRecommendServicesController@recommendService')->name('recommend.service');
    Route::get('/admin/get-recommended-services','Admin\AdminRecommendServicesController@getRecommended')->name('recommended.services');

    //Suspend agent
    Route::get('/suspend-user','Admin\AdminSuspendUsersController@suspendUser')->name('suspend.user');
    Route::get('/get-suspended-users','Admin\AdminSuspendUsersController@getSuspendedUsers')->name('suspended.users');

    //package routes
    Route::get('/admin/package','Admin\AdminPackageController@getPackages')->name('admin.package');



});

<?php

use App\Http\Controllers\FacebookController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\SocialLoginController;
use App\Http\Controllers\SocialProviderController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;


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

Route::get('/privacy', 'App\Http\Controllers\FrontendController@privacy')->name('privacy');
Route::get('auth/{driver}', [SocialProviderController::class, 'redirectToProvider'])->name('login.social');
Route::get('auth/{driver}/callback', [SocialProviderController::class, 'handleProviderCallback']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/promo/selector/{id}', 'App\Http\Controllers\HomeController@promo_selector')->name('productsPerPromo');


Route::get('/cms', [App\Http\Controllers\LoginController::class, 'index'])->name('loginpage');
Route::get('/shop', 'App\Http\Controllers\FrontendController@index')->name('shop');
Route::get('/products/brand/{id}', 'App\Http\Controllers\FrontendController@productsPerBrand')->name('products-Per-Brand');
Route::get('/products/category/{id}', 'App\Http\Controllers\FrontendController@productsPerCategory')->name('products-Per-Category');
Route::post('/updataPrice', 'App\Http\Controllers\FrontendController@updatePrice');


Route::post('/contact', 'App\Http\Controllers\ContactController@store')->name('contact');
Route::post('/email', 'App\Http\Controllers\EmailsController@store')->name('email');


Route::get('/addToCart/{id}','App\Http\Controllers\FrontendController@addToCart')->name('addToCart');


Route::get('/checkout/', 'App\Http\Controllers\FrontendController@cart')->name('checkout');
Route::post('/checkout','App\Http\Controllers\FrontendController@updateQuantity')->name('quantity');
Route::get('/removeItem/{id}','App\Http\Controllers\FrontendController@removeItem')->name('removeItem');

Route::get('/addToList/{id}','App\Http\Controllers\FrontendController@addToList')->name('addToList');
Route::get('/wishlist/', 'App\Http\Controllers\FrontendController@list')->name('wishlist');
Route::get('/removeItemList/{id}','App\Http\Controllers\FrontendController@removeItemList')->name('removeItemList');



Route::get('/productPage/{id}', 'App\Http\Controllers\FrontendController@productpage')->name('productpage');
Route::get('/about', 'App\Http\Controllers\FrontendController@index_about')->name('over');
Route::get('/contact', 'App\Http\Controllers\FrontendController@index_contact')->name('contact');
Route::get('/blog', 'App\Http\Controllers\FrontendController@index_blog')->name('nieuws');
Route::get('/post/{slug}', 'App\Http\Controllers\FrontendController@index_post')->name('post');

// Facebook login
Route::get('login/facebook', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleFacebookCallback']);





Auth::routes(['verify'=> true]);

// Backend Admin
Route::group(['prefix'=>'admin', 'middleware'=>[ 'auth', 'verified']], function(){
    Route::resource('users', App\Http\Controllers\AdminUsersController::class);
    Route::get('restore/{user}', 'App\Http\Controllers\AdminUsersController@userRestore')->name('admin.userRestore');
    Route::resource('roles', App\Http\Controllers\AdminRolesController::class);
    Route::get('restore/role/{role}', 'App\Http\Controllers\AdminRolesController@roleRestore')->name('admin.roleRestore');
    Route::resource('products', App\Http\Controllers\AdminProductsController::class);
    Route::get('admin/products/brand/{id}', 'App\Http\Controllers\AdminProductsController@productsPerBrand')->name('admin.productsPerBrand');
    Route::get('admin/products/productcategory/{id}', 'App\Http\Controllers\AdminProductsController@productsPerCategory')->name('admin.productsPerCategory');
    Route::get('restore/product/{product}', 'App\Http\Controllers\AdminProductsController@productRestore')->name('admin.productRestore');
    Route::resource('brands', App\Http\Controllers\AdminBrandsController::class);
    Route::get('restore/brand/{brand}', 'App\Http\Controllers\AdminBrandsController@brandRestore')->name('admin.brandRestore');
    Route::resource('productcategories', App\Http\Controllers\AdminProductCategory::class);
    Route::get('restore/productcategory/{productcategory}', 'App\Http\Controllers\AdminProductCategory@productcategoryRestore')->name('admin.productcategoryRestore');
    Route::resource('productsubcategories', App\Http\Controllers\AdminProductSubcategory::class);
    Route::get('restore/productsubcategory/{productsubcategory}', 'App\Http\Controllers\AdminProductSubcategory@productsubcategoryRestore')->name('admin.productsubcategoryRestore');
    Route::resource('orderdetails', App\Http\Controllers\AdminOrderdetailsController::class);
    Route::get('restore/orderdetail/{orderdetail}', 'App\Http\Controllers\AdminOrderdetailsController@orderdetailsRestore')->name('admin.orderdetailsRestore');
    Route::resource('addresses', App\Http\Controllers\AdminAddressesController::class);
    Route::get('restore/address/{address}', 'App\Http\Controllers\AdminAddressesController@addressRestore')->name('admin.addressRestore');

    Route::get('/product/colors', 'App\Http\Controllers\AdminProductColorsController@index')->name('admin.product.colors');
    Route::resource('/promos', App\Http\Controllers\AdminPromosController::class);
    Route::get('/newsletters/restore/{id}', 'App\Http\Controllers\AdminNewslettersController@newsletterRestore')->name('admin.newsletterRestore');
});

Route::resource('/admin/readers', App\Http\Controllers\AdminReadersController::class);
Route::post('admin/newsletter', 'App\Http\Controllers\AdminReadersController@store');


// Backend Customer
Route::group(['prefix'=>'admin', 'middleware'=>['auth', 'verified']], function(){
    Route::post('/newsletter/send', 'App\Http\Controllers\AdminNewslettersController@newsletter_send_email')->name('newsletter_send_email');
    Route::resource('/newsletters', App\Http\Controllers\AdminNewslettersController::class);
    Route::resource('/faqs', App\Http\Controllers\AdminFAQSController::class);
    Route::get('faqs/restore/{id}', 'App\Http\Controllers\AdminFAQSController@FAQRestore')->name('admin.FAQRestore');
    Route::resource('/prospects', App\Http\Controllers\AdminProspectsController::class);
    Route::get('/', [App\Http\Controllers\AdminHomeController::class, 'index'])->name('admin.home');
    Route::resource('orders', App\Http\Controllers\AdminOrdersController::class);



    Route::resource('posts', App\Http\Controllers\AdminPostsController::class);
    Route::post('post/date', 'App\Http\Controllers\AdminPostsController@datePost')->name('admin.datePost');
    Route::post('post/publish', 'App\Http\Controllers\AdminPostsController@publishPost')->name('admin.publishPost');
    Route::post('post/delete', 'App\Http\Controllers\AdminPostsController@deleteBooking');
    Route::get('/post/{id}', 'App\Http\Controllers\AdminPostsController@post')->name('Post');
    Route::get('restore/prospect/{id}', 'App\Http\Controllers\AdminProspectsController@prospectRestore')->name('admin.prospectRestore');
    Route::get('restore/reader/{id}', 'App\Http\Controllers\AdminReadersController@readerRestore')->name('admin.readerRestore');

    Route::get('restore/post/{id}', 'App\Http\Controllers\AdminPostsController@postsRestore')->name('admin.postsRestore');
    Route::get('restore/postcateogry/{id}', 'App\Http\Controllers\AdminPostCategoriesController@postcategoryRestore')->name('admin.postcategoryRestore');

    Route::resource('postcategories', App\Http\Controllers\AdminPostCategoriesController::class);
    Route::get('restore/order/{order}', 'App\Http\Controllers\AdminOrdersController@ordersRestore')->name('admin.ordersRestore');
    Route::resource('/reviews', App\Http\Controllers\AdminReviewsController::class);
    Route::get('restore/review/{review}', 'App\Http\Controllers\AdminReviewsController@reviewRestore')->name('admin.reviewRestore');
    Route::resource('/reviewreplies', App\Http\Controllers\AdminReviewRepliesController::class);
    Route::get('restore/reviewreply/{reviewreply}', 'App\Http\Controllers\AdminReviewRepliesController@reviewreplyRestore')->name('admin.reviewreplyRestore');


    Route::get('/export/readers', [App\Http\Controllers\AdminReadersController::class, 'export'])->name('readers.export');
    Route::get('/export/prospects', [App\Http\Controllers\AdminProspectsController::class, 'export'])->name('prospects.export');
    Route::post('search', 'App\Http\Controllers\AdminUsersController@search_item');
});


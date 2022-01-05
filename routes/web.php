<?php
 
use Illuminate\Support\Facades\Route;
 
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
// Client Pages
 Route::get('/','IndexController@view')->name('welcome');

//about
 Route::get('about','AboutController@aboutshow')->name('about');

//contact
 

//client
Route::get('contact-us','ContactController@queryshow')->name('contat.us');
Route::post('contactview','ContactController@queryyyshow')->name('clientqueryss');


//shop
Route::get('shop','ShopController@proshow')->name('shop');

//singleproduct
Route::get('singlproduct{id}','SingleproductController@singleproduct')->name('singlproduct');

//category
Route::get('category{id}','SingleproductController@showcategory')->name('categoryproduct');

//categoryproduct
Route::get('catproduct{id}','SingleproductController@showw')->name('categoryproducts');

//gallary
Route::get('gallary','GallaryController@glry')->name('gallary');

//live search
Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');




Route::get('cart', 'SingleproductController@cart');

Route::get('add-to-cart/{id}', 'SingleproductController@addToCart');

Route::patch('update-cart', 'SingleproductController@update');

Route::delete('remove-from-cart', 'SingleproductController@remove');















 
// End Client
Route::get('/home', 'HomeController@index')->name('home');




// Admin Module Start
Route::group(['middleware'=>'auth'],function (){ 
    
//aboutstart
     // show about
Route::get('viewabout','AdminaboutController@abouts')->name('admin.about'); 
     // edit about
Route::get('edit/about{id}','AdminaboutController@edit_abouts')->name('edit.about');
Route::post('update/about','AdminaboutController@update_abouts')->name('update.about');
//aboutover
 


// categorystart
     // showcategory
Route::get('viewcategory','AdmincategoryController@show')->name('admin.category'); 
      // addcategory
Route::get('insertcategory','AdmincategoryController@insertts')->name('add.category'); 
     // storecategory
Route::post('storecategory','AdmincategoryController@storecategory')->name('store.category'); 
     // editcategory
Route::get('edit/category{id}','AdmincategoryController@editcategory')->name('edit.category');
Route::post('update/category','AdmincategoryController@updatecategory')->name('update.category');
Route::get('delete/category/{id}','AdmincategoryController@delete_category')->name('delete.category');
// categoryover

// productstart
Route::get('viewproduct', 'AdminproductController@show')->name('admin.product');
Route::get('insertproduct','AdminproductController@insertproduct')->name('addproduct'); 
Route::post('storeproduct','AdminproductController@storeproduct')->name('store.product'); 

Route::get('edit/product{id}','AdminproductController@editproducts')->name('edit.product');
Route::post('update/product','AdminproductController@updateproduct')->name('update.product');
Route::get('delete/product{id}','AdminproductController@delete_product')->name('delete.product');
//product over
   
// logo start
Route::get('viewlogo','AdminlogoController@showlogo')->name('admin.logo');
Route::post('storelogo','AdminlogoController@storelogo')->name('store.logo'); 
Route::get('edit/logo{id}','AdminlogoController@editlogo')->name('edit.logo');
Route::post('update','AdminlogoController@updatelogo')->name('update.logo');
// logo over 

//socialmedia
Route::get('viewsocialmedia','SocialmediaController@showsocialmedia')->name('admin.socialmedia');
Route::post('storesocialmedia','SocialmediaController@storesocialmedia')->name('store.socialmedia'); 
Route::get('edit/socialmedia/{id}','SocialmediaController@editsocialmedia')->name('edit.socialmedia');
Route::post('update/socialmedia','SocialmediaController@updatesocialmedia')->name('update.socialmedia');
//socialmediaover
 
 //map
Route::get('viewmap','AdminmapController@showmap')->name('admin.map');
Route::get('edit/map/{id}','AdminmapController@editmap')->name('edit.map');
Route::post('update/map','AdminmapController@updatemap')->name('update.map');
//mapover

//slider
Route::get('viewslider','AdminsliderController@showslider')->name('admin.slider');
Route::get('insertslider','AdminsliderController@addslider')->name('add.slider'); 
Route::post('storeslider','AdminsliderController@storeslider')->name('store.slider'); 
Route::get('edit/slider/{id}','AdminsliderController@editslider')->name('edit.slider');
Route::post('update/slider','AdminsliderController@updateslider')->name('update.slider');
Route::get('delete/slider{id}','AdminsliderController@deleteslider')->name('delete.slider');
//sliderover


//contact
Route::get('viewcontact','AdmincontactController@showcontact')->name('admin.contact');
Route::get('edit/contact/{id}','AdmincontactController@editcontact')->name('edit.contact');
Route::post('update/contact','AdmincontactController@updatecontact')->name('update.contact');
// contactover


//passwordchng
Route::get('viewpassword','AdminpasswordController@change_password')->name('admin.password');
Route::post('update/adminpassword','AdminpasswordController@update_password')->name('update.password');
//passwordchngover


// ourteamstart
Route::get('viewteam', 'AdminTeamController@admin_team')->name('admin.team');
Route::get('insertteam','AdminTeamController@add_team')->name('admin.add.member'); 
Route::post('storeteam','AdminTeamController@store_member')->name('store.member'); 
Route::get('edit/team{id}','AdminTeamController@edit_member')->name('edit.member');
Route::post('update/team','AdminTeamController@update_teams')->name('update.teams');
Route::get('delete/team{id}','AdminTeamController@delete_member')->name('delete.member');
//ourteam over

//showtestimonial
Route::get('viewtestimonial', 'TestimonialController@testimonial')->name('testimonial');
Route::get('edit/test{id}','TestimonialController@edit_testimonial')->name('edit.testimonial');
Route::post('update/test','TestimonialController@update_test')->name('update.testimonial');

//querytable
Route::get('querytable','QueryController@query')->name('querytable');

//gallary
Route::get('viewgallary', 'AdminGalleryController@showgallary')->name('admin.gallary');
Route::get('insertgallary','AdminGalleryController@insertgallary')->name('addgallary'); 
Route::post('storegallary','AdminGalleryController@storegallary')->name('store.gallary'); 

Route::get('edit/gallary{id}','AdminGalleryController@editgallary')->name('edit.gallary');
Route::post('update/gallary','AdminGalleryController@updategallary')->name('update.gallary');
Route::get('delete/gallary{id}','AdminGalleryController@delete_gallary')->name('delete.gallary');
//gallaryover


// logout
 Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
});

// Admin module End
Auth::routes();



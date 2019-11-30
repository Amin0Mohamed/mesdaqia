<?php

use App\notifications;
use Illuminate\Support\Facades\Route;

if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
    // Ignores notices and reports all other kinds... and warnings
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    // error_reporting(E_ALL ^ E_WARNING); // Maybe this is enough
}
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
Route::get('/sendemail/{id}',"EmailController@ship");
Route::get('/time',function (){
   return view('filterView');
});
Route::post('/chatting',"LiveController@chatting");
Route::get('/cartime',"catogorytimeController@Carstime");
Route::get('/jewtime',"catogorytimeController@Jewstime");
Route::get('/victime',"catogorytimeController@Vichstime");
Route::get('/protime',"catogorytimeController@Protime");
Route::get('/hightime',"catogorytimeController@hightime");

Route::post('/putmessage',"StoreMessController@storemessage");
Route::post('/putsupport',"StoreSuppController@storesupport");
Route::get('/livestream',"LiveController@Live")->name('stream');
//////////// Payment ///////////////////////////
Route::get('/continue_pay/{id}/{ownerID}/{price}/{category}','Paymentcontroller@data_customer');
Route::post('/savedatacustomer','Paymentcontroller@savecustomer');
Route::post('/pay','Paymentcontroller@savedataAndgetRes');

Route::get('/buyer_car/{id}','Paymentcontroller@AceeptaceBuyerReciveCars');
Route::get('/buyer_jew/{id}','Paymentcontroller@AceeptaceBuyerReciveJews');
Route::get('/buyer_vich/{id}','Paymentcontroller@AceeptaceBuyerReciveVichs');
Route::get('/buyer_pro/{id}','Paymentcontroller@AceeptaceBuyerReciveProps');
Route::get('/buyer_high/{id}','Paymentcontroller@AceeptaceBuyerReciveHigh');

Route::get('/seller_car/{id}','Paymentcontroller@AceeptaceSellerReciveCars');
Route::get('/seller_jew/{id}','Paymentcontroller@AceeptaceSellerReciveJews');
Route::get('/seller_vich/{id}','Paymentcontroller@AceeptaceSellerReciveVichs');
Route::get('/seller_pro/{id}','Paymentcontroller@AceeptaceSellerReciveProps');
Route::get('/seller_high/{id}','Paymentcontroller@AceeptaceSellerReciveHigh');
// return complaint view
Route::get('/retrive_car/{id}','Paymentcontroller@RtriveCars');
Route::get('/retrive_jew/{id}','Paymentcontroller@RtriveJews');
Route::get('/retrive_vich/{id}','Paymentcontroller@RtriveVichs');
Route::get('/retrive_pro/{id}','Paymentcontroller@RtriveProps');
Route::get('/retrive_high/{id}','Paymentcontroller@RtriveHigh');
// save complain tn tables
Route::post('/save_retrive_car','Paymentcontroller@save_comlaint_inWaitcar');
Route::post('/save_retrive_jew','Paymentcontroller@save_comlaint_inWaitjew');
Route::post('/save_retrive_vich','Paymentcontroller@save_comlaint_inWaitvichle');
Route::post('/save_retrive_prop','Paymentcontroller@save_comlaint_inWaitprop');
Route::post('/save_retrive_high','Paymentcontroller@save_comlaint_inWaitHighvlaue');

         ///////////////Sunshine//////////////////////
Route::get('/sunshine_continue_pay/{ownerID}/{price}/{category}','Paymentcontroller@sunshine_data_customer');
Route::post('/sunshine_savedatacustomer','Paymentcontroller@sunshine_savecustomer');
Route::post('/sunshine_pay','Paymentcontroller@sunshine_savedataAndgetRes');
Route::get('/cansel/{id}',"productController@Cansel");
Route::get('/enter_subscribe','productController@saverenewal');
//////////// register and login///////////////////////////
Route::post('/registerdata',"registercontroller@store");
Route::get('/logindata',"logincontroller@login"); //9**********amin
Route::post('/logindata',"logincontroller@login");//************amin
Route::post('/editdatauser',"logincontroller@editacount");
////////////////////////// API //////////////////////////////
Route::get('gethighvalueapi','GetHighvalueApi@listhighvalue');
Route::get('getjeweleryapi','GetjewelryApi@listjewelery');
Route::get('getcarapi','GetCarApi@listCars');
Route::get('getpropertyapi','GetpropertiesApi@listproperty');
Route::get('getvichleapi','GetvichlesApi@listvichle');
/////////////// Menu bar views /////////////////////////////////////
Route::get('/mesdakia', function () {return view('MenubarViews.mesdakia');});
Route::get('/mesdakia2/{id}', function ($id) {
    Session::flush($id);
    return redirect('/mesdakia');
})->name('mesdakiaroute');
Route::get('/sales',"Sales@fawrysales");//   المزادات الفورية
Route::get('/homemesdakia',"HomemesdakiaController@homeMed");
Route::get('/mazadat','mazadatController@ListMazadat');
////////////// category details/////////////////
Route::get('/cardetail',function (){return view('Basic_pages.carproductdetails');})->name('cardetail');
Route::get('/jewlerydetail',function (){return view('Basic_pages.jewelryproductdetails');})->name('jewlerydetail');
Route::get('/propertydetail',function (){return view('Basic_pages.propertyproductdetails');})->name('propertydetail');
Route::get('/vichledetail',function (){return view('Basic_pages.vichleproductdetails');})->name('vichledetail');
Route::get('/highvaluedetail',function (){return view('Basic_pages.highvalueproductdetails');})->name('highvaluedetail');


Route::get('/product_car/{id}', "ProductData@carsproduct")->name('Productt_car');
Route::get('/product_property/{id}',"ProductData@propertyproduct" )->name('Productt_property');
Route::get('/highvalue/{id}', "ProductData@highvalueproduct")->name('Productt_highvalue');
Route::get('/product_jewelry/{id}', "ProductData@jewelryproduct")->name('Productt_jewelry');
Route::get('/product_vichle/{id}', "ProductData@vichleproduct")->name('Productt_vichle');
///////////////////////////////////////////////////////////////////////////

/// ##########################user profile ################## //////////
Route::get('/enter_profile', function () {
    return view('pages_profile_list.enter');
})->name('profile');

Route::get('/addtocard/{productid}/{ownerID}/{image}/{type}/{price}','AddToCardController@addcard')->name('addtocard');
Route::get('/addtocard/{id}','AddToCardController@deletecard')->name('addtocard2');
Route::get('/controlmenu','MenuFrontController@controlmenu')->name('controlmenu');
////////////////////Basic pages//////////////////////////
Route::get('/cars',"carsController@ListCars");
Route::get('/jewelry',"jewelryController@ListJewelry");
Route::get('/highvalue',"HighValueController@ListHigh");
Route::get('/property',"propertiesController@ListProperty");
Route::get('/vichle',"vichleController@ListVichle");
/// //////////////////////////// ADD product //////////////////////////////////////
Route::get('/add_product',"productController@SelectProduct")->name('add_product');
Route::post('/add_product',"productController@SelectProduct");

Route::get('/formcars/{id}/{ownerID}','productController@FormCar');
Route::get('/formjewelries/{id}/{ownerID}','productController@FormJewelry');
Route::get('/formproperties/{id}/{ownerID}','productController@FormProperty');
Route::get('/formvichles/{id}/{ownerID}','productController@FormVichle');
Route::get('/formhighvalues/{id}/{ownerID}','productController@Formhighvalue');

Route::post('/addcarsform','productController@addcar');
Route::post('/addjewelriesform','productController@addjewelry');
Route::post('/addpropertiesform','productController@addproperty');
Route::post('/addhighvaluesform','productController@addhighvalue');
Route::post('/addvichlesform','productController@addvichles');

Route::post('/editcarsform','productController@editafterreject_car');
Route::post('/editjewelriesform','productController@editafterreject_jewelry');
Route::post('/editpropertiesform','productController@editafterreject_property');
Route::post('/edithighvaluesform','productController@editafterreject_highvalue');
Route::post('/editvichlesform','productController@editafterreject_vichles');
//////////////////////////////////////////////////////////////////////////////
Route::get('/editPriceCar',"productController@editcar");
Route::get('/editPricejew',"productController@editjew");
Route::get('/editPricepro',"productController@editproper");
Route::get('/editPricevich',"productController@editvich");
Route::get('/editPricehigh',"productController@edithigh");

////////////////////////////////////////////////////////////////////
Route::get('/search_car','SearchController@CarSearch')->name('sca');
Route::get('/search_jewelry','SearchController@JewelrySearch');
Route::get('/search_property','SearchController@PropertySearch');
Route::get('/search_vichle','SearchController@VichleSearch');
Route::get('/search_highvalue','SearchController@HighvalueSearch');



/////////////////////////////////////////////////////////////////
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes(['verify' => true]);
Route::get('profile', function () {
    return '<h1>This is profile page</h1>';
})->middleware('verified');

//***************************** amin ***********************************************//

/****************************************************************
 * **********          المركبات       ***************
 ****************************************************/

Route::get('/ships',function (){return 'سفـن';});           //سفـن
Route::get('/marine_boots',function (){return 'بوتات بحرية';});    //بوتات بحرية
Route::get('/hovercraft',function (){return 'حوامـات';});     //حوامـات
Route::get('/jet_ski',function (){return 'جيـت سكـي';});      //جيـت سكـي
Route::get('/vehicles_new_advertiser',function (){return '/المعلن الجديد';});     //المعلن الجديد
//************** ********************* الشـاحنات *******************************//
Route::get('/small_trucks',function (){return 'شاحنـات صغيرة';});           //شاحنـات صغيرة
Route::get('/large_trucks',function (){return 'شاحنـات كبيرة';});    //شاحنـات كبيرة
Route::get('/trailers',function (){return 'تريـلات';});     //تريـلات
Route::get('/trucks_new_advertiser',function (){return '/المعلن الجديد';});     //المعلن الجديد

//******************************* السيـارات **********************************************//
Route::get('/family_cars',function (){return 'سيـارات عائيليـة';});           //سيـارات عائيليـة
Route::get('/small_cars',function (){return 'سيـارات صغيـرة';});    //سيـارات صغيـرة
Route::get('/buses',function (){return 'حافـلات';});     //حافـلات
Route::get('/cars_new_advertiser',function (){return '/المعلن الجديد';});     //المعلن الجديد
//****************************** الدرجات الناريـة ***************************************//
Route::get('/two_wheeled',function (){return 'ثنائية العجـلات';});           // ثنائية العجـلات
Route::get('/tricycle',function (){return '/ثلاثيـة العجـلات';});    //ثلاثيـة العجـلات
Route::get('/four_wheel',function (){return 'رباعيـة العجـلات';});     //رباعيـة العجـلات
Route::get('/motorcycles_new_advertiser',function (){return '/المعلن الجديد';});     //المعلن الجديد

//****************************** العربات *****************************/
Route::get('/trailers',function (){return 'مقطـورات';});           //مقطـورات
Route::get('/carnivals',function (){return 'كرنفـالات';});    // كرنفـالات
Route::get('/hovercraft',function (){return 'فـود تـرك';});     //فـود تـرك
Route::get('/food_turk',function (){return '/البيـوت المتنقلـة';});      //البيـوت المتنقلـة
Route::get('/wagons_new_advertiser',function (){return '/المعلن الجديد';});     //المعلن الجديد

/****************************************************************
 * **********         العقارات       ***************
 ****************************************************/

//******************************  المباني ***************************************//
Route::get('/villas',function (){ return 'فـلل';});           // فـلل
Route::get('/buildings',function (){return 'مباني';});    //مباني
Route::get('/apartments',function (){return 'شـقق';});     //شـقق
Route::get('/builds_new_advertiser',function (){return '/المعلن الجديد';});     //المعلن الجديد

//****************************** الأراضي *****************************/
Route::get('/schemes',function (){return 'مخططـات';});     //مخططـات
Route::get('/land_plots',function (){return 'قطـع أرضي';});      //قطـع أرضي
Route::get('/lands_new_advertiser',function (){return 'ssdsdsddsdsds';});     //المعلن الجديد

/****************************************************************
 * **********         المجوهرات       ***************
 ****************************************************/
//******************************  الماس ***************************************//
Route::get('/stones',function (){return 'أحجـار';});    //أحجـار
Route::get('/sweets',function (){return 'حُلـي';});     //حُلـي
Route::get('/diamond_new_advertiser',function (){return '/المعلن الجديد';});     //المعلن الجديد

//****************************** الفضـة *****************************/
Route::get('/mills_and_alloys',function (){return 'ُمـلات و سبـائك';});     //ُمـلات و سبـائك
Route::get('/trinkets',function (){return ' حُلـي رجالي';});      //  حُلـي رجالي
Route::get('/Women_jewelery',function (){return '  حُلـي نسـائية';});      //  حُلـي نسـائية
Route::get('/silver_new_advertiser',function (){return '/المعلن الجديد';});     //المعلن الجديد

//****************************** الذهب *****************************/
Route::get('/bullion',function (){return 'السبـائك';});     //السبـائك
Route::get('/currencies',function (){return 'العمـلات';});      //العمـلات
Route::get('/ornaments',function (){return 'الحُلـي';});      //الحُلـي
Route::get('/gold_new_advertiser',function (){return '/المعلن الجديد';});     //المعلن الجديد

//************ أخري ثمينة *************************//
Route::get('/bullion',function (){return 'لوحـات';});     //لوحـات
Route::get('/hours',function (){return 'سـاعـات';});      //سـاعـات
Route::get('/animals',function (){return 'حيـوانـات';});      //حيـوانـات
Route::get('/antiques',function (){return 'تحـف';});      //تحـف
Route::get('/other',function (){return 'أخري';});      //أخري
Route::get('/others_precious',function (){return '/المعلن الجديد';});     //المعلن الجديد

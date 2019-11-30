<?php

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::prefix('dashboard')->name('dashboard.')->group(function () {
            Route::get('/index', "DashboardController@orders")->name('index');
            Route::get('/Accept/{id}/{type}/{vendor}/{color}/{year}/{new}/{price}/{model}/{ownerID}/{Auction_type}/{location}/{Guarant}/{viewers}/{image}/{status}/{producttime}', "AcceptOrderController@Accept_car_order")->name('accept_car');
            Route::get('/Accept_jew/{id}/{type}/{material}/{weight}/{price}/{ownerID}/{new}/{Auction_type}/{Guarant}/{viewers}/{image}/{status}/{producttime}', "AcceptOrderController@Accept_jewelry_order")->name('accept_jewelry');
            Route::get('/Accept_high/{id}/{type}/{price}/{new}/{ownerID}/{Auction_type}/{Guarant}/{viewers}/{image}/{status}/{producttime}', "AcceptOrderController@Accept_highvalue_order")->name('accept_highvalue');
            Route::get('/Accept_vich/{id}/{type}/{year}/{model}/{vendor}/{color}/{new}/{status}/{ownerID}/{price}/{Auction_type}/{location}/{Guarant}/{viewers}/{image}/{producttime}', "AcceptOrderController@Accept_vichle_order")->name('accept_vichle');
            Route::get('/Accept_prop/{id}/{type}/{street}/{city}/{new}/{status}/{ownerID}/{floors}/{price}/{rooms}/{SizeInMeter}/{Auction_type}/{location}/{Guarant}/{viewers}/{image}/{producttime}', "AcceptOrderController@Accept_proparity_order")->name('accept_proparity');

            Route::get('/Dues/{id}/{payid}/{ownerID}/{Accept_seller}/{Accept_buyer}/{price}', "user_paymentController@Dues")->name('Dues');
            Route::get('/fines_AfterResone/{id}/{payid}/{ownerID}/{price}', "user_paymentController@fines_AfterResone")->name('fines_AfterResone');
            Route::get('/NotTakefines/{id}/{payid}/{ownerID}', "user_paymentController@NotTakefines")->name('NotTakefines');

            Route::get('/take_amount',"user_paymentController@sure_fines");
            Route::get('/deletecategory/{id}/{category}',"user_paymentController@deletedata");

            Route::get('/Reject/{id}/{ownerID}/{category}',"AcceptOrderController@Reject_order")->name('reject');
            Route::resource('users', 'UserController');
            Route::resource('cars', 'CarsController');
            Route::resource('jewleries', 'jewleriesController');
            Route::resource('highvalues', 'highvalueController');
            Route::resource('properties', 'propertiesController');
            Route::resource('vichles', 'vichlesController');
            Route::resource('supervisors','supervisorsController');
            Route::resource('Discount_fines_dues', 'Discount_fines_dues');
            Route::resource('messages','messages');
            Route::resource('supports','supports');
            Route::resource('addtextimage','AddImageTextController');
            Route::resource('advertising','advertisController');
            Route::resource('chats','chatsController');
            Route::resource('user_payment','user_paymentController');
            Route::resource('card_payment','card_paymentController');

            Route::post('/loginadmin','Admincontroller@login')->name('loginadmin');
            Route::post('/registeradmin','Admincontroller@register')->name('registeradmin');
            Route::get('/registeradminview','Admincontroller@registerview');
            Route::get('/loginadminview','Admincontroller@loginview');
            Route::get('/logoutpage','Admincontroller@logoutpage');

        });
    });

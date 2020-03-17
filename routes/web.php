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





Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/viewlist', function () {
    return view('viewlist');
});


Route::get('/index',function () {
    return view('index');
});

Route::get('/actions',function () {
    return view('actions');
});

Route::get('/simulations',function () {
    return view('simulations');
});
 
Route::get('/horrors',function () {
    return view('horrors');
});

Route::get('/horrors',function () {
    return view('horrors');
});

Route::get('/survivals',function () {
    return view('survivals');
});

Route::get('/openworlds',function () {
    return view('openworlds');
});

Route::get('/death',function () {
    return view('death');
});

Route::get('/mhw',function () {
    return view('mhw');
});

Route::get('/sekiro',function () {
    return view('sekiro');
});

Route::get('/planet',function () {
    return view('planet');
});

Route::get('/farming',function () {
    return view('farming');
});

Route::get('/friday',function () {
    return view('friday');
});

Route::get('/dontstarve',function () {
    return view('dontstarve');
});

Route::get('/gta',function () {
    return view('gta');
});

Route::get('/no man sky',function () {
    return view('no man sky');
});

Route::get('/outlast',function () {
    return view('outlast');
});

Route::get('/resident',function () {
    return view('resident');
});


Route::get('/contact',function () {
    return view('contact');
});

Route::get('/contactchn',function () {
    return view('contactchn');
});

Route::get('/contactcorrect',function () {
    return view('contactcorrect');
});

Route::get('/contactcorrectchn',function () {
    return view('contactcorrectchn');
});
Route::get('/cart',function () {
    return view('cart');
});

Route::get('/cartchn',function () {
    return view('cartchn');
});

Route::get('/gift',function () {
    return view('gift');
});

Route::get('/giftchn',function () {
    return view('giftchn');
});

Route::get('/payment',function () {
    return view('payment');
});

Route::get('/paymentcorrect',function () {
    return view('paymentcorrect');
});

Route::get('/paymentcorrectchn',function () {
    return view('paymentcorrectchn');
});

Route::get('/signin',function () {
    return view('signin');
});

Route::get('/signinchn',function () {
    return view('signinchn');
});









Route::get('/addProduct',[
    'uses'=>'ProductController@create',
    'as'=>'product'
]);

Route::post('/product/store',[
    'uses'=>'ProductController@store',
    'as'=>'addProduct.store'
]);

Route::get('/viewproduct',[ //broswer name
    'uses'=>'ProductController@view',
    'as'=>'view.product' //programing name
]);

Route::get('/viewproduct/delete/{id}', [
    'uses'=>'ProductController@delete',
    'as' => 'viewproduct.delete'
]);

Route::get('/viewlist',[
    'uses'=>'ProductController@viewlist',
    'as'=>'view.list'
]);

Route::get('/abc',[
    'uses'=>'ProductController@abc',
    'as'=>'abc.list'
]);

Route::get('/productdetail/{id}',[
    'uses'=>'ProductController@detail',
    'as'=>'product.detail'
]);

Route::post('/viewlist', [
    'uses'=>'ProductController@search',
    'as' => 'search.product'
]);

Route::get('editproduct/{id}', [
    'uses'=>'ProductController@edit',
    'as' => 'edit.product'
]);

Route::post('updateproduct', [
    'uses'=>'ProductController@update',
    'as' => 'update.product'
]);

Route::get('/NSS_all',[
    'uses'=>'ProductController@NSS_all',
    'as'=>'NSS_all.list'
]);


//process payment
Route::post('paypal','PaymentController@payWithpaypal') ; 

//check status
Route::get('status','PaymentController@getPaymentStatus') ; 




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

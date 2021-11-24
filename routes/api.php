<?php




Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
});
//employee route
Route::apiResource('/employee', 'Api\EmployeeController');
//Supplier Route
Route::apiResource('/supplier', 'Api\SupplierController');
//Category Route
Route::apiResource('/category', 'Api\CategoryController');
//product Route
Route::apiResource('/product', 'Api\ProductController');
//expense Route
Route::apiResource('/expense', 'Api\ExpenseController');

Route::apiResource('/customer', 'Api\CustomerController');



Route::Post('/salary/paid/{id}', 'Api\SalaryController@Paid');
Route::Get('/salary', 'Api\SalaryController@AllSalary');
Route::Get('/salary/view/{id}', 'Api\SalaryController@ViewSalary');
Route::Get('/edit/salary/{id}', 'Api\SalaryController@EditSalary');
Route::Post('/salary/update/{id}', 'Api\SalaryController@SalaryUpdate');

// stock
Route::Post('/stock/update/{id}', 'Api\ProductController@StockUpdate');
Route::get('/getting/product/{id}', 'Api\PosController@GetProduct');

//addtocard
Route::get('/addToCart/{id}', 'Api\CardController@AddToCart');
Route::get('/cart/product', 'Api\CardController@CartProduct');
Route::get('/remove/cart/{id}', 'Api\CardController@RemoveCart');
Route::get('/increment/{id}', 'Api\CardController@increment');
Route::get('/decrement/{id}', 'Api\CardController@decrement');

// Vat Extra Route
// 
// Route::apiResource('/vats', 'Api\VatController');
Route::Get('/vats', 'Api\CardController@Vats');
Route::Post('/orderdone', 'Api\PosController@OrderDone');

//order Route
Route::Get('/orders', 'Api\OrderController@TodayOrder');


Route::Get('/order/details/{id}', 'Api\OrderController@OrderDetails');
Route::Get('/order/orderdetails/{id}', 'Api\OrderController@OrderDetailsAll');


Route::Post('/search/order/', 'Api\PosController@SearchOrderDate');

// Admin Dashboard

Route::Get('/today/sell', 'Api\PosController@TodaySell');
Route::Get('/today/income', 'Api\PosController@TodayIncome');
Route::Get('/today/due', 'Api\PosController@TodayDue');
Route::Get('/today/expense', 'Api\PosController@TodayExpense');
Route::Get('/today/stockout', 'Api\PosController@Stockout');

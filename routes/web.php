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


Route::get('/', 'PagesController@root')->name('root');
Route::get('products', 'ProductsController@index')->name('products.index');
Route::get('alipay', function() {
    return app('alipay')->web([
        'out_trade_no' => time(),
        'total_amount' => '1',
        'subject' => 'test subject - 测试',
    ]);
});


Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/email_verify_notice', 'PagesController@emailVerifyNotice')->name('email_verify_notice');
    Route::get('/email_verification/verify', 'EmailVerificationController@verify')->name('email_verification.verify');
    Route::get('/email_verification/send', 'EmailVerificationController@send')->name('email_verification.send');
    Route::group(['middleware' => 'email_verified'], function() {
        Route::get('user_addresses', 'UserAddressesController@index')->name('user_addresses.index');
        Route::get('user_addresses/create', 'UserAddressesController@create')->name('user_addresses.create');
        Route::post('user_addresses', 'UserAddressesController@store')->name('user_addresses.store');
        Route::get('user_addresses/{user_address}', 'UserAddressesController@edit')->name('user_addresses.edit');
        Route::put('user_addresses/{user_address}', 'UserAddressesController@update')->name('user_addresses.update');
        Route::delete('user_addresses/{user_address}', 'UserAddressesController@destroy')->name('user_addresses.destroy');
        Route::post('products/{product}/favorite', 'ProductsController@favor')->name('products.favor');
        Route::delete('products/{product}/favorite', 'ProductsController@disfavor')->name('products.disfavor');
        Route::get('products/favorites', 'ProductsController@favorites')->name('products.favorites');

        /** 购物车 **/
        // 加入购物车
        Route::post('cart', 'CartController@add')->name('cart.add');
        // 查看购物车
        Route::get('cart', 'CartController@index')->name('cart.index');
        // 购物车移除商品
        Route::delete('cart/{sku}', 'CartController@remove')->name('cart.remove');

        // 商品发货
        Route::post('orders/{order}/received', 'OrdersController@received')->name('orders.received');

        // 下订单
        Route::post('orders', 'OrdersController@store')->name('orders.store');

        // 订单列表
        Route::get('orders', 'OrdersController@index')->name('orders.index');
        // 查看订单
        Route::get('orders/{order}', 'OrdersController@show')->name('orders.show');

        // 支付宝支付
        Route::get('payment/{order}/alipay', 'PaymentController@payByAlipay')->name('payment.alipay');

        // 支付宝支付成功后前端回调
        Route::get('payment/alipay/return', 'PaymentController@alipayReturn')->name('payment.alipay.return');

        // 微信支付
        Route::get('payment/{order}/wechat', 'PaymentController@payByWechat')->name('payment.wechat');

        // 订单评价
        Route::get('orders/{order}/review', 'OrdersController@review')->name('orders.review.show');
        Route::post('orders/{order}/review', 'OrdersController@sendReview')->name('orders.review.store');

        // 申请退款
        Route::post('orders/{order}/apply_refund', 'OrdersController@applyRefund')->name('orders.apply_refund');

        // 优惠券
        Route::get('coupon_codes/{code}', 'CouponCodesController@show')->name('coupon_codes.show');
    });
});
// 支付宝服务端回调
Route::post('payment/alipay/notify', 'PaymentController@alipayNotify')->name('payment.alipay.notify');
// 微信支付回调
Route::post('payment/wechat/notify', 'PaymentController@wechatNotify')->name('payment.wechat.notify');

// 微信退款同事回调
Route::post('payment/wechat/refund_notify', 'PaymentController@wechatRefundNotify')->name('payment.wechat.refund_notify');

Route::get('products/{product}', 'ProductsController@show')->name('products.show');
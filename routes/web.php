<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\controllers\HomeController::class, 'home'])
    ->name('home');
    // ->middleware('auth');

Route::get('/login', [\App\Http\controllers\AuthController::class, 'login'])
    ->name('auth.login');
Route::post('/login', [\App\Http\controllers\AuthController::class, 'authenticate'])
    ->name('auth.authenticate');

Route::post('/logout', [\App\Http\controllers\AuthController::class, 'logout'])
    ->name('auth.logout');

Route::get('/news', [\App\Http\controllers\NewsController::class, 'news'])
    ->name('news');

Route::get('/news/{id}', [\App\Http\controllers\NewsController::class, 'newsDetails'])
    ->name('news.detail')
    ->whereNumber('id');

Route::get('/newsManagement', [\App\Http\controllers\NewsController::class, 'newsManagement'])
    ->name('news.management');
// ->middleware('auth');

Route::get('/news/post', [\App\Http\controllers\NewsController::class, 'create'])
    ->name('news.create');
// ->middleware('auth');

Route::post('/news/post', [\App\Http\controllers\NewsController::class, 'store'])
    ->name('news.store');
// ->middleware('auth');

Route::get('/news/{id}/delete', [\App\Http\controllers\NewsController::class, 'delete'])
    ->name('news.delete');
// ->middleware('auth');

Route::delete('/news/{id}/delete', [\App\Http\controllers\NewsController::class, 'destroy'])
    ->name('news.destroy');
// ->middleware('auth');

Route::get('/news/edit/{id}', [\App\Http\controllers\NewsController::class, 'edit'])
    ->name('news.edit');
// ->middleware('auth');

Route::put('/news/edit/{id}', [\App\Http\controllers\NewsController::class, 'update'])
    ->name('news.update');
// ->middleware('auth');

Route::get('/shop', [\App\Http\controllers\ShopController::class, 'shop'])
    ->name('shop');

Route::get('/shop/{id}', [\App\Http\controllers\ShopController::class, 'bookDetails'])
    ->name('shop.detail')
    ->whereNumber('id');

Route::get('/shop/post', [\App\Http\controllers\ShopController::class, 'create'])
    ->name('shop.create');
// ->middleware('auth');

Route::post('/shop/post', [\App\Http\controllers\ShopController::class, 'store'])
    ->name('shop.store');
// ->middleware('auth');

Route::get('/subscriptions', [\App\Http\controllers\SubscriptionsController::class, 'subscriptions'])
    ->name('subscriptions');

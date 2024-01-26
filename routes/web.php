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

Route::get( '/', function () {
    return redirect('safety-form');
} );


Route::get( '/safety-form', [ \App\Http\Controllers\GuestFormsController::class, 'show' ] );
Route::post( '/safety-form', [ \App\Http\Controllers\GuestFormsController::class, 'store' ] );

Route::get( '/thankyou', function () {
    return view( 'public.thankyou' );
} )->name( 'thankyou' );


Route::group( [ 'prefix' => 'admin' ], function () {
    Voyager::routes();
} );

Route::get( '/admin/forms/approve/{id}', [
    \App\Http\Controllers\FormsController::class,
    'approve'
] )->name( 'forms.approve' );


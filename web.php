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

//后台首页
Route::resource("/admin","Admin\AdminController");



//前台首页
Route::resource("/","Home\HomeController");
//电影列表页
Route::resource("/films","Home\MoviesController");
//电影详情页
Route::resource("/movie","Home\MovieController");
//影院页
Route::resource("/cinemas","Home\CinemaController");
//场次页
Route::resource("/relss","Home\RelssController");
//座位页
Route::resource("/hall","Home\HallController");
//榜单页
Route::resource("/board","Home\BangdanController");
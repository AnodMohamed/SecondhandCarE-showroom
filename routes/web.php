<?php

use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminManageMyAdComponent;
use App\Http\Livewire\Admin\AdminViewAd;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\User\AddAd;
use App\Http\Livewire\User\AddAdComponent;
use App\Http\Livewire\User\ManageMyAds;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\User\UserEditAdComponent;
use App\Http\Livewire\User\UserViewAdComponent;

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

Route::get('/', HomeComponent::class)->name('home');

//admin 
Route::middleware(['auth:sanctum','verified','authAdmin'])->group(function(){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/ManageMyAds',AdminManageMyAdComponent::class)->name('admin.ManageMyAds');
    Route::get('/admin/ManageMyAds/ViewAd/{ad_id:id}',AdminViewAd::class)->name('admin.ManageMyAds.ViewAd');

});
//User
Route::middleware(['auth:sanctum','verified','authUser'])->group(function(){
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
    Route::get('/user/ManageMyAds',ManageMyAds::class)->name('user.ManageMyAds');
    Route::get('/user/ManageMyAds/addAd',AddAdComponent::class)->name('user.ManageMyAds.addAd');
    Route::get('/user/ManageMyAds/EditAd/{ad_id:id}',UserEditAdComponent::class)->name('user.ManageMyAds.EditAd');
    Route::get('/user/ManageMyAds/ViewAd/{ad_id:id}',UserViewAdComponent::class)->name('user.ManageMyAds.ViewAd');

});

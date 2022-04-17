<?php

use App\Http\Livewire\Admin\AdminManageMyAdComponent;
use App\Http\Livewire\Admin\AdminViewAd;
use App\Http\Livewire\AdsComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ReviewsComponent;
use App\Http\Livewire\SearchCarComponent;
use App\Http\Livewire\User\AddAd;
use App\Http\Livewire\User\AddAdComponent;
use App\Http\Livewire\User\AddReviewComponent;
use App\Http\Livewire\User\ChatComponent;
use App\Http\Livewire\User\ManageMyAds;
use App\Http\Livewire\User\UserEditAdComponent;
use App\Http\Livewire\User\UserViewAdComponent;
use App\Http\Livewire\User\MessegesComponent;
use App\Http\Livewire\User\ReviewComponent;
use App\Http\Livewire\ViewAdComponent;

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
Route::get('/ad{ad_id:id}',ViewAdComponent::class)->name('ad');
Route::get('/search',SearchCarComponent::class)->name('search');
Route::get('/reviews{user_id:id}',ReviewsComponent::class)->name('reviews');


//admin 
Route::middleware(['auth:sanctum','verified','authAdmin'])->group(function(){
    Route::get('/admin/ManageMyAds',AdminManageMyAdComponent::class)->name('admin.ManageMyAds');
    Route::get('/admin/ManageMyAds/ViewAd/{ad_id:id}',AdminViewAd::class)->name('admin.ManageMyAds.ViewAd');

});
//User
Route::middleware(['auth:sanctum','verified','authUser'])->group(function(){
    Route::get('/user/ManageMyAds',ManageMyAds::class)->name('user.ManageMyAds');
    Route::get('/user/ManageMyAds/addAd',AddAdComponent::class)->name('user.ManageMyAds.addAd');
    Route::get('/user/ManageMyAds/EditAd/{ad_id:id}',UserEditAdComponent::class)->name('user.ManageMyAds.EditAd');
    Route::get('/user/ManageMyAds/ViewAd/{ad_id:id}',UserViewAdComponent::class)->name('user.ManageMyAds.ViewAd');
    Route::get('/user/Chat/{user_id:id}',ChatComponent::class)->name('user.Chat');
    Route::get('/user/Messeges',MessegesComponent::class)->name('user.Messeges');
    Route::get('/user/Reviewes',ReviewComponent::class)->name('user.Reviewes');
    Route::get('/user/Reviewes/add/{review_id:id}',AddReviewComponent::class)->name('user.addReviewes');

});

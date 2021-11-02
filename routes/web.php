<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserAuthController;
use App\Http\Controllers\Admin\AdminAuthController;

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
    return view('welcome');
});
// Auth::routes();
// Auth user
Route::get('login', [UserAuthController::class, 'index'])->name('user.login');
Route::post('login', [UserAuthController::class, 'customLogin'])->name('user.login.action'); 
Route::get('registration', [UserAuthController::class, 'registration'])->name('user.register');
Route::post('registration', [UserAuthController::class, 'customRegistration'])->name('user.register.action'); 
Route::get('logout', [UserAuthController::class, 'logOut'])->name('user.logout');
//dashboard
Route::get('dashboard', [App\Http\Controllers\User\UserDashboardController::class, 'index'])->name('user.dashboard');
Route::get('profile',[App\Http\Controllers\User\UserProfileController::class,'index'])->name('user.profile');
Route::get('search',[App\Http\Controllers\User\UserKendaraanController::class,'search'])->name('user.search');

Route::get('detail-produk/{kendaraan_id}',[App\Http\Controllers\User\UserKendaraanController::class, 'detail'])->name('user.detail-produk');
Route::get('detail-produk/{kendaraan_id}/ulasan',[App\Http\Controllers\User\UserKendaraanController::class, 'ulasan'])->name('user.detail-produk.ulasan');
Route::get('detail-produk/{kendaraan_id}/ulasan/pemilik',[App\Http\Controllers\User\UserKendaraanController::class, 'ulasan_pemilik'])->name('user.detail-produk.ulasan.pemilik');

Route::get('pemesanan/create/{kendaraan_id}',[App\Http\Controllers\User\UserPemesananController::class, 'create_form'])->name('user.pemesanan.create');
Route::post('pemesanan/create',[App\Http\Controllers\User\UserPemesananController::class, 'create'])->name('user.pemesanan.create.action');
Route::group(['prefix' => 'admin'], function () {
    Route::get('login', [AdminAuthController::class, 'index'])->name('admin.login');
    Route::post('login', [AdminAuthController::class, 'customLogin'])->name('admin.login.action'); 
    Route::get('registration', [AdminAuthController::class, 'registration'])->name('admin.register');
    Route::post('registration', [AdminAuthController::class, 'customRegistration'])->name('admin.register.action'); 
    Route::get('logout', [AdminAuthController::class, 'logOut'])->name('admin.logout');

    Route::get('/',[App\Http\Controllers\Admin\AdminDashboardController::class,'index'])->name('admin.dashboard');
    Route::get('topup',[App\Http\Controllers\Admin\AdminDompetTransaksiController::class,'topup'])->name('admin.topup');
    Route::get('penarikan',[App\Http\Controllers\Admin\AdminDompetTransaksiController::class,'penarikan'])->name('admin.penarikan');
    Route::get('kendaraan',[App\Http\Controllers\Admin\AdminKendaraanController::class,'index'])->name('admin.kendaraan');
    Route::get('kendaraan/dipesan',[App\Http\Controllers\Admin\AdminKendaraanController::class,'dipesan'])->name('admin.kendaraan.dipesan');
    Route::get('kendaraan/selesai',[App\Http\Controllers\Admin\AdminKendaraanController::class,'selesai'])->name('admin.kendaraan.selesai');
    
    Route::get('artikel',[App\Http\Controllers\Admin\AdminArtikelController::class,'index'])->name('admin.artikel');
    Route::get('artikel/create',[App\Http\Controllers\Admin\AdminArtikelController::class,'create'])->name('admin.artikel.create');
    Route::get('artikel/edit',[App\Http\Controllers\Admin\AdminArtikelController::class,'edit'])->name('admin.artikel.edit');

    Route::get('kategori',[App\Http\Controllers\Admin\AdminKategoriController::class,'index'])->name('admin.kategori');
    Route::get('kategori/kota',[App\Http\Controllers\Admin\AdminKategoriController::class,'kota'])->name('admin.kategori.kota');
    Route::get('user/delete/{id}', [App\Http\Controllers\Admin\AdminUserController::class, 'delete'])->name('admin.user.delete');
});


<?php

use App\Http\Controllers\Danhmucloaicay;
use App\Http\Controllers\TaikhoanController;
use App\Http\Controllers\CaytrongController;
use App\Http\Controllers\QuyenController;
use App\Http\Controllers\KhuController;
use App\Http\Controllers\OcaytrongController;
use App\Http\Controllers\PhunThuocController;
use App\Http\Controllers\XuatController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TinhTrangKhuController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;

use Inertia\Inertia;

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


Route::get('/home', function () {
    return view('home');
});


Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});


// danhmucloaicay
Route::get('admin/danhmucloaicay',[Danhmucloaicay::class,'index'])->name('admin.danhmucloaicay');
Route::get('admin/danhmucloaicay/create',[Danhmucloaicay::class,'create'])->name('danhmuc.create');
Route::post('admin/danhmucloaicay/store',[Danhmucloaicay::class,'store'])->name('danhmuc.store');
Route::get('admin/danhmucloaicay/edit/{id}',[Danhmucloaicay::class,'edit'])->name('danhmuc.edit');
Route::post('admin/danhmucloaicay/update/{danhmucloaicay}',[Danhmucloaicay::class,'update'])->name('danhmuc.update');
Route::get('admin/danhmucloaicay/destroy/{id}',[Danhmucloaicay::class,'destroy'])->name('danhmuc.destroy');

// taikhoan
// Route::get('admin/taikhoan',[TaikhoanController::class,'index'])->name('admin.taikhoan');
// Route::get('admin/taikhoan/create',[TaikhoanController::class,'create'])->name('tk.create');
// Route::post('admin/taikhoan/store',[TaikhoanController::class,'store'])->name('tk.store');
// Route::get('admin/taikhoan/edit/{id}',[TaikhoanController::class,'edit'])->name('tk.edit');
// Route::post('admin/taikhoan/update/{taikhoan}',[TaikhoanController::class,'update'])->name('tk.update');
// Route::get('admin/taikhoan/destroy/{id}',[TaikhoanController::class,'destroy'])->name('tk.destroy');




// caytrong
Route::get('admin/caytrong',[CaytrongController::class,'index'])->name('admin.caytrong');
Route::get('admin/caytrong/create',[CaytrongController::class,'create'])->name('ct.create');
Route::post('admin/caytrong/store',[CaytrongController::class,'store'])->name('ct.store');
Route::get('admin/caytrong/edit/{id}',[CaytrongController::class,'edit'])->name('ct.edit');
Route::post('admin/caytrong/update/{caytrong}',[CaytrongController::class,'update'])->name('ct.update');
Route::get('admin/caytrong/destroy/{id}',[CaytrongController::class,'destroy'])->name('ct.destroy');



// quyen
Route::get('admin/quyen',[QuyenController::class,'index'])->name('admin.quyen');
Route::get('admin/quyen/create',[QuyenController::class,'create'])->name('q.create');
Route::post('admin/quyen/store',[QuyenController::class,'store'])->name('q.store');
Route::get('admin/quyen/edit/{id}',[QuyenController::class,'edit'])->name('q.edit');
Route::post('admin/quyen/update/{quyen}',[QuyenController::class,'update'])->name('q.update');
Route::get('admin/quyen/destroy/{id}',[QuyenController::class,'destroy'])->name('q.destroy');


// khucaytrong
Route::get('admin/khu',[KhuController::class,'index'])->name('admin.khu');
Route::get('admin/khu/create',[KhuController::class,'create'])->name('k.create');
Route::post('admin/khu/store',[KhuController::class,'store'])->name('k.store');
Route::get('admin/khu/edit/{id}',[KhuController::class,'edit'])->name('k.edit');
Route::post('admin/khu/update/{khu}',[KhuController::class,'update'])->name('k.update');
Route::get('admin//khu/destroy/{id}',[KhuController::class,'destroy'])->name('k.destroy');



// lịch phun thuốc
Route::get('admin/phunthuoc',[PhunThuocController::class,'index'])->name('admin.phunthuoc');
Route::get('admin/phunthuoc/create',[PhunThuocController::class,'create'])->name('pt.create');
Route::post('admin/phunthuoc/store',[PhunThuocController::class,'store'])->name('pt.store');
Route::get('admin/phunthuoc/edit/{id}',[PhunThuocController::class,'edit'])->name('pt.edit');
Route::post('admin/phunthuoc/update/{phunthuoc}',[PhunThuocController::class,'update'])->name('pt.update');
Route::get('admin/phunthuoc/destroy/{id}',[PhunThuocController::class,'destroy'])->name('pt.destroy');


// Xuất

Route::get('admin/xuat',[XuatController::class,'index'])->name('admin.xuat');
Route::get('admin/xuat/create',[XuatController::class,'create'])->name('x.create');
Route::post('admin/xuat/store',[XuatController::class,'store'])->name('x.store');
// Route::get('/xuat/edit/{id}',[XuatController::class,'edit'])->name('x.edit');
// Route::post('/xuat/update/{xuat}',[XuatController::class,'update'])->name('x.update');
Route::get('admin/xuat/destroy/{id}',[XuatController::class,'destroy'])->name('x.destroy');


Route::get('admin/login',function(){
    return view('admin.login');
});


// tinhtrangkhu
Route::get('admin/tinhtrangkhu',[TinhTrangKhuController::class,'index'])->name('admin.tinhtrangkhu');
Route::get('admin/tinhtrangkhu/create',[TinhTrangKhuController::class,'create'])->name('tinhtrang.create');
Route::post('admin/tinhtrangkhu/store',[TinhTrangKhuController::class,'store'])->name('tinhtrang.store');
Route::get('admin/tinhtrangkhu/edit/{id}',[TinhTrangKhuController::class,'edit'])->name('tinhtrang.edit');
Route::post('admin/tinhtrangkhu/update/{phunthuoc}',[TinhTrangKhuController::class,'update'])->name('tinhtrang.update');
Route::get('admin/tinhtrangkhu/destroy/{id}',[TinhTrangKhuController::class,'destroy'])->name('tinhtrang.destroy');


// User
Route::get('admin/user',[UserController::class,'index'])->name('admin.user');
Route::get('admin/user/create',[UserController::class,'create'])->name('u.create');
Route::post('admin/user/store',[UserController::class,'store'])->name('u.store');
Route::get('admin/user/edit/{id}',[UserController::class,'edit'])->name('u.edit');
Route::post('admin/user/update/{user}',[UserController::class,'update'])->name('u.update');
Route::get('admin/user/destroy/{id}',[UserController::class,'destroy'])->name('u.destroy');


// Route::post('admin/login',[AdminController::class,'loginPost'])->name('admin.loginPost');
// Route::get('admin/logout',[AdminController::class,'logout'])->name('admin.logout');
// Route::get('admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');


Route::get('login',[AuthController::class,'showFormLogin'])->name('show-form-login');
Route::post('login',[AuthController::class,'login'])->name('login');
Route::get('logout',[AuthController::class,'logout'])->name('logout');
Route::get('profile',[AuthController::class,'showFormprofile'])->name('show-profile');
Route::post('profile',[AuthController::class,'profile'])->name('profile');
Route::get('dashboard',[AuthController::class,'Showdashboard'])->name('show-dashboard');
Route::post('dashboard',[AuthController::class,'dashboard'])->name('dashboard');
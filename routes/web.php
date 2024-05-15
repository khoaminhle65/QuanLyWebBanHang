<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandProductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CheckoutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Frontend
Route::get('/', [HomeController::class, 'index']);
Route::get('trang-chu', [HomeController::class, 'index'])->name('home');
Route::post('tim-kiem', [HomeController::class, 'search'])->name('search');


//Danh muc san pham trang chu
Route::get('chi-tiet/{product_name}', [ProductController::class, 'details_product'])->name('show_details');
Route::get('danh-muc/{category_id}', [CategoryProductController::class, 'show_category_home'])->name('show_category');
Route::get('thuong-hieu/{brand_id}', [BrandProductController::class, 'show_brand_home'])->name('show_brand');

//BackEnd
//dang nhap
Route::get('admin', [AdminController::class, 'admin']);
Route::get('login', [AdminController::class, 'login'])->name('login');

//trang dashboard
Route::get('layout', [AdminController::class, 'layout'])->name('layout');
Route::post('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

//Categoryproduct
Route::get('add-category-product', [CategoryProductController::class, 'add_category_product'])->name('add_category_product');
Route::get('all-category-product', [CategoryProductController::class, 'all_category_product'])->name('all_category_product');
Route::post('save-category-product', [CategoryProductController::class, 'save_category_product'])->name('save_category_product');

Route::get('unactive-category-product/{category_product_id}', [CategoryProductController::class, 'unactive_category_product'])->name('unactive_category_product');
Route::get('active-category-product/{category_product_id}', [CategoryProductController::class, 'active_category_product'])->name('active_category_product');
//Sua
Route::get('edit-category-product/{category_product_id}', [CategoryProductController::class, 'edit_category_product'])->name('edit_category_product');
Route::post('update-category-product/{category_product_id}', [CategoryProductController::class, 'update_category_product'])->name('update_category_product');
//Xoa
Route::get('delete-category-product/{category_product_id}', [CategoryProductController::class, 'delete_category_product'])->name('delete_category_product');

//Brandproduct
Route::get('add-brand-product', [BrandProductController::class, 'add_brand_product'])->name('add_brand_product');
Route::get('all-brand-product', [BrandProductController::class, 'all_brand_product'])->name('all_brand_product');
Route::post('save-brand-product', [BrandProductController::class, 'save_brand_product'])->name('save_brand_product');

Route::get('unactive-brand-product/{brand_product_id}', [BrandProductController::class, 'unactive_brand_product'])->name('unactive_brand_product');
Route::get('active-brand-product/{brand_product_id}', [BrandProductController::class, 'active_brand_product'])->name('active_brand_product');
//Sua
Route::get('edit-brand-product/{brand_product_id}', [BrandProductController::class, 'edit_brand_product'])->name('edit_brand_product');
Route::post('update-brand-product/{brand_product_id}', [BrandProductController::class, 'update_brand_product'])->name('update_brand_product');
//Xoa
Route::get('delete-brand-product/{brand_product_id}', [BrandProductController::class, 'delete_brand_product'])->name('delete_brand_product');

//Product
Route::get('all-product', [ProductController::class, 'all_product'])->name('all_product');
Route::get('add-product', [ProductController::class, 'add_product'])->name('add_product');
Route::post('save-product', [ProductController::class, 'save_product'])->name('save_product');

Route::get('unactive-product/{product_id}', [ProductController::class, 'unactive_product'])->name('unactive_product');
Route::get('active-product/{product_id', [ProductController::class, 'active_product'])->name('active_product');
Route::get('edit-product/{product_id}', [ProductController::class, 'edit_product'])->name('edit_product');
Route::post('update-product/{product_id}', [ProductController::class, 'update_product'])->name('updatate_product');
Route::get('delete-product/{product_id}', [ProductController::class, 'delete_product'])->name('delete_product');




//thoat
Route::get('logout', [AdminController::class, 'logout'])->name('logout');

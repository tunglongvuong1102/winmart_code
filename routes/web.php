<?php



use Illuminate\Support\Facades\Route;
use App\Models\GioHang;
use App\Http\Controllers\ProductController;

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
Route::get('/data-form', function () {
    return view('product.add');
});

Route::post('/add-data', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/{productId}', [ProductController::class, 'show'])->name('product.show');

Route::get('/', 'App\Http\Controllers\PageController@getTrangChu');
Route::get('home', 'App\Http\Controllers\PageController@getTrangChu');
Route::get('category/{loai}', 'App\Http\Controllers\PageController@getTrangLoaiSanPham')->name('category');
Route::get('products/{id}', 'App\Http\Controllers\PageController@getTrangSanPham')->name('products');
/*Route::get('product', 'App\Http\Controllers\PageController@getTrangSanPham');
*/
view()->composer('tranggiohang', function ($view) {
    if (Session('cart')) {
        $oldCart = Session::get('cart');
        $cart = new GioHang($oldCart);
        $view->with([
            'cart' => Session::get('cart'),
            'product_cart' => $cart->items,
            'totalPrice' => $cart->totalPrice,
            'totalQty' => $cart->totalQty
        ]);
    }
});

Route::get('cartlist', 'App\Http\Controllers\PageController@getTrangGioHang');
Route::get('like', 'App\Http\Controllers\PageController@getTrangYeuThich');
Route::get('sign', 'App\Http\Controllers\PageController@getTrangDangNhap');
Route::get('order', 'App\Http\Controllers\PageController@getTrangDatHang');
Route::get('contact', 'App\Http\Controllers\PageController@getTrangLienHe');

Route::get('addtocart/{id}', 'App\Http\Controllers\PageController@getThemGioHang')->name('addtocart');
Route::get('delcart/{id}', 'App\Http\Controllers\PageController@getXoaGioHang')->name('delcart');

Route::post('postinfo', 'App\Http\Controllers\PageController@postThongTinKhachHang');
Route::post('postsign', 'App\Http\Controllers\PageController@postTaiKhoanKhachHang');
Route::post('postlogin', 'App\Http\Controllers\PageController@postDangNhap');
Route::get('logout', 'App\Http\Controllers\PageController@postDangXuat');
Route::get('search', 'App\Http\Controllers\PageController@getTimKiem');

Route::post('postsign_partner', 'App\Http\Controllers\PageController@postTaiKhoanDoiTac');
Route::get('sign_partner', 'App\Http\Controllers\PageController@getTrangDangNhapDoiTac');
Route::post('postlogin_partner', 'App\Http\Controllers\PageController@postDangNhapDoiTac');

Route::get('customer', 'App\Http\Controllers\PageController@getTrangKhachHang');
Route::get('history', 'App\Http\Controllers\PageController@getTrangLichSuDatHang');

Route::post('postorder', 'App\Http\Controllers\PageController@postDatHang');


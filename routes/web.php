<?php



use Illuminate\Support\Facades\Route;
use App\Models\GioHang;

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
Route::get('/', 'App\Http\Controllers\PageController@getTrangChu');
Route::get('home', 'App\Http\Controllers\PageController@getTrangChu');
Route::get('category/{loai}', 'App\Http\Controllers\PageController@getTrangLoaiSanPham')->name('category');
Route::get('product/{id}', 'App\Http\Controllers\PageController@getTrangSanPham')->name('product');
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

Route::get('customer', 'App\Http\Controllers\PageController@getTrangKhachHang');
Route::get('history', 'App\Http\Controllers\PageController@getTrangLichSuDatHang');

Route::post('postorder', 'App\Http\Controllers\PageController@postDatHang');


<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\SanPham;
use App\Models\LoaiSanPham;
use App\Models\GioHang;
use Session;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('master', function($view) {
            $loaisanpham = LoaiSanPham::all();
            
            $view->with('loaisanpham', $loaisanpham);
        });
        view()->composer('master',function($view){
            if(Session('cart')){
                $oldCart = Session::get('cart');
                $cart = new GioHang($oldCart);
                $view->with(['cart'=>Session::get('cart'), 'product_cart'=>$cart->items, 'totalPrice'=>$cart->totalPrice, 'totalQty'=>$cart->totalQty]);
            }
            
        });
        /*view()->composer('cartlist',function($view){
            if(Session('cart')){
                $oldCart = Session::get('cart');
                $cart = new GioHang($oldCart);
                $view->with(['cart'=>Session::get('cart'), 'product_cart'=>$cart->items, 'totalPrice'=>$cart->totalPrice, 'totalQty'=>$cart->totalQty]);
            }
            
        });*/
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    
}

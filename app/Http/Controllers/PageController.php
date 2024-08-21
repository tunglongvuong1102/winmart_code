<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Models\SanPham;
use App\Models\LoaiSanPham;
use App\Models\TinTuc;
use App\Models\GioHang;
use App\Models\DonHang;
use App\Models\DonHangChiTiet;
use App\Models\KhachHang;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\Auth;
use Hash;
class PageController extends Controller
{
    
    
    public function getTrangChu(){
        $tintuc = TinTuc::All();
        $sanphamkhac = SanPham::inRandomOrder()->limit(10)->get();
        $sanphambanchay = SanPham::where('Sell', 1)->get();
        $cay = SanPham::where('MaLoaiSanPham', 3125)->get();
        $ca = SanPham::where('MaLoaiSanPham', 31)->get();
        $vll = SanPham::where('MaLoaiSanPham', 221212)->get();
        $dd = SanPham::where('MaLoaiSanPham', 44)->get();
        $sanphammoi = SanPham::where('New', 1)->get();
        $phukien = SanPham::where('MaLoaiSanPham', 1611)->get();
        $tc = SanPham::where('MaLoaiSanPham', 12211)->get();
    	return view('trangchu', compact('sanphammoi', 'sanphambanchay', 'sanphamkhac', 'phukien', 'ca', 'cay', 'tintuc', 'vll', 'dd', 'tc'));
    }

    /*public function getTrangLoaiSanPham(){
        $sanpham = SanPham::All();
        return view('trangloaisanpham', compact('sanpham'));
    }*/
    public function getTrangLoaiSanPham($loai){
        $sanpham = SanPham::where('MaLoaiSanPham', $loai)->get();

        foreach ($sanpham as $sp) {
            $loaiSanPham = LoaiSanPham::find($sp->MaLoaiSanPham);
            $sp->TenLoaiSanPham = $loaiSanPham->TenLoaiSanPham;
        }
    	return view('trangloaisanpham', compact('sanpham'));
    }
    
    /*public function getTrangSanPham(){

        $chitiet = SanPham::where('MaSanPham', 'bda01')->first();
    	return view('trangsanpham', compact('chitiet'));
    }*/
    public function getTrangSanPham($id){

        $chitiet = SanPham::where('MaSanPham', $id)->first();
        return view('trangsanpham', compact('chitiet'));
    }


    public function getTrangYeuThich(){
    	return view('trangyeuthich');
    }

    public function getTrangDangNhap(){
        return view('trangdangnhap');
    }
    public function getTrangDangNhapDoiTac(){
        return view('trangdangnhapdoitac');
    }

    public function getTrangDatHang(){
        $product_cart = Session::has('cart') ? Session::get('cart')->items : [];
        return view('trangdathang', compact('product_cart'));
    }

    public function getTrangLienHe(){
        return view('tranglienhe');
    }
    public function getTrangGioHang()
    {
        $product_cart = Session::has('cart') ? Session::get('cart')->items : [];
        return view('tranggiohang', compact('product_cart'));
    }
    public function getThemGioHang(Request $req, $id)
    {
        $product = SanPham::where('MaSanPham', $id)->first();
        $oldCart = Session('cart')?Session('cart'):null;
        $cart = new GioHang($oldCart);
        $cart->add($product, $id);
        $req->session()->put('cart', $cart);
        
        return redirect()->back();
    }

    public function getXoaGioHang($id){
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new GioHang($oldCart);
        $cart->removeItem($id);
        Session::put('cart', $cart);
        return  redirect()->back(); 
    }

    public function postThongTinKhachHang(Request $req){
        $maKH = "DH";
        for ($i = 0; $i < 6; $i++) {
            $maKH .= rand(0, 9);
        }
        $p=new KhachHang;
        $p->MaKhachHang=$maKH;
        $p->HoTen=$req->HoTen;
        $p->DiaChi=$req->DiaChi;
        $p->SDT=$req->SDT;
        $p->save();
        return redirect()->back();
    }
    public function postThongTinDoiTac(Request $req){
        $p=new DoiTac;
        $p->MaDoiTac=$maDT;
        $p->TenDoiTac=$req->TenDT;
        $p->DiaChi=$req->DiaChi;
        $p->SDT=$req->SDT;
        $p->save();
        return redirect()->back();
    }

    public function postTaiKhoanKhachHang(Request $req){
        $p=new User;
        $p->name=$req->HoTen;
        $p->phone=$req->SDT;
        $p->email=$req->Email;
        $p->password = Hash::make($req->MatKhau);
        $p->save();
        
        return redirect()->back();
    }
    public function postTaiKhoanDoiTac(Request $req){
        $p=new User;
        $p->name=$req->TenDoiTac;
        $p->phone=$req->SDT;
        $p->email=$req->Email;
        $p->password = Hash::make($req->MatKhau);
        $p->save();
        
        return redirect()->back();
    }

    public function postDangNhap(Request $req){

        $credentials = array('phone'=>$req->phone,'password'=>$req->password);

        if(Auth::attempt($credentials)){
            return redirect()->action('App\Http\Controllers\PageController@getTrangChu');
    
        }
        else{
            return redirect()->back();
        }
    }
    public function postDangNhapDoiTac(Request $req){

        $credentials = array('phone'=>$req->SDT,'password'=>$req->MatKhau);

        if(Auth::attempt($credentials)){
            return redirect('/data-form');
        }
        else{
            return redirect()->back();
        }
    }


    public function postDangXuat(Request $req){
        Auth::logout();
        return redirect()->action('App\Http\Controllers\PageController@getTrangChu');
    }
    public function getTimKiem(Request $req){
        $sanpham = SanPham::where('TenSanPham','like','%'.$req->key.'%')->get();
        return  view('trangketquatimkiem', compact('sanpham'));
    }

    public function getTrangKhachHang(){
        return  view('trangkhachhang');
    }
    public function getTrangLichSuDatHang(){
        $donhang = DonHang::where('MaKhachHang', "KHA" . Auth::id())->get();
        return  view('tranglichsudathang', compact('donhang'));
    }

    public function postDatHang(Request $req){
        $cart = Session::get('cart');
        
        

        
        if (Auth::check()) {
            $exists = KhachHang::where('MaKhachHang', "KHA" . Auth::id())->exists();
            if ($exists) {
                DB::table('khachhang')
                ->where('MaKhachHang', "KHA" . Auth::id())
                ->update(['DiaChi' => $req->DiaChi,'GhiChu' => $req->DiaChi]);

                $maDH = "DH";
        for ($i = 0; $i < 6; $i++) {
            $maDH .= rand(0, 9);
        }
        $donhang = new DonHang;
        $donhang->MaDonHang = $maDH;
        $donhang->MaKhachHang = "KHA" . Auth::id();
        $donhang->TongTien = $cart->totalPrice;
        $donhang->GhiChu = $req->GhiChu;
        $donhang->save();

        foreach ($cart->items as $key => $value) {
            $donhangchitiet = new DonHangChiTiet;
            $maCT = "CT";
            for ($i = 0; $i < 6; $i++) {
                $maCT .= rand(0, 9);
            }
            $donhangchitiet->MaDonHangChiTiet = $maCT;
            $donhangchitiet->MaDonHang = $donhang->MaDonHang;
            $donhangchitiet->MaSanPham = $key;
            $donhangchitiet->SoLuong = $value['qty'];
            $donhangchitiet->DonGia = $value['price']/$value['qty'];
            $donhangchitiet->save();
        }
            } else {
                $khachhang = new KhachHang;
                $khachhang->MaKhachHang = "KHA" . Auth::id();
                $khachhang->HoTen = Auth::User()->name;
                $khachhang->SDT = Auth::User()->phone;
                $khachhang->Email = Auth::User()->email;
                $khachhang->DiaChi = $req->DiaChi;
                $khachhang->GhiChu = $req->GhiChu;
                $khachhang->save();

                $maDH = "DH";
        for ($i = 0; $i < 6; $i++) {
            $maDH .= rand(0, 9);
        }
        $donhang = new DonHang;
        $donhang->MaDonHang = $maDH;
        $donhang->MaKhachHang = $khachhang->MaKhachHang;
        $donhang->TongTien = $cart->totalPrice;
        $donhang->GhiChu = $req->GhiChu;
        $donhang->save();

        foreach ($cart->items as $key => $value) {
            $donhangchitiet = new DonHangChiTiet;
            $maCT = "CT";
            for ($i = 0; $i < 6; $i++) {
                $maCT .= rand(0, 9);
            }
            $donhangchitiet->MaDonHangChiTiet = $maCT;
            $donhangchitiet->MaDonHang = $donhang->MaDonHang;
            $donhangchitiet->MaSanPham = $key;
            $donhangchitiet->SoLuong = $value['qty'];
            $donhangchitiet->DonGia = $value['price']/$value['qty'];
            $donhangchitiet->save();
        }
            }
            
            
        } else {
            $khachhang = new KhachHang;
            $maKH = "KH";
                for ($i = 0; $i < 6; $i++) {
                    $maKH .= rand(0, 9);
                }
            $khachhang->MaKhachHang = $maKH;
            $khachhang->HoTen = $req->HoTen;
            $khachhang->SDT = $req->SDT;
            $khachhang->Email = $req->Email;
            $khachhang->DiaChi = $req->DiaChi;
            $khachhang->GhiChu = $req->GhiChu;
            $khachhang->save();

            $maDH = "DH";
        for ($i = 0; $i < 6; $i++) {
            $maDH .= rand(0, 9);
        }
        $donhang = new DonHang;
        $donhang->MaDonHang = $maDH;
        $donhang->MaKhachHang = $khachhang->MaKhachHang;
        $donhang->TongTien = $cart->totalPrice;
        $donhang->GhiChu = $req->GhiChu;
        $donhang->save();

        foreach ($cart->items as $key => $value) {
            $donhangchitiet = new DonHangChiTiet;
            $maCT = "CT";
            for ($i = 0; $i < 6; $i++) {
                $maCT .= rand(0, 9);
            }
            $donhangchitiet->MaDonHangChiTiet = $maCT;
            $donhangchitiet->MaDonHang = $donhang->MaDonHang;
            $donhangchitiet->MaSanPham = $key;
            $donhangchitiet->SoLuong = $value['qty'];
            $donhangchitiet->DonGia = $value['price']/$value['qty'];
            $donhangchitiet->save();
        }
        }
        
        
        

        

        
        
        Session::forget('cart');
        return redirect()->back();
    }
}

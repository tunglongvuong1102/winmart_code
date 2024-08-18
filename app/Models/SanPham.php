<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    protected $table = "sanpham";
    public function product_type()
    {
        return $this->belongsTo('App\LoaiSanPham', 'MaLoaiSanPham', 'MaLoaiSanPham');
    }
    public function bill_detail(){
    	return $this->hasMany('App\DonHangChiTiet', 'MaSanPham', 'MaSanPham');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonHangChiTiet extends Model
{
    protected $table = "donhangchitiet";

    public function product(){
    	return $this->belongsTo('App\SanPham','MaSanPham','MaSanPham');
    }

    public function bill(){
    	return $this->belongsTo('App\DonHang','MaDonHang','MaDonHang');
    }
}

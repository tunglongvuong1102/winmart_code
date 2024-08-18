<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    protected $table = "donhang";

    public function bill_detail(){
    	return $this->hasMany('App\DonHangChiTiet','MaDonHang','MaDonHang');
    }
    public function customer(){
    	return $this->belongsTo('App\KhachHang', 'MaKhachHang', 'MaKhachHang');
    }
}

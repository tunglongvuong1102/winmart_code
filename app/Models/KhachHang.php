<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    protected $table = "khachhang";
    public function bill(){
    	return $this->hasMany('App\DonHang', 'MaKhachHang', 'MaKhachHang');
    }
}

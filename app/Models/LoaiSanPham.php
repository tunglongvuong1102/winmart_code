<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiSanPham extends Model
{
    protected $table = "loaisanpham";
    protected $primaryKey = 'MaLoaiSanPham';

    public function product(){
    	return $this->hasMany('App\SanPham','MaLoaiSanPham','MaLoaiSanPham');
    }
}

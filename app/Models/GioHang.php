<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class GioHang extends Model
{
    protected $table = "giohang";
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart){
    	if($oldCart){
    		$this->items = $oldCart->items;
    		$this->totalQty = $oldCart->totalQty;
    		$this->totalPrice = $oldCart->totalPrice;
    	}
    }

    public function add($item, $id){
    	$giohang = ['qty'=>0, 'price' => $item->GiaKhuyenMai, 'item' => $item];
    	if($this->items){
    		if(array_key_exists($id, $this->items)){
    			$giohang = $this->items[$id];
    		}
    	}
    	$giohang['qty']++;
    	$giohang['price'] = $item->GiaKhuyenMai * $giohang['qty'];
    	$this->items[$id] = $giohang;
    	$this->totalQty++;
    	$this->totalPrice += $item->GiaKhuyenMai;
    }

    public function reduceByOne($id){
    	$this->items[$id]['qty']--;
    	$this->items[$id]['price'] -=$this->items[$id]['item']['price'];
    	$this->totalQty--;
    	$this->totalPrice -= $this->items[$id]['item']['price'];
    	if($this->items[$id]['qty']<=0){
    		unset($this->items[$id]);
    	}
    }
    public function removeItem($id){
    	$this->totalQty -= $this->items[$id]['qty'];
    	$this->totalPrice -= $this->items[$id]['price'];
    	unset($this->items[$id]);
    }
}

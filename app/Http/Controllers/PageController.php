<?php

namespace App\Http\Controllers;

use App\Slide;
use App\Product;
use Illuminate\Pagination\Paginator;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex() {
        $slide = Slide::all();
        $new_product = Product::where('new', 1)->paginate(4, ['*'], 'new_product');
        $sale_product = Product::where('promotion_price', '<>', 0)->paginate(8, ['*'], 'sale_product');
    	return view('page.trangchu', compact('slide', 'new_product', 'sale_product'));
    }

    public function getLoai() {
        $sp_theoloai = Product::paginate(18);
        $sp_khac = null;
        return view('page.loai_sanpham', compact('sp_theoloai', 'sp_khac'));
    }

    public function getLoaiSp($type) {
        $sp_theoloai = Product::where('id_type', $type)->paginate(6, ['*'], 'sp_theoloai');
        
        $sp_khac = Product::where('id_type', '<>', $type)->paginate(3, ['*'], 'sp_khac');
    	return view('page.loai_sanpham', compact('sp_theoloai', 'sp_khac'));
    }

    public function getChiTietSp() {
    	return view('page.chitiet_sanpham');
    }

    public function getLienHe() {
    	return view('page.lienhe');
    }

    public function getGioiThieu() {
    	return view('page.gioithieu');
    }
}

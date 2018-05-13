<?php

namespace App\Http\Controllers;

use App\Slide;
use App\Product;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex() {
        $slide = Slide::all();
        $new_product = Product::where('new', 1)->paginate(4);
        $sale_product = Product::where('promotion_price', '<>', 0)->paginate(8);
    	return view('page.trangchu', compact('slide', 'new_product', 'sale_product'));
    }

    public function getLoai() {
        $sp_theoloai = Product::all();
        return view('page.loai_sanpham', compact('sp_theoloai'));
    }

    public function getLoaiSp($type) {
        $sp_theoloai = Product::where('id_type', $type)->get();
    	return view('page.loai_sanpham', compact('sp_theoloai'));
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

<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller {
    public function index() {
        $ids          = [6, 7, 8];

        // total produk per kategori
        $countProduct       = DB::table('products')
                                ->whereIn('category_id', $ids)
                                ->count();

        // total kategori produk
        $totalCategories    = DB::table('product_categories')
                                ->whereIn('id', $ids)
                                ->count();

        // total harga produk
        $totalPrice         = DB::table('products')
                                ->whereIn('category_id', $ids)
                                ->sum('price');

        // total stock produk
        $totalStock         = DB::table('products')
                                ->whereIn('category_id', $ids)
                                ->sum('stock');

        // start-highchart
        // jumlah produk per kategori
        $productPerCategory = DB::table('products')
                            -> select('category_id', DB::raw('COUNT(*) as jml_produk'))
                            -> groupBy('category_id')
                            -> get();
        // dd($productPerCategory);
        $category1          = $productPerCategory[3]->jml_produk;
        $category2          = $productPerCategory[4]->jml_produk;
        $category3          = $productPerCategory[5]->jml_produk;

        // total harga produk per kategori
        $totalPerCategory   = DB::table('products')
                            -> select('category_id', DB::raw('SUM(price) as total_harga'), DB::raw('MONTH(created_at) as month'))
                            -> groupBy('category_id', 'month')
                            -> get();
        $total3Des         = $totalPerCategory[3]->total_harga;
        $total4Des         = $totalPerCategory[4]->total_harga;
        $total5Des         = $totalPerCategory[5]->total_harga;

        // jumlah stok produk per kategori
        $stockPerCategory   = DB::table('products')
                            ->select('category_id', DB::raw('SUM(stock) as jml_stok'))
                            ->groupBy('category_id')
                            ->get();
        $stock1             = $stockPerCategory[3]->jml_stok;
        $stock2             = $stockPerCategory[4]->jml_stok;
        $stock3             = $stockPerCategory[5]->jml_stok;
        // end-highchart

        return view ('dashboard.contents.index', ['countProduct'        => $countProduct,
                                                'totalCategories'       => $totalCategories ,
                                                'totalPrice'            => 'Rp. ' . $totalPrice,
                                                'totalStock'            => $totalStock,
                                                'productPerCategory'    => $productPerCategory,
                                                'category1'             => $category1,
                                                'category2'             => $category2,
                                                'category3'             => $category3,
                                                'totalPerCategory'      => $totalPerCategory,
                                                'total3Des'             => $total3Des,
                                                'total4Des'             => $total4Des,
                                                'total5Des'             => $total5Des,
                                                'stockPerCategory'      => $stockPerCategory,
                                                'stock1'                => $stock1,
                                                'stock2'                => $stock2,
                                                'stock3'                => $stock3
                                            ]);
    }

    public function show() {
        $products = DB::table('products')
                    ->join('product_categories', 'products.category_id', '=', 'product_categories.id')
                    ->orderBy('products.id', 'DESC')
                    ->select('products.*', 'products.id', 'product_categories.category_name')
                    ->paginate(8);
        return view ('contents.products', compact('products'));
    }
}

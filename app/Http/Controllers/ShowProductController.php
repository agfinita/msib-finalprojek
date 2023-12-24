<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ShowProductController extends Controller
{
    // create product
    public function create() {
        return view ('dashboard.contents.create');
    }

    // display product
    public function show() {
        $products = DB::table('products')
                    ->join('product_categories', 'products.category_id', '=', 'product_categories.id')
                    ->orderBy('products.id', 'DESC')
                    ->select('products.*', 'products.id', 'product_categories.category_name')
                    ->paginate(10);
        return view ('dashboard.contents.tables', compact('products'));
    }

    // insert data
    public function insert(Request $request) {
        // dd($request);
        // return $request->file('image')->store('post-images');

        $validatedData  = $request->validate([
            'name'      => 'required',
            'category'  => 'required|not_in:0',
            'code'      => 'required|unique:products,product_code',
            'price'     => 'required|numeric',
            'desc'      => 'nullable',
            'unit'      => 'required',
            'stock'     => 'required|numeric',
            'disc'      => 'required|numeric',
            'image'     => 'image|file|max:1024|nullable'
        ]);

        // data berhasil divalidasi
        if ($request->hasFile('image')) {
            // simpan gambar ke dalam direktori
            $imagePath  = $request->file('image')->store('post-images');

            // simpan data ke dalam database
            DB::table('products')->insert([
                'product_name'  => $validatedData['name'],
                'category_id'   => $validatedData['category'],
                'product_code'  => $validatedData['code'],
                'price'         => $validatedData['price'],
                'description'   => $validatedData['desc'],
                'unit'          => $validatedData['unit'],
                'stock'         => $validatedData['stock'],
                'discount'      => $validatedData['disc'],
                'image'         => $imagePath
            ]);

            // redirect with flashed
            return redirect('/tables')->with('status', 'Data successfully add!');
        } else {
            // return redirect()->back()->with('error', 'Gambar tidak valid');
            // simpan data ke dalam database
            DB::table('products')->insert([
                'product_name'  => $validatedData['name'],
                'category_id'   => $validatedData['category'],
                'product_code'  => $validatedData['code'],
                'price'         => $validatedData['price'],
                'description'   => $validatedData['desc'],
                'unit'          => $validatedData['unit'],
                'stock'         => $validatedData['stock'],
                'discount'      => $validatedData['disc'],
            ]);

            return redirect('/tables')->with('status', 'Data successfully add!');
        }
    }

    // update/edit data
    public function update($id) {
        $products   = DB::table('products')->where('id', $id)->first();
        return view ('dashboard.contents.edit', compact('products'));
    }

    public function updateProcess(Request $request, $id) {
        // dd($request->all());

        $products   = DB::table('products')->where('id', $id)->first();

        $validatedData  = $request->validate([
            'name'      => 'required',
            'category'  => 'required|not_in:0',
            'code'      =>  [
                                'required',
                                Rule::unique('products', 'product_code')->ignore($id)->where(function () use ($request, $products) {
                                    return $request->code != $products->product_code;
                                }),
                            ],
            'price'     => 'required|numeric',
            'desc'      => 'nullable',
            'unit'      => 'required',
            'stock'     => 'required|numeric',
            'disc'      => 'required|numeric',
            'image'     => 'image|file|max:1024|nullable'
        ]);

        // dd($validatedData);  // nyampe kene bener

        // data berhasil divalidasi
        $imagePath  = $request->oldImage;

        DB::table('products')->where('id', $id)->update([
            'product_name'  => $validatedData['name'],
            'category_id'   => $validatedData['category'],
            'product_code'  => $validatedData['code'],
            'price'         => $validatedData['price'],
            'description'   => $validatedData['desc'],
            'unit'          => $validatedData['unit'],
            'stock'         => $validatedData['stock'],
            'discount'      => $validatedData['disc'],
            'image'         => $imagePath
        ]);

        if ($request->hasFile('image')) {
            // pengecekan gambar lama
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }

            // simpan gambar ke dalam direktori
            $imagePath  = $request->file('image')->store('post-images');
        }

        // dd($products); // nyampe kene salah e

        // redirect with flashed
        return redirect('/tables')->with('status', 'Data updated successfully!');
    }

    // delete data
    public function delete($id) {
        $product    = DB::table('products')->where('id', $id)->first();

        if($product) {
            // hapus gambar dari local storage
            if (Storage::exists($product->image)) {
                Storage::delete($product->image);
            }

            // hapus data produk
            DB::table('products')->where('id', $id)->delete();

            return redirect ('/tables')->with('status', 'Data deleted successfully!');
        }

        return redirect ('/tables')->with('error', 'Product not found!');
    }
}

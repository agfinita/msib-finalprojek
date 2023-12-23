<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategories;
use Illuminate\Support\Facades\DB;

class AdminCategoryController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        return view('dashboard.contents.category.index', [
            'categories' => ProductCategories::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view('dashboard.contents.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $validatedData  = $request->validate([
            'category'      => 'required',
            'datecreate'    => 'required'
        ]);

        // data berhasil divalidasi
        DB::table('product_categories')->insert([
                'category_name'  => $validatedData['category'],
                'created_at'     => $validatedData['datecreate']
        ]);

        // redirect with flashed
        return redirect('/categories')->with('status', 'Data successfully add!');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductCategories $ProductCategories) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id) {
        $categories   = DB::table('product_categories')->where('id', $id)->first();
        return view ('dashboard.contents.category.edit', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) {
        DB::table('product_categories')->where('id', $id)->first();

        $validatedData  = $request->validate([
            'category'    => 'required',
            'dateupdate'  => 'required',
        ]);

        // data berhasil divalidasi
        DB::table('product_categories')->where('id', $id)->update([
            'category_name' => $validatedData['category'],
            'updated_at'    => $validatedData['dateupdate'],
        ]);
        // redirect with flashed
        return redirect('/categories')->with('status', 'Data updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::table('product_categories')->where('id', $id)->delete();
        return redirect ('/categories')->with('status', 'Data deleted successfully!');
    }
}

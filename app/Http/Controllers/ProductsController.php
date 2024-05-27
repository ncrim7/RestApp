<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Category;

class ProductsController extends Controller
{
    public function index()
    {
        $data['products'] = Products::all();
        return view('admin.urunYonet', $data);
    }

    public function insert()
    {
        $data['categories'] = Category::all();
        return view('admin.urunEkle', $data);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' =>'required',
            'price' =>'required',
            'description' =>'required',
            'image' =>'required',
            'category_id' =>'required',
        ]);

        $fimg = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('public', $fimg,);
        $data['image'] = $fimg;
        Products::create($data);
        return redirect()->route("admin.products.index")->with('msg','Ürün başarıyla eklendi.');
    }

    public function edit()
    {
        return view('admin.urunDuzenle');
    }

    public function update(Request $request)
     {

     }

     public function urunKaldir(Request $request)
     {

     }

}

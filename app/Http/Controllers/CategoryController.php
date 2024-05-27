<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Category;

class CategoryController extends Controller
{
    public function kategoriDuzenle(Request $request){
        if($request->isMethod("post")){
            $data = $request->validate(['cat_title' => 'required']);

            Category::create($data);

            return redirect()->route('admin.category')->with("msg","Kategori Başarıyla oluşturuldu...");
        }
        $data["categories"] = Category::all();
        return view("admin.kategoriDuzenle" , $data);
    }

    public function kategoriGuncelle(Request $request, $id){
        if($request->isMethod("post")){
            $data = $request->validate(['cat_title' => 'required']);

            Category::findOrFail($id)->update($data);

            return redirect()->route('admin.category')->with("msg","Kategori Başarıyla Güncellendi...");
        }
        $data["categories"] = Category::all();
        return view("admin.kategoriDuzenle" , $data);
    }
    public function deleteKategori(Request $request){
        $id = $request->id;
        $record = Category::findOrFail( $id );
        $record->delete();
        return redirect()->back()->with("msg","Kategori Başarıyla silindi.");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard(){
        $data['products'] = Products::count();
        $data['categories'] = Category::count();
        return view('admin.dashboard',$data);
    }

    public function login(Request $request){
        if($request->isMethod("post"))
        {
            $data = $request->validate([
                'email' =>'required',
                'password' => 'required'
            ]);

            if(Auth::guard('admin')->attempt($data)){
                return redirect()->route('admin.dashboard');
            }else{
                return back()->with("msg","Kullanıcı adı veya şifre yanlış");
            }
        }
        return view('admin.adminLogin');
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('adminlogin');
    }
    // public function kategoriDuzenle(request $request){
    //     if($request->isMethod("post")){
    //         $data = $request->validate(['cat_title' => 'required']);

    //         Category::create($data);

    //         return redirect()->route('admin.category')->with("msg","Kategori Başarıyla oluşturuldu...");
    //     }
    //     $data['categories'] = Category::all();
    //     return view("admin.kategoriDuzenle" , $data);
    // }
}

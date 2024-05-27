<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;

Route::controller(HomeController::class)->group(function () {
    Route::get("/", "index")->name("home.index");
    Route::match(["get", "post"], "/login", "login")->name("login");
    Route::get("/logout", "logout")->name("logout");
    Route::match(["get", "post"], "/signup", "signup")->name("signup");
});








Route::prefix("admin")->group(function () {

    Route::match(["get", "post"], "/login", [AdminController::class, "login"])->name("adminlogin");
    Route::get("/logout", [AdminController::class, "logout"])->name("adminLogout");
    Route::middleware('auth:admin')->group(function () {
    Route::get("/", [AdminController::class, "dashboard"])->name("admin.dashboard");

        Route::controller(CategoryController::class)->group(function () {

            Route::prefix("category")->group(function () {
                Route::match(["get", "post"], "/", "kategoriDuzenle")->name("admin.category");
                Route::post("/{id}/update", "kategoriGuncelle")->name("admin.category.update");
                Route::delete("/delete", "deleteKategori")->name("admin.category.delete");
            });
        });

        Route::controller(ProductsController::class)->group(function () {
            Route::prefix("product")->group(function () {
                Route::get("/", "index")->name("admin.products.index");
                Route::get("/create", "insert")->name("admin.products.insert");
                Route::post("/create", "store")->name("admin.products.store");
                Route::get("/edit/{id}", "edit")->name("admin.products.edit");
                Route::post("/edit/{id}", "update")->name("admin.products.update");
                Route::delete("/delete/{id}", "urunKaldir")->name("admin.products.remove");
            });
        });
    });
});

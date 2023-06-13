<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registration\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", function () {
    return view("welcome");
});

Route::get("login", function () {
    return view("login");
});

Route::get("register", [RegisterController::class, "register"])->name(
    "register"
);

Route::get("create_role_index", function () {
    return view("create_role_index");
});

Route::get("get_role_list/{param_type}/{id}/{status}", [
    RegisterController::class,
    "get_role_list",
])->name("get_role_list");

Route::get("get_user_list", [RegisterController::class, "get_user_list"])->name(
    "get_user_list"
);

Route::get("edit_role/{id}", [RegisterController::class, "edit_role"])->name(
    "edit_role"
);

Route::get("delete_role/{id}", [
    RegisterController::class,
    "delete_role",
])->name("delete_role");

Route::post("create_role", [RegisterController::class, "create_role"])->name(
    "create_role"
);

Route::post("register_new_user", [
    RegisterController::class,
    "register_new_user",
])->name("register_new_user");

Route::post("update_role", [RegisterController::class, "update_role"])->name(
    "update_role"
);

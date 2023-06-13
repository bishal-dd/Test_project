<?php

namespace App\Http\Controllers\registration;
use App\Models\registration\RoleModel;
use App\Http\Controllers\Controller;
use App\Models\registration\UserModel;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $response = RoleModel::where("status", "Active")->get();
        return view("register")->with(compact("response"));
        //this is;
    }

    public function create_role(Request $request)
    {
        $role_data = [
            "name" => $request->role_name,
            "status" => $request->status,
            "created_by" => 1,
            "created_at" => date("Y-m-d h:i:s"),
        ];

        RoleModel::create($role_data);

        return redirect()->away("get_role_list/All/NA/ALL");
    }

    public function register_new_user(Request $request)
    {
        $user_data = [
            "full_name" => $request->full_name,
            "contact_no" => $request->contact_no,
            "email" => $request->email,
            "password" => $request->password,
            "role_id" => $request->role,
            "created_by" => 1,
            "created_at" => date("Y-m-d h:i:s"),
        ];
        // dd($user_data);
        UserModel::create($user_data);

        return redirect()->away("login");
    }

    public function update_role(Request $request)
    {
        $role_data = [
            "name" => $request->role_name,
            "status" => $request->status,
            "updated_by" => 1,
            "updated_at" => date("Y-m-d h:i:s"),
        ];

        RoleModel::where("id", $request->record_id)->update($role_data);

        return redirect()->away("get_role_list/All/NA/ALL");
    }

    public function get_role_list($param_type, $id, $status)
    {
        if ($param_type == "All") {
            $response_data = RoleModel::get();
        }
        if ($param_type == "BYID") {
            $response_data = RoleModel::where("id", $id)->get();
        }
        if ($param_type == "Status") {
            $response_data = RoleModel::where("status", $status)->get();
        }

        return view("registration/list_roles")->with(compact("response_data"));
    }

    public function get_user_list()
    {
        $response_data = UserModel::get();

        return view("registration/list_users")->with(compact("response_data"));
    }

    public function edit_role($id)
    {
        $data = RoleModel::where("id", $id)->first();

        return view("edit_roles")->with(compact("data"));
    }

    public function delete_role($id)
    {
        RoleModel::where("id", $id)->delete();
        return redirect()->away("/get_role_list/All/NA/ALL");
    }
}

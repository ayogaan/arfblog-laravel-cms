<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Session;
class UserController extends Controller
{
    public function index(){
        $this->data['users'] = User::orderBy('name','asc')->paginate(5);
        return view('admin.userman.index',$this->data);
    }

    public function create(){
        return view('admin.userman.form');
    }

    public function store(UserRequest $request){
        $param = $request->except('_token');
        dump($param);
        if(User::create($param)){
            if(Category::create($param)){
                Session::flash('success', 'User has been created');
            }
            return redirect('admin/user');
        }
    }

}

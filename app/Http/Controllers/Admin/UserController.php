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
        $param['password']= bcrypt($param['password']);
        if(User::create($param)){
                Session::flash('success', 'User has been created');            
            return redirect('admin/user');
        }
    }

    public function edit($id){
        $user = User::findOrFail($id);
        $this->data['users'] = $user;
        return view('admin.userman.form',$this->data);
        
    }

    public function update(UserRequest $request, $id){
        $params = $request->except('_token');
        $user = User::findOrFail($id);
        
        if($user->update($params)){
            Session::flash('success', 'User has been updated');
        }
        return redirect('admin/user');
    }

    public function destroy($id){
        $user = User::findOrFail($id);
        if($user->delete()){
            Session::flash('success', 'User has been deleted');
        }
        return redirect('admin/user');
    }

}

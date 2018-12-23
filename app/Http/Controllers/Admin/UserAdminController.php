<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Session; 
use DB;
use Hash;

class UserAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getUser()
    {
        $user = User::select('id','username','fullname','phone','email','address')->get();
        return view('admin.user.list_user',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createUser()
    {
        return view('admin.user.add_user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postUser(Request $request)
    {
        // dd($request->all());
        $user = new User();
        $user->username = $request->username;
        $user->fullname = $request->fullname;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->password = Hash::make($request->password);
        $user->remember_token = $request->_token;
        $user->save();
        return redirect()->route('user_admin')->with([
            "flash_message" => 'Đã Thêm Người Dùng Công: '
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function geteditUser($id)
    {
        $user = User::find($id);
        return view('admin.user.edit_user',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function posteditUser(Request $request,$id)
    {
        
        $user = User::find($id);
        $user->username = $request->username;
        $user->fullname = $request->fullname;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->remember_token = $request->_token;
        $user->save();
        
        return redirect()->route('user_admin')->with([
            "flash_message" => 'Đã Sửa Người Dùng Công: '
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postupdatUser(Request $request, $id)
    {
        $request->user()->fill([
            'password' => Hash::make($request->newPassword)
        ])->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getedeleteUser($id)
    {

        $user = User::find($id);
        $username = $user->username;
        $user->delete();
        return redirect()->route('user_admin')->with([
            "flash_message" => 'Bạn Đã Xóa Người Dùng Công: '
        ]);
    }
}

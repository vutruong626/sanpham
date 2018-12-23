<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\User;
use App\Models\Banner;
use Illuminate\Support\Facades\Storage;


class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getBanner()
    {
        $img = Banner::select('id','name','images','displaying')->get();
        return view('admin.banner.list_images',compact('img'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createimages()
    {
        return view('admin.banner.add_images');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postcreateimages(Request $request)
    {
        // dd($request->all()); 
        $file_img = $request->file('images')->getClientOriginalName();
        $img = new Banner();
        $img->name = $request->name;
        $img->displaying = $request->displaying;
        $img->link = $request->link;
        $img->nb_order = $request->nb_order;
        $img->images = $file_img;
        
        $path = $request->file('images')->move('images/',$file_img);
        // dd($path);
        $img->save();
        return redirect()->route('banner_admin')->with([
            "flash_message" => 'Bạn Đã Thêm Hình Ảnh Công: '.$img
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editimages($id)
    {
        $img = Banner::find($id);
        return view('admin.banner.edit_images',compact('img'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function posteditimages(Request $request, $id)
    {
        // dd($id);
        $file_img = $request->file('images')->getClientOriginalName();
        $file = pathinfo($file_img);
        $filename = str_replace([' ', '-'], '_' , $file['filename']);
        $filename = $filename . '_'. date('Ymdhis'). '.' .$file['extension'];
       
        $img = Banner::find($id);
        $img->name = $request->name;
        $img->link = $request->link;
        $img->nb_order = $request->nb_order;
        $img->displaying = round($request->displaying);
        $old_image = $img->images;
        if (!empty($filename)){
            $img->images = $filename;
            $request->file('images')->move(public_path().'/images/', $filename);
            // dd($path);
            
        } else {
            echo "No_Shut_File";
        }
            // return response($request->file('images'));
        $img->save();

        if (file_exists(public_path().'/images/'.$old_image)){
            unlink(public_path().'/images/'.$old_image);
        }
        return redirect()->route('banner_admin')->with([
            "flash_message" => 'Bạn Đã Sửa Hình Ảnh Công: '
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteimages($id)
    {
        //echo $id;
        $img = Banner::find($id);
        $img->delete($id);
        if (file_exists(public_path().'/images/'.$img->images)){
            unlink(public_path().'/images/'.$img->images);
        }
        return redirect()->route('banner_admin')->with([
            "flash_message" => 'Bạn Đã Xóa Hình Ảnh Công: '
        ]);
    }
}

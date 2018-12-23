<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use DB;
use App\Http\Requests\ErrorRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::select('id','name','email','website','fanpage','phone','address')->get();
        return view('admin.contact.list_contact',compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createContact()
    {
        return view('admin.contact.add_contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postcontact(ErrorRequest $request)
    {
        // dd($request->all());
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->website = $request->website;
        $contact->fanpage = $request->fanpage;
        $contact->phone = $request->phone;
        $contact->address = $request->address;
        $contact->save();
        return redirect()->route('list_contact')->with([
            "flash_message" => 'Đã Thêm Thông Tin Thành Công: '
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editContact($id)
    {
        $contact = Contact::find($id);
        return view('admin.contact.edit_contact',compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function posteditcontact(Request $request, $id)
    {
        // dd($request->all());
        $contact = Contact::find($id);
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->website = $request->website;
        $contact->fanpage = $request->fanpage;
        $contact->phone = $request->phone;
        $contact->address = $request->address;
        $contact->save();
        return redirect()->route('list_contact')->with([
            "flash_message" => 'Đã Sửa Thông Tin Thành Công: '
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteContact($id)
    {
        $contact = Contact::find($id);
        $name = $contact->name;
        $contact->delete();
        return redirect()->route('list_contact')->with([
            "flash_message" => 'Bạn Đã Xóa Thông Tin Thành Công: '.$name
        ]);
    }
}

@extends('admin.master')

@section('content')
<p>
    @if(session('contacts'))
    {{session('contacts')}}
    @endif
</p>


<div class="br-mainpanel">
      
        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5">Thông Tin</h4>
            <!-- <p class="mg-b-0">A collection basic to advanced table design that you can use to your data.</p> -->
        </div>

      <div class="br-pagebody">
      <div class="br-section-wrapper">
        <div class="card-footer">
            <a href="{{route('create_contact')}}" class="btn btn-success">Thêm Thông Tin
            </a>
        </div>
          <div class="bd bd-gray-300 rounded table-responsive">
            <table class="table mg-b-0">
              <thead>
                <tr>
                  <th>Stt</th>
                  <th>Tên</th>
                  <th>Email</th>
                  <th>Website</th>
                  <th>Fanpage</th>
                  <th>Số Điện Thoại</th>
                  <th>Địa Chỉ</th>
                  <th>Active</th>
                </tr>
              </thead>
              <tbody>
                @foreach($contact as $item_contact)
                    <tr role="row" class="odd">
                        <td class="" tabindex="0">{!! $item_contact->id !!}</td>
                        <td>{!! $item_contact->name !!}</td>
                        <td>{!! $item_contact->email !!}</td>
                        <td>{!! $item_contact->website !!}</td>
                        <td>{!! $item_contact->fanpage !!}</td>
                        <td> {!! $item_contact->phone !!}</td>
                        <td> {!! $item_contact->address !!} </td>
                        <td>
                            <a href="{{route('edit_contact',$item_contact->id)}}" class="btn btn-info">Sửa</a>
                            <a href="{{route('delete_contact',$item_contact->id)}}" class="btn btn-danger">Xóa</a>
                        </td>
                    
                        <!-- <li class="col-3 col-sm-2 col-lg-1 tx-center mg-t-10" title="eye"><i class="fa fa-eye"></i></li> -->
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div><!-- bd -->
        </div>
</div>
@endsection
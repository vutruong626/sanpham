@extends('admin.master')

@section('content')
<p>
    @if(session('bansers'))
    {{session('banners')}}
    @endif
</p>
<div class="br-mainpanel">
      
        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5">Hình Ảnh</h4>
            <!-- <p class="mg-b-0">A collection basic to advanced table design that you can use to your data.</p> -->
        </div>

      <div class="br-pagebody">
      <div class="br-section-wrapper">
        <div class="card-footer">
            <a href="{{route('create_images')}}" class="btn btn-success">Thêm Hình Ảnh  
            </a>
        </div>
          <div class="bd bd-gray-300 rounded table-responsive">
            <table class="table mg-b-0">
              <thead>
                <tr>
                  <th>Stt</th>
                  <th>Tên Hình Ảnh</th>
                  <th>Hình Ảnh</th>
                  <th>Hiển Thị</th>
                  <th>Active</th>
                </tr>
              </thead>
              <tbody>
              @foreach($img as $item_img)
                <tr role="row" class="odd">
                    <td class="" tabindex="0">{!! $item_img->id !!}</td>
                    <td>{!! $item_img->name !!}</td>
                    <td> <img src="{{asset('images/'.$item_img->images)}}" alt="" height="100"></td>
                    <td>
                        {!! $item_img->displaying  !!}
                    </td>
                    <td>
                        <a href="{{route('edit_images',$item_img->id)}}" class="btn btn-info ">Sửa </a>
                        <a href="{{route('delete_images',$item_img->id)}}" class="btn btn-danger">Xóa</a>
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
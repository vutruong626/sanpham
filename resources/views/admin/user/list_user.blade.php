@extends('admin.master')

@section('content')
<p>
    @if(session('users'))
    {{session('users')}}
    @endif
</p>

<div class="br-mainpanel">
      <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Người Dùng</h4>
        <!-- <p class="mg-b-0">DataTables is a plug-in for the jQuery Javascript library.</p> -->
      </div>
      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <div class="card-footer">
              <a href="{{route('create_user')}}" class="btn btn-success">Thêm Người Dùng
              </a>
          </div>
          <div class="table-wrapper">
            <div id="datatable1_wrapper" class="dataTables_wrapper no-footer">
            <div class="dataTables_length" id="datatable1_length">
            
            <table id="datatable1" class="table display responsive nowrap dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable1_info" style="width: 939px;">
              <thead>
              
                <tr role="row">
                    <th>Stt</th>
                    <th>Tên</th>
                    <th>Họ & Tên</th>
                    <th>Số Điện Thoại</th>
                    <th>Email</th>
                    <th>Địa Chỉ</th>
                    <th>Acction</th>
                    
                </tr>
              </thead>
              <tbody>
              @foreach($user as $item_user)
              <tr role="row" class="odd">
                  <td class="" tabindex="0">{!! $item_user->id !!}</td>
                  <td class="sorting_1">{!! $item_user->username !!}</td>
                  <td>{!! $item_user->fullname !!}</td>
                  <td>{!! $item_user->phone !!}</td>
                  <td>{!! $item_user->email !!}</td>
                  <td>{!! $item_user->address !!}</td>
                  <td>
                        <a href="{{route('edit_user',$item_user->id)}}" class="btn btn-info ">Sửa</a>
                        <a href="{{route('delete_user',$item_user->id)}}" class="btn btn-danger">Xóa</a>
                  </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <!-- <div class="dataTables_info" id="datatable1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                <div class="dataTables_paginate paging_simple_numbers" id="datatable1_paginate">
                    <a class="paginate_button previous disabled" aria-controls="datatable1" data-dt-idx="0" tabindex="0" id="datatable1_previous">Previous</a>
                    <span>
                        <a class="paginate_button current" aria-controls="datatable1" data-dt-idx="1" tabindex="0">1</a>
                        <a class="paginate_button " aria-controls="datatable1" data-dt-idx="2" tabindex="0">2</a>
                        <a class="paginate_button " aria-controls="datatable1" data-dt-idx="3" tabindex="0">3</a>
                        <a class="paginate_button " aria-controls="datatable1" data-dt-idx="4" tabindex="0">4</a>
                        <a class="paginate_button " aria-controls="datatable1" data-dt-idx="5" tabindex="0">5</a>
                        <a class="paginate_button " aria-controls="datatable1" data-dt-idx="6" tabindex="0">6</a>
                    </span><a class="paginate_button next" aria-controls="datatable1" data-dt-idx="7" tabindex="0" id="datatable1_next">Next</a>
                </div>
            </div> -->
          </div><!-- table-wrapper -->


        </div><!-- br-section-wrapper -->
      </div><!-- br-pagebody -->
      <footer class="br-footer">
        <div class="footer-left">
          <div class="mg-b-2">Copyright © 2017. Bracket. All Rights Reserved.</div>
          <div>Attentively and carefully made by ThemePixels.</div>
        </div>
        <div class="footer-right d-flex align-items-center">
          <span class="tx-uppercase mg-r-10">Share:</span>
          <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/bracket/intro"><i class="fa fa-facebook tx-20"></i></a>
          <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Bracket,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/bracket/intro"><i class="fa fa-twitter tx-20"></i></a>
        </div>
      </footer>
    </div>



@endsection
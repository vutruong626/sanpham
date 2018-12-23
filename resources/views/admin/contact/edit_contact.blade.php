@extends('admin.master')

@section('content')
<div class="br-mainpanel">
  <div class="br-section-wrapper">
        <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal" >
            {{csrf_field()}}
            <div class="row ">
              <div class="col-xl-12">
                <div class="form-layout form-layout-4">
                        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Sửa Thông Tin</h6>
                        <!-- <p class="mg-b-30 tx-gray-600">A basic form where labels are aligned in left.</p> -->
                        <div class="row">
                          <label class="col-sm-2 form-control-label">Tên: <span class="tx-danger">*</span></label>
                          <div class="col-sm-10 mg-t-10 mg-sm-t-0">
                            <input type="text" class="form-control" name="name" placeholder="Nhập Tên" value="{!! old('name',isset($contact) ? $contact['name'] : null) !!}">
                          </div>
                        </div><!-- row -->
                        <div class="row mg-t-20">
                          <label class="col-sm-2 form-control-label">Email: <span class="tx-danger">*</span></label>
                          <div class="col-sm-10 mg-t-10 mg-sm-t-0">
                            <input type="text" class="form-control" name="email" placeholder="Nhập Email" value="{!! old('email',isset($contact) ? $contact['email'] : null) !!}"> 
                          </div>
                        </div>
                        <div class="row mg-t-20">
                          <label class="col-sm-2 form-control-label">Website: <span class="tx-danger">*</span></label>
                          <div class="col-sm-10 mg-t-10 mg-sm-t-0">
                            <input type="text" class="form-control" name="website" placeholder="Nhập Website" value="{!! old('website',isset($contact) ? $contact['name'] : null) !!}">
                          </div>
                        </div>
                        <div class="row mg-t-20">
                          <label class="col-sm-2 form-control-label">Fanpage: <span class="tx-danger">*</span></label>
                          <div class="col-sm-10 mg-t-10 mg-sm-t-0">
                            <input type="text" class="form-control" name="fanpage" placeholder="Nhập Fanpage" value="{!! old('fanpage',isset($contact) ? $contact['fanpage'] : null) !!}">
                          </div>
                        </div>
                        <div class="row mg-t-20">
                          <label class="col-sm-2 form-control-label">Số Điện Thoại: <span class="tx-danger">*</span></label>
                          <div class="col-sm-10 mg-t-10 mg-sm-t-0">
                            <input type="text" class="form-control" name="phone" placeholder="Enter your Phone" value="{!! old('phone',isset($contact) ? $contact['phone'] : null) !!}">
                          </div>
                        </div>
                        <div class="row mg-t-20">
                          <label class="col-sm-2 form-control-label">Địa chỉ: <span class="tx-danger">*</span></label>
                          <div class="col-sm-10 mg-t-10 mg-sm-t-0">
                          <input type="text" class="form-control" name="address" placeholder="Nhập Số Điện Thoại" value="{!! old('address',isset($contact) ? $contact['address'] : null) !!}">
                          </div>
                        </div>
                        <div class="form-layout-footer mg-t-30">
                            <button type="submit" name="submit"  class="btn btn-info" >
                            <i class="fa #fa-dot-circle-o"></i> Thêm
                            </button>
                            <button type="button" class="btn btn-danger" onclick="getBack()">Thoát</button>
                                <script type="text/javascript">
                                function getBack() {
                                    history.go(-1);
                                }   
                </script>
                </div><!-- form-layout-footer -->
              </div><!-- form-layout -->
            </div><!-- col-6 -->
           
          </div>
          </form>
  </div>
</div>
@endsection
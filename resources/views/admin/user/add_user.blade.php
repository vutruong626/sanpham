@extends('admin.master')

@section('content')

<div class="br-mainpanel">
    <div class="br-pagebody">
        <div class="br-section-wrapper">
                    <form action="" method="post" class="">

                            {{csrf_field()}}
                        <div class="row ">
                        <div class="col-xl-12">
                        <div class="form-layout form-layout-4">
                        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Thêm Người Dùng : </h6>
                        </br>
                            <div class="row">
                            
                                <label class="col-sm-3 form-control-label">Tên : <span class="tx-danger">*</span></label>
                                <div class="col-12 col-md-9">
                                <input type="text" id="username" name="username" placeholder="Username" class="form-control" value="{!! old('username')!!}">
                                </div>
                            </div><!-- row -->
                            </br>
                            <div class="row">
                                <label class="col-sm-3 form-control-label">Họ & Tên : <span class="tx-danger">*</span></label>
                                <div class="col-12 col-md-9">
                                <input type="text" id="fullname" name="fullname" placeholder="fullname" class="form-control" value="{!! old('fullname')!!}">
                                </div>
                            </div><!-- row -->
                            </br>
                            <div class="row">
                                <label class="col-sm-3 form-control-label">Số Điện Thoại : <span class="tx-danger">*</span></label>
                                <div class="col-12 col-md-9">
                                <input type="text" id="phone" name="phone" placeholder="phone" class="form-control" value="{!! old('phone')!!}">
                                </div>
                            </div><!-- row -->
                            </br>
                            <div class="row">
                                <label class="col-sm-3 form-control-label">Email : <span class="tx-danger">*</span></label>
                                <div class="col-12 col-md-9">
                                <input type="email" id="email" name="email" placeholder="Email" class="form-control" value="{!! old('email')!!}">
                                </div>
                            </div><!-- row -->
                            </br>
                            <div class="row">
                                <label class="col-sm-3 form-control-label">Địa Chỉ : <span class="tx-danger">*</span></label>
                                <div class="col-12 col-md-9">
                                <input type="text" id="address" name="address" placeholder="address" class="form-control" value="{!! old('address')!!}">
                                </div>
                            </div><!-- row -->
                            </br>
                            <div class="row">
                                <label class="col-sm-3 form-control-label">Mật Khẩu : <span class="tx-danger">*</span></label>
                                <div class="col-12 col-md-9">
                                <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                                </div>
                            </div><!-- row -->
                            </br>
                            <div class="row">
                                <label class="col-sm-3 form-control-label">Nhập Lại Mật Khẩu : <span class="tx-danger">*</span></label>
                                <div class="col-12 col-md-9">
                                <input type="password" id="password" name="password" placeholder="RePassword" class="form-control">
                                </div>
                            </div><!-- row -->
                            </br>
                            
                                <div class="form-actions form-group">
                                    <button type="submit" class="btn btn-info ">Thêm</button>
                                    <button type="button" class="btn btn-danger" onclick="getBack()">Thoát</button>
                                            <script type="text/javascript">
                                                function getBack() {
                                                history.go(-1);
                                                }   
                                            </script>
                                </div>
                        </div>
                        </div>
                        </div>

                    </form>
            </div>
        </div>
</div>

@endsection

<i class="fas fa-blender-phone"></i>

@extends('admin.master') 

@section('content')
<div class="br-mainpanel">
    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal" >
                {{csrf_field()}}
                <div class="row ">
                <div class="col-xl-12">
                <div class="form-layout form-layout-4">

                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Thêm Hình Ảnh : </h6>
                    </br>
                    <!-- <p class="mg-b-30 tx-gray-600">A basic form where labels are aligned in left.</p> -->
                    <div class="row">
                    <label class="col-sm-2 form-control-label">Tên Hình Ảnh : <span class="tx-danger">*</span></label>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="name" placeholder="Tên Hình Ảnh" class="form-control">
                        </div>
                    </div><!-- row -->
                    <div class="row mg-t-20">
                    <label class="col-sm-2 form-control-label">Thứ Tự: <span class="tx-danger">*</span></label>
                    <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="nb_order" placeholder="Thứ Tự" class="form-control">
                        </div>
                    </div>
                    <div class="row mg-t-20">
                    <label class="col-sm-2 form-control-label">Website: <span class="tx-danger">*</span></label>
                    <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="link" placeholder="Link" class="form-control">
                        </div>
                    </div>
                    </br>
                    <div class="row form-group">
                        <div class="col col-md-2"><label for="file-input" class=" form-control-label">Hình Ảnh: </label></div>
                        <div class="col-12 col-md-9"><input type="file" id="file-input" name="images" class="form-control-file"></div>
                    </div>
                    <div class="row mg-t-20">
                    <label class="col-sm-2 form-control-label">Hiển Thị: <span class="tx-danger">*</span></label>
                    <div class="col col-md-9">
                            <div class="form-check-inline form-check">
                            <label class="ckbox ckbox-success mg-t-15">
                                <input type="checkbox" checked="" name="displaying"><span></span>
                            </label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-layout-footer mg-t-30">
                        <button type="submit" name="submit"  class="btn btn-info" >
                        <i class="fa #fa-dot-circle-o"></i> Thêm
                        </button>
                        <button type="button" class="btn btn-danger " onclick="getBack()">Thoát</button>
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
</div>
@endsection
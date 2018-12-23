@extends('admin.master')

@section('content')

<div class="br-mainpanel">
    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal" >
                {{csrf_field()}}
                    <div class="col-xl-12">
                        <div class="form-layout form-layout-4">
                            
                                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Sửa Hình Ảnh : </h6>
                                    </br>

                                    <div class="row form-group">
                                        <div class="col col-md-2">
                                            <label for="text-input" class=" form-control-label">Tên Hình Ảnh :</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="name" name="name" class="form-control" value="{!! old('name',isset($img) ? $img['name'] : null) !!}">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-2">
                                            <label for="text-input" class=" form-control-label">Thứ Tự :</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="nb_order" placeholder="numerical order" class="form-control" value="{!! old('nb_order',isset($img) ? $img['nb_order'] : null) !!}">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-2">
                                            <label for="text-input" class=" form-control-label">Link:</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="link" placeholder="Link" class="form-control" value="{!! old('link',isset($img) ? $img['link'] : null) !!}">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-2"><label for="file-input" class=" form-control-label">Hình Ảnh : </label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="file" id="file-input" name="images" class="form-control-file" value="$img['images']" >
                                            <img src="{!! asset('images/'.$img['images']) !!}" style="width: 400px; height: 150px;">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-2"><label class=" form-control-label">Hiển Thị :</label></div>
                                        <div class="col col-md-9">
                                            <div class="form-check-inline form-check">
                                            <label class="ckbox ckbox-success mg-t-15">
                                                <input type="checkbox" checked="" name="displaying"><span></span>
                                            </label>
                                            </div>
                                        </div>
                                    </div>
                                        <button type="submit" name="submit"  class="btn btn-info" >
                                            <i class="fa #fa-dot-circle-o"></i> Thêm
                                        </button>
                                        <button type="button" class="btn btn-danger" onclick="getBack()">Thoát</button>
                                            <script type="text/javascript">
                                            function getBack() {
                                                history.go(-1);
                                            }   
                                            </script>
                                
                        </div>
                            
                        
                    </div>
            </form>
        </div>
    </div>
</div> 
@endsection
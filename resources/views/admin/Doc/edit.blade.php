@extends('layouts.app')
@section('content')
<div class="row">
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
    <div class="row">

      <div class="col-md-12">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body card-block">
              <form action="{{ route('documents.update',$model->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
              	{{ @csrf_field() }}
				{{ method_field('PUT') }}
                <div class="row form-group">
                  <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên đề tài</label></div>
                  <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Tên đề tài" value="{{$model->document_name}}" class="form-control"><small class="form-text text-muted"></small></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3"><label for="text-input" class=" form-control-label">Lĩnh vực</label></div>
                  <div class="col-12 col-md-9">
                    <select name="select" id="select" class="form-control">
                      <option value="0">--Chọn--</option>
                      <option value="1">CNTT</option>
                      <option value="2">Môi trường</option>
                      <option value="3">Du lịch</option>
                      <option value="4">Hóa học</option>
                      <option value="5">Sinh học</option>
                      <option value="6">Sử học</option>
                      <option value="7">Tài chính-Ngân hàng</option>
                    </select>
                  </div>
              </div>
                <!-- <div class="row form-group">
                  <div class="col col-md-3"><label for="text-input" class=" form-control-label">Ngày tải lên</label></div>
                  <div class="col-12 col-md-9"><input type="date" id="text-input" name="text-input" placeholder="Text" class="form-control"><small class="form-text text-muted"></small></div>
                </div> -->
                <!-- <div class="row form-group">
                  <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nguồn tải</label></div>
                  <div class="col-12 col-md-9"><input value="" type="text" id="text-input" name="text-input" placeholder="text" class="form-control"><small class="form-text text-muted"></small></div>
                </div> -->
                <div class="row form-group">
                  <div class="col col-md-3"><label for="select" class=" form-control-label">Anh</label></div>
                  <div class="col-12 col-md-9">
                  	<img src="{{$model->document_image}}">
                  	<input type="file" id="text-input" name="text-input" placeholder="Text"><small class="form-text text-muted"></small>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3"><label for="text-input" class=" form-control-label">Link</label></div>
                  <div class="col-12 col-md-9"><input value="{{$model->document_link}}" type="text" id="text-input" name="text-input" placeholder="Text" class="form-control"><small class="form-text text-muted"></small></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3"><label for="text-input" class=" form-control-label">Trạng thái</label></div>
                  <div class="col-12 col-md-9">
                    <select name="select" id="select" class="form-control">
                      <option value="0">--Chọn--</option>
                      <option value="1">Đã duyệt</option>
                      <option value="2">Chưa duyệt</option>
                      <option value="3">Không duyệt</option>
                    </select>
                  </div>
              
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary btn-sm" >
                <i class="fa fa-dot-circle-o"></i> Sửa
                              </button> 
              <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Hủy
              </button>
            </div>
            </form>
          </div>
        </div>


      </div>
    </div><!-- .animated -->
                            </div>
                        </div>
                    </div>
@endsection
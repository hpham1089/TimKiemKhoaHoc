@extends('layouts.app')
@section('content')
<div class="row">
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body"><div class="row">

      <div class="col-md-12">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body card-block">
              <form action="{{ route('documents.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                
                <div class="row form-group">
                  <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên tài liệu</label></div>
                  <div class="col-12 col-md-9"><input name="document_name" type="text" id="text-input" name="text-input" placeholder="Nhập tên tài liệu" class="form-control"><small class="form-text text-muted"></small></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3"><label for="text-input" class=" form-control-label">Chọn tệp tải lên</label></div>
                  <div class="col-12 col-md-9"><input type="file" id="text-input" name="text-input" placeholder="Text"></div>
                </div>
                <!-- <div class="row form-group">
                  <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Nội dung</label></div>
                  <div class="col-12 col-md-9"><textarea name="textarea-input" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea></div>
                </div> -->
                <div class="row form-group">
                  <div class="col col-md-3"><label for="select" class=" form-control-label">Thể loại</label></div>
                  <div class="col-12 col-md-9">
                    <select name="select" id="select" class="form-control" name="document_type">
                      <option value="Ngoại ngữ">Ngoại ngữ</option>
                      <option value="Công nghệ thông tin">Công nghệ thông tin</option>
                      <option value="Khoa học - Triết học">Khoa học - Triết học</option>
                      <option value="Hóa học">Hóa học</option>
                      <option value="Sinh học">Sinh học</option>
                      <option value="Sử học">Sử học</option>
                      <option value="Du Lịch">Du Lịch</option>
                    </select>
                  </div>
                </div>


                <input type="hidden" name="document_link" value="none">
                <input type="hidden" name="document_image" value="none">
                <input type="hidden" name="user_id" value="1">
              
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i>Tải lên
              </button>
              <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i>Hủy
              </button>
            </div>
            </form>
          </div>
        </div>
@endsection
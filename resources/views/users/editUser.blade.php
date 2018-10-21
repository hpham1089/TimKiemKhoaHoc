@extends('layouts.app')
@section('content')

                <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
    <div class="row">

      <div class="col-md-12">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body card-block">
              <form action="{{ route('user.update',$model->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
              	{{ @csrf_field() }}
				{{ method_field('PUT') }}
                <div class="row form-group">
                  <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên đăng nhập</label></div>
                  <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Nhập tên đăng nhập" value="{{$model->user_name}}" class="form-control"><small class="form-text text-muted"></small></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mật khẩu</label></div>
                  <div class="col-12 col-md-9"><input type="password" id="text-input" name="text-input" placeholder="Nhập mật khẩu" value="{{$model->user_password}}" class="form-control"><small class="form-text text-muted"></small></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3"><label for="text-input" class=" form-control-label">Họ tên</label></div>
                  <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Nhập họ tên" value="{{$model->user_fullname}}" class="form-control"><small class="form-text text-muted"></small></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3"><label for="text-input" class=" form-control-label">Ảnh đại diện</label></div>
                  <div class="col-12 col-md-9"><input type="file" id="text-input" name="text-input" value="{{$model->user_image}}" placeholder="Text"><small class="form-text text-muted"></small></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3"><label for="select" class=" form-control-label">Giới tính</label></div>
                  <div class="col-12 col-md-9">
                    <select name="select" id="select" class="form-control">
                      <option value="0">--Chọn--</option>
                      <option value="1">Nam</option>
                      <option value="2">Nữ</option>
                    </select>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email</label></div>
                  <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Nhập Email" value="{{$model->user_email}}" class="form-control"><small class="form-text text-muted"></small></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3"><label for="text-input" class=" form-control-label">Số điện thoại</label></div>
                  <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Nhập số điện thoại" value="{{$model->user_phone}}" class="form-control"><small class="form-text text-muted"></small></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3"><label for="text-input" class=" form-control-label">Ngày sinh</label></div>
                  <div class="col-12 col-md-9"><input type="date" id="text-input" name="text-input" placeholder="Text" v{{$model->user_birthday}} class="form-control"><small class="form-text text-muted"></small></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3"><label for="text-input" class=" form-control-label">Địa chỉ</label></div>
                  <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Text" value="{{$model->user_address}}"  class="form-control"><small class="form-text text-muted"></small></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3"><label for="text-input" class=" form-control-label">Phân quyền</label></div>
                  <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="text" value="{{$model->user_role}}" class="form-control"><small class="form-text text-muted"></small></div>
                </div>
                <div class="card-footer">
              <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Sửa thành viên
              </button>
              <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Hủy
              </button>
            </div>
              </form>
            </div>
            
          </div>
        </div>


      </div>
    </div><!-- .animated -->
                            </div>
                        </div>
                    </div>
    </div>
 @endsection
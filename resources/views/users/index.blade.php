@extends('layouts.app')

@section('content')
<div class="card-body">
              <h4 class="header-title">Danh sách người dùng</h4>
  				<a href="{{ route('user.create') }}"> Add new user</a>
                <div class="data-tables">
                  <table id="dataTable" class="text-center">
                   <thead class="bg-light text-capitalize">
                           <tr>
                                <th>ID</th>
                                <th>Tên đăng nhập</th>
                                <th>Mật khẩu</th>
                                <th>email</th>
                                <th>Họ Tên</th>
                                <th>Ngày sinh</th>
                                <th>Ảnh</th>
                                <th>Giới tính</th>
                                <th>Số điện thoại</th> 
                                <th>Địa chỉ</th>  
                   			    <th>Phân quyền</th>                   
                       </tr>
                 </thead>
               <tbody> 
               	@foreach($data as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->user_name}}</td>
                                <td>{{$item->user_password}}</td>
                                <td>{{$item->user_email}}</td>
                                <td>{{$item->user_fullname}}</td>
                                <td>{{$item->user_birthday}}</td>
                                <td>{{$item->user_image}}</td>
                                <td>{{$item->user_sex}}</td>
                                <td>{{$item->user_phone}}</td>
                                <td>{{$item->user_address}}</td>
                                <td>{{$item->user_role}}</td>
                                <td>
                                    <a href="{{ route('user.edit',$item->id) }}">Edit</a>
                                    <a href="{{ route('user.destroy',$item->id) }}" class="destroy">Delete</a>
                                </td>
                            </tr>
                            @endforeach                       
           </tbody>
        </table>
        </div>
    </div>
    
@endsection
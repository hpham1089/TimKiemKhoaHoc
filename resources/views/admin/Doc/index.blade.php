@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Danh sách tài liệu</h4>
                    <a href="{{ route('documents.create') }}"> Add new document</a>
                    <div class="data-tables">
                        <table id="dataTable" class="text-center">
                            <thead class="bg-light text-capitalize">
                            <tr>
                                <th>ID</th>
                                <th>Tên Tài Liệu</th>
                                <th>Thể Loại</th>
                                <th>Ảnh Tài Liệu</th>
                                <th>Link</th>
                                <th>user_id</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->document_name}}</td>
                                <td>{{$item->document_type}}</td>
                                <td>{{$item->document_image}}</td>
                                <td>{{$item->document_link}}</td>
                                <td>{{$item->user_id}}</td>
                                <td>
                                    <a href="{{ route('documents.edit',$item->id) }}">Edit</a>
                                    <a href="{{ route('documents.destroy',$item->id) }}" class="destroy">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


     

@endsection


@extends('layouts.app')



@section('content')

<!-- slide bar -->
@include('layouts.partials.users.slidebar')

<!-- Page content -->
<div class='col-md-9'>
    <div id = "page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                     @if(session('thongbao'))
                        <div class='alert alert-success'>
                            {{session('thongbao')}}
                        </div>
                    @endif
                    <h1 class="page-header">Sản phẩm
                        <small>danh sách</small>
                    </h1>

                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <head>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá tiền</th>
                                <th>Đơn vị tính</th>
                                <th>Số lượng</th>
                                <th>Tóm tắt</th>
                                <th>Mô tả</th>
                                <th>Nổi bật</th>
                                <th>Số lượt xem</th>
                                <th>IdLoai</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </head>
                        <tbody>
                            @foreach($pro as $item)
                                <tr class="odd gradeX" align="center">
                                    <td>{{$item->id}}</td>
                                    <td><p>{{$item->ten}}</p>
                                        <img width="100px" src="{{$item->hinh}}">
                                    </td>
                                    <td>{{$item->giatien}}</td>
                                    <td>{{$item->donvitinh}}</td>
                                    <td>{{$item->soluong}}</td>
                                    <td>{{$item->tomtat}}</td>
                                    <td>{{$item->mota}}</td>
                                    <td>
                                        @if($item->noibat == 1)
                                            {{"Có"}}
                                        @else
                                            {{"Không"}}
                                        @endif
                                    </td>
                                    <td>{{$item->soluotxem}}</td>
                                    <td>{{$item->idloai}}</td>
                                    
                                    <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="/product/{{$item->id}}/delete">Delete</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i><a href="/product/{{$item->id}}/edit">Edit</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="filter pagination">
                                    {!!$pro->links()!!}
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

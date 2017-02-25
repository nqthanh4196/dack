@extends('layouts.app')



@section('content')

<!-- slide bar -->
@include('layouts.partials.users.slidebar')

<!-- Page content -->
<div class='col-md-9'>
    <div id = "page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                     
                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{$err}}<br>
                            @endforeach
                        </div>
                    @endif

                    
                    <form class="contact-form" action="/product/{{$product->id}}" method="POST" enctype="multipart/form-data">
                        {{ method_field('PUT') }}
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <h1 class="page-header">Sản phẩm <small>{{$product->ten}}</small></h1> 


                        <div class="row row-fit-20">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Tên sản phẩm <span>*</span></label>
                                    <input class="form-control" type="text" name="TenSP" placeholder="Nhập tên loại" value="{{$product->ten}}"/>
                                </div>
                            </div>
                        </div>

                        <div class="row row-fit-20">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Giá tiền <span>*</span></label>
                                    <input class="form-control" type="number" name="GiaTien" placeholder="Nhập giá tiền"
                                    value="{{$product->giatien}}"/>
                                </div>
                            </div>
                        </div>

                        <div class="row row-fit-20">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Số lượng<span>*</span></label>
                                    <input class="form-control" type="number" name="SoLuong" placeholder="Nhập số lượng" 
                                    value="{{$product->soluong}}"/>
                                </div>
                            </div>
                        </div>

                        <div class="row row-fit-20">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Đơn vị tính <span>*</span></label>
                                    <input class="form-control" type="text" name="DonViTinh" placeholder="Nhập đơn vị tính" value="{{$product->donvitinh}}"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">


                        <div class="row row-fit-20">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Mã loại <span>*</span></label>
                                    <select class="form-control" name="MaLoai">
                                            @foreach($class as $item)
                                                <option 
                                                @if ($item->id == $product->idloai)
                                                    {{"selected"}}
                                                @endif 
                                                value="{{$item->id}}">{{$item->tenloai}}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row row-fit-20">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Nhà sản xuất <span>*</span></label>
                                    <select class="form-control" name="MaNSX">
                                        @foreach($sup as $item)
                                            <option 
                                            @if ($item->id == $product->idnsx)
                                                    {{"selected"}}
                                            @endif 
                                            value="{{$item->id}}">{{$item->tennsx}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row row-fit-20">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Tóm tắt <span>*</span></label>
                                    <textarea name="tomtat" id="tomtat" rows="10" cols="80" >{{$product->tomtat}}</textarea>                          
                                </div>
                            </div>
                        </div>
                            
                        <div class="row row-fit-20">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Mô tả <span>*</span></label>
                                    <textarea name="mota" id="mota" rows="10" cols="80" >{{$product->mota}}</textarea>                          
                                </div>
                            </div>
                        </div>

                        <div class="row row-fit-20">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Nổi bật <span>*</span></label><br>
                                    <div class="radio-inline">
                                      <input type="radio" name="rdo" value="1" 
                                      @if($product->noibat == 1)
                                        {{"checked"}}
                                      @endif>
                                      <label>Có</label>
                                    </div>
                                    <div class="radio-inline">
                                      <input type="radio" name="rdo" value="0" 
                                      @if($product->noibat == 0)
                                        {{"checked"}}
                                      @endif>
                                      <label>Không</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row row-fit-20">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="file" name="image"/>
                                    <img width="400" style="border: 1px solid black;" src="../../{{$product->hinh}}"  alt = "shop product" >
                                </div>
                            </div>
                        </div>

                        <div class="row row-fit-20">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control " type="submit" value="Sửa" />
                            </div>
                        </div>
                    </div>

                  </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('script')
<script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'mota' );
        CKEDITOR.replace( 'tomtat' );
    </script>
@endsection
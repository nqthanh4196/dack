@extends('layouts.master')
@section('content')
<!-- Main Content -->
<div class="main-content">
    <div class="container">
        <div class="row row-fit-20">
            <!-- Content -->
            <div class="col-md-9">
                <div class="single-product">
                    <div class="row row-fit-20">

                        <!-- Single Product Cover Images -->
                        <div class="col-sm-5">
                            <div class="single-product-cover">

                                <div class="cover-slider">
                                    <ul class="slides">
                                        <li>
                                            <img src="../{{$pro->hinh}}" />
                                        </li>
                                    </ul>
                                </div>

                                <div class="controls">
                                    <ul class="slides">
                                        <li>
                                            <img src="../{{$pro->hinh}}" />
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <!-- Single Product Details -->
                        <div class="col-sm-7">
                            <div class="single-product-description">

                                <div class="single-product-header">
                                    <h2>{{$pro->ten}}</h2>
                                    <p class="price">{{$pro->giatien}} {{$pro->donvitinh}}</p>
                                    <p>{{$pro->tomtat }}</p>
                                </div>

                                <div class="single-product-body">
                                    
                                    <!-- Size & Quantity -->
                                    <div class="size-qty">

                                        <div class="quantity group">
                                            <span class="group-caption">Số lượng </span>
                                            <input id="sl" type="number" value="1" min="1" />
                                            <span class="group-caption">Còn {{$pro->soluong}} mặt hàng</span>

                                            <p class="group-caption">Số lượt xem : {{$pro->soluotxem}}</p>
                                            <p class="group-caption">Nhà sản xuất : {{$pro->supplier->tennsx}}</p>

                                            <!-- Add to Bag -->
                                            <a href="../cart/{{$pro->id}}" class="add-to-bag"><span>Thêm vào giỏ hàng</span> <i class="icon-bag"></i></a>
                                        </div>
                                        
                                    </div>
                        
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabs">
                            <h4>Mô tả</h4>
                            <div class="description-box">
                                {{$pro->mota}}
                            </div>
                    </div>
                    <div id="reviews">
                        <!-- Review Box -->
                        <div class="review-box" id="review-box">
                            <!-- Review Form -->
                            <div class="review-form-wrapper">
                                <h4>Bình luận</h4>

                                @if(count($errors)>0)
                                    <div class="alert alert-danger">
                                        @foreach($errors->all() as $err)
                                            {{$err}}<br>
                                        @endforeach
                                    </div>
                                @endif

                                @if(session('loi'))
                                    <div class="alert alert-danger">
                                       {{session('loi')}}
                                    </div>
                                @endif

                                @if(session('thongbao'))
                                    <div class='alert alert-success'>
                                        {{session('thongbao')}}
                                    </div>
                                @endif
                                <form class="review-form" method="POST" action="/comment">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <input type="hidden" name="idpro" value="{{$pro->id}}">
                                    @if (Auth::guest())
                                        <input type="text" name="name" placeholder="Name" />
                                    @else
                                        <input type="hidden" name="name" value="{{ Auth::user()->id}}" />
                                        <input type="text" value="{{ Auth::user()->name}}" readonly="" />
                                    @endif
                                    <textarea name="message" placeholder="Nội dung"></textarea>
                                    <input type="submit" value="Thêm bình luận" />
                                </form>

                            </div>
                            <!-- User Reviews -->
                            @foreach($com as $item)
                                    <div class="col-sm-5">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <strong>{{$item->user->name}}</strong> 
                                            </div>
                                            <div class="panel-body">
                                                <p>{{$item->noidung}}</p>
                                            </div><!-- /panel-body -->
                                        </div><!-- /panel panel-default -->
                                    </div><!-- /col-sm-5 -->

                                    <div class="col-sm-1">
                                        <div class="thumbnail">
                                            <img class="img-responsive user-photo" src="../img/user_1.jpg">
                                        </div><!-- /thumbnail -->
                                    </div><!-- /col-sm-1 -->                 
                            @endforeach

                            <!-- Filter - Pagination -->
                            <div class="filter pagination">
                                    {!!$com->links()!!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

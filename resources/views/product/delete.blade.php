@extends('layouts.app')

@section('content')

    @include('layouts.partials.users.slidebar')

        <!-- Main Content -->
    <div class="main-content">
        <div class="contact-us">
        <div class="container">
            <div class="row row-fit-20">
                <div class="row">
                <h1 class="page-header">Sản phẩm
                            <small>Xóa</small>
                        </h1>

                <!-- Content -->
                <div class="col-md-9">
                    <div class="single-product">
                        <div class="row row-fit-20">
                            <form class="contact-form" action="/product/{{$pro->id}}" method="POST" enctype="multipart/form-data">
                                {{ method_field('DELETE') }}
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <!-- Single Product Cover Images -->
                                <div class="col-sm-5">
                                    <div class="single-product-cover">

                                        <div class="cover-slider">
                                            <ul class="slides">
                                                <li>
                                                    <img src="../../{{$pro->hinh}}" />
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="controls">
                                            <ul class="slides">
                                                <li>
                                                    <img src="../../{{$pro->hinh}}" />
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
                                            <div class="rating 0">
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <a href="#review-box" class="review smooth-scroll-link">review &#40;<span>3</span>&#41;</a>
                                            <p>{{$pro->mota }}</p>
                                        </div>

                                        <div class="single-product-body">
                                            <!-- Color Picker -->
                                            <div class="color group">
                                                <p class="group-caption">Màu</p>

                                                <div class="input-group pink">
                                                    <label>
                                                        <input type="radio" name="color-picker" checked />
                                                        <span class="color-option">
        														<i class="fa fa-check"></i>
        													</span>
                                                    </label>
                                                </div>

                                                <div class="input-group blue">
                                                    <label>
                                                        <input type="radio" name="color-picker" />
                                                        <span class="color-option">
        														<i class="fa fa-check"></i>
        													</span>
                                                    </label>
                                                </div>

                                                <div class="input-group green">
                                                    <label>
                                                        <input type="radio" name="color-picker" />
                                                        <span class="color-option">
        														<i class="fa fa-check"></i>
        													</span>
                                                    </label>
                                                </div>
                                            </div>

                                            <!-- Size & Quantity -->
                                            <div class="size-qty">
                                                <!-- Select Size -->

                                                <!-- Select Quantity -->
                                                <div class="quantity group">
                                                    <p class="group-caption">{{$pro->soluong}}</p>
                                                    <input type="number" value="1" min="1" />
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-sm-8">
                                    <div class="submit-block">
                                        <input type="submit" value="Xóa" />
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <br>
@endsection

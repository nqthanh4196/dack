
@extends('layouts.master')

@section('content')
<!-- Main Content -->
<div class="main-content no-padding">

<div class="container">
    <div class="row row-fit-20">

        <!-- Content -->
        <div class="col-md-9">
            <!-- Shop Page Filters -->
            <div class="shop-page-filters">
                <!-- Filter - Grid Type -->
                <div class="filter grid-type">

                    <span>Xem dưới dạng</span>
                    <a href="shop-grid.html" class="grid active"><i class="icon-grid2"></i></a>
                    <a href="shop-list.html" class="list"><i class="fa fa-th-list"></i></a>

                </div>

                <!-- Filter - Sorting -->
                <div class="filter sorting">

                    <span>Xắp xếp</span>
                    <select>
                        <option selected>-</option>
                        <option>Sản phẩm mới</option>
                        <option>Giá từ thấp đến cao</option>
                        <option>Giá từ cao đến thấp</option>
                    </select>

                    <span>Show</span>
                    <select>
                        <option selected>12</option>
                        <option>16</option>
                        <option>24</option>
                    </select>

                </div>

            </div>

            <!-- Items -->
            <div class="shop-page-items">

                <div class="row row-fit-20">
                   @foreach($pro as $item)
                        <div class="col-sm-6 col-md-4">
                            <div class="shop-product">

                                <h2><a href="#">{{$item->ten}}</a></h2>
                                    <p class="price">{{$item->giatien}} {{$item->donvitinh}}</p>

                                <div class="image">
                                    <div class="hover-details">
                                        <div class="actions">
                                            <div class="action">
                                                <a href="../product/{{$item->id}}" class="view-details-btn"><span>Xem chi tiết</span> <i class="icon-search"></i></a>
                                            </div>
                                            <div class="action">
                                                <a href="../cart/{{$item->id}}" class="add-to-bag"><span>Thêm vào giỏ hàng</span> <i class="icon-bag"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <img src="../{{$item->hinh}}"  alt = "shop product" >
                                </div>

                            </div>
                        </div>
                    @endforeach
                    
                    </div>
                </div>
                
                    <!-- Filter - Pagination -->
                    <div class="filter pagination">
                            {!!$pro->links()!!}
                    </div>
                
            </div>

        </div>
    </div>

</div>
@endsection

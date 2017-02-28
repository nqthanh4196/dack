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
                        <option>Sản phẩm mới Nhất</option>
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
                   @include('composers.Product')
                    
                </div>
                </div>
                <!-- Shop Page Filters -->
                <div class="shop-page-filters">
                    <!-- Filter - Grid Type -->
                    <div class="filter grid-type">

                        <span>Xem bằng</span>
                        <a href="shop-grid.html" class="grid active"><i class="icon-grid2"></i></a>
                        <a href="shop-list.html" class="list"><i class="fa fa-th-list"></i></a>

                    </div>

                    <!-- Filter - Sorting -->
                    <div class="filter sorting">

                        <span>Sắp xếp</span>
                        <select>
                            <option selected>-</option>
                            <option>Sản phẩm mới nhất</option>
                            <option>Giá từ thấp đến cao</option>
                            <option>Giá từ cao đến thấp</option>
                        </select>

                        <span>Xem</span>
                        <select>
                            <option selected>12</option>
                            <option>16</option>
                            <option>24</option>
                        </select>

                    </div>

                </div>
            </div>

        </div>
    </div>

</div>
@endsection
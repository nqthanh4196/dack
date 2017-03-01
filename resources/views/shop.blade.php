@extends('layout.master')
@section('content')
        <!-- Main Content -->
        <div class="main-content no-padding">

            <div class="container">
                <div class="row row-fit-20">

                    <!-- Sidebar -->
                    <div class="col-md-3">
                        <div class="sidebar no-margin-widgets">

                            <!-- Sidebar Header -->
                            <div class="sidebar-header">
                                <h2>Danh mục sản phẩm</h2>
                            </div>

                            <div class="row row-fit-20">

                                <div class="col-xs-12 col-md-12 col-sm-6">
                                    <!-- Sidebar Widget - Filter Categories -->
                                    <div class="widget filter-categories">
                                        <a data-toggle="collapse" href="#categories-wrapper" aria-expanded="false" aria-controls="categories-wrapper" class="heading">
                                            <i class="fa fa-plus"></i>
                                            <span>Categories</span>
                                        </a>

                                        <div class="collapse in categories-wrapper" id="categories-wrapper">

                                            <ul>
                                                @foreach($loaisanpham as $item)
                                                <li><a href="#">{{$item->tenloai}}</a></li>
                                                @endforeach
                                            </ul>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-md-12 col-sm-6">
                                    <!-- Sidebar Widget - Filter Price -->
                                    <div class="widget filter-price">
                                        <h3 class="widget-header">Giá</h3>

                                        <div class="widget-body">

                                            <!-- Slider -->
                                            <div class="price-slider" data-min="1" data-max="100" data-start="1" data-stop="50" data-step="1"></div>

                                            <!-- Price Box -->
                                            <div class="price-box">
                                                <span class="min"></span>
                                                <span>-</span>
                                                <span class="max"></span>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-md-12 col-sm-6">
                                    <!-- Sidebar Widget - Filter Color -->
                                    <div class="widget filter-color">
                                        <h3 class="widget-header">Color</h3>

                                        <div class="widget-body">
                                            <div class="color-select">

                                                <div class="input-group red">
                                                    <label>
                                                        <input type="checkbox" name="color-picker" />
                                                        <span class="color-option">
																<i class="fa fa-check"></i>
															</span>
                                                    </label>
                                                </div>

                                                <div class="input-group cream">
                                                    <label>
                                                        <input type="checkbox" name="color-picker" />
                                                        <span class="color-option">
																<i class="fa fa-check"></i>
															</span>
                                                    </label>
                                                </div>

                                                <div class="input-group blue">
                                                    <label>
                                                        <input type="checkbox" name="color-picker" />
                                                        <span class="color-option">
																<i class="fa fa-check"></i>
															</span>
                                                    </label>
                                                </div>

                                                <div class="input-group green">
                                                    <label>
                                                        <input type="checkbox" name="color-picker" />
                                                        <span class="color-option">
																<i class="fa fa-check"></i>
															</span>
                                                    </label>
                                                </div>

                                                <div class="input-group yellow">
                                                    <label>
                                                        <input type="checkbox" name="color-picker" />
                                                        <span class="color-option">
																<i class="fa fa-check"></i>
															</span>
                                                    </label>
                                                </div>

                                                <div class="input-group orange">
                                                    <label>
                                                        <input type="checkbox" name="color-picker" />
                                                        <span class="color-option">
																<i class="fa fa-check"></i>
															</span>
                                                    </label>
                                                </div>

                                                <div class="input-group brown">
                                                    <label>
                                                        <input type="checkbox" name="color-picker" />
                                                        <span class="color-option">
																<i class="fa fa-check"></i>
															</span>
                                                    </label>
                                                </div>

                                                <div class="input-group black">
                                                    <label>
                                                        <input type="checkbox" name="color-picker" />
                                                        <span class="color-option">
																<i class="fa fa-check"></i>
															</span>
                                                    </label>
                                                </div>

                                                <div class="input-group pink">
                                                    <label>
                                                        <input type="checkbox" name="color-picker" />
                                                        <span class="color-option">
																<i class="fa fa-check"></i>
															</span>
                                                    </label>
                                                </div>

                                                <div class="input-group grey">
                                                    <label>
                                                        <input type="checkbox" name="color-picker" />
                                                        <span class="color-option">
																<i class="fa fa-check"></i>
															</span>
                                                    </label>
                                                </div>

                                                <div class="input-group white">
                                                    <label>
                                                        <input type="checkbox" name="color-picker" />
                                                        <span class="color-option">
																<i class="fa fa-check"></i>
															</span>
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-md-12 col-sm-6">
                                    <!-- Sidebar Widget - Tags -->
                                    <div class="widget tags">
                                        <h3 class="widget-header">Tags</h3>

                                        <div class="widget-body">
                                            <ul>
                                                <li><a href="#">Laptop</a></li>
                                                <li><a href="#">Bàn phím</a></li>
                                                <li><a href="#">Chuột</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-md-12 col-sm-6">
                                    <!-- Sidebar Widget - Search -->
                                    <div class="widget search">
                                        <form class="search-form">
                                            <input type="search" class="search-input" placeholder="Search Product" />
                                            <input type="submit" class="search-submit" value="" />
                                            <i class="icon icon-search"></i>
                                        </form>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

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

                            <!-- Filter - Pagination -->
                            <div class="filter pagination">

                                <ul>
                                    <li class="current"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">Next <i class="fa fa-long-arrow-right"></i></a></li>
                                </ul>

                            </div>
                        </div>

                        <!-- Items -->
                        <div class="shop-page-items">

                            <div class="row row-fit-20">
                                @foreach($sanpham as $item)
                                <div class="col-sm-6 col-md-4">
                                    <div class="shop-product">

                                        <h2><a href="#">{{$item->ten}}</a></h2>
                                        <p class="price">{{$item->giatien}} {{$item->donvitinh}}</p>
                                        <div class="rating 0">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="image">
                                            <div class="hover-details">
                                                <div class="actions">
                                                    <div class="action">
                                                        <a href="#" class="quick-view-btn"><span>Quick View</span> <i class="icon-eye"></i></a>
                                                    </div>
                                                    <div class="action">
                                                        <a href="single-product" class="view-details-btn"><span>Details</span> <i class="icon-search"></i></a>
                                                    </div>
                                                    <div class="action">
                                                        <a href="#" class="add-to-bag"><span>Add to Bag</span> <i class="icon-bag"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <img src="img/steelseries_rival_300_csgo_hyperbeast_edition.jpg" alt="shop product" />
                                        </div>

                                    </div>
                                </div>
                                @endforeach

                                    
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
                                        <option>Sản phẩm mới</option>
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

                                <!-- Filter - Pagination -->
                                <div class="filter pagination">

                                    <ul>
                                        <li class="current"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">Next <i class="fa fa-long-arrow-right"></i></a></li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
@endsection
@extends('layout.master')
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
                                                    <img src="img/ducky-one-tkl-greyblue-pbt-us-4-jpg.jpg" alt="slider image" />
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="controls">
                                            <ul class="slides">
                                                <li>
                                                    <img src="img/ducky-one-tkl-greyblue-pbt-us-4-jpg.jpg" alt="slider image" />
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>

                                <!-- Single Product Details -->
                                <div class="col-sm-7">
                                    <div class="single-product-description">

                                        <div class="single-product-header">
                                            <h2>Bàn phím Ducky One PBT Grey Blue/ Blue</h2>
                                            <p class="price">2.550.000 đ</p>
                                            <div class="rating 0">
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <a href="#review-box" class="review smooth-scroll-link">review &#40;<span>3</span>&#41;</a>
                                            <p>Bàn phím cơ chính hãng</p>
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
                                                    <p class="group-caption">Số lượng</p>
                                                    <input type="number" value="1" min="1" />
                                                </div>
                                            </div>

                                            <!-- Add to Bag -->
                                            <a href="#" class="add-to-bag"><span>Thêm vào giỏ hàng</span> <i class="icon-bag"></i></a>
                                        </div>

                                    </div>
                                </div>

                            </div>


                            <!-- Description & Reviews -->
                            <div class="tabs">
                                <ul class="heading">
                                    <li><a href="#description">Mô tả</a></li>
                                    <li><a href="#reviews">Đánh giá &#40;<span>3</span>&#41;</a></li>
                                </ul>

                                <div id="description">
                                    <!-- Description Box -->
                                    <div class="description-box">
                                        <p>Bàn phím cơ chính hãng.</p>
                                    </div>
                                </div>

                                <div id="reviews">
                                    <!-- Review Box -->
                                    <div class="review-box" id="review-box">
                                        <!-- User Reviews -->
                                        <div class="user-reviews">

                                            <!-- Reviews -->
                                            <div class="user-review">
                                                <div class="row row-fit">

                                                    <div class="col-sm-4">
                                                        <div class="user">
                                                            <div class="user-details">

                                                                <div class="image">
                                                                    <img src="img/review-avatar-1.jpg" alt="user avatar" />
                                                                </div>

                                                                <h4>Châu Hoài Đức</h4>
                                                                <div class="rating">
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="review-body">

                                                            <span class="date">&#40;6 tiếng trước&#41;</span>
                                                            <p>Hàng tốt.</p>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>





                                            <!-- Review Form -->
                                            <div class="review-form-wrapper">
                                                <h4>Viết đánh giá</h4>
                                                <p>Viết đánh giá theo mẫu bên dưới</p>

                                                <form class="review-form">
                                                    <input type="text" name="review-name" placeholder="Tên" />
                                                    <input type="text" name="review-email" placeholder="E-mail" />
                                                    <input type="text" name="review-subject" placeholder="Tiêu đề" />
                                                    <textarea name="review-message" placeholder="Nội dung"></textarea>
                                                    <input type="submit" value="Thêm đánh giá" />
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
            @endsection

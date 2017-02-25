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
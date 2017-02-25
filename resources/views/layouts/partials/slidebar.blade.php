<!-- Sidebar -->
        <div class="col-md-3">
            <div class="sidebar no-margin-widgets">

                <!-- Sidebar Header -->
                <br>
                <div class="sidebar-header">
                    <h2>Danh mục sản phẩm</h2>
                </div>

                <div class="row row-fit-20">

                    
                    @include('composers.Classify')
                    
                    <div class="sidebar-header">
                        <h2>Nhà sản xuất</h2>
                    
                        
                        @include('composers.Supplier')
                           

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
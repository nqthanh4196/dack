@extends('layout.master')
@section('content')
        <!-- Main Content -->
        <div class="main-content">
            <div class="contact-us">
                <div class="container">
                    <div class="row">

                        <div class="col-md-3 col-md-offset-2">
                            <div class="section-header">
                                <h1>Liên hệ với chúng tôi</h1>

                                <div class="contact-block address">
                                    <h4>Địa chỉ</h4>
                                    <p>123 Nguyễn Văn Cừ Tp.Hồ Chí Minh</p>
                                </div>

                                <div class="contact-block phone">
                                    <h4>Số điện thoại</h4>
                                    <p>0126 357 246</p>
                                    <p>0121 121 121</p>
                                </div>

                                <div class="contact-block mail">
                                    <h4>Mail</h4>
                                    <p><a href="#">catshop@gmail.com</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <p>Để việc thanh toán cũng như việc giao nhận hàng thành công giữa đôi bên, bạn vui lòng điền đầy đủ thông tin yêu cầu cá nhân. Nếu quý khách thanh toán sau 24giờ kể từ khi đặt hàng, www.catshop.vn sẽ có toàn quyền thay đổi trị giá thanh toán theo tỷ giá ngoại tệ mới nhất tại thời điểm hiện hành.</p>

                            <form class="contact-form">
                                <h3>Mẫu giử tin nhắn</h3>
                                <p>Gửi tin nhắn theo mẫu bên dưới</p>

                                <div class="row row-fit-20">
                                    <div class="col-sm-4">
                                        <div class="input-group">
                                            <p>Tên</p>
                                            <input type="text" />
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="input-group">
                                            <p>E-mail <span>*</span></p>
                                            <input type="text" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row row-fit-20">
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <p>Tiêu đề <span>*</span></p>
                                            <input type="text" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row row-fit-20">
                                    <div class="col-sm-10">
                                        <div class="input-group">
                                            <p>Nội dung <span>*</span></p>
                                            <textarea></textarea>
                                        </div>

                                        <div class="submit-block">
                                            <input type="submit" value="write" />
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Map Wrapper -->
        <div id="map-wrapper"></div>
@endsection
</div>
</body>
</html>

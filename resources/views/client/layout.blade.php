<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>TimkiemKhoahoc.VN</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('client.css')
    <base href="{{asset('')}}">
</head>

<body>

    <!-- Body main wrapper start -->
    <div class="wrapper">
    
        <!-- HEADER AREA START -->
        <header class="header-area header-wrapper">
            <div class="header-top-bar bg-white">
                <div class="container">
                </div>
            </div>
            <div id="sticky-header" class="header-middle-area  transparent-header hidden-xs">
                <div class="container">
                    <div class="full-width-mega-drop-menu">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="sticky-logo">
                                    <a href="index.html">
                                        <img src="client/images/logo/logo1.png" alt="">
                                    </a>
                                </div>
                                <nav id="primary-menu">
                                    <ul class="main-menu text-center" style="padding-top: 15px; margin-bottom: 0px;">
                                        <li><a class="active" href="index.html">Trang chủ</a>
                                        </li>
                                        <li><a href="#">Giới thiệu</a>
                                        </li>
                                        <li><a href="index.html">Luận văn báo cáo</a>
                                            <ul class="drop-menu">
                                                <li><a href="properties-list-1.html">Thạc sĩ- Cao đẳng</a></li>
                                                <li><a href="properties-list-2.html">Kinh tế - quản lý</a></li>
                                                <li><a href="properties-list-3.html">Khoa học tự nhiên</a></li>
                                                <li><a href="properties-list-3.html">Lý luận chính trị</a></li>
                                                <li><a href="properties-list-3.html">Công nghệ thông tin</a></li>
                                                <li><a href="properties-list-3.html">Kĩ Thuật</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <form action="">
                                                <div class="form-group" style="margin-bottom: 0px;" >
                                                    <input type="text" class="form-control" placeholder="Tìm Kiếm" name="search"  style="" >
                                                    <button type="button" class="btn btn-default btn-sm">
                                                    <span class="glyphicon glyphicon-search"></span> 
                                                    </button>
                                                </div>
                                              </form>
                                        </li>
                                        <li ><a href="form-login.html">
                                            <button type="button" class="btn btn-default btn-sm">
                                            <span class="glyphicon glyphicon-cloud-upload"></span> Upload 
                                            </button></a></li>

                                        <li style="margin-left: 0px"><a href="form-login.html">
                                            <button type="button" class="btn btn-default btn-sm">
                                            <span class="glyphicon glyphicon-user"></span> Đăng nhập 
                                            </button></a></li></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER AREA END -->
        
 <!-- MOBILE MENU AREA START -->
        <div class="mobile-menu-area hidden-sm hidden-md hidden-lg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li><a href="index.html">Trang chủ</a></li>
                                    <li><a href="about.html">Giới thiệu</a></li>
                                    <li><a href="index.html">Luận văn báo cáo</a>
                                        <ul>
                                            <li><a href="properties-list-1.html">Thạc sĩ- Cao đẳng</a></li>
                                            <li><a href="properties-list-2.html">Kinh tế - quản lý</a></li>
                                            <li><a href="properties-list-3.html">Khoa học tự nhiên</a></li>
                                            <li><a href="properties-list-3.html">Lý luận chính trị</a></li>
                                            <li><a href="properties-list-3.html">Công nghệ thông tin</a></li>
                                            <li><a href="properties-list-3.html">Kĩ Thuật</a></li>
                                        </ul>
                                    </li>
                                    <li >
                                        <a href="form-login.html"><span class="glyphicon glyphicon-cloud-upload"></span> Upload </a>
                                    </li>
                                    <li>
                                        <a href="form-login.html"><span class="glyphicon glyphicon-user"></span> Đăng nhập </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MOBILE MENU AREA END -->

       @yield('content')
        <!-- Start footer area --><!-- Start footer area -->
        <footer id="footer" class="footer-area bg-2 bg-opacity-black-90">
            <div class="footer-top pt-20 pb-20">
                <div class="container">
                    <div class="row">
                        <!-- footer-address -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-widget">
                                <h6 class="footer-titel">Nhóm 9_KTPM 2_K10_Phát triển phần mềm hướng dịch vụ</h6>
                                <ul class="footer-address">
                                    <li>
                                        <div class="address-icon">
                                            <img src="images/icons/location-2.png" alt="">
                                        </div>
                                        <div class="address-info">
                                            <span>Địa chỉ: Đại học công nghiệp Hà Nội</span>
                                            <span>Minh Khai - Bắc Từ Liêm - Hà Nội</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="address-icon">
                                            <img src="images/icons/phone-3.png" alt="">
                                        </div>
                                        <div class="address-info">
                                            <span>Hotline: (+84) 987 654 321</span>
                                            <span>Hotline: (+84) 987 654 321</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="address-icon">
                                            <img src="images/icons/world.png" alt="">
                                        </div>
                                        <div class="address-info">
                                            <span>Email : hpham1089@gmail.com</span>
                                            <span>Fb :<a href="https://www.facebook.com/hpham108" target="_blank"> hpham108</a></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- footer-latest-news -->
                        <div class="col-lg-6 col-md-5 hidden-sm col-xs-12">
                            <div class="footer-widget middle">
                                <h6 class="footer-titel">Thành viên nhóm</h6>
                                <ul class="footer-latest-news">
                                    <li>
                                        <div class="latest-news-image">
                                            <a href="https://www.facebook.com/hpham108"><img src="images/hung.jpg" alt=""></a>
                                        </div>
                                        <div class="latest-news-info">
                                            <h6><a href="single-blog.html">Phạm Hùng</a></h6>
                                            <p>Diễn Châu - Nghệ An</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="latest-news-image">
                                            <a href="single-blog.html"><img src="images/congle.jpg" alt=""></a>
                                        </div>
                                        <div class="latest-news-info">
                                            <h6><a href="https://www.facebook.com/profile.php?id=100005566717776">Lê Văn Công</a></h6>
                                            <p>Xuân Trường - Nam Định </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="latest-news-image">
                                            <a href="https://www.facebook.com/maianh.lanhchanh.5"><img src="images/maianh.jpg" alt=""></a>
                                        </div>
                                        <div class="latest-news-info">
                                            <h6><a href="single-blog.html">Trần Mai Anh</a></h6>
                                            <p>TP Nam Định - Nam Định </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- footer-contact -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="footer-widget">
                                <h6 class="footer-titel">LIÊN HỆ</h6>
                                <div class="footer-contact">
                                    <p>Vui lòng nhập thông tin có dấu</p>
                                    <form  id="contact-form-2" action="mail_footer.php" method="post">
                                        <input type="email" name="email2" placeholder="Email của bạn...">
                                        <textarea name="message2" placeholder="Bạn quan tâm..."></textarea>
                                        <button type="submit" value="send">Gửi</button>
                                    </form>
                                    <p class="form-messege"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="copyright text-center">
                                <p>Copyright &copy; 2018 <a href="https://www.facebook.com/hpham108" target="_blank"><b>Hung Pham</b></a>. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End footer area -->
    </div>
    <!-- Body main wrapper end -->

@include('client.js')


</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- css files -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style-login.css" rel="stylesheet" type="text/css" media="all" />
<!-- /css files -->
    <!-- Bootstrap fremwork main css -->
    <link rel="shortcut icon" type="image/x-icon" href="images/icons/favicon.png">
    <link rel="stylesheet" href="css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



<body>
  <header class="header-area header-wrapper">
            <div class="header-top-bar bg-white">
                <div class="container">
                </div>
            </div>
            <div id="sticky-header" class="header-middle-area  transparent-header hidden-xs" style="position: inherit;">
                <div class="container">
                    <div class="full-width-mega-drop-menu">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="sticky-logo">
                                    <a href="index.html">
                                        <img src="images/logo/logo1.png" alt="">
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
                                                    <input type="text" class="form-control" placeholder="Tìm Kiếm" name="search"  style="width: 200px;" >
                                                    <button type="button" class="btn btn-default btn-sm">
                                                    <span class="glyphicon glyphicon-search"></span> 
                                                    </button>
                                                </div>
                                              </form>
                                        </li>
                                        <li ><a href="#">
                                            <button type="button" class="btn btn-default btn-sm">
                                            <span class="glyphicon glyphicon-cloud-upload"></span> Upload 
                                            </button></a></li>

                                        <li style="margin-left: 0px"><a href="Form-Login.html">
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
<div class="container demo-1" style="margin-left: 0px;margin-right: 0px;padding-left: 0px;padding-right: 0px;width: 1583px;">
  <div class="content">
        <div id="large-header" class="large-header" style="position: absolute;">
      <h1 style="color: floralwhite;">Đăng nhập</h1>
        <div class="main-agileits">
        <!--form-stars-here-->
            <div class="form-w3-agile">
              <h2>Đăng nhập ở đây</h2>
              <form action="?controller=user&action=login" method="post">
                <div class="form-sub-w3">
                  <input type="text" name="Username" placeholder="Tên đăng nhập " required="" />
                <div class="icon-w3">
                  <i class="fa fa-user" aria-hidden="true"></i>
                </div>
                </div>
                <div class="form-sub-w3">
                  <input type="password" name="Password" placeholder="Mật khẩu" required="" />
                <div class="icon-w3">
                  <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                </div>
                </div>
                <p class="p-bottom-w3ls">Quên mật khẩu?<a class href="#">  Click đây</a></p>
                <p class="p-bottom-w3ls1">Chưa có tài khoản?<a class href="form-register.html">  Đăng kí đây</a></p>
                <div class="clear"></div>
                <div class="submit-w3l">
                  <input type="submit" value="Đăng nhập">
                </div>
              </form>
              <div class="social w3layouts">
                <div class="heading">
                  <h5>Đăng nhâp bằng</h5>
                  <div class="clear"></div>
                </div>
                <div class="icons">
                  <a href="#"><i class="fa fa-facebook" aria-hidden="true" style="width: 41px"></i></a>
                  <a href="#"><i class="fa fa-twitter" aria-hidden="true"style="width: 41px"></i></a>
                  <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"style="width: 41px"></i></a>
                  <a href="#"><i class="fa fa-linkedin" aria-hidden="true"style="width: 41px"></i></a>
                  <div class="clear"></div>
                </div>
                <div class="clear"></div>
              </div>
            </div>
        <!--//form-ends-here-->
        </div><!-- copyright -->
          <div class="copyright w3-agile">
            <p> © 2017 Login Form . All rights reserved | Design by </p>
          </div>
          <!-- //copyright --> 
        </div>
  </div>
</div>  
</body>
</html>
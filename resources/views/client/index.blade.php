 @extends('client.layout')
 @section('content')

         <!-- BREADCRUMBS AREA START -->
        <div class="breadcrumbs-area bread-bg-1 bg-opacity-black-70">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcrumbs">
                            <h2 class="breadcrumbs-title">Tìm kiếm báo cáo
                                <form action="">
                                    <div class="form-group"  >
                                        <textarea class="form-control" name="message2" placeholder="Nhập từ khóa..." style="    background-color: #ffffff00;"></textarea>
                                        <button type="button" class="btn btn-default btn-sm">Search
                                        </button>
                                    </div>
                                </form>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMBS AREA END -->
        
        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">
            
            <!-- FEATURED FLAT AREA START -->
            <div class="featured-flat-area pt-115">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="featured-flat">
                                <div class="row">
                                    <!-- flat-item -->
                                    @foreach($data as $item)
                                    <div class="col-md-6 col-sm-6 col-xs-12" style="height: 450px">
                                        <div class="flat-item">
                                            <div class="flat-item-image">
                                                <a href="{{$item->document_link}}"><img src="{{$item->document_image}}" alt=""></a>
                                                <div class="flat-link">
                                                    <a href="{{$item->document_link}}">Chi tiết</a>
                                                </div>
                                                <ul class="flat-desc">
                                                    <li style="width: 80%">
                                                        <div class="row">
                                                            <div class="col-md-4" style="float left">
                                                                <span class="glyphicon glyphicon-list-alt">{{$item->created_at}}</span>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <span class="glyphicon glyphicon-eye-open"> 30</span>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <span class="glyphicon glyphicon-download-alt"> 50</span>
                                                            </div>
                                                        </div>
                                                        <div class="row" >
                                                            <div class="col-md-4" style="float:left">
                                                                <span class="glyphicon glyphicon-folder-open"> Nguồn</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="flat-item-info">
                                                <div class="flat-title-price">
                                                    <h5><a href="properties-details.html">{{$item->document_name}}</a></h5>
                                                    <button type="button" class="btn btn-default btn-sm" style="float:right">
                                                      <span class="glyphicon glyphicon-download-alt"></span> Download
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- pagination-area -->
                                    <div class="col-xs-12">
                                        <div class="pagination-area mb-60">
                                            <ul class="pagination-list text-center">
                                                <li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                                                <li><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <!-- widget-search -->
                            <!-- widget-search-property -->
                            <aside class="widget widget-search-property mb-30">
                                <h5>Tìm kiếm báo cáo</h5>
                                <div class="row">
                                    <div class="col-md-6 col-sm-3 col-xs-12">
                                        <div class="find-home-item custom-select">                  
                                            <select class="selectpicker" title="Chọn danh mục" data-hide-disabled="true" data-live-search="true">
                                                <optgroup disabled="disabled" label="disabled">
                                                    <option>Hidden</option>
                                                </optgroup>
                                                <optgroup>
                                                    <option>Thạc sĩ- Cao đẳng</option>
                                                    <option>Kinh tế - quản lý</option>
                                                    <option>Khoa học tự nhiên</option>
                                                    <option>Công nghệ thông tin</option>
                                                    <option>Lý luận chính trị</option>
                                                    <option>Kĩ Thuật</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-3 col-xs-12">
                                        <div class="find-home-item custom-select">                  
                                            <select class="selectpicker" title="Chọn đề tài" data-hide-disabled="true" data-live-search="true">
                                                <optgroup disabled="disabled" label="disabled">
                                                    <option>Hidden</option>
                                                </optgroup>
                                                <optgroup>
                                                    <option>Khoa học tự nhiên</option>
                                                    <option>Công nghệ thông tin</option>
                                                    <option>Kĩ Thuật</option>
                                                </optgroup>
                                            </select>
                                        </div> 
                                    </div>
                                    <div class="col-md-6 col-sm-3 col-xs-12">
                                        <div class="find-home-item  custom-select">                  
                                            <select class="selectpicker" title="Chọn môn học" data-hide-disabled="true" data-live-search="true">
                                                <optgroup disabled="disabled" label="disabled">
                                                    <option>Hidden</option>
                                                </optgroup>
                                                <optgroup>
                                                    <option>Toán Học</option>
                                                    <option>Văn Học</option>
                                                    <option>Lịch Sử</option>
                                                    <option>Địa Lý</option>
                                                    <option>Hóa Học</option>
                                                    <option>Sinh Học</option>
                                                    <option>Ngoại Ngữ</option>
                                                   
                                                </optgroup>
                                            </select>
                                        </div> 
                                    </div>
                                    
                                    <div class="col-md-6 col-sm-3 col-xs-12">
                                        <div class="find-home-item">
                                            <a class="button-1 btn-block btn-hover-1" href="#">Tìm kiếm</a>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                            <!-- widget-recent-post -->
                            <aside class="widget widget-recent-post mb-50">
                                <h5>Bài viết khác</h5>
                                <div class="row">
                                    <!-- blog-item -->
                                    <div class="col-md-12 col-sm-6 col-xs-12">
                                        <article class="recent-post-item">
                                            <div class="recent-post-image">
                                                <a href="single-blog.html"><img src="client/images/recent-post/2.jpg" alt=""></a>
                                            </div>
                                            <div class="recent-post-info">
                                                <div class="recent-post-title-time">
                                                    <h5><a href="single-blog.html">Từ ngữ chỉ không gian nghệ thuật trong hát phường vải Nghệ Tĩnh.</a></h5>
                                                    <p>July 30, 2018 / 10 am</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- blog-item -->
                                    <div class="col-md-12 col-sm-6 col-xs-12">
                                        <article class="recent-post-item">
                                            <div class="recent-post-image">
                                                <a href="single-blog.html"><img src="client/images/recent-post/2.jpg" alt=""></a>
                                            </div>
                                            <div class="recent-post-info">
                                                <div class="recent-post-title-time">
                                                    <h5><a href="single-blog.html">Từ ngữ chỉ không gian nghệ thuật trong hát phường vải Nghệ Tĩnh.</a></h5>
                                                    <p>July 30, 2018 / 10 am</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- blog-item -->
                                    <div class="col-md-12 col-sm-6 col-xs-12">
                                        <article class="recent-post-item">
                                            <div class="recent-post-image">
                                                <a href="single-blog.html"><img src="client/images/recent-post/2.jpg" alt=""></a>
                                            </div>
                                            <div class="recent-post-info">
                                                <div class="recent-post-title-time">
                                                    <h5><a href="single-blog.html">Từ ngữ chỉ không gian nghệ thuật trong hát phường vải Nghệ Tĩnh.</a></h5>
                                                    <p>July 30, 2018 / 10 am</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- blog-item -->
                                    <div class="col-md-12 col-sm-6 col-xs-12">
                                        <article class="recent-post-item">
                                            <div class="recent-post-image">
                                                <a href="single-blog.html"><img src="client/images/recent-post/2.jpg" alt=""></a>
                                            </div>
                                            <div class="recent-post-info">
                                                <div class="recent-post-title-time">
                                                    <h5><a href="single-blog.html">Từ ngữ chỉ không gian nghệ thuật trong hát phường vải Nghệ Tĩnh.</a></h5>
                                                    <p>July 30, 2018 / 10 am</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FEATURED FLAT AREA END -->
        </section>
        <!-- End page content -->
@endsection
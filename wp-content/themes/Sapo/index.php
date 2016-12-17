<?php
/*
    Template Name: Home
*/
get_header(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="clip_yt">
            <div class="layer_clip"></div>
            <div id="video-player"></div>
            <div class="info_first">
                <h1>Phần mềm quản lý bán hàng dễ sử dụng nhất</h1>
                <p>Bán hàng tiện lợi, kết nối vận chuyển nhanh chóng và quản lý hàng hóa chính xác</p>
                <a href="#" class="trial_btn hover-animation">Dùng thử miễn phí</a>
                <div class="arrow_bottom">
                    <a href="#introduce_why"><img src="<?php echo url."/images/icon/arrow_down.png" ?>" alt="arrow down"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
if(have_rows('introduce-home')):
    while(have_rows('introduce-home')):the_row();
    if(get_row_layout() == 'all-infomation'):
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="introduce_why">
            <div class="introduce_why text-center" >
                <h2>Tại sao hơn 5,000 Shop, cửa hàng lại thích sử dụng Sapo?</h2>
                <p>Đơn giản, dễ sử dụng, tiết kiệm tối đa chi phí của bạn</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 introduce_img">
                <img src="<?php the_sub_field('introduce-images') ?> " alt="Introduce" class="img-responsive">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <ul class="explain_why">
                    <li class="item_why">
                        <div class="item_why_img">
                            <i class="icon_lap"></i>
                            <style media="screen">
                                .icon_lap{
                                    background: url("<?php the_sub_field('icon-introduce-home-1') ?>") no-repeat center center;
                                }
                            </style>
                        </div>
                        <div class="item_why_content">
                            <?php the_sub_field('introduce-home-1') ?>
                            <!-- <h3><a>Ai cũng có thể sử dụng!</a></h3>
                            <p>Sapo vận hành đơn giản, giao diện thông minh thân thiện nên đặc biệt rất dễ sử dụng cho mọi khách hàng. Bạn chỉ mất 5 phút làm quen là đã thao tác và bắt đầu bán hàng trên phần mềm.</p> -->
                        </div>
                    </li>
                    <li class="item_why">
                        <div class="item_why_img">
                            <i class="icon_list"></i>
                            <style media="screen">
                                .icon_list{
                                    background: url("<?php echo the_sub_field('icon-introduce-home-2') ?>") no-repeat center center;
                                }
                            </style>
                        </div>
                        <div class="item_why_content">
                            <?php the_sub_field('introduce-home-2') ?>
                            <!-- <h3><a>Tính năng quản lý không giới hạn</a></h3>
                            <p>Kho ứng dụng phong phú, đáp ứng đầy đủ tính năng cho mọi ngành nghề kinh doanh, hỗ trợ triệt để cho chủ cửa hàng quản lý, bán hàng, Marketing hay chăm sóc khách hàng</p> -->
                        </div>
                    </li>
                    <li class="item_why">
                        <div class="item_why_img">
                            <i class="icon_clock"></i>
                            <style media="screen">
                                .icon_clock{
                                    background: url("<?php the_sub_field('icon-introduce-home-3') ?>") no-repeat center center;
                                }
                            </style>
                        </div>
                        <div class="item_why_content">
                            <?php the_sub_field('introduce-home-3') ?>
                            <!-- <h3><a>Tiết kiệm gấp ba thời gian & chi phí</a></h3>
                            <p>Chỉ với 3,000 đồng một ngày để giải quyết hơn 1,001 vấn đề cần quản lý của cửa hàng từ hàng tồn kho, hàng quá hạn sử dụng đến công nợ khách hàng nhà cung cấp, hay doanh số và hiệu quả bán hàng của từng nhân viên...</p> -->
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center introduce_trial">
                <a href="#" class="trial_btn hover-animation">Dùng thử miễn phí</a>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php endwhile;endif; ?>


<div class="container-fluid">
    <div class="row">
        <div class="all_services">
            <div class="text-center">
                <a class="btn_arrow" href="#all_customer"></a>
                <div class="introduce_services">
                    <h3>Phần mềm quản lý bán hàng đa ngành nghề kinh doanh</h3>
                    <p>Hãy lựa chọn ngành nghề của bạn để tìm hiểu thêm các tính năng vượt trội mà Sapo cung cấp</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                        <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2 services-item">
                            <a href="#">
                                <i class="services_fashion"></i>
                                <span>Cửa hàng thời trang</span>
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2 services-item">
                            <a href="#">
                                <i class="services_grocery"></i>
                                <span>Cửa hàng tạp hóa</span>
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2 services-item">
                            <a href="#">
                                <i class="services_beauti"></i>
                                <span>Cửa hàng mỹ phẩm</span>
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2 services-item">
                            <a href="#">
                                <i class="services_toy"></i>
                                <span>Cửa hàng đồ chơi</span>
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2 services-item">
                            <a href="#">
                                <i class="services_vegetarian"></i>
                                <span>Cửa hàng thực phẩm</span>
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2 services-item">
                            <a href="#">
                                <i class="services_store"></i>
                                <span>Siêu thị mini</span>
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2 services-item">
                            <a href="#">
                                <i class="services_phymacy"></i>
                                <span>Cửa hàng thuốc</span>
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2 services-item">
                            <a href="#">
                                <i class="services_child"></i>
                                <span>Cửa hàng mẹ và bé</span>
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2 services-item">
                            <a href="#">
                                <i class="services_flower"></i>
                                <span>Cửa hàng hoa quà tặng</span>
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2 services-item">
                            <a href="#">
                                <i class="services_build"></i>
                                <span>Cửa hàng VLXD</span>
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2 services-item">
                            <a href="#">
                                <i class="services_book"></i>
                                <span>Cửa hàng sách</span>
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2 services-item">
                            <a href="#">
                                <i class="services_plus"></i>
                                <span>Xem thêm</span>
                            </a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  People say us-->
<?php get_template_part('template-part/people-say-us') ?>
<!-- Introduce team work -->
<div class="container-fluid">
    <div class="row">
        <div class="about_team">
            <div class="container">
                <div class="row">
                    <div class="introduce_team text-center">
                        <h3>Đồng hành 24/7 cùng công việc quản lý bán hàng của bạn</h3>
                        <p>Sapo mang đến giải pháp tốt nhất cho hơn 5,000 khách hàng</p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 info-team">
                        <i class="icon_team"></i>
                        <hr>
                        <span>
                            <strong>500+</strong>
                             nhân viên
                        </span>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 info-team">
                        <i class="icon_customer"></i>
                        <hr>
                        <span>
                            <strong>5,000+</strong>
                             khách hàng
                        </span>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 info-team">
                        <i class="icon_awards"></i>
                        <hr>
                        <span>
                            <strong>30+</strong>
                             chứng nhận
                        </span>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 hotline">
                        <i class="icon_phone"></i>
                        <span>
                            Hotline:
                            <strong>1900 1560</strong>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  Start Trial-->
<?php get_template_part('template-part/start-trial') ?>
<?php get_footer(); ?>

<?php
/*
    Template Name: Tính Năng
*/
get_header(); ?>
<?php if(have_posts()):while(have_posts()):the_post(); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="clip_yt feature_first">
                <div class="layer_clip"></div>
                <style media="screen">
                    .feature_first{
                        background:url("<?php the_post_thumbnail_url(); ?>") no-repeat top center;
                        background-size: cover;
                    }
                </style>
                <div class="info_first">

                    <h1>Phần mềm <span class="text-lowercase"><?php the_title(); ?></span> phù hợp cho mọi cửa hàng</h1>
                    <p>Bán hàng nhanh chóng, quản lý chính xác, tiết kiệm tối đa thời gian chi phí</p>
                    <a href="#" class="trial_btn hover-animation">Dùng thử miễn phí</a>
                    <div class="arrow_bottom">
                        <a href="#introduce_why"><img src="<?php echo url."/images/icon/arrow_down.png" ?>" alt="arrow down"></a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 introduce_feature" id="introduce_why">
                <?php the_content(); ?>
            </div>
<?php
if(have_rows('feature')):
    while(have_rows('feature')):the_row();
?>
        <?php if(get_row_layout() == 'feature-1'): ?>
            <div class="info_feature1">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="info_first_feature">
                        <div class="icon_feature">
                            <i class="icon-field"></i>
                            <style media="screen">
                                .icon-field{
                                    background: url("<?php the_sub_field('icon-1') ?>") no-repeat center center;
                                }
                            </style>
                        </div>
                        <div class="info_detail_feature">
                            <?php the_sub_field('content-1') ?>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="image_feature_1">
                        <img src="<?php the_sub_field('images-1') ?>" alt="<?php the_title(); ?>">
                    </div>
                </div>
            </div>
        <?php endif; ?>
        </div>
    </div>

    <!--  feature 2-->
    <?php if(get_row_layout() == 'feature-2'): ?>
    <div class="info_feature2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="image_feature_1">
                        <img src="<?php the_sub_field('images-2') ?>" alt="<?php the_title(); ?>">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="info_first_feature">
                        <div class="icon_feature">
                            <i class="icon-field2"></i>
                            <style media="screen">
                                .icon-field2{
                                    background: url("<?php the_sub_field('icon-2') ?>") no-repeat center center;
                                }
                            </style>
                        </div>
                        <div class="info_detail_feature">
                            <?php the_sub_field('content-2') ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 arrow_feature">
                <a href="#info_feature4">
                    <img src="<?php echo url."/images/bg-arrow-down.png" ?>" alt="arrow down">
                </a>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php if(get_row_layout() == 'feature-3'): ?>
    <!--  feature 3 -->
    <div class="container-fluid">
        <div class="row">
            <div class="info_feature1">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="info_first_feature">
                        <div class="icon_feature">
                            <i class="icon-field3"></i>
                            <style media="screen">
                                .icon-field3{
                                    background: url("<?php the_sub_field('icon-3') ?>") no-repeat center center;
                                }
                            </style>
                        </div>
                        <div class="info_detail_feature">
                            <?php the_sub_field('content-3') ?>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="image_feature_1">
                        <img src="<?php the_sub_field('images-3') ?>" alt="<?php the_title(); ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php if(get_row_layout() == 'feature-4'): ?>
    <!--  feature 4-->
    <div class="info_feature4" id="info_feature4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="image_feature_1">
                        <img src="<?php the_sub_field('images-4') ?>" alt="<?php the_title(); ?>">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="info_first_feature">
                        <div class="icon_feature">
                            <i class="icon-field4"></i>
                            <style media="screen">
                                .icon-field4{
                                    background: url("<?php the_sub_field('icon-4') ?>") no-repeat center center;
                                }
                            </style>
                        </div>
                        <div class="info_detail_feature add_btn_hover">
                            <?php the_sub_field('content-4') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 arrow_feature">
                <a href="#finally_feature">
                    <img src="<?php echo url."/images/bg-arrow-down.png" ?>" alt="arrow down">
                </a>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <!--  feature 5 -->
    <?php if(get_row_layout() == 'feature-5'): ?>
    <div class="info_feature5">
        <div class="container-fluid">
            <div class="row">
                <div class="info_feature1">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="info_first_feature">
                            <div class="icon_feature">
                                <i class="icon-field5"></i>
                                <style media="screen">
                                    .icon-field5{
                                        background: url("<?php the_sub_field('icon-5') ?>") no-repeat center center;
                                    }
                                </style>
                            </div>
                            <div class="info_detail_feature check_test">
                                <?php the_sub_field('content-5') ?>
                                <a href="#" class="trial_btn2 hover-animation">Dùng thử miễn phí</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="image_feature_1">
                            <img src="<?php the_sub_field('images-5') ?>" alt="<?php the_title(); ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
<?php endwhile;endif; ?>
    <!--difficult company -->
    <div class="container-fluid">
        <div class="row" id="finally_feature">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="difficult finally_feature">
                    <h3>Sapo mang đến cho bạn công cụ hỗ trợ quản lý bán hàng tối ưu nhất</h3>
                    <p>Xem thêm các tính năng có thể bạn cần trong kinh doanh cửa hàng</p>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 list-difficult">
                                <a href="<?php echo home_url(''); ?>">
                                    <i class="icon_check"></i>
                                     Quản lý hàng hóa
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 list-difficult">
                                <a href="<?php echo home_url(''); ?>">
                                    <i class="icon_check"></i>
                                     Hỗ trợ mobile toàn diện
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 list-difficult">
                                <a href="<?php echo home_url(''); ?>">
                                    <i class="icon_check"></i>
                                     Tích hợp phần cứng
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 list-difficult">
                                <a href="<?php echo home_url(''); ?>">
                                    <i class="icon_check"></i>
                                     Quản lý nhân viên
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 list-difficult">
                                <a href="<?php echo home_url(''); ?>">
                                    <i class="icon_check"></i>
                                    Quản lý quỹ tiền mặt
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 list-difficult">
                                <a href="<?php echo home_url(''); ?>">
                                    <i class="icon_check"></i>
                                     Chăm sóc khách hàng
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 list-difficult">
                                <a href="<?php echo home_url(''); ?>">
                                    <i class="icon_check"></i>
                                    Công nghệ và bảo mật
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 list-difficult">
                                <a href="<?php echo home_url(''); ?>">
                                    <i class="icon_check"></i>
                                     Quản lý bán hàng Online
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 list-difficult">
                                <a href="<?php echo home_url(''); ?>">
                                    <i class="icon_check"></i>
                                    Quản lý kho
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 list-difficult">
                                <a href="<?php echo home_url(''); ?>">
                                    <i class="icon_check"></i>
                                    Báo cáo kinh doanh
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 list-difficult">
                                <a href="<?php echo home_url(''); ?>">
                                    <i class="icon_check"></i>
                                     Bán hàng nhanh chóng
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 list-difficult">
                                <a href="<?php echo home_url(''); ?>">
                                    <i class="icon_check"></i>
                                    Quản lý bán hàng
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 list-difficult">
                                <a href="<?php echo home_url(''); ?>">
                                    <i class="icon_check"></i>
                                    Quán lý trên điện thoại
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 list-difficult">
                                <a href="<?php echo home_url(''); ?>">
                                    <i class="icon_check"></i>
                                    Quản lý giao hàng
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 list-difficult">
                                <a href="<?php echo home_url(''); ?>">
                                    <i class="icon_check"></i>
                                    Tính năng khác
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_template_part('template-part/start-trial') ?>
<?php endwhile;endif; ?>
<script type="text/javascript">
    jQuery(function($){
        if($(".check_test").length == 0){
            $(".add_btn_hover").append('<a href="#" class="trial_btn2 hover-animation">Dùng thử miễn phí</a>');
        }
    });
</script>
<?php get_footer(); ?>

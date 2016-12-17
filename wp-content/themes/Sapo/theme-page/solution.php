<?php
/*
    Template Name: Giải Pháp
*/
get_header();
 ?>
 <?php if(have_posts()):while(have_posts()):the_post(); ?>
     <div class="container-fluid">
         <div class="row">
             <div class="clip_yt solution_first">
                 <div class="layer_clip"></div>
                 <style media="screen">
                     .solution_first{
                         background:url("<?php the_post_thumbnail_url(); ?>") no-repeat top center;
                         background-size: cover;
                     }
                 </style>
                 <div class="info_first">
                     <h1>Phần mềm <span class="text-lowercase"><?php the_title(); ?></span></h1>
                     <?php the_content(); ?>
                     <a href="#" class="trial_btn hover-animation">Dùng thử miễn phí</a>
                     <div class="arrow_bottom">
                         <a href="#introduce_why"><img src="<?php echo url."/images/icon/arrow_down.png" ?>" alt="arrow down"></a>
                     </div>
                 </div>
             </div>
        </div>
    </div>
    <?php
    if(have_rows('all-difficult')):
        while(have_rows('all-difficult')):the_row();
    ?>
    <style media="screen">
        .difficult_solution{
            background:url("<?php the_sub_field('images-difficult') ?>") no-repeat center center;
            background-size:cover;
        }
    </style>
    <div class="difficult_solution">
        <div class="container-fluid">
            <div class="row" id="introduce_why">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3"></div>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="info_difficult">
                        <div class="col-xs-12 col-md-12 col-lg-12 col-sm-12">
                            <h2>Bạn đang gặp khó khăn trong <span class="text-lowercase"><?php the_title(); ?></span> ?</h2>
                        </div>
                        <div class="xs-12 col-sm-12 col-md-6 col-lg-6 infomation_difficult">
                            <div class="number_difficult">
                                <span>01</span>
                            </div>
                            <div class="detail_difficult">
                                <?php the_sub_field('difficult-1') ?>
                            </div>
                        </div>
                        <div class="xs-12 col-sm-12 col-md-6 col-lg-6 infomation_difficult">
                            <div class="number_difficult">
                                <span>02</span>
                            </div>
                            <div class="detail_difficult">
                                <?php the_sub_field('difficult-2') ?>
                            </div>
                        </div>

                        <?php
                            if(get_sub_field('difficult-4') == ""):
                        ?>
                        <div class="xs-12 col-sm-12 col-md-12 col-lg-12 infomation_difficult">
                            <div class="number_difficult">
                                <span>03</span>
                            </div>
                            <div class="detail_difficult">
                                <?php the_sub_field('difficult-3') ?>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="xs-12 col-sm-12 col-md-6 col-lg-6 infomation_difficult">
                            <div class="number_difficult">
                                <span>03</span>
                            </div>
                            <div class="detail_difficult">
                                <?php the_sub_field('difficult-3') ?>
                            </div>
                        </div>
                        <div class="xs-12 col-sm-12 col-md-6 col-lg-6 infomation_difficult">
                            <div class="number_difficult">
                                <span>04</span>
                            </div>
                            <div class="detail_difficult">
                                <?php the_sub_field('difficult-4') ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12 a_begin_manager">
                    <a href="#" class="hover-animation begin_manager">Bắt đầu quản lí ngay</a>
                </div>
                <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12 move_in_solution">
                    <a href="#solution_product_first">Arrow</a>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile;endif; ?>
    <?php
    if(have_rows('infomation-solution')):
        while(have_rows('infomation-solution')):the_row();
    ?>
    <!--  Solution 1-->
    <?php if(get_row_layout() == 'solution-1'): ?>
    <div class="container-fluid">
        <div class="row" id="solution_product_first">
            <div class="introduce_solution">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                            <div class="info_introduce_solution">
                                <h2>Sapo mang đến cho cửa hàng thời trang giải pháp quản lý bán hàng hiệu quả nhất</h2>
                                <p>Thao tác bán hàng dễ dàng, quản lý hàng hóa, tồn kho, doanh thu, lợi nhuận mọi lúc mọi nơi</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="all_image_solution">
                                <img src="<?php the_sub_field('images-1') ?>" alt="<?php the_title(); ?>">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <?php if(get_sub_field('content-2') == ""): ?>
                            <div class="info_first_feature info_first_solution info_solution_special ">
                                <div class="icon_feature">
                                    <i class="icon-solution1"></i>
                                    <style media="screen">
                                        .icon-solution1{
                                            background: url("<?php the_sub_field('icon-1') ?>") no-repeat center center;
                                        }
                                    </style>
                                </div>
                                <div class="info_detail_feature">
                                    <?php the_sub_field('content-1') ?>
                                </div>
                            </div>
                            <?php else: ?>
                            <div class="info_first_feature info_first_solution">
                                <div class="icon_feature">
                                    <i class="icon-solution1"></i>
                                    <style media="screen">
                                        .icon-solution1{
                                            background: url("<?php the_sub_field('icon-1') ?>") no-repeat center center;
                                        }
                                    </style>
                                </div>
                                <div class="info_detail_feature">
                                    <?php the_sub_field('content-1') ?>
                                </div>
                            </div>
                            <div class="info_first_feature info_first_solution">
                                <div class="icon_feature">
                                    <i class="icon-solution1-1"></i>
                                    <style media="screen">
                                        .icon-solution1-1{
                                            background: url("<?php the_sub_field('icon-2') ?>") no-repeat center center;
                                        }
                                    </style>
                                </div>
                                <div class="info_detail_feature">
                                    <?php the_sub_field('content-2') ?>
                                </div>
                            </div>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <!--  Solution 2-->
    <?php if(get_row_layout() == 'solution-2'): ?>
    <div class="info_feature4" id="info_feature4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <?php if(get_sub_field('content-2-2') != ""): ?>
                    <div class="info_first_feature info_first_solution2">
                        <div class="icon_feature">
                            <i class="icon-solution2"></i>
                            <style media="screen">
                                .icon-solution2{
                                    background: url("<?php the_sub_field('icon-2-1') ?>") no-repeat center center;
                                }
                            </style>
                        </div>
                        <div class="info_detail_feature">
                            <?php the_sub_field('content-2-1') ?>
                        </div>
                    </div>
                    <div class="info_first_feature info_first_solution2">
                        <div class="icon_feature">
                            <i class="icon-solution2-1"></i>
                            <style media="screen">
                                .icon-solution2-1{
                                    background: url("<?php the_sub_field('icon-2-2') ?>") no-repeat center center;
                                }
                            </style>
                        </div>
                        <div class="info_detail_feature">
                            <?php the_sub_field('content-2-2') ?>
                        </div>
                    </div>
                    <?php else: ?>
                        <div class="info_first_feature info_first_solution2 info_solution_special">
                            <div class="icon_feature">
                                <i class="icon-solution2"></i>
                                <style media="screen">
                                    .icon-solution2{
                                        background: url("<?php the_sub_field('icon-2-1') ?>") no-repeat center center;
                                    }
                                </style>
                            </div>
                            <div class="info_detail_feature">
                                <?php the_sub_field('content-2-1') ?>
                            </div>
                        </div>
                    <?php endif ?>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="all_image_solution">
                        <img src="<?php the_sub_field('images-2') ?>" alt="<?php the_title(); ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 arrow_feature">
                <a href="#solution_product4">
                    <img src="<?php echo url."/images/bg-arrow-down.png" ?>" alt="arrow down">
                </a>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <!--  Solution 3-->
    <?php if(get_row_layout() == 'solution-3'): ?>
    <div class="container-fluid">
        <div class="row">
            <div class="introduce_solution_product">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="all_image_solution">
                                <img src="<?php the_sub_field('images-3') ?>" alt="<?php the_title(); ?>">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <?php if(get_sub_field('content-3-2') != ""): ?>
                            <div class="info_first_feature info_first_solution">
                                <div class="icon_feature">
                                    <i class="icon-solution3"></i>
                                    <style media="screen">
                                        .icon-solution3{
                                            background: url("<?php the_sub_field('icon-3-1') ?>") no-repeat center center;
                                        }
                                    </style>
                                </div>
                                <div class="info_detail_feature">
                                    <?php the_sub_field('content-3-1') ?>
                                </div>
                            </div>
                            <div class="info_first_feature info_first_solution">
                                <div class="icon_feature">
                                    <i class="icon-solution3-1"></i>
                                    <style media="screen">
                                        .icon-solution3-1{
                                            background: url("<?php the_sub_field('icon-3-2') ?>") no-repeat center center;
                                        }
                                    </style>
                                </div>
                                <div class="info_detail_feature">
                                    <?php the_sub_field('content-3-2') ?>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="info_first_feature info_first_solution info_solution_special">
                                <div class="icon_feature">
                                    <i class="icon-solution3"></i>
                                    <style media="screen">
                                        .icon-solution3{
                                            background: url("<?php the_sub_field('icon-3-1') ?>") no-repeat center center;
                                        }
                                    </style>
                                </div>
                                <div class="info_detail_feature">
                                    <?php the_sub_field('content-3-1') ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <!--  Solution 4-->
    <?php if(get_row_layout() == 'solution-4'): ?>
    <div class="info_feature4">
        <div class="container-fluid">
            <div class="row" id="solution_product4">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <?php if(get_sub_field('content-4-2') != ""): ?>
                    <div class="info_first_feature info_first_solution2">
                        <div class="icon_feature">
                            <i class="icon-solution4"></i>
                            <style media="screen">
                                .icon-solution4{
                                    background: url("<?php the_sub_field('icon-4-1') ?>") no-repeat center center;
                                }
                            </style>
                        </div>
                        <div class="info_detail_feature">
                            <?php the_sub_field('content-4-1') ?>
                        </div>
                    </div>
                    <div class="info_first_feature info_first_solution2">
                        <div class="icon_feature">
                            <i class="icon-solution4_1"></i>
                            <style media="screen">
                                .icon-solution4_1{
                                    background: url("<?php the_sub_field('icon-4-2') ?>") no-repeat center center;
                                }
                            </style>
                        </div>
                        <div class="info_detail_feature add_btn_hover">
                            <?php the_sub_field('content-4-2') ?>
                        </div>
                    </div>
                    <?php else: ?>
                    <div class="info_first_feature info_first_solution2 info_solution_special">
                        <div class="icon_feature">
                            <i class="icon-solution4"></i>
                            <style media="screen">
                                .icon-solution4{
                                    background: url("<?php the_sub_field('icon-4-1') ?>") no-repeat center center;
                                }
                            </style>
                        </div>
                        <div class="info_detail_feature add_btn_hover">
                            <?php the_sub_field('content-4-1') ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="all_image_solution">
                        <img src="<?php the_sub_field('images-4') ?>" alt="<?php the_title(); ?>">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 arrow_feature">
                <a href="#finally_solution">
                    <img src="<?php echo url."/images/bg-arrow-down.png" ?>" alt="arrow down">
                </a>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <!--  Solution 5-->
    <?php if(get_row_layout() == 'solution-5'): ?>
    <div class="container-fluid">
        <div class="row">
            <div class="introduce_solution_product">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="all_image_solution">
                                <img src="<?php the_sub_field('images-5') ?>" alt="<?php the_title(); ?>">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <?php if(get_sub_field('content-5-2') != ""): ?>
                            <div class="info_first_feature info_first_solution">
                                <div class="icon_feature">
                                    <i class="icon-solution5"></i>
                                    <style media="screen">
                                        .icon-solution5{
                                            background: url("<?php the_sub_field('icon-5-1') ?>") no-repeat center center;
                                        }
                                    </style>
                                </div>
                                <div class="info_detail_feature">
                                    <?php the_sub_field('content-5-1') ?>
                                </div>
                            </div>
                            <div class="info_first_feature info_first_solution">
                                <div class="icon_feature">
                                    <i class="icon-solution5-1"></i>
                                    <style media="screen">
                                        .icon-solution5-1{
                                            background: url("<?php the_sub_field('icon-5-2') ?>") no-repeat center center;
                                        }
                                    </style>
                                </div>
                                <div class="info_detail_feature check_test">
                                    <?php the_sub_field('content-5-2') ?>
                                    <a href="#" class="trial_btn2 hover-animation">Dùng thử miễn phí</a>
                                </div>
                            </div>
                            <?php else: ?>
                                <div class="info_first_feature info_first_solution info_solution_special">
                                    <div class="icon_feature">
                                        <i class="icon-solution5"></i>
                                        <style media="screen">
                                            .icon-solution5{
                                                background: url("<?php the_sub_field('icon-5-1') ?>") no-repeat center center;
                                            }
                                        </style>
                                    </div>
                                    <div class="info_detail_feature">
                                        <?php the_sub_field('content-5-1') ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
 <?php endwhile;endif; ?>
 <?php endwhile;endif; ?>
 <div id="finally_solution">
    <?php get_template_part('template-part/introduce-software') ?>
 </div>
<?php get_template_part('template-part/difficult') ?>
<?php get_template_part('template-part/people-say-us') ?>
<?php get_template_part('template-part/start-trial') ?>
<script type="text/javascript">
    jQuery(function($){
        if($(".check_test").length == 0){
            $(".add_btn_hover").append('<a href="#" class="trial_btn2 hover-animation">Dùng thử miễn phí</a>');
        }
    });
</script>
  <?php get_footer(); ?>

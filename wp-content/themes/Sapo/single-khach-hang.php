<?php get_header(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="clip_yt customer_page single_customer">
            <div class="layer_clip"></div>
            <div class="info_first">
                <h1>Khách hàng tiêu biểu của Sapo</h1>
                <div id="inline"></div>
                <p>
Chúng tôi tự hào đồng hành cùng công việc quản lý bán hàng của</br>
hàng nghìn shop , doanh nghiệp khắp Việt Nam</p>
                <div class="arrow_bottom">
                    <a href="#introduce_single_customer"><img src="<?php echo url."/images/icon/arrow_down.png" ?>" alt="arrow down"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row" id="introduce_single_customer">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 all_content_customer" >
            <?php if(have_posts()):
                    while(have_posts()):the_post();
            ?>
                <h2 class="title_single_customer"><?php the_title(); ?></h2>
                <p class="slogan_shop">
                    <?php the_field('slogan-of-shop') ?>
                </p>
                <div class="content_single_customer">
                    <?php the_content(); ?>
                </div>
                <div class="infomation_orther_customer">
                    <?php if(have_rows('infomation-of-shop')):
                            while(have_rows('infomation-of-shop')):the_row();
                    ?>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 info_orther_shop">
                        <h3><?php the_title(); ?></h3>
                        <?php if(have_rows('all-infomation')):
                                while(have_rows('all-infomation')):the_row();
                        ?>
                        <?php if(get_sub_field('address-shop') != "") : ?>
                            <p>
                                <span>
                                    <i class="fa fa-map-marker"></i>
                                </span>
                                <?php the_sub_field('address-shop') ?>
                            </p>
                        <?php  endif; ?>
                        <?php if(get_sub_field('hotline-shop') != "") : ?>
                            <p>
                                <span>
                                    <i class="fa fa-phone"></i>
                                </span>
                                Hotline :
                                <?php the_sub_field('hotline-shop') ?>
                            </p>
                        <?php  endif; ?>
                        <?php if(get_sub_field('email-shop') != "") : ?>
                            <p>
                                <span>
                                    <i class="fa fa-envelope-o"></i>
                                </span>
                                Email : <a href="mailto:<?php the_sub_field('email-shop') ?>" rel="nofollow"><?php the_sub_field('email-shop') ?></a>
                            </p>
                        <?php  endif; ?>
                        <?php if(get_sub_field('facebook-shop') != "") : ?>
                            <p>
                                <span>
                                    <i class="fa fa-facebook"></i>
                                </span>
                                Facebook : <a href="<?php the_sub_field('facebook-shop') ?>"><?php the_sub_field('facebook-shop') ?></a>
                            </p>
                        <?php  endif; ?>
                        <?php if(get_sub_field('website-shop') != "") : ?>
                            <p>
                                <span>
                                    <i class="fa fa-link"></i>
                                </span>
                                Website : <a href="<?php the_sub_field('website-shop') ?>"><?php the_sub_field('website-shop') ?></a>
                            </p>
                        <?php  endif; ?>
                        <?php endwhile;endif; ?>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <img src="<?php the_sub_field('images-shop') ?>" alt="<?php the_field('name-of-shop') ?>">
                    </div>
                    <?php endwhile;endif; ?>
                </div>
            <?php endwhile;endif; ?>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 customer_orther_more">
            <h3>Xem thêm khách hàng của Sapo</h3>
            <div id="customer-slider" class="class="owl-carousel owl-theme"">
                <?php
                $list = array(
                    'post_type' => 'khach-hang',
                    'posts_per_page' => 10,
                    'orderby' => 'rand',
                );
                $query = new WP_Query($list);
                if($query->have_posts()):
                    while($query->have_posts()):
                        $query->the_post();
                ?>
                <div class="item">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                    <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                    <div class="content_customer_more">
                        <?php echo excerpt(30); ?>
                    </div>
                </div>
                <?php endwhile;endif; ?>
            </div>
            <div class="a_orther_customer">
                <a href="<?php echo home_url('khach-hang-tieu-bieu') ?>" class="hover-animation btn_orther_customer">Xem thêm khách hàng khác </a>
            </div>
        </div>
    </div>
</div>






<?php get_footer(); ?>

<?php
/*
    Template Name: Khách Hàng
*/
get_header(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="clip_yt customer_page">
            <div class="layer_clip"></div>
            <div class="info_first">
                <h1>Khách hàng tiêu biểu của Sapo</h1>
                <div id="inline"></div>
                <p>
Chúng tôi tự hào đồng hành cùng công việc quản lý bán hàng của</br>
hàng nghìn shop , doanh nghiệp khắp Việt Nam</p>
                <div class="arrow_bottom">
                    <a href="#introduce_all_shop"><img src="<?php echo url."/images/icon/arrow_down.png" ?>" alt="arrow down"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="introduce_all_shop">
            <div class="introduce_customer">
                <h2>Hãy nghe khách hàng đã trải nghiệm nói về chúng tôi</h2>
                <p>Quản lý cửa hàng dễ dàng , nhanh chóng , tiện lợi</p>
            </div>
        </div>
        <?php
        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
        $list = array(
            'post_type' => 'khach-hang',
            'posts_per_page' => 9,
            'paged' => $paged,
            'orderby' => 'rand',
        );
        $query = new WP_Query($list);
        if($query->have_posts()):
            while($query->have_posts()):
                $query->the_post();
        ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 all_shop_customer">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(); ?>
                </a>
                <a href="<?php the_permalink(); ?>">
                    <h3><?php the_title(); ?></h3>
                </a>
                <div class="content_shop_customer"><?php echo excerpt(30) ?></div>
            </div>
        <?php endwhile;endif; ?>
            <div class="pagination_wp">
                <?php  wp_pagenavi(array('query'=>$query)); ?>
            </div>
    </div>
</div>
 <?php get_footer(); ?>

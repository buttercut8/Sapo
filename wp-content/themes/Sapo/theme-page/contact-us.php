<?php
/*
    Template Name: Liên hệ
*/
get_header(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="breadcumb_page">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h2><?php the_title(); ?></h2>
                        <p><a href="<?php echo home_url(); ?>">Trang chủ</a>&nbsp; / &nbsp;<a href="<?php get_the_permalink(); ?>"><?php the_title(); ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if(have_posts()):while(have_posts()):the_post(); ?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
            <?php the_content(); ?>
        </div>
    </div>
</div>
<?php endwhile;endif; ?>
<?php get_template_part('template-part/script-menu') ?>
<?php get_footer(); ?>

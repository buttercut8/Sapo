<?php
/*
    Template Name: Về chúng tôi
*/
get_header(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="first_news">
            <h2>Phần mềm quản lý bán hàng hỗ trợ mobile toàn diện nhất</h2>
            <p>Giúp bạn theo dõi lợi nhuận, kho hàng chính xác mọi lúc, mọi nơi</p>
        </div>
    </div>
</div>
<?php if(have_posts()):while(have_posts()):the_post(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="about_us1">
            <div class="container">
                <div class="row">
                    <div class="all_content_about_us_1">
                        <?php if( have_rows('about_us_field') ): ?>
                            <?php while( have_rows('about_us_field') ): the_row(); ?>
                                <?php if(get_row_layout() == 'content_for_about_us'): ?>
                                    <div class="col-xs-12 col-sm-6 col-md-7 col-lg-7">
                                        <?php the_sub_field('content_about_us_1'); ?>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">
                                        <img src="<?php the_sub_field('image_about_us_1'); ?>" alt="<?php the_title(); ?>">
                                    </div>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="about_us2">
            <div class="container">
                <div class="row">
                    <div class="all_content_about_us_2">
                        <div class="content_about_us_2">
                            <?php the_content(); ?>
                        </div>
                        <?php if( have_rows('about_us_field') ): ?>
                            <?php while( have_rows('about_us_field') ): the_row(); ?>
                                <?php if(get_row_layout() == 'introduce_for_about_us_1'): ?>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 introduce_all_about_us">
                                        <img src="<?php the_sub_field('image_1'); ?>" alt="<?php the_title(); ?>">
                                        <h4><a href="<?php echo home_url('') ?>"><?php the_sub_field('caption_1'); ?></a></h4>
                                        <?php the_sub_field('content_1'); ?>
                                    </div>
                                <?php endif; ?>


                                <?php if(get_row_layout() == 'introduce_for_about_us_2'): ?>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 introduce_all_about_us">
                                        <img src="<?php the_sub_field('image_2'); ?>" alt="<?php the_title(); ?>">
                                        <h4><a href="<?php echo home_url('') ?>"><?php the_sub_field('caption_2'); ?></a></h4>
                                        <?php the_sub_field('content_2'); ?>
                                    </div>
                                <?php endif; ?>

                                <?php if(get_row_layout() == 'introduce_for_about_us_3'): ?>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 introduce_all_about_us">
                                        <img src="<?php the_sub_field('image_3'); ?>" alt="<?php the_title(); ?>">
                                        <h4><a href="<?php echo home_url('') ?>"><?php the_sub_field('caption_3'); ?></a></h4>
                                        <?php the_sub_field('content_3'); ?>
                                    </div>
                                <?php endif; ?>

                                <?php if(get_row_layout() == 'introduce_for_about_us_4'): ?>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 introduce_all_about_us">
                                        <img src="<?php the_sub_field('image_4'); ?>" alt="<?php the_title(); ?>">
                                        <h4><a href="<?php echo home_url('') ?>"><?php the_sub_field('caption_4'); ?></a></h4>
                                        <?php the_sub_field('content_4'); ?>
                                    </div>
                                <?php endif; ?>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endwhile;endif; ?>
<?php get_template_part('template-part/start-trial') ?>
<?php get_template_part('template-part/script-menu') ?>
 <?php get_footer(); ?>

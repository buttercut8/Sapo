<div class="container-fluid">
    <div class="row">
        <footer class="all_footer">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 footer_info_1">
                    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                            <?php if(is_active_sidebar('sidebar-1')): dynamic_sidebar('sidebar-1'); endif; ?>
                        </div>
                        <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                            <?php if(is_active_sidebar('sidebar-2')): dynamic_sidebar('sidebar-2'); endif; ?>
                        </div>
                    </div>
                    <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <?php if(is_active_sidebar('sidebar-3')): dynamic_sidebar('sidebar-3'); endif; ?>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <?php if(is_active_sidebar('sidebar-3-1')): dynamic_sidebar('sidebar-3-1'); endif; ?>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 social_footer">
                            <h3>Mạng xã hội</h3>
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/" class="" target="_blank">
                                        <i class="icon_facebook"></i>
                                        Facebook
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/watch?v=sQWQSLMSS00&t=915s" class="" target="_blank">
                                        <i class="icon_youtube"></i>
                                        Youtube
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.google.com/" class="" target="_blank">
                                        <i class="icon_google"></i>
                                         Google+
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 footer_info_2">
                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                        <?php if(is_active_sidebar('sidebar-5')): dynamic_sidebar('sidebar-5'); endif; ?>
                    </div>
                    <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                        <?php if(is_active_sidebar('sidebar-4')): dynamic_sidebar('sidebar-4'); endif; ?>
                    </div>
                </div>
                <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 ">
                    <div class="logo_footer">
                        <img src="<?php echo url."/images/footer_logo.png" ?> " alt="Logo footer">
                    </div>
                    <div class="info_footer_orther">
                        <ul>
                            <li><i class="orther_company">CÔNG TY CỔ PHẦN CÔNG NGHỆ  DKT (DKT TECHNOLOGY JSC)</i></li>
                            <li><span>Trụ sở: <i class="orther_company">Tầng 4 - Tòa nhà Hanoi Group - 442 Đội Cấn - Ba Đình - Hà Nội</i></span></li>
                            <li><span>Chi nhánh: <i class="orther_company">Lầu 3 - Tòa nhà Lữ Gia - 70 Lữ Gia - P 15 - Q 11 - TP Hồ Chí Minh</i></span></li>
                            <li><span>Tổng đài hỗ trợ khách hàng: <i class="orther_company">1900 6732</i></span></li>
                            <li><span>Tư vấn dịch vụ: <i class="orther_company">1900 6732 - Nhánh 1</i> / Chăm sóc khách hàng: <i class="orther_company">1900 6732 - Nhánh 2</i></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <section class="footer_last">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="info_footer_left pull-left">
                            <span>Copyright 2014 - 2016 Sapo.vn. Phần mềm quản lý bán hàng dễ sử dụng nhất</span>
                        </div>
                        <div class="info_footer_right pull-right">
                            <span>Sản phẩm đạt giải Sao Khuê 2015  <img src="<?php echo url."/images/award_cup.png" ?> " alt="award_cup"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<?php wp_footer(); ?>

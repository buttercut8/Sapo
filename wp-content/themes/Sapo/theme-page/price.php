<?php
/*
    Template Name: Bảng giá
*/
get_header(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="first_price">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                        <h2>Chọn ngay gói dịch vụ phù hợp</h2>
                        <p>Để bắt đầu sử dụng phần mềm quản lý tiện dụng, tiết kiệm chi phí nhất cho mọi cửa hàng</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if(have_posts()):while(have_posts()):the_post(); ?>
<div class="container">
    <div class="row">
        <div class="all_price">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <table class="table-striped table-responsive" id="table_price">
                    <tr>
                        <td width="20%"></td>
                        <td width="20%">
                            <div class="together_price bronze">
                                <span class="title_price">eBronze</span>
                                <span class="info_price">1.200.000 đ</span>
                                <a href="#" class="trial_price hover-animation">Dùng thử</a>
                            </div>
                        </td>
                        <td width="20%">
                            <div class="together_price gold">
                                <i class="icon-popular"></i>
                                <i class="icon-crown"></i>
                                <span class="title_price">eGold</span>
                                <span class="info_price">3.950.000 đ</span>
                                <a href="#" class="trial_price hover-animation">Dùng thử</a>
                            </div>
                        </td>
                        <td width="20%">
                            <div class="together_price platinum">
                                <span class="title_price">eDiamond</span>
                                <span class="info_price">6.950.000 đ</span>
                                <a href="#" class="trial_price hover-animation">Dùng thử</a>
                            </div>
                        </td>
                        <td width="20%">
                            <div class="together_price diamond">
                                <i class="icon-diamond"></i>
                                <span class="title_price">eDiamond</span>
                                <span class="info_price">8.900.000 đ</span>
                                <a href="#" class="trial_price hover-animation">Dùng thử</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Thời gian sử dụng</td>
                        <td><strong>1</strong> năm</td>
                        <td><strong>2</strong> năm</td>
                        <td><strong>3</strong> năm</td>
                        <td><strong>5</strong> năm</td>
                    </tr>
                    <tr>
                        <td>Thời gian tặng thêm</td>
                        <td> - </td>
                        <td><strong>6</strong> Tháng</td>
                        <td><strong>12</strong> Tháng</td>
                        <td><strong>24</strong> Tháng</td>
                    </tr>
                    <tr>
                        <td>Mã hàng</td>
                        <td>100</td>
                        <td>1000</td>
                        <td>2000</td>
                        <td>Không giới hạn</td>
                    </tr>
                    <tr>
                        <td>Nhân viên</td>
                        <td>2</td>
                        <td>Không giới hạn</td>
                        <td>Không giới hạn</td>
                        <td>Không giới hạn</td>
                    </tr>
                    <tr>
                        <td>Cửa hàng</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td colspan="5" class="td_specials">Tích hợp công cụ quản lý</td>
                    </tr>
                    <tr>
                        <td>Tích hợp vận chuyển</td>
                        <td><i class="icon-uncheck"></i></td>
                        <td><i class="icon-check"></i></td>
                        <td><i class="icon-check"></i></td>
                        <td><i class="icon-check"></i></td>
                    </tr>
                    <tr>
                        <td>Quản lý đặt hàng online</td>
                        <td><i class="icon-uncheck"></i></td>
                        <td><i class="icon-check"></i></td>
                        <td><i class="icon-check"></i></td>
                        <td><i class="icon-check"></i></td>
                    </tr>
                    <tr>
                        <td>Quản lý khuyến mãi</td>
                        <td><i class="icon-check"></i></td>
                        <td><i class="icon-check"></i></td>
                        <td><i class="icon-check"></i></td>
                        <td><i class="icon-check"></i></td>
                    </tr>
                    <tr>
                        <td>Quản lý sổ quỹ/thu chi</td>
                        <td><i class="icon-check"></i></td>
                        <td><i class="icon-check"></i></td>
                        <td><i class="icon-check"></i></td>
                        <td><i class="icon-check"></i></td>
                    </tr>
                    <tr>
                        <td>Quản lý thuế</td>
                        <td><i class="icon-uncheck"></i></td>
                        <td><i class="icon-check"></i></td>
                        <td><i class="icon-check"></i></td>
                        <td><i class="icon-check"></i></td>
                    </tr>
                    <tr>
                        <td>Hệ thống báo cáo</td>
                        <td>10</td>
                        <td>20</td>
                        <td>20</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td colspan="5" class="td_specials">
                            Công cụ hỗ trợ bán hàng
                            <i class="show_tool"></i>
                        </td>
                    </tr>
                    <tr class="tool_purchase">
                        <td>Tích điểm khách hàng</td>
                        <td><i class="icon-uncheck"></i></td>
                        <td><i class="icon-check"></i></td>
                        <td><i class="icon-check"></i></td>
                        <td><i class="icon-check"></i></td>
                    </tr>
                    <tr class="tool_purchase">
                        <td>SMS Marketing</td>
                        <td><i class="icon-uncheck"></i></td>
                        <td><i class="icon-check"></i></td>
                        <td><i class="icon-check"></i></td>
                        <td><i class="icon-check"></i></td>
                    </tr>
                    <tr class="tool_purchase">
                        <td>Email Marketing</td>
                        <td><i class="icon-uncheck"></i></td>
                        <td><i class="icon-check"></i></td>
                        <td><i class="icon-check"></i></td>
                        <td><i class="icon-check"></i></td>
                    </tr>
                    <tr class="tool_purchase">
                        <td>Tích hợp cân điện tử</td>
                        <td><i class="icon-uncheck"></i></td>
                        <td><i class="icon-check"></i></td>
                        <td><i class="icon-check"></i></td>
                        <td><i class="icon-check"></i></td>
                    </tr>
                    <tr class="tool_purchase">
                        <td>Đồng bộ website bán hàng</td>
                        <td><i class="icon-uncheck"></i></td>
                        <td><i class="icon-check"></i></td>
                        <td><i class="icon-check"></i></td>
                        <td><i class="icon-check"></i></td>
                    </tr>
                    <tr class="tool_purchase">
                        <td>Phiên bản mobile</td>
                        <td><i class="icon-uncheck"></i></td>
                        <td><i class="icon-check"></i></td>
                        <td><i class="icon-check"></i></td>
                        <td><i class="icon-check"></i></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="bonnus_price">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <table class="table-responsive">
                    <tr>
                        <td width="20%"></td>
                        <td width="40%" class="bonnus_store">
                            <i class="icon-plus"></i>
                            <i class="icon-store"></i>
                            <span>
                                Thêm 01 cửa hàng mới:
                                <strong>2.400.000 đ</strong>
                            </span>
                        </td>
                        <td width="40%" class="bonnus_product">
                            <i class="icon-plus"></i>
                            <i class="icon-price-bag"></i>
                            <span>
                                Thêm 1000 mã sản phẩm:
                                <strong>500.000 đ</strong>
                            </span>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="suggest_customer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h3>Bạn vẫn chưa tìm được gói dịch vụ phù hợp ?</h3>
                        <p>Hãy dùng thử miễn phí phần mềm trước, Sapo sẽ tư vấn cho bạn gói dịch vụ phù hợp sau nhé!</p>
                        <a href="#" class="trial_btn2 hover-animation ">Dùng thử miễn phí</a>
                        <div class="move_arrow_price">
                            <a href="#table_price"><img src="<?php echo url."/images/icon/arrow_up.png" ?>" alt="Arrow Top"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="compo_price">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h3>Combo giá sốc - Tăng tốc bán hàng</h3>
                <p>Tiết kiệm chi phí, tăng nhanh hiệu quả bán hàng khi sở hữu bộ đôi phần mềm quản lý và thiết bị phần cứng</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <img src="<?php echo url."/images/price/combo-1.png" ?>" alt="Combo price sale">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <img src="<?php echo url."/images/price/combo-2.png" ?>" alt="Combo price special">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <img src="<?php echo url."/images/price/combo-3.png" ?>" alt="Combo price favorable">
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="usually_question">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h3>Một số câu hỏi thường gặp</h3>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <ul>
                                <li>
                                    <h4 class="price_question">1.Tôi được dùng thử Sapo trong bao nhiêu ngày?</h4>
                                    <p class="answer">Tất cả các khách hàng khi đăng kí dùng thử Sapo đều được sử dụng hoàn toàn miễn phí 15 ngày với đầy đủ tất các tính năng như khi sử dụng bản thật. Bạn có thể thoải mái trải nhiệm mọi tính năng của sapo cho quá trình quản lý cửa hàng của bạn: Bán hàng, quản lý kho – sản phẩm, quản lý khách hàng – nhà cung cấp, xem báo cáo,...</p>
                                </li>
                                <li>
                                    <h4 class="price_question">2.Tôi muốn mua phần mềm này sử dụng thì thanh toán như nào?</h4>
                                    <p class="answer">Sapo hỗ trợ bạn theo các gói sử dụng đi kèm với năm sử dụng Sapo. Bạn có thể tham khảo bảng giá của Sapo tại link http://www.sapo.vn/bang-gia.html để có được những thông tin chi tiết nhất.
Sapo sẽ tiến hành thanh toán 1 lần khi bạn mua gói sử dụng, trong suốt quá trình sử dụng, bạn sẽ không phải thanh toán thêm bất kỳ loại phí nào nữa.</p>
                                </li>
                                <li>
                                    <h4 class="price_question">3.Chi phí nâng cấp gói dịch vụ mới của tôi được tính như thế nào?</h4>
                                    <p class="answer">Bạn hoàn toàn có thể nâng cấp gói dịch vụ bạn đang dung từ gói thấp lên gói cao hơn.
Hiện tại Sapo có 4 gói sử dụng cho bạn lựa chọn: eBronze, eGold, ePlatinum, eDiamond
Chi phí nâng cấp sẽ được tính như sau: Chi phí gói bạn muốn nâng cấp lên – Chi phí số tháng bạn đã sử dụng của gói cũ.
Vd. Bạn đang dùng gói là gói eBronze – chi phí 1tr2 dùng trong 1 năm. Bạn dùng được 6 tháng và muốn nâng cấp lên gói eGold (chi phí 3tr950). Vậy chi phí nâng cấp của bạn là:
Chi phí nâng cấp = 3tr950 – (1tr2 : 12 *6) = 3tr350</p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <ul>
                                <li>
                                    <h4 class="price_question">4.Sapo có những phiên bản nào?</h4>
                                    <p class="answer">Sapo hiện tại có 5 phiên bản gồm: 1 phiên bản chính và 4 phiên bản hỗ trợ
Phiên bản Chính: Webapp: chạy trên nền web của các trình duyệt chrome, coccoc, firefox
Phiên bản hỗ trợ:
-	App trên IOS: Ipad và Iphone: bạn lên Appstore để tải và cài nhé
-	App trên android: Bạn lên CH Play để tải và cài nhé
-	Bản PC cài vào máy tính: Nếu bạn muốn cài bản này hãy liên hệ đến Hotline 1900 6732 để được Sapo hỗ trợ cài đặt bạn nhé.</p>
                                </li>
                                <li>
                                    <h4 class="price_question">5.Tôi muốn đổi sang tên miền sử dụng khác thì có được không?</h4>
                                    <p class="answer">Nếu bạn muốn đổi tên site sử dụng, bạn vui lòng gửi Email đến địa chỉ mail support@sapo.vn. Sapo sẽ kiểm tra tên site bạn muốn đổi, nếu tên site trên chưa được sử dụng thì Sapo sẽ làm thủ tục chuyển đổi tên site mới cho bạn.</p>
                                </li>
                                <li>
                                    <h4 class="price_question">6.Làm sao để đăng nhập vào Sapo sau khi đăng kí dùng thử</h4>
                                    <p class="answer">Lần đầu khi bạn đăng kí dùng thử, sau khi bạn đăng kí thành công, Sapo sẽ truy cập luôn vào hệ thống để bạn làm việc.
Những lần đăng nhập sau, bạn đánh đường link trên trình duyệt có dạng tensite.sapo.vn (Vd: shopthoitrang.sapo.vn) nhấn Enter, hệ thống sẽ hiện thị ra bảng popup đăng nhập cho bạn. Bạn nhập thông tin tên đăng nhập (tên đăng nhập là tên site, Vd: shopthoitrang) và mật khẩu để truy cập vào phần mềm bạn nhé.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endwhile;endif; ?>
<?php get_template_part('template-part/people-say-us') ?>
<?php get_template_part('template-part/start-trial') ?>
<?php get_template_part('template-part/script-menu') ?>
<script type="text/javascript">
    jQuery(function($){
        // js about table purchars
            $(".tool_purchase").hide();
            $(".show_tool").click(function(){
                $(".tool_purchase").fadeToggle("200");
                $(".show_tool").toggleClass("show_tool_active");
            });
        // js show answer
        $(".answer").hide();
        $(".price_question").click(function(){
            if($(this).hasClass("active_answer")){
                $(this).next().stop().slideToggle();
                $(this).removeClass("active_answer")
            }else{
                $("li .price_question").next().stop().slideUp();
                $("li .price_question").removeClass("active_answer");
                $(this).next().stop().slideToggle();
                $(this).addClass("active_answer");
            }
        });
        // Js sticky
        $(window)


    });
</script>
 <?php get_footer(); ?>

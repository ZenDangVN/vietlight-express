<?php $logtra_redux_demo = get_option('redux_demo');?> 
<?php if(isset($logtra_redux_demo['footer_background']['url']) && $logtra_redux_demo['footer_background']['url'] != ''){ ?> 
<footer class="footer pos-rel overflow-hidden hero-bg" style="background-image: url(<?php echo esc_url($logtra_redux_demo['footer_background']['url']);?>)">
<?php } else { ?>
<footer class="footer pos-rel overflow-hidden hero-bg" style="background-color: #f2f2f2;">
<?php } ?>
        <div class="footer-up de-padding">
            <div class="container">
                <div class="row g-5">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="footer-widget about-us">
                            <?php if ( is_active_sidebar( 'footer-area-1' ) ) : ?>
                              <?php dynamic_sidebar( 'footer-area-1' ); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-6 col-md-6">
                        <div class="footer-widget footer-link">
                            <?php if ( is_active_sidebar( 'footer-area-2' ) ) : ?>
                              <?php dynamic_sidebar( 'footer-area-2' ); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="footer-widget pr-30">
                            <?php if ( is_active_sidebar( 'footer-area-3' ) ) : ?>
                              <?php dynamic_sidebar( 'footer-area-3' ); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="footer-widget">
                            <?php if ( is_active_sidebar( 'footer-area-4' ) ) : ?>
                              <?php dynamic_sidebar( 'footer-area-4' ); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright py-5">
            <div class="container">
                <div class="copyright-element d-flex align-items-center justify-content-between">
                    <?php if(isset($logtra_redux_demo['footer_text']) && $logtra_redux_demo['footer_text']!= ''){?>
                    <p class="mb-0"><?php echo wp_kses_post($logtra_redux_demo['footer_text']);?></p>
                    <?php } ?>
                    <ul class="footer-social">
                        <?php if(isset($logtra_redux_demo['f_link_social_1']) && ($logtra_redux_demo['f_link_social_1'] != '')){?>
                        <li><a href="<?php echo esc_url($logtra_redux_demo['f_link_social_1']); ?>"><i class="<?php echo wp_kses_post($logtra_redux_demo['f_social_1']); ?>"></i></a></li>
                        <?php } ?>
                        <?php if(isset($logtra_redux_demo['f_link_social_2']) && ($logtra_redux_demo['f_link_social_2'] != '')){?>
                        <li><a href="<?php echo esc_url($logtra_redux_demo['f_link_social_2']); ?>"><i class="<?php echo wp_kses_post($logtra_redux_demo['f_social_2']); ?>"></i></a></li>
                        <?php } ?>
                        <?php if(isset($logtra_redux_demo['f_link_social_3']) && ($logtra_redux_demo['f_link_social_3'] != '')){?>
                        <li><a href="<?php echo esc_url($logtra_redux_demo['f_link_social_3']); ?>"><i class="<?php echo wp_kses_post($logtra_redux_demo['f_social_3']); ?>"></i></a></li>
                        <?php } ?>
                        <?php if(isset($logtra_redux_demo['f_link_social_4']) && ($logtra_redux_demo['f_link_social_4'] != '')){?>
                        <li><a href="<?php echo esc_url($logtra_redux_demo['f_link_social_4']); ?>"><i class="<?php echo wp_kses_post($logtra_redux_demo['f_social_4']); ?>"></i></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
	
	<div class="social-button-fixed-footer">
		<div class="contact-fixed-footer">
            <button class="zalo-vietlight">
                <img src="https://vietlight.washinengine.com/wp-content/uploads/2024/02/Icon_of_Zalo.svg_-300x300.png" alt="">
            </button>
        </div>
        <div class="contact-fixed-footer">
            <button class="contact-vietlight">
                <img src="https://vietlight.washinengine.com/wp-content/uploads/2024/02/10506133.png" alt="">
            </button>
        </div>
	</div>
	
<!-- ẩn hiện	 -->
	
	<div class="anhien" style="transform: scale(0)">
        <div class="header-anhhien">
            <div class="header-head">
                <div class="header-img">
                    <img src="https://vietlight.washinengine.com/wp-content/uploads/2024/02/Final-Logo-VietLight-2-01-300x300.jpg" alt="">                    
                </div>
                <span class="header-text">
                        <h1>Vietlight Express</h1>
                        <button class="btn-header ellipis"><i class="fa-solid fa-ellipsis"></i></button>
                </span>
                <button class="btn-header chevron"><i class="fa-solid fa-chevron-down"></i></button>
            </div>

            <h2>Xin chào!</h2>
            <p>Rất vui khi được hỗ trợ bạn</p>
        </div>

        <div class="body-anhien">
            <p class="bodytext">
                Bắt đầu trò chuyện với Vietlight Express
            </p>
            <button class="btn-chatvietlight chatvietlight1">Chat bằng Zalo</button>
            <button class="btn-chatvietlight chatvietlight2">Chat nhanh</button>
        </div>

        <div class="footer-anhien">
            <button class="ngongu-anhien">Tiếng Việt</button>
            <button class="ngongu-anhien">English</button>
            <button class="ngongu-anhien">中文 (中国)</button>
            <button class="ngongu-anhien">日本語</button>
            <button class="ngongu-anhien">한국어</button>
        </div>        
        <a href="" class="tooltip-zalo" style="display: none">Thêm Zalo Chat Widget vào trang web của bạn</a>
    </div>
   
    <div class="form-anhien" style="transform: translateY(calc(100% + 190px))">
        <div class="form-headeranhien">
            <p style="font-size:1.8rem;font-weight: 500">Hỗ trợ trực tuyến<i class="fa-solid fa-xmark"></i></p>
            <div class="form-andimg">
                <img src="https://vietlight.washinengine.com/wp-content/uploads/2024/02/artificial-ai-chat-bot-icon-600nw-2281213775-300x300.webp" alt="">
                <span class="form-textheader">Sẵn lòng giải đáp mọi thắc mắc</span>
            </div>
        </div>
        
        <form action="" class="form-group1">
            <p>Thông tin cơ bản</p>
            <div class="form-nhapthongtin">
                <input type="text" name="tenanhien" id="tenanhien" placeholder="Nhập tên của bạn*">
            </div>
            <div class="form-nhapthongtin">
                <input type="email" name="emailanhien" id="emailanhien" placeholder="Nhập email của bạn*">
            </div>
            <div class="form-nhapthongtin">
                <input type="tel" name="telanhien" id="telanhien" placeholder="Nhập số điện thoại của bạn*">
            </div>
            <div class="form-nhapthongtin">
                <textarea name="message" rows="10" cols="40" placeholder="Tin nhắn"></textarea>
            </div>
            <button type="submit" class="guitinnhan"><i class="fa-solid fa-paper-plane"></i>GỬI TIN NHẮN</button>
        </form>
    </div>
<!--     <a href="#bdy" id="scrtop" class="smooth-menu"><i class="ti-arrow-up"></i></a> -->
<?php wp_footer(); ?>
</body>
</html>
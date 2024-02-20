<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php $logtra_redux_demo = get_option('redux_demo'); ?>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {
        ?>
    <link rel="shortcut icon" href="<?php if(isset($logtra_redux_demo['favicon']['url'])){?><?php echo esc_url($logtra_redux_demo['favicon']['url']); ?><?php }?>">
    <?php }?>
    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?> id="bdy">
    <div class="preloader">
        <div class="preloader-container">
            <span class="preloader-text"><?php echo esc_html__( 'Logtra', 'logtra' );?></span>
            <div class="preloader-animation">
            </div>
        </div>
    </div>
    <header class="header header-before-off">
        <div class="main-wrapper">
            <div class="navbar navbar-expand-lg bsnav bsnav-sticky bsnav-sticky-slide bsnav-transparent">
                <?php if(isset($logtra_redux_demo['background_nav']['url']) && $logtra_redux_demo['background_nav']['url'] != ''){ ?>
                <img src="<?php echo esc_url($logtra_redux_demo['background_nav']['url']); ?>" alt="no image" class="navbar-bar-shape">
                <?php } ?>
                <div class="navbar-container">
                    <div class="navbar-extra-logo">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <?php if(isset($logtra_redux_demo['logo_white']['url']) && $logtra_redux_demo['logo_white']['url'] != ''){ ?>
                            <img src="<?php echo esc_url($logtra_redux_demo['logo_white']['url']); ?>" class="logo-outside" alt="thumb">
                            <?php }else{ ?>
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/logo/logo-white.png" class="logo-outside" alt="thumb">
                            <?php } ?>
                        </a>
                    </div>
                    <div class="top-header-menu">
                        <div class="top-bar-area pos-rel topbar-white">
                            <?php if(isset($logtra_redux_demo['topbar_background']['url']) && $logtra_redux_demo['topbar_background']['url'] != ''){ ?>
                            <img src="<?php echo esc_url($logtra_redux_demo['topbar_background']['url']); ?>" alt="no image" class="top-bar-shape">
                            <?php }else{ ?>
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/bg/topbar-bg.png" alt="no image" class="top-bar-shape">
                            <?php } ?>
                            <div class="row">
                                <div class="col-xl-10 col-lg-6">
                                    <div class="top-box-wrp d-flex justify-content-md-center align-items-center">
                                        <?php if(isset($logtra_redux_demo['location']) && ($logtra_redux_demo['location'] != '')){?>
                                        <div class="top-box top-location mr-30">
                                            <?php if(isset($logtra_redux_demo['location_icon']) && ($logtra_redux_demo['location_icon'] != '')){?>
                                            <i class="<?php echo wp_kses_post($logtra_redux_demo['location_icon']); ?>"></i>
                                            <?php } ?>
                                            <span><?php echo wp_kses_post($logtra_redux_demo['location']); ?></span>
                                        </div>
                                        <?php } ?>
                                        <?php if(isset($logtra_redux_demo['email']) && ($logtra_redux_demo['email'] != '')){?>
                                        <div class="top-email top-box mr-30">
                                            <?php if(isset($logtra_redux_demo['email_icon']) && ($logtra_redux_demo['email_icon'] != '')){?>
                                            <i class="<?php echo wp_kses_post($logtra_redux_demo['email_icon']); ?>"></i>
                                            <?php } ?>
                                            <span><?php echo wp_kses_post($logtra_redux_demo['email']); ?></span>
                                        </div>
                                        <?php } ?>
                                        <?php if(isset($logtra_redux_demo['phone']) && ($logtra_redux_demo['phone'] != '')){?>
                                        <div class="top-phone top-box">
                                            <?php if(isset($logtra_redux_demo['phone_icon']) && ($logtra_redux_demo['phone_icon'] != '')){?>
                                            <i class="<?php echo wp_kses_post($logtra_redux_demo['phone_icon']); ?>"></i>
                                            <?php } ?>
                                            <span><?php echo wp_kses_post($logtra_redux_demo['phone']); ?></span>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-6">
                                    <div class="top-bar-social">
                                        <ul class="top-social">
                                            <?php if(isset($logtra_redux_demo['link_social_1']) && ($logtra_redux_demo['link_social_1'] != '')){?>
                                            <li><a href="<?php echo esc_url($logtra_redux_demo['link_social_1']); ?>"><i class="<?php echo wp_kses_post($logtra_redux_demo['social_1']); ?>"></i></a></li>
                                            <?php } ?>
                                            <?php if(isset($logtra_redux_demo['link_social_2']) && ($logtra_redux_demo['link_social_2'] != '')){?>
                                            <li><a href="<?php echo esc_url($logtra_redux_demo['link_social_2']); ?>"><i class="<?php echo wp_kses_post($logtra_redux_demo['social_2']); ?>"></i></a></li>
                                            <?php } ?>
                                            <?php if(isset($logtra_redux_demo['link_social_3']) && ($logtra_redux_demo['link_social_3'] != '')){?>
                                            <li><a href="<?php echo esc_url($logtra_redux_demo['link_social_3']); ?>"><i class="<?php echo wp_kses_post($logtra_redux_demo['social_3']); ?>"></i></a></li>
                                            <?php } ?>
                                            <?php if(isset($logtra_redux_demo['link_social_4']) && ($logtra_redux_demo['link_social_4'] != '')){?>
                                            <li><a href="<?php echo esc_url($logtra_redux_demo['link_social_4']); ?>"><i class="<?php echo wp_kses_post($logtra_redux_demo['social_4']); ?>"></i></a></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="navbar-menu-opt">
                            <div class="navbar-brand-tog">
                                <a class="navbar-brand g-nop" href="<?php echo esc_url(home_url('/')); ?>">
                                    <?php if(isset($logtra_redux_demo['logo_white']['url']) && $logtra_redux_demo['logo_white']['url'] != ''){ ?>
                                    <img src="<?php echo esc_url($logtra_redux_demo['logo_white']['url']); ?>" class="logo-display" alt="thumb">
                                    <?php }else{ ?>
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/logo/logo-white.png" class="logo-display" alt="thumb">
                                    <?php } ?>

                                    <?php if(isset($logtra_redux_demo['logo']['url']) && $logtra_redux_demo['logo']['url'] != ''){ ?>
                                    <img src="<?php echo esc_url($logtra_redux_demo['logo']['url']); ?>" class="logo-scrolled" alt="thumb">
                                    <?php }else{ ?>
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/logo/logo.png" class="logo-scrolled" alt="thumb">
                                    <?php } ?>
                                </a>
                                <button class="navbar-toggler toggler-spring">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse justify-content-md-between">
                                <a class="navbar-brand nop" href="<?php echo esc_url(home_url('/')); ?>">
                                    <?php if(isset($logtra_redux_demo['logo_white']['url']) && $logtra_redux_demo['logo_white']['url'] != ''){ ?>
                                    <img src="<?php echo esc_url($logtra_redux_demo['logo_white']['url']); ?>" class="logo-display" alt="thumb">
                                    <?php }else{ ?>
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/logo/logo-white.png" class="logo-display" alt="thumb">
                                    <?php } ?>

                                    <?php if(isset($logtra_redux_demo['logo']['url']) && $logtra_redux_demo['logo']['url'] != ''){ ?>
                                    <img src="<?php echo esc_url($logtra_redux_demo['logo']['url']); ?>" class="logo-scrolled" alt="thumb">
                                    <?php }else{ ?>
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/logo/logo.png" class="logo-scrolled" alt="thumb">
                                    <?php } ?>
                                </a>
                                <?php 
                                wp_nav_menu( 
                                array( 
                                    'theme_location' => 'primary',
                                    'container' => '',
                                    'menu_class' => '', 
                                    'menu_id' => '',
                                    'menu'            => '',
                                    'container_class' => '',
                                    'container_id'    => '',
                                    'echo'            => true,
                                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                    'walker'            => new logtra_wp_bootstrap_navwalker(),
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'items_wrap'      => '<ul id=" %1$s" class=" navbar-nav navbar-mobile justify-content-md-center w-100  %2$s">%3$s</ul>',
                                    'depth'           => 0,        
                                )
                                ); ?>
                                <?php if(isset($logtra_redux_demo['link_button']) && ($logtra_redux_demo['link_button'] != '')){?>
                                <div class="search-cart nav-profile">
                                    <a href="<?php echo wp_kses_post($logtra_redux_demo['link_button']); ?>" class="btn-1 btn-sm"><?php echo wp_kses_post($logtra_redux_demo['button']); ?></a>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
			<div class="fixed-footermenu">
				<a href="<?php echo esc_url(home_url('/')); ?>tracking/" class="list-fixed">
					<img src="http://test.kingsman.io.vn/wp-content/uploads/2024/02/pngtree-vector-package-icon-png-image_3782962.jpg" alt="Tra cứu"> <span class="text-fixed">Tra cứu vận đơn</span>
				</a>
				<span class="line-mid"></span>
				<a href="<?php echo esc_url(home_url('/')); ?>cost/" class="list-fixed">
					<img src="http://test.kingsman.io.vn/wp-content/uploads/2024/02/preview.png" alt="Uoc tính"><span class="text-fixed">Ước tính chi phí</span></a>
			</div>
			
            <div class="bsnav-mobile">                
                <div class="navbar">
					<div class="header-mobimenu">
							<div class="bsnav-mobile-overlay" style="width:80px;height:80px;text-align:center;float:right;position:relative;font-weight:500;cursor:pointer;font-size:40px;color:red;">
								<i class="bi bi-x-lg"></i>
							</div>
							<a class="navbrand-mobi" href="<?php echo esc_url(home_url('/')); ?>">
										<?php if(isset($logtra_redux_demo['logo']['url']) && $logtra_redux_demo['logo']['url'] != ''){ ?>
										<img src="<?php echo esc_url($logtra_redux_demo['logo']['url']); ?>" class="logo-scrolled" alt="thumb">
										<?php }else{ ?>

										<?php } ?> 
							</a>						
					</div>
					
					<div class="footer-mobimenu">
						<a href="tel:<?php echo wp_kses_post($logtra_redux_demo['phone']); ?>" class="butphone-vl"><?php echo wp_kses_post($logtra_redux_demo['phone']); ?></a>
						<a href="#" class="butphone-vl" style="background-color: #484848;color: #ffeca2;">Đăng ký/Đăng nhập</a>
						<div class="multi-lau">
							<a href="#" class="ngonngu" type="button">
								<img src="https://vietlight.washinengine.com/wp-content/uploads/2024/02/tai-xuong-150x150.png" alt="Việt Nam"><span class="text-ngonngu">Vietnamese</span>
							</a>
							<a href="#" class="ngonngu" type="button">
								<img src="https://vietlight.washinengine.com/wp-content/uploads/2024/02/united-states-300x197.png" alt="Englist"><span class="text-ngonngu">English</span>
							</a>
							<a href="#" class="ngonngu" type="button">
								<img src="https://vietlight.washinengine.com/wp-content/uploads/2024/02/Co-Trung-Quoc-300x199.jpg" alt="Trung Quốc"><span class="text-ngonngu">中文 (中国)</span>
							</a>
							<a href="#"  class="ngonngu" type="button">
								<img src="https://vietlight.washinengine.com/wp-content/uploads/2024/02/Flag_of_Japan_bordered.svg_-300x200.png" alt="Nhật"><span class="text-ngonngu">日本語</span>
							</a>
							<a href="#"  class="ngonngu" type="button">
								<img src="https://vietlight.washinengine.com/wp-content/uploads/2024/02/co1-300x200.png" alt="Hàn"><span class="text-ngonngu">한국어</span>
							</a>
						</div>
						<div class="multi-lau">
							<p><h6 style="display:inline-block;margin: 0;">Trụ sở chính:</h6> <?php echo wp_kses_post($logtra_redux_demo['location']); ?></p>
							<p><h6 style="display:inline-block;margin: 0;">Thời gian:</h6> 07:00 - 20:00</p>
							<p><h6 style="display:inline-block;margin: 0;">Email:</h6> <a href="mailto:<?php echo wp_kses_post($logtra_redux_demo['email']); ?>"><?php echo wp_kses_post($logtra_redux_demo['email']); ?></a></p>
							<p><h6 style="display:inline-block;margin: 0;">Hotline:</h6> <a href="tel:<?php echo wp_kses_post($logtra_redux_demo['phone']); ?>"><?php echo wp_kses_post($logtra_redux_demo['phone']); ?></a></p>
						</div>
						<div style="max-width: 992px;border-top: 1px solid #484848;margin: auto;"></div>

						<div class="box-list">
							<div class="content-box" type="button" onclick="hienthibox1()"><h6>Công ty</h6><span id="rodasvg1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
										<path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
									</svg></span> </div>
							<div class="content-boxchild" id="child-box1">
							  <a href="#" class="list-vietlight">Sứ mệnh & Tầm nhìn</a>
								<a href="#" class="list-vietlight">Giá trị cốt lõi</a>
								<a href="#" class="list-vietlight">Lãnh đạo</a>
								<a href="#"  class="list-vietlight">Cột mốc thành tựu</a>
							</div>
						</div>

						<div class="box-list">
							<div class="content-box" type="button" onclick="hienthibox2()"><h6>CSKH</h6><span id="rodasvg2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
										<path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
									</svg></span> </div>
							<div class="content-boxchild" id="child-box2">
								<a href="#" class="list-vietlight">Câu hỏi thường gặp</a>
								<a href="#" class="list-vietlight">Điều khoản Dịch vụ</a>
								<a href="#" class="list-vietlight">Chính sách bảo mật</a>
								<a href="#"  class="list-vietlight">Liên hệ</a>
								<a href="#"  class="list-vietlight">API Document</a>
							</div>
						</div>

						<div class="box-list">
							<div class="content-box" type="button" onclick="hienthibox3()"><h6>Quản lý chất lượng dịch vụ</h6><span id="rodasvg3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
										<path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
									</svg></span> </div>
							<div class="content-boxchild" id="child-box3">
							  <a href="#" class="list-vietlight">Khiếu nại đền bù</a>
								<a href="#" class="list-vietlight">Quy định gửi & nhận hàng</a>
								<a href="#" class="list-vietlight">Trách nhiệm các bên</a>
								<a href="#"  class="list-vietlight">Hàng hoá cấm gửi</a>
							</div>
						</div>

						<div class="icon-mangxahoi">
							<a href="tel:<?php echo wp_kses_post($logtra_redux_demo['phone']); ?>"><img src="https://vietlight.washinengine.com/wp-content/uploads/2024/02/Icon_of_Zalo.svg_-300x300.png" alt="zalo"></a>
							<a href=""><img src="https://vietlight.washinengine.com/wp-content/uploads/2024/02/2023_Facebook_icon.svg_-300x300.webp" alt="facebook"></a>
							<a href=""><img src="https://vietlight.washinengine.com/wp-content/uploads/2024/02/youtube-1349699_1280-300x300.webp" alt="youtube"></a>
						</div>

						<div class="appstore">
							<a href="">
								<img src="https://vietlight.washinengine.com/wp-content/uploads/2024/02/Apple-App-Store-300x89.png" alt="">
							</a>
							<a href="">
								<img src="https://vietlight.washinengine.com/wp-content/uploads/2024/02/Google_Play_Store_badge_EN.svg_-300x88.webp" alt="">
							</a>
						</div>

						<p class="multi-lau margitext">© 2024 Vietlight Express Logistics</p>

					</div>					
				</div>
            </div>
        </div>
    </header>

  
  
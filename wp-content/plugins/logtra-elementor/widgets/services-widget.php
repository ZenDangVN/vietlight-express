<?php
namespace BdevsElementor\Widget;

use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Box_Shadow;

/**
 * Bdevs Elementor Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class BdevsServices extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve Bdevs Elementor widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'bdevs-services';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Bdevs Elementor widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Services', 'bdevs-elementor' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Bdevs FAQ widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-archive-posts';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Bdevs Counter widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'bdevs-elementor' ];
	}

	public function get_keywords() {
		return [ 'services' ];
	}

	public function get_script_depends() {
		return [ 'bdevs-elementor'];
	}

	// BDT Position
	protected function element_pack_position() {
	    $position_options = [
	        ''              => esc_html__('Default', 'bdevs-elementor'),
	        'top-left'      => esc_html__('Top Left', 'bdevs-elementor') ,
	        'top-center'    => esc_html__('Top Center', 'bdevs-elementor') ,
	        'top-right'     => esc_html__('Top Right', 'bdevs-elementor') ,
	        'center'        => esc_html__('Center', 'bdevs-elementor') ,
	        'center-left'   => esc_html__('Center Left', 'bdevs-elementor') ,
	        'center-right'  => esc_html__('Center Right', 'bdevs-elementor') ,
	        'bottom-left'   => esc_html__('Bottom Left', 'bdevs-elementor') ,
	        'bottom-center' => esc_html__('Bottom Center', 'bdevs-elementor') ,
	        'bottom-right'  => esc_html__('Bottom Right', 'bdevs-elementor') ,
	    ];

	    return $position_options;
	}

	protected function _register_controls() {
		$this->start_controls_section(
			'section_content_heading',
			[
				'label' => esc_html__( 'Services', 'bdevs-elementor' ),
			]	
		);
		$this->add_control(
            'choose_style',
            [
                'label'     => esc_html__( 'Choose Style', 'bdevs-elementor' ),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    's_style_1'  => esc_html__( 'Style 1', 'bdevs-elementor' ),
                    's_style_2'  => esc_html__( 'Style 2', 'bdevs-elementor' ),
                    's_style_3'  => esc_html__( 'Style 3', 'bdevs-elementor' ),
                ],
                'default'   => 's_style_1',
            ]
        );
        $this->add_control(
            'background_image',
            [
                'label'   => esc_html__( 'Background Image:', 'bdevs-elementor' ),
                'type'    => Controls_Manager::MEDIA,
                'dynamic' => [ 'active' => true ],
                'description' => esc_html__( 'Add image from here', 'bdevs-elementor' ),
                'condition' => [
                	'choose_style' => ['s_style_2','s_style_3']
                ]
            ]
        );
        $this->add_control(
            'shape_image_1',
            [
                'label'   => esc_html__( 'Shape Image 1:', 'bdevs-elementor' ),
                'type'    => Controls_Manager::MEDIA,
                'dynamic' => [ 'active' => true ],
                'description' => esc_html__( 'Add image from here', 'bdevs-elementor' ),
                'condition' => [
                	'choose_style' => ['s_style_1','s_style_2']
                ]
            ]
        );
        $this->add_control(
            'shape_image_2',
            [
                'label'   => esc_html__( 'Shape Image 2:', 'bdevs-elementor' ),
                'type'    => Controls_Manager::MEDIA,
                'dynamic' => [ 'active' => true ],
                'description' => esc_html__( 'Add image from here', 'bdevs-elementor' ),
                'condition' => [
                	'choose_style' => ['s_style_1','s_style_2']
                ]
            ]
        );
		$this->add_control(
            'subheading',
            [
                'label'       => __( 'Subheading:', 'bdevs-elementor' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your subheading', 'bdevs-elementor' ),
                'default'     => __( 'Features', 'bdevs-elementor' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'heading',
            [
                'label'       => __( 'Heading:', 'bdevs-elementor' ),
                'type'        => Controls_Manager::TEXTAREA,
                'placeholder' => __( 'Enter your heading', 'bdevs-elementor' ),
                'default'     => __( 'Specialist logistics services', 'bdevs-elementor' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'description',
            [
                'label'       => __( 'Description:', 'bdevs-elementor' ),
                'type'        => Controls_Manager::TEXTAREA,
                'placeholder' => __( 'Enter your description', 'bdevs-elementor' ),
                'default'     => __( 'This is description', 'bdevs-elementor' ),
                'label_block' => true,
            ]
        );    
		$this->add_control(
            'post_number',
            [
                'label'       => __( 'Posts Per Page:', 'bdevs-elementor' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your posts per page', 'bdevs-elementor' ),
                'default'     => __( '3', 'bdevs-elementor' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'sortby',
            [
                'label'     => esc_html__( 'Order', 'bdevs-elementor' ),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    'sortby_style_1'  => esc_html__( 'Newest', 'bdevs-elementor' ),
                    'sortby_style_2'  => esc_html__( 'Oldest', 'bdevs-elementor' ),
                ],
                'default'   => 'sortby_style_1',
            ]
        );
        $this->add_control(
            'middle_image',
            [
                'label'   => esc_html__( 'Middle Image:', 'bdevs-elementor' ),
                'type'    => Controls_Manager::MEDIA,
                'dynamic' => [ 'active' => true ],
                'description' => esc_html__( 'Add image from here', 'bdevs-elementor' ),
                'condition' => [
                	'choose_style' => 's_style_2'
                ]
            ]
        );
        $this->add_control(
            'link_button',
            [
                'label'       => __( 'Link Button:', 'bdevs-elementor' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your link', 'bdevs-elementor' ),
                'default'     => __( '#', 'bdevs-elementor' ),
                'label_block' => true,
                'condition' => [
                	'choose_style' => 's_style_3'
                ]
            ]
        );
        $this->add_control(
            'button',
            [
                'label'       => __( 'Button:', 'bdevs-elementor' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your button', 'bdevs-elementor' ),
                'default'     => __( 'Discover More', 'bdevs-elementor' ),
                'label_block' => true,
                'condition' => [
                	'choose_style' => 's_style_3'
                ]
            ]
        ); 
		$this->end_controls_section();

		/** 
		*	Layout section 
		**/
		$this->start_controls_section(
			'section_content_layout',
			[
				'label' => esc_html__( 'Layout', 'bdevs-elementor' ),
			]
		);

		$this->add_responsive_control(
			'align',
			[
				'label'   => esc_html__( 'Alignment', 'bdevs-elementor' ),
				'type'    => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'bdevs-elementor' ),
						'icon'  => 'fa fa-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'bdevs-elementor' ),
						'icon'  => 'fa fa-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'bdevs-elementor' ),
						'icon'  => 'fa fa-align-right',
					],
					'justify' => [
						'title' => esc_html__( 'Justified', 'bdevs-elementor' ),
						'icon'  => 'fa fa-align-justify',
					],
				],
				'prefix_class' => 'elementor%s-align-',
				'description'  => 'Use align to match position',
				'default'      => 'left',
			]
		);	
        $this->add_control(
            'show_heading',
            [
                'label'   => esc_html__( 'Show Heading', 'bdevs-elementor' ),
                'type'    => Controls_Manager::SWITCHER,
                'default' => 'yes',
            ]
        );
		$this->end_controls_section();
	}
	public function render() {
		$settings  = $this->get_settings_for_display();
		extract($settings);
		if ($settings['sortby']=='sortby_style_1') {
            $sortby = 'DESC';
        }
        if ($settings['sortby']=='sortby_style_2') {
            $sortby = 'ASC';
        }
		?>
		<?php $s_style = $settings['choose_style'];?>
        <?php if( $s_style == 's_style_1' ): ?> 
		<div class="feature-area de-padding">
	        <div class="container">
	        	<?php if ( $settings['show_heading'] ) : ?>
	            <div class="row">
	                <div class="col-xl-8 offset-xl-2">
	                    <div class="site-title text-center">
	                        <?php if(isset($settings['subheading']) && $settings['subheading'] != ''){?>
	                        <span class="hero-sub-title mb-20">
	                            <span class="hero-line"></span>
	                            <?php print wp_kses_post($settings['subheading']); ?>
	                        </span>
	                        <?php } ?>
                            <?php if(isset($settings['heading']) && $settings['heading'] != ''){?>
	                        <h2 class="heading-1">
	                            <?php print wp_kses_post($settings['heading']); ?>
	                        </h2>
	                        <?php } ?>
	                        <?php if(isset($settings['description']) && $settings['description'] != ''){?>
	                        <p class="mb-0"><?php print wp_kses_post($settings['description']); ?></p>
	                    	<?php } ?>
	                    </div>
	                </div>
	            </div>
	            <?php endif; ?>
	            <div class="feature-wpr grid-3">
	            	<?php
                    $post_number = $settings['post_number'];
                    $wp_query = new \WP_Query(array('posts_per_page' => $post_number,'post_type' => 'service',  'orderby' => 'ID', 'order' => $sortby));     
                    $args = new \WP_Query(array(   
                                'post_type' => 'service', 
                            ));  
                    $i=0;
                    while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
                    ?>
                    <?php $i++; ?>
                    <?php $sv_icon = get_post_meta(get_the_ID(),'_cmb_sv_icon', true); ?>
                    <?php $short_title = get_post_meta(get_the_ID(),'_cmb_short_title', true); ?>
	                <div class="feature-box">
	                    <div class="feature-icon-no">
	                        <?php if(isset($settings['shape_image_1']['url']) && $settings['shape_image_1']['url'] != ''){?>
	                        <img src="<?php echo esc_url($settings['shape_image_1']['url']);?>" class="feature-p-1" alt="no image">
	                        <?php } ?>
	                        <?php if(isset($settings['shape_image_2']['url']) && $settings['shape_image_2']['url'] != ''){?>
	                        <img src="<?php echo esc_url($settings['shape_image_2']['url']);?>" class="feature-p-2" alt="no image">
	                        <?php } ?>
	                        <?php if (isset($sv_icon) && ($sv_icon != '')){ ?>
	                        <div class="feature-icon">
	                            <i>
	                                <img src="<?php echo wp_get_attachment_url($sv_icon);?>" alt="no image">
	                            </i>
	                        </div>
	                        <?php } ?>
	                        <div class="feature-no">
	                        	<?php if($i<10) { ?>
	                            <span><?php echo '0'.$i; ?></span>
	                            <?php } elseif ($i>9) { ?>
	                            <span><?php echo $i; ?></span>
	                            <?php } ?>
	                        </div>
	                    </div>
	                    <div class="feature-desc">
	                    	<?php if (isset($short_title) && ($short_title != '')){ ?>
	                        <h4 class="heading-4"><?php echo htmlspecialchars_decode(esc_attr($short_title));?></h4>
	                    	<?php } ?>
	                        <p><?php echo esc_attr(service_excerpt(10));?></p>
	                        <a href="<?php the_permalink();?>" class="feature-btn">
	                            <i class="ti-angle-right"></i>
	                        </a>
	                    </div>
	                </div>
	                <?php   
                    endwhile; 
                    wp_reset_postdata();
                    ?>
	            </div>
	        </div>
	    </div>
		<?php elseif( $s_style == 's_style_2' ): ?>
		<div class="service-area hero-bg de-padding pos-rel" style="background-image: url(<?php echo esc_url($settings['background_image']['url']);?>)">
	        <div class="service-shape">
	        	<?php if(isset($settings['shape_image_1']['url']) && $settings['shape_image_1']['url'] != ''){?>
	            <img src="<?php echo esc_url($settings['shape_image_1']['url']);?>" class="service-wavy" alt="no image">
	            <?php } ?>
	            <?php if(isset($settings['shape_image_2']['url']) && $settings['shape_image_2']['url'] != ''){?>
	            <img src="<?php echo esc_url($settings['shape_image_2']['url']);?>" class="service-jahaj-3" alt="no image">
	            <?php } ?>
	        </div>
	        <div class="container">
	        	<?php if ( $settings['show_heading'] ) : ?>
	            <div class="row">
	                <div class="col-xl-8 offset-xl-2">
	                    <div class="site-title wh text-center">
	                        <?php if(isset($settings['subheading']) && $settings['subheading'] != ''){?>
	                        <span class="hero-sub-title mb-20">
	                            <span class="hero-line"></span>
	                            <?php print wp_kses_post($settings['subheading']); ?>
	                        </span>
	                        <?php } ?>
                            <?php if(isset($settings['heading']) && $settings['heading'] != ''){?>
	                        <h2 class="heading-1">
	                            <?php print wp_kses_post($settings['heading']); ?>
	                        </h2>
	                        <?php } ?>
	                        <?php if(isset($settings['description']) && $settings['description'] != ''){?>
	                        <p class="mb-0"><?php print wp_kses_post($settings['description']); ?></p>
	                    	<?php } ?>
	                    </div>
	                </div>
	            </div>
	            <?php endif; ?>
	            <div class="service-wpr grid-3">
	                <div class="service-left">
	                	<?php
	                    $post_number = $settings['post_number'];
	                    $wp_query = new \WP_Query(array('posts_per_page' => $post_number,'post_type' => 'service',  'orderby' => 'ID', 'order' => $sortby));     
	                    $args = new \WP_Query(array(   
	                                'post_type' => 'service', 
	                            ));  
	                    $i=0;
	                    while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
	                    ?>
	                    <?php $i++; ?>
	                    <?php $sv_icon_2 = get_post_meta(get_the_ID(),'_cmb_sv_icon_2', true); ?>
	                    <?php $sv_icon_3 = get_post_meta(get_the_ID(),'_cmb_sv_icon_3', true); ?>
	                    <?php if($i%2==1) { ?>
	                    <?php if($i==1) { ?>
	                    <div class="service-box mb-30">
	                    <?php } else { ?>
	                    <div class="service-box">
	                    <?php } ?>
	                        <div class="service-icon">
	                            <i>
	                            	<?php if (isset($sv_icon_2) && ($sv_icon_2 != '')){ ?>
	                                <img src="<?php echo wp_get_attachment_url($sv_icon_2);?>" class="service-clr-icon" alt="no image">
	                                <?php } ?>
	                                <?php if (isset($sv_icon_3) && ($sv_icon_3 != '')){ ?>
	                                <img src="<?php echo wp_get_attachment_url($sv_icon_3);?>" class="service-icon-clr" alt="no image">
	                                <?php } ?>
	                            </i>
	                        </div>
	                        <div class="service-desc">
	                            <a href="<?php the_permalink(); ?>">
	                                <h4><?php the_title(); ?></h4>
	                            </a>
	                            <p class="mb-0"><?php echo esc_attr(service_excerpt(10));?></p>
	                        </div>
	                    </div>
	                	<?php } ?>
	                    <?php   
	                    endwhile; 
	                    wp_reset_postdata();
	                    ?>
	                </div>
	                <?php if(isset($settings['middle_image']['url']) && $settings['middle_image']['url'] != ''){?>
	                <div class="service-middle">
	                    <img src="<?php echo esc_url($settings['middle_image']['url']);?>" alt="no image">
	                </div>
	            	<?php } ?>
	                <div class="service-right">
	                    <?php
	                    $post_number = $settings['post_number'];
	                    $wp_query = new \WP_Query(array('posts_per_page' => $post_number,'post_type' => 'service',  'orderby' => 'ID', 'order' => $sortby));     
	                    $args = new \WP_Query(array(   
	                                'post_type' => 'service', 
	                            ));  
	                    $j=0;
	                    while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
	                    ?>
	                    <?php $j++; ?>
	                    <?php $sv_icon_2 = get_post_meta(get_the_ID(),'_cmb_sv_icon_2', true); ?>
	                    <?php $sv_icon_3 = get_post_meta(get_the_ID(),'_cmb_sv_icon_3', true); ?>
	                    <?php if($j%2==0) { ?>
	                    <?php if($j==2) { ?>
	                    <div class="service-box mb-30">
	                    <?php } else { ?>
	                    <div class="service-box">
	                    <?php } ?>
	                        <div class="service-icon">
	                            <i>
	                            	<?php if (isset($sv_icon_2) && ($sv_icon_2 != '')){ ?>
	                                <img src="<?php echo wp_get_attachment_url($sv_icon_2);?>" class="service-clr-icon" alt="no image">
	                                <?php } ?>
	                                <?php if (isset($sv_icon_3) && ($sv_icon_3 != '')){ ?>
	                                <img src="<?php echo wp_get_attachment_url($sv_icon_3);?>" class="service-icon-clr" alt="no image">
	                                <?php } ?>
	                            </i>
	                        </div>
	                        <div class="service-desc">
	                            <a href="<?php the_permalink(); ?>">
	                                <h4><?php the_title(); ?></h4>
	                            </a>
	                            <p class="mb-0"><?php echo esc_attr(service_excerpt(10));?></p>
	                        </div>
	                    </div>
	                	<?php } ?>
	                    <?php   
	                    endwhile; 
	                    wp_reset_postdata();
	                    ?>
	                </div>
	            </div>
	        </div>
	    </div>
		<?php elseif( $s_style == 's_style_3' ): ?>
		<div class="service-area-2 bg-2 de-padding pos-rel">
            <img src="<?php echo esc_url($settings['background_image']['url']);?>" class="service-shape-2" alt="no image">
            <div class="container">
            	<?php if ( $settings['show_heading'] ) : ?>
                <div class="row">	
                    <div class="col-xl-8">
                        <div class="site-title mb-90">
                        	<?php if(isset($settings['subheading']) && $settings['subheading'] != ''){?>
                            <span class="hero-sub-title mb-20">
                                <span class="hero-line"></span>
                                <?php print wp_kses_post($settings['subheading']); ?>
                            </span>
                            <?php } ?>
                            <?php if(isset($settings['heading']) && $settings['heading'] != ''){?>
                            <h2 class="heading-1 mb-0">
                                <?php print wp_kses_post($settings['heading']); ?>
                            </h2>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="service-res">
                            <?php if(isset($settings['description']) && $settings['description'] != ''){?>
                            <p class="mb-30"><?php print wp_kses_post($settings['description']); ?></p>
                            <?php } ?>
                            <?php if(isset($settings['link_button']) && $settings['link_button'] != ''){?>
                            <a href="<?php print wp_kses_post($settings['link_button']); ?>" class="btn-1 btn-md">
                                <?php print wp_kses_post($settings['button']); ?>
                            </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <div class="service-wpr-2 grid-3">
                	<?php
                    $post_number = $settings['post_number'];
                    $wp_query = new \WP_Query(array('posts_per_page' => $post_number,'post_type' => 'service',  'orderby' => 'ID', 'order' => $sortby));     
                    $args = new \WP_Query(array(   
                                'post_type' => 'service', 
                            ));  
                    while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
                    ?>
	                <?php $icon = get_post_meta(get_the_ID(),'_cmb_sv_icon', true); ?>
                    <div class="service-box-2">
                        <div class="service-pic-2">
                            <?php if ( has_post_thumbnail() ) { ?>
	                        <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="no image">
	                        <?php } ?>
                            <div class="service-desc-2">
                                <div class="service-icon-title">
                                    <?php if ( isset($icon) && $icon != '' ) { ?>
	                                <div class="service-icon-2">
	                                    <i>
	                                        <img src="<?php echo wp_get_attachment_url($icon);?>" alt="no image">
	                                    </i>
	                                </div>
	                                <?php } ?>
                                    <div class="service-title-2">
                                        <h5 class="heading-5 mb-0">
                                            <?php the_title(); ?>
                                        </h5>
                                    </div>
                                </div>
                                <div class="service-text">
                                    <p><?php echo esc_attr(service_excerpt(20));?></p>
                                    <a href="<?php the_permalink();?>" class="service-btn-2"><?php if(isset($logtra_redux_demo['read_more'])){?>
                                <?php echo wp_specialchars_decode(esc_attr($logtra_redux_demo['read_more']));?>
                                <?php }else{?>
                                <?php echo esc_html__( 'Read More', 'logtra' ); } ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
		<?php endif; ?>
	<?php
	}
}
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
class BdevsPricing extends \Elementor\Widget_Base {

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
		return 'bdevs-pricing';
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
		return __( 'Pricing', 'bdevs-elementor' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Bdevs Pricing widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-price-table';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Bdevs Pricing widget belongs to.
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
		return [ 'pricing' ];
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
				'label' => esc_html__( 'Pricing', 'bdevs-elementor' ),
			]	
		);
		$this->add_control(
            'subheading',
            [
                'label'       => __( 'Subheading:', 'bdevs-elementor' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your subheading', 'bdevs-elementor' ),
                'default'     => __( 'Best pricing', 'bdevs-elementor' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'heading',
            [
                'label'       => __( 'Heading:', 'bdevs-elementor' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your heading', 'bdevs-elementor' ),
                'default'     => __( 'The right price for you', 'bdevs-elementor' ),
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
			'tabs',
			[
				'label' => esc_html__( 'Key Features:', 'bdevs-elementor' ),
				'type' => Controls_Manager::REPEATER,
				'fields'  	  =>[
                    [
                        'name'        => 'text',
                        'label'       => esc_html__( 'Text:', 'bdevs-elementor' ),
                        'type'        => Controls_Manager::TEXT,
                        'dynamic'     => [ 'active' => true ],
                        'default'     => esc_html__( '2 Warehouse' , 'bdevs-elementor' ),
                        'label_block' => true,
                    ],
				]
			]
		); 
        $this->add_control(
			'tabs2',
			[
				'label' => esc_html__( 'Plans', 'bdevs-elementor' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => [
                    [
                        'name'        => 'title',
                        'label'       => esc_html__( 'Title:', 'bdevs-elementor' ),
                        'type'        => Controls_Manager::TEXT,
                        'dynamic'     => [ 'active' => true ],
                        'default'     => esc_html__( 'Month' , 'bdevs-elementor' ),
                        'label_block' => true,
                    ],
					[
						'name'        => 'plan',
						'label'       => esc_html__( 'Plans:', 'bdevs-elementor' ),
						'type'        => Controls_Manager::REPEATER,
						'fields'  	  =>[
		                    [
		                        'name'        => 'name',
		                        'label'       => esc_html__( 'Name:', 'bdevs-elementor' ),
		                        'type'        => Controls_Manager::TEXT,
		                        'dynamic'     => [ 'active' => true ],
		                        'default'     => esc_html__( 'Basic' , 'bdevs-elementor' ),
		                        'label_block' => true,
		                    ],
		                    [
		                        'name'        => 'save',
		                        'label'       => esc_html__( 'Percent Savings:', 'bdevs-elementor' ),
		                        'type'        => Controls_Manager::TEXT,
		                        'dynamic'     => [ 'active' => true ],
		                        'default'     => esc_html__( 'Save 10' , 'bdevs-elementor' ),
		                        'label_block' => true,
		                    ],
		                    [
		                        'name'        => 'price',
		                        'label'       => esc_html__( 'Price:', 'bdevs-elementor' ),
		                        'type'        => Controls_Manager::TEXT,
		                        'dynamic'     => [ 'active' => true ],
		                        'default'     => esc_html__( '$19.00' , 'bdevs-elementor' ),
		                        'label_block' => true,
		                    ],
		                    [
		                        'name'        => 'link_button',
		                        'label'       => esc_html__( 'Link Button:', 'bdevs-elementor' ),
		                        'type'        => Controls_Manager::TEXT,
		                        'dynamic'     => [ 'active' => true ],
		                        'default'     => esc_html__( '#' , 'bdevs-elementor' ),
		                        'label_block' => true,
		                    ],
		                    [
		                        'name'        => 'button',
		                        'label'       => esc_html__( 'Button:', 'bdevs-elementor' ),
		                        'type'        => Controls_Manager::TEXT,
		                        'dynamic'     => [ 'active' => true ],
		                        'default'     => esc_html__( 'Contact Us' , 'bdevs-elementor' ),
		                        'label_block' => true,
		                    ],
						]
					],
				],
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
		extract($settings);?>
		<div class="price-area de-padding">
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
	            <div class="price-wpr">
	                <div class="row g-5">
	                    <div class="col-xl-4">
	                        <div class="price-sidebar">
	                            <div class="price-nav mb-40">
	                                <ul class="nav nav-pills price-nav-style" id="pills-tab" role="tablist">
	                                	<?php 
	                                	$i=0;
	                                	foreach ( $settings['tabs2'] as $item_plan ) : 
	                                	$i++;
	                                	?>
	                                	<?php if($i==1) { ?>
	                                    <li class="nav-item" role="presentation">
	                                        <button class="nav-link active" id="pills-month-tab" data-bs-toggle="pill" data-bs-target="#pills-month" type="button" role="tab" aria-controls="pills-month" aria-selected="true"><?php print wp_kses_post($item_plan['title']); ?></button>
	                                    </li>
	                                	<?php } else { ?>
	                                    <li class="nav-item" role="presentation">
	                                        <button class="nav-link" id="pills-year-tab" data-bs-toggle="pill" data-bs-target="#pills-year" type="button" role="tab" aria-controls="pills-year" aria-selected="false"><?php print wp_kses_post($item_plan['title']); ?></button>
	                                    </li>
	                                	<?php } ?>
	                                	<?php endforeach; ?> 
	                                </ul>
	                            </div>
	                            <ul class="price-list">    
	                            	<?php foreach ( $settings['tabs'] as $item ) :  ?>
	                                <li><?php print wp_kses_post($item['text']); ?> <i class="ti-check-box"></i></li>
	                            	<?php endforeach; ?>
	                            </ul>
	                        </div>
	                    </div>
	                    <div class="col-xl-8">
	                        <div class="price-main">
	                            <div class="tab-content" id="pills-tabContent">
	                                <?php 
                                	$i=0;
                                	foreach ( $settings['tabs2'] as $item_plan ) : 
                                	$i++;
                                	?>
                                	<?php if($i==1) { ?>
	                                <div class="tab-pane fade show active" id="pills-month" role="tabpanel" aria-labelledby="pills-month-tab">
	                                    <div class="price-content">
	                                    	<?php foreach ( $item_plan['plan'] as $item2 ) :  ?>
	                                        <div class="price-box">
	                                            <div class="price-left">
	                                            	<?php if(isset($item2['name']) && $item2['name'] != ''){?>
	                                                <h4 class="heading-4"><?php print wp_kses_post($item2['name']); ?></h4>
	                                            	<?php } ?>
	                                            	<?php if(isset($item2['save']) && $item2['save'] != ''){?>
	                                                <span><?php print wp_kses_post($item2['save']); ?>%</span>
	                                                <?php } ?>
	                                            </div>
	                                            <?php if(isset($item2['price']) && $item2['price'] != ''){?>
	                                            <div class="price-middle">
	                                                <h2 class="heading-1 mb-0">
	                                                    <?php print wp_kses_post($item2['price']); ?>
	                                                </h2>
	                                            </div>
	                                            <?php } ?>
	                                            <?php if(isset($item2['link_button']) && $item2['link_button'] != ''){?>
	                                            <div class="price-right">
	                                                <a href="<?php print wp_kses_post($item2['link_button']); ?>" class="btn-1 btn-sm btn-second">
	                                                    <?php print wp_kses_post($item2['button']); ?>
	                                                </a>
	                                            </div>
	                                            <?php } ?>
	                                        </div>
	                                        <?php endforeach; ?>
	                                    </div>
	                                </div>
	                                <?php } else { ?>
	                                <div class="tab-pane fade" id="pills-year" role="tabpanel" aria-labelledby="pills-year-tab">
	                                    <div class="price-content">
	                                        <?php foreach ( $item['plan'] as $item2 ) :  ?>
	                                        <div class="price-box">
	                                            <div class="price-left">
	                                            	<?php if(isset($item2['name']) && $item2['name'] != ''){?>
	                                                <h4 class="heading-4"><?php print wp_kses_post($item2['name']); ?></h4>
	                                            	<?php } ?>
	                                            	<?php if(isset($item2['save']) && $item2['save'] != ''){?>
	                                                <span><?php print wp_kses_post($item2['save']); ?>%</span>
	                                                <?php } ?>
	                                            </div>
	                                            <?php if(isset($item2['price']) && $item2['price'] != ''){?>
	                                            <div class="price-middle">
	                                                <h2 class="heading-1 mb-0">
	                                                    <?php print wp_kses_post($item2['price']); ?>
	                                                </h2>
	                                            </div>
	                                            <?php } ?>
	                                            <?php if(isset($item2['link_button']) && $item2['link_button'] != ''){?>
	                                            <div class="price-right">
	                                                <a href="<?php print wp_kses_post($item2['link_button']); ?>" class="btn-1 btn-sm btn-second">
	                                                    <?php print wp_kses_post($item2['button']); ?>
	                                                </a>
	                                            </div>
	                                            <?php } ?>
	                                        </div>
	                                        <?php endforeach; ?>
	                                    </div>
	                                </div>
	                                <?php } ?>
	                                <?php endforeach; ?>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	<?php
	}

}
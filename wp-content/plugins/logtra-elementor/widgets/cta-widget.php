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
class BdevsCTA extends \Elementor\Widget_Base {

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
		return 'bdevs-cta';
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
		return __( 'CTA', 'bdevs-elementor' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Bdevs Project widget icon.
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
	 * Retrieve the list of categories the Bdevs Project widget belongs to.
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
		return [ 'cta' ];
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
				'label' => esc_html__( 'Call To Action', 'bdevs-elementor' ),
			]	
		);
		$this->add_control(
            'choose_style',
            [
                'label'     => esc_html__( 'Choose Style', 'bdevs-elementor' ),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    'cta_style_1'  => esc_html__( 'Style 1', 'bdevs-elementor' ),
                    'cta_style_2'  => esc_html__( 'Style 2', 'bdevs-elementor' ),
                ],
                'default'   => 'cta_style_1',
            ]
        );
		$this->add_control(
            'cta_image',
            [
                'label'   => esc_html__( 'Image', 'bdevs-elementor' ),
                'type'    => Controls_Manager::MEDIA,
                'dynamic' => [ 'active' => true ],
                'description' => esc_html__( 'Add image from here', 'bdevs-elementor' ),
            ]
        ); 
		$this->add_control(
            'subheading',
            [
                'label'       => __( 'Subheading:', 'bdevs-elementor' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your subheading', 'bdevs-elementor' ),
                'default'     => __( 'CALL TO ACTION', 'bdevs-elementor' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'heading',
            [
                'label'       => __( 'Heading:', 'bdevs-elementor' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your heading', 'bdevs-elementor' ),
                'default'     => __( 'Request a free quote', 'bdevs-elementor' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'shortcode',
            [
                'label'   => esc_html__( 'Shortcode:', 'bdevs-elementor' ),
                'type'    => Controls_Manager::TEXT,
                'dynamic' => [ 'active' => true ],
                'default'       => __('Contact Shortcode here', 'bdevs-elementor'),
                'description' => esc_html__( 'Add Your shortcode here', 'bdevs-elementor' ),
                'label_block' => true,
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
            'show_subheading',
            [
                'label'   => esc_html__( 'Show Subheading', 'bdevs-elementor' ),
                'type'    => Controls_Manager::SWITCHER,
                'default' => 'yes',
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
		?>
		<?php $cta_style = $settings['choose_style'];?>
        <?php if( $cta_style == 'cta_style_1' ): ?> 
		<div class="requ-area">
	        <div class="requ-wpr">
	            <div class="row g-5">
	            	<?php if(isset($settings['cta_image']['url']) && $settings['cta_image']['url'] != ''){?>
	                <div class="col-xl-5">
	                    <div class="requ-left-pic hero-bg mr-60" style="background-image: url(<?php echo esc_url($settings['cta_image']['url']);?>)">
	                    </div>
	                </div>
	            	<?php } ?>
	                <div class="col-xl-7">
	                    <div class="requ-delivery bg-theme-2">
	                        <div class="requ-contact">
	                        	<?php if(isset($settings['subheading']) && $settings['subheading'] != ''){?>
	                            <span class="hero-sub-title mb-20">
	                                <span class="hero-line"></span>
	                                <?php print wp_kses_post($settings['subheading']); ?>
	                            </span>
	                            <?php } ?>
		                        <?php if(isset($settings['heading']) && $settings['heading'] != ''){?>
		                        <h2 class="heading-1 mb-40"><?php print wp_kses_post($settings['heading']); ?></h2>
		                        <?php } ?>
	                            <?php print do_shortcode(html_entity_decode( $settings['shortcode'] )); ?>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
		<?php elseif( $cta_style == 'cta_style_2' ): ?>
		<div class="requ-area bg-theme-2 de-pt">
            <div class="requ-wpr">
                <div class="row">
                	<?php if(isset($settings['cta_image']['url']) && $settings['cta_image']['url'] != ''){?>
                    <div class="col-xl-6">
                        <div class="requ-left-pic element-bottom pr-120">
                            <img src="<?php echo esc_url($settings['cta_image']['url']);?>" alt="no image">
                        </div>
                    </div>
                	<?php } ?>
                    <div class="col-xl-6">
                        <div class="requ-delivery req-delivery-two">
                            <div class="requ-contact requ-contact-white">
                            	<?php if(isset($settings['subheading']) && $settings['subheading'] != ''){?>
                                <span class="hero-sub-title mb-20">
                                    <span class="hero-line"></span>
                                    <?php print wp_kses_post($settings['subheading']); ?>
                                </span>
                                <?php } ?>
                                <?php if(isset($settings['heading']) && $settings['heading'] != ''){?>
                                <h2 class="heading-1 mb-40"><?php print wp_kses_post($settings['heading']); ?></h2>
                                <?php } ?>
                                <?php print do_shortcode('[contact-form-7 id="116" title="Call To Action 2"]'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php endif; ?>
	<?php
	}

}
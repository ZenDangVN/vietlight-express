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
class BdevsBanner2 extends \Elementor\Widget_Base {

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
        return 'bdevs-banner-2';
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
        return __( 'Banner 2', 'bdevs-elementor' );
    }

    /**
     * Get widget icon.
     *
     * Retrieve Bdevs About widget icon.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget icon.
     */
    public function get_icon() {
        return 'eicon-banner';
    }

    /**
     * Get widget categories.
     *
     * Retrieve the list of categories the Bdevs About widget belongs to.
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
        return [ 'banner 2' ];
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
                'label' => esc_html__( 'Banner 2', 'bdevs-elementor' ),
            ]   
        );
        $this->add_control(
            'background_image',
            [
                'label'   => esc_html__( 'Background Image:', 'bdevs-elementor' ),
                'type'    => Controls_Manager::MEDIA,
                'dynamic' => [ 'active' => true ],
                'description' => esc_html__( 'Add image from here', 'bdevs-elementor' ),
            ]
        );
        $this->add_control(
            'shape_image_1',
            [
                'label'   => esc_html__( 'Shape Image 1:', 'bdevs-elementor' ),
                'type'    => Controls_Manager::MEDIA,
                'dynamic' => [ 'active' => true ],
                'description' => esc_html__( 'Add image from here', 'bdevs-elementor' ),
            ]
        );
        $this->add_control(
            'shape_image_2',
            [
                'label'   => esc_html__( 'Shape Image 2:', 'bdevs-elementor' ),
                'type'    => Controls_Manager::MEDIA,
                'dynamic' => [ 'active' => true ],
                'description' => esc_html__( 'Add image from here', 'bdevs-elementor' ),
            ]
        ); 
        $this->add_control(
            'shape_image_3',
            [
                'label'   => esc_html__( 'Shape Image 3:', 'bdevs-elementor' ),
                'type'    => Controls_Manager::MEDIA,
                'dynamic' => [ 'active' => true ],
                'description' => esc_html__( 'Add image from here', 'bdevs-elementor' ),
            ]
        );
        $this->add_control(
            'shape_image_4',
            [
                'label'   => esc_html__( 'Shape Image 4:', 'bdevs-elementor' ),
                'type'    => Controls_Manager::MEDIA,
                'dynamic' => [ 'active' => true ],
                'description' => esc_html__( 'Add image from here', 'bdevs-elementor' ),
            ]
        );
        $this->add_control(
            'shape_image_5',
            [
                'label'   => esc_html__( 'Shape Image 5:', 'bdevs-elementor' ),
                'type'    => Controls_Manager::MEDIA,
                'dynamic' => [ 'active' => true ],
                'description' => esc_html__( 'Add image from here', 'bdevs-elementor' ),
            ]
        ); 
        $this->add_control(
            'shape_image_6',
            [
                'label'   => esc_html__( 'Shape Image 6:', 'bdevs-elementor' ),
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
                'default'     => __( 'we are the best', 'bdevs-elementor' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'heading',
            [
                'label'       => __( 'Heading:', 'bdevs-elementor' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your heading', 'bdevs-elementor' ),
                'default'     => __( 'International cargo <br /> transport ', 'bdevs-elementor' ),
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
            'link_button',
            [
                'label'       => __( 'Link Button:', 'bdevs-elementor' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your link', 'bdevs-elementor' ),
                'default'     => __( '#', 'bdevs-elementor' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'button',
            [
                'label'       => __( 'Button:', 'bdevs-elementor' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your link', 'bdevs-elementor' ),
                'default'     => __( 'Discover More ', 'bdevs-elementor' ),
                'label_block' => true,
            ]
        );
        $this->end_controls_section();
        /** 
        *   Layout section 
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
    extract($settings); ?>
    <div class="hero-area pos-rel bg bg-bottom-right home-2" style="background-image: url(<?php echo esc_url($settings['background_image']['url']);?>)">
            <div class="hero-2-shapes">
                <?php if(isset($settings['shape_image_1']['url']) && $settings['shape_image_1']['url'] != ''){?>
                <img src="<?php echo esc_url($settings['shape_image_1']['url']);?>" class="hero-dag" alt="no image">
                <?php } ?>
                <?php if(isset($settings['shape_image_2']['url']) && $settings['shape_image_2']['url'] != ''){?>
                <img src="<?php echo esc_url($settings['shape_image_2']['url']);?>" class="hero-dot-circle" alt="no image">
                <?php } ?>
                <?php if(isset($settings['shape_image_3']['url']) && $settings['shape_image_3']['url'] != ''){?>
                <img src="<?php echo esc_url($settings['shape_image_3']['url']);?>" class="half-circle-2" alt="no image">
                <?php } ?>
                <?php if(isset($settings['shape_image_4']['url']) && $settings['shape_image_4']['url'] != ''){?>
                <img src="<?php echo esc_url($settings['shape_image_4']['url']);?>" class="half-circle-1" alt="no image">
                <?php } ?>
                <?php if(isset($settings['shape_image_5']['url']) && $settings['shape_image_5']['url'] != ''){?>
                <img src="<?php echo esc_url($settings['shape_image_5']['url']);?>" class="hero-half-circle-3" alt="no image">
                <?php } ?>
                <?php if(isset($settings['shape_image_5']['url']) && $settings['shape_image_5']['url'] != ''){?>
                <img src="<?php echo esc_url($settings['shape_image_5']['url']);?>"  class="hero-shape-bottom" alt="no image">
            <?php } ?>
            </div>
            <div class="hero-single">
                <div class="container">
                    <div class="hero-wpr pos-rel">
                        <div class="row g-5">
                            <div class="col-xl-8">
                                <div class="hero-content element-center">
                                    <div class="hero-content-desc">
                                        <?php if ( $settings['show_subheading'] ) : ?>
                                        <span class="hero-sub-title mb-20">
                                            <span class="hero-line"></span>
                                            <?php print wp_kses_post($settings['subheading']); ?>
                                        </span>
                                        <?php endif; ?>
                                        <?php if ( $settings['show_heading'] ) : ?>
                                        <h2 class="hero-title">
                                            <?php print wp_kses_post($settings['heading']); ?>
                                        </h2>
                                        <?php endif; ?>
                                        <?php if(isset($settings['description']) && $settings['description'] != ''){?>
                                        <p class="mb-40"><?php print wp_kses_post($settings['description']); ?></p>
                                        <?php } ?>
                                        <div class="hero-btn">
                                            <?php if(isset($settings['link_button']) && $settings['link_button'] != ''){?>
                                            <a href="<?php print wp_kses_post($settings['link_button']); ?>" class="btn-1 btn-md mr-30">
                                                <?php print wp_kses_post($settings['button']); ?>
                                            </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
}



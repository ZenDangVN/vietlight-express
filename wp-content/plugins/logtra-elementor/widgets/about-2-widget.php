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
class BdevsAbout2 extends \Elementor\Widget_Base {

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
        return 'bdevs-about-2';
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
        return __( 'About 2', 'bdevs-elementor' );
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
        return 'eicon-user-circle-o';
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
        return [ 'about 2' ];
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
                'label' => esc_html__( 'About 2', 'bdevs-elementor' ),
            ]   
        );
        $this->add_control(
            'image_1',
            [
                'label'   => esc_html__( 'Image 1:', 'bdevs-elementor' ),
                'type'    => Controls_Manager::MEDIA,
                'dynamic' => [ 'active' => true ],
                'description' => esc_html__( 'Add image from here', 'bdevs-elementor' ),
            ]
        );
        $this->add_control(
            'image_2',
            [
                'label'   => esc_html__( 'Image 2:', 'bdevs-elementor' ),
                'type'    => Controls_Manager::MEDIA,
                'dynamic' => [ 'active' => true ],
                'description' => esc_html__( 'Add image from here', 'bdevs-elementor' ),
            ]
        );
        $this->add_control(
            'image_3',
            [
                'label'   => esc_html__( 'Image 3:', 'bdevs-elementor' ),
                'type'    => Controls_Manager::MEDIA,
                'dynamic' => [ 'active' => true ],
                'description' => esc_html__( 'Add image from here', 'bdevs-elementor' ),
            ]
        );
        $this->add_control(
            'image_4',
            [
                'label'   => esc_html__( 'Image 4:', 'bdevs-elementor' ),
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
                'default'     => __( 'About Company', 'bdevs-elementor' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'heading',
            [
                'label'       => __( 'Heading:', 'bdevs-elementor' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your heading', 'bdevs-elementor' ),
                'default'     => __( 'Digital &amp; trusted transport logistic company', 'bdevs-elementor' ),
                'label_block' => true,
            ]
        );  
        $this->add_control(
            'description',
            [
                'label'       => __( 'Description:', 'bdevs-elementor' ),
                'type'        => Controls_Manager::TEXTAREA,
                'placeholder' => __( 'Enter your description', 'bdevs-elementor' ),
                'default'     => __( 'This is description ', 'bdevs-elementor' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'cta',
            [
                'label'       => __( 'Call To Action:', 'bdevs-elementor' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your text', 'bdevs-elementor' ),
                'default'     => __( 'Our Staff Completes A Project Very Quickly.', 'bdevs-elementor' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'link_button',
            [
                'label'       => __( 'Link Button:', 'bdevs-elementor' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your link button', 'bdevs-elementor' ),
                'default'     => __( '# ', 'bdevs-elementor' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'button',
            [
                'label'       => __( 'Button:', 'bdevs-elementor' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your button', 'bdevs-elementor' ),
                'default'     => __( 'Read More', 'bdevs-elementor' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'tabs',
            [
                'label' => esc_html__( 'Items', 'bdevs-elementor' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name'        => 'choose_style',
                        'label'     => esc_html__( 'Number Style:', 'bdevs-elementor' ),
                        'type'      => Controls_Manager::SELECT,
                        'dynamic' => [ 'active' => true ],
                        'options'   => [
                        '1'  => esc_html__( 'Not Percent', 'bdevs-elementor' ),
                        '2'  => esc_html__( 'Percent', 'bdevs-elementor' ),
                        ],
                        'default'   => '1',
                    ],
                    [
                        'name'    => 'about_image',
                        'label'   => esc_html__( 'Image', 'bdevs-elementor' ),
                        'type'    => Controls_Manager::MEDIA,
                        'default'     => esc_html__( '' , 'bdevs-elementor' ),
                        'dynamic' => [ 'active' => true ],
                    ],
                    [
                        'name'        => 'number',
                        'label'       => esc_html__( 'Number:', 'bdevs-elementor' ),
                        'type'        => Controls_Manager::TEXT,
                        'dynamic'     => [ 'active' => true ],
                        'default'     => esc_html__( '1959+' , 'bdevs-elementor' ),
                        'label_block' => true,
                    ],
                    [
                        'name'        => 'title',
                        'label'       => esc_html__( 'Title:', 'bdevs-elementor' ),
                        'type'        => Controls_Manager::TEXT,
                        'dynamic'     => [ 'active' => true ],
                        'default'     => esc_html__( 'This is title' , 'bdevs-elementor' ),
                        'label_block' => true,
                    ],
                ],
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
    <div class="about-area-2 de-padding">
        <div class="container">
            <div class="about-wpr-2 grid-2">
                <div class="about-left-2">
                    <div class="about-left-img">
                        <div class="about-phase grid-2">
                            <div class="about-phase-1">
                                <?php if(isset($settings['image_1']['url']) && $settings['image_1']['url'] != ''){?>
                                <img src="<?php echo esc_url($settings['image_1']['url']);?>" alt="no image" class="about-left-img-main mb-30">
                                <?php } ?>
                                <?php if(isset($settings['image_2']['url']) && $settings['image_2']['url'] != ''){?>
                                <img src="<?php echo esc_url($settings['image_2']['url']);?>" alt="no image" class="about-left-img-main">
                                <?php } ?>
                            </div>
                            <?php if(isset($settings['image_3']['url']) && $settings['image_3']['url'] != ''){?>
                            <div class="about-phase-2 element-center">
                                <img src="<?php echo esc_url($settings['image_3']['url']);?>" alt="no image" class="about-left-img-main">
                            </div>
                            <?php } ?>
                        </div>
                        <?php if(isset($settings['image_4']['url']) && $settings['image_4']['url'] != ''){?>
                        <img src="<?php echo esc_url($settings['image_4']['url']);?>" alt="no image" class="about-left-img-shape">
                        <?php } ?>
                    </div>
                </div>
                <div class="about-right-2 pl-30">
                    <?php if ( $settings['show_subheading'] ) : ?>
                    <span class="hero-sub-title mb-20">
                        <span class="hero-line"></span>
                        <?php print wp_kses_post($settings['subheading']); ?>
                    </span>
                    <?php endif; ?>
                    <?php if ( $settings['show_heading'] ) : ?>
                    <h2 class="heading-1 mb-30">
                        <?php print wp_kses_post($settings['heading']); ?>
                    </h2>
                    <?php endif; ?>
                    <?php if(isset($settings['description']) && $settings['description'] != ''){?>
                    <p class="mb-50"><?php print wp_kses_post($settings['description']); ?></p>
                    <?php } ?>
                    <div class="about-opt-2">
                        <div class="about-opt-left-2">
                            <?php if(isset($settings['cta']) && $settings['cta'] != ''){?>
                            <p><?php print wp_kses_post($settings['cta']); ?></p>
                            <?php } ?>
                            <?php if(isset($settings['link_button']) && $settings['link_button'] != ''){?>
                            <a href="<?php print wp_kses_post($settings['link_button']); ?>" class="btn-3"><?php print wp_kses_post($settings['button']); ?></a>
                            <?php } ?>
                        </div>
                        <div class="about-opt-right-2">
                            <?php foreach ( $settings['tabs'] as $item ) : ?>
                            <div class="about-opt-right-box-2 about-opt-right-pd">
                                <?php if(isset($item['about_image']['url']) && $item['about_image']['url'] != ''){?>
                                <div class="about-opt-icon-2">
                                    <i>
                                        <img src="<?php echo esc_url($item['about_image']['url']);?>" alt="no image">
                                    </i>
                                </div>
                                <?php } ?>
                                <div class="about-opt-desc-2">
                                    <?php if(isset($item['number']) && $item['number'] != ''){?>
                                    <?php if( wp_kses_post($item['choose_style']) == '1'): ?>
                                    <h2 class="heading-1"><?php print wp_kses_post($item['number']); ?></h2>
                                    <?php elseif( wp_kses_post($item['choose_style']) == '2'): ?>
                                    <h2 class="heading-1"><?php print wp_kses_post($item['number']); ?>%</h2>
                                    <?php endif; ?>
                                    <?php } ?>
                                    <?php if(isset($item['title']) && $item['title'] != ''){?>
                                    <h5 class="heading-5 mb-0">
                                        <?php print wp_kses_post($item['title']); ?>
                                    </h5>
                                    <?php } ?>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
}



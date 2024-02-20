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
class BdevsContact extends \Elementor\Widget_Base {

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
        return 'bdevs-contact';
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
        return __( 'Contact', 'bdevs-elementor' );
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
        return 'eicon-form-horizontal';
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
        return [ 'contact' ];
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
                'label' => esc_html__( 'Contact', 'bdevs-elementor' ),
            ]   
        );
        $this->add_control(
            'choose_style',
            [
                'label'     => esc_html__( 'Choose Style', 'bdevs-elementor' ),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    'ct_style_1'  => esc_html__( 'Style 1', 'bdevs-elementor' ),
                    'ct_style_2'  => esc_html__( 'Style 2', 'bdevs-elementor' ),
                ],
                'default'   => 'ct_style_1',
            ]
        );
        $this->add_control(
            'heading',
            [
                'label'       => __( 'Heading:', 'bdevs-elementor' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your heading', 'bdevs-elementor' ),
                'default'     => __( 'Get in Touch', 'bdevs-elementor' ),
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
                'label' => esc_html__( 'Information:', 'bdevs-elementor' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name'        => 'icon',
                        'label'       => esc_html__( 'Icon:', 'bdevs-elementor' ),
                        'type'        => Controls_Manager::TEXT,
                        'dynamic'     => [ 'active' => true ],
                        'default'     => esc_html__( 'icofont-google-map' , 'bdevs-elementor' ),
                        'label_block' => true,
                    ],
                    [
                        'name'        => 'title',
                        'label'       => esc_html__( 'Title:', 'bdevs-elementor' ),
                        'type'        => Controls_Manager::TEXT,
                        'dynamic'     => [ 'active' => true ],
                        'default'     => esc_html__( 'Location' , 'bdevs-elementor' ),
                        'label_block' => true,
                    ],
                    [
                        'name'        => 'detail',
                        'label'       => esc_html__( 'Detail:', 'bdevs-elementor' ),
                        'type'        => Controls_Manager::TEXTAREA,
                        'dynamic'     => [ 'active' => true ],
                        'default'     => esc_html__( '22 Baker Street, London, United <br> Kingdom, W1U 3BW' , 'bdevs-elementor' ),
                        'label_block' => true,
                    ],
                ],
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
        <?php $ct_style = $settings['choose_style'];?>
        <?php if( $ct_style == 'ct_style_1' ): ?> 
        <div class="contact-area bg-3 de-padding">
            <div class="container">
                <div class="contact-wpr">
                    <div class="row g-5">
                        <div class="col-xl-4">
                            <div class="contact-sdebar">
                                <div class="contact-up-title">
                                    <?php if ( $settings['show_heading'] ) : ?>
                                    <h2 class="heading-1">
                                        <?php print wp_kses_post($settings['heading']); ?>
                                    </h2>
                                    <?php endif; ?>
                                    <?php if(isset($settings['description']) && $settings['description'] != ''){?>
                                    <p class="mb-0"><?php print wp_kses_post($settings['description']); ?></p>
                                    <?php } ?>
                                </div>
                                <div class="addr-home">
                                    <div class="addr-box">
                                        <?php foreach ( $settings['tabs'] as $item ) : ?>
                                        <div class="addr-box-single">
                                            <?php if(isset($item['icon']) && $item['icon'] != ''){?>
                                            <div class="addr-icon">
                                                <i class="<?php print wp_kses_post($item['icon']); ?>"></i>
                                            </div>
                                            <?php } ?>
                                            <div class="addr-desc">
                                                <?php if(isset($item['title']) && $item['title'] != ''){?>
                                                <h5><?php print wp_kses_post($item['title']); ?></h5>
                                                <?php } ?>
                                                <?php if(isset($item['detail']) && $item['detail'] != ''){?>
                                                <p class="mb-0"><?php print wp_kses_post($item['detail']); ?></p>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="contact-home pl-30">
                                <?php print do_shortcode(html_entity_decode( $settings['shortcode'] )); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php elseif( $ct_style == 'ct_style_2' ): ?>
        <div class="contact-area de-padding">
            <div class="container">
                <div class="contact-wpr">
                    <div class="row g-5">
                        <div class="col-xl-4">
                            <div class="contact-sdebar">
                                <div class="contact-up-title">
                                    <?php if ( $settings['show_heading'] ) : ?>
                                    <h2 class="heading-1">
                                        <?php print wp_kses_post($settings['heading']); ?>
                                    </h2>
                                    <?php endif; ?>
                                    <?php if(isset($settings['description']) && $settings['description'] != ''){?>
                                    <p class="mb-0"><?php print wp_kses_post($settings['description']); ?></p>
                                    <?php } ?>
                                </div>
                                <div class="addr-home">
                                    <div class="addr-box">
                                        <?php foreach ( $settings['tabs'] as $item ) : ?>
                                        <div class="addr-box-single">
                                            <?php if(isset($item['icon']) && $item['icon'] != ''){?>
                                            <div class="addr-icon">
                                                <i class="<?php print wp_kses_post($item['icon']); ?>"></i>
                                            </div>
                                            <?php } ?>
                                            <div class="addr-desc">
                                                <?php if(isset($item['title']) && $item['title'] != ''){?>
                                                <h5><?php print wp_kses_post($item['title']); ?></h5>
                                                <?php } ?>
                                                <?php if(isset($item['detail']) && $item['detail'] != ''){?>
                                                <p class="mb-0"><?php print wp_kses_post($item['detail']); ?></p>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="contact-home pl-30">
                                <?php print do_shortcode(html_entity_decode( $settings['shortcode'] )); ?>
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



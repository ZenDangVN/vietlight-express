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
class BdevsCounter extends \Elementor\Widget_Base {

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
        return 'bdevs-counter';
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
        return __( 'Counter', 'bdevs-elementor' );
    }

    /**
     * Get widget icon.
     *
     * Retrieve Bdevs Blog widget icon.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget icon.
     */
    public function get_icon() {
        return 'eicon-counter';
    }

    /**
     * Get widget categories.
     *
     * Retrieve the list of categories the Bdevs Blog widget belongs to.
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
        return [ 'counter' ];
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
                'label' => esc_html__( 'Counter', 'bdevs-elementor' ),
            ]
        );
        $this->add_control(
            'background_image',
            [
                'label'   => esc_html__( 'Background Image', 'bdevs-elementor' ),
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
                'default'     => __( 'NUMBER TALKS', 'bdevs-elementor' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'heading',
            [
                'label'       => __( 'Heading:', 'bdevs-elementor' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your heading', 'bdevs-elementor' ),
                'default'     => __( 'Providing assistance since 1959', 'bdevs-elementor' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'choose_style',
            [
                'label'     => esc_html__( 'Button Style', 'bdevs-elementor' ),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    'btn_style_1'  => esc_html__( 'Style 1', 'bdevs-elementor' ),
                    'btn_style_2'  => esc_html__( 'Style 2', 'bdevs-elementor' ),
                ],
                'default'   => 'btn_style_1',
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
                'placeholder' => __( 'Enter your button', 'bdevs-elementor' ),
                'default'     => __( 'Get Our Story', 'bdevs-elementor' ),
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
                        'name'    => 'icon_image',
                        'label'   => esc_html__( 'Image', 'bdevs-elementor' ),
                        'type'    => Controls_Manager::MEDIA,
                        'default'     => esc_html__( '' , 'bdevs-elementor' ),
                        'dynamic' => [ 'active' => true ],
                    ],
                    [
                        'name'        => 'count_to',
                        'label'       => esc_html__( 'Count To:', 'bdevs-elementor' ),
                        'type'        => Controls_Manager::TEXT,
                        'dynamic'     => [ 'active' => true ],
                        'default'     => esc_html__( '120' , 'bdevs-elementor' ),
                        'label_block' => true,
                    ],
                    [
                        'name'        => 'after_number',
                        'label'       => esc_html__( 'After Number:', 'bdevs-elementor' ),
                        'type'        => Controls_Manager::TEXT,
                        'dynamic'     => [ 'active' => true ],
                        'default'     => esc_html__( 'k' , 'bdevs-elementor' ),
                        'label_block' => true,
                        'condition'   =>[
                            'choose_style' => '1'
                        ]
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
    <div class="counter-area de-padding pos-rel hero-bg" style="background-image: url(<?php echo esc_url($settings['background_image']['url']);?>)">
            <div class="container">
                <div class="counter-wpr">
                    <div class="row align-items-center">
                        <div class="col-xl-4">
                            <div class="counter-title">
                                <?php if ( $settings['show_subheading'] ) : ?>
                                <span class="hero-sub-title mb-20">
                                    <span class="hero-line"></span>
                                    <?php print wp_kses_post($settings['subheading']); ?>
                                </span>
                                <?php endif; ?>
                                <?php if ( $settings['show_heading'] ) : ?>
                                <h2 class="heading-2 mb-30">
                                    <?php print wp_kses_post($settings['heading']); ?>
                                </h2>
                                <?php endif; ?>
                                <?php if(isset($settings['link_button']) && $settings['link_button'] != ''){?>
                                <?php $btn_style = $settings['choose_style'];?>
                                <?php if( $btn_style == 'btn_style_1' ): ?> 
                                <a href="<?php print wp_kses_post($settings['link_button']); ?>" class="btn-5 btn-md"><?php print wp_kses_post($settings['button']); ?></a>
                                <?php elseif( $btn_style == 'btn_style_2' ): ?>
                                <a href="<?php print wp_kses_post($settings['link_button']); ?>" class="service-btn-2"><?php print wp_kses_post($settings['button']); ?></a>
                                <?php endif; ?>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="counter-1 grid-3">
                                <?php foreach ( $settings['tabs'] as $item ) : ?>
                                <div class="fun-fact">
                                    <?php if(isset($item['icon_image']['url']) && $item['icon_image']['url'] != ''){?>
                                    <div class="counter-icon">
                                        <i><img src="<?php echo wp_kses_post($item['icon_image']['url']); ?>" alt="no image"></i>
                                    </div>
                                    <?php } ?>
                                    <div class="counter">
                                        <div class="timer" data-to="<?php print wp_kses_post($item['count_to']); ?>" data-speed="2000"></div>
                                        <?php if( wp_kses_post($item['choose_style']) == '1'): ?>
                                        <div class="operator"><?php print wp_kses_post($item['after_number']); ?></div>
                                        <?php elseif( wp_kses_post($item['choose_style']) == '2'): ?>
                                        <div class="operator">%</div>
                                        <?php endif; ?>
                                    </div>
                                    <?php if(isset($item['title']) && $item['title'] != ''){?>
                                    <span class="medium"><?php print wp_kses_post($item['title']); ?></span>
                                    <?php } ?>
                                </div>
                                <?php endforeach; ?> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if (is_admin()) { ?>
        <script type="text/javascript">
        $('.timer').countTo();
            $('.fun-fact').appear(function() {
                $('.timer').countTo();
            }, {
                accY: -100
            });  
        </script>   
        <?php } ?>
    <?php
    }

}
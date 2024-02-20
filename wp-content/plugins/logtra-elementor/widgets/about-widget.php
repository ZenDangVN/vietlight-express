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
class BdevsAbout extends \Elementor\Widget_Base {

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
        return 'bdevs-about';
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
        return __( 'About', 'bdevs-elementor' );
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
        return [ 'about' ];
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
                'label' => esc_html__( 'About', 'bdevs-elementor' ),
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
                'default'     => __( 'We are logistics &amp; <br /> transport company ', 'bdevs-elementor' ),
                'label_block' => true,
            ]
        );  
        $this->add_control(
            'year_background',
            [
                'label'   => esc_html__( 'Year Background:', 'bdevs-elementor' ),
                'type'    => Controls_Manager::MEDIA,
                'dynamic' => [ 'active' => true ],
                'description' => esc_html__( 'Add image from here', 'bdevs-elementor' ),
            ]
        );
        $this->add_control(
            'years',
            [
                'label'       => __( 'Years:', 'bdevs-elementor' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your years', 'bdevs-elementor' ),
                'default'     => __( '25', 'bdevs-elementor' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'experience_title',
            [
                'label'       => __( 'Experience Title:', 'bdevs-elementor' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your text', 'bdevs-elementor' ),
                'default'     => __( 'years experience', 'bdevs-elementor' ),
                'label_block' => true,
            ]
        ); 
        $this->add_control(
            'experience_description',
            [
                'label'       => __( 'Experience Description:', 'bdevs-elementor' ),
                'type'        => Controls_Manager::TEXTAREA,
                'placeholder' => __( 'Enter your description', 'bdevs-elementor' ),
                'default'     => __( 'This is description ', 'bdevs-elementor' ),
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
                'placeholder' => __( 'Enter your button', 'bdevs-elementor' ),
                'default'     => __( 'Discover More ', 'bdevs-elementor' ),
                'label_block' => true,
            ]
        );  
        $this->add_control(
            'user_avatar',
            [
                'label'   => esc_html__( 'User Avatar:', 'bdevs-elementor' ),
                'type'    => Controls_Manager::MEDIA,
                'dynamic' => [ 'active' => true ],
                'description' => esc_html__( 'Add image from here', 'bdevs-elementor' ),
            ]
        );
        $this->add_control(
            'user_name',
            [
                'label'       => __( 'User Name:', 'bdevs-elementor' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your user name', 'bdevs-elementor' ),
                'default'     => __( 'Anthony thomas', 'bdevs-elementor' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'user_role',
            [
                'label'       => __( 'User Role:', 'bdevs-elementor' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your user role', 'bdevs-elementor' ),
                'default'     => __( 'Ceo, Transport Company ', 'bdevs-elementor' ),
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
    <div class="about-area de-pt">
        <div class="container">
            <div class="about-wpr grid-2">
                <div class="about-left pos-rel">
                    <?php if(isset($settings['image_1']['url']) && $settings['image_1']['url'] != ''){?>
                    <img src="<?php echo esc_url($settings['image_1']['url']);?>" class="jahaj-1" alt="no image">
                    <?php } ?>
                    <?php if(isset($settings['image_2']['url']) && $settings['image_2']['url'] != ''){?>
                    <img src="<?php echo esc_url($settings['image_2']['url']);?>" class="about-location" alt="no image">
                    <?php } ?>
                </div>
                <div class="about-right pos-rel">
                    <?php if(isset($settings['image_3']['url']) && $settings['image_3']['url'] != ''){?>
                    <img src="<?php echo esc_url($settings['image_3']['url']);?>" class="about-jahaj-2" alt="no image">
                    <?php } ?>
                    <?php if ( $settings['show_subheading'] ) : ?>
                    <span class="hero-sub-title mb-20">
                        <span class="hero-line"></span>
                        <?php print wp_kses_post($settings['subheading']); ?>
                    </span>
                    <?php endif; ?>
                    <?php if ( $settings['show_heading'] ) : ?>
                    <h2 class="heading-1 mb-40">
                        <?php print wp_kses_post($settings['heading']); ?>
                    </h2>
                    <?php endif; ?>
                    <div class="about-opt">
                        <div class="about-yr">
                            <div class="about-yr-element pos-rel">
                                <?php if(isset($settings['year_background']['url']) && $settings['year_background']['url'] != ''){?>
                                <img src="<?php echo esc_url($settings['year_background']['url']);?>" alt="no image">
                                <?php } ?>
                                <?php if(isset($settings['years']) && $settings['years'] != ''){?>
                                <span class="about-value"><?php print wp_kses_post($settings['years']); ?></span>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="about-yr-text">
                            <?php if(isset($settings['experience_title']) && $settings['experience_title'] != ''){?>
                            <h4><?php print wp_kses_post($settings['experience_title']); ?></h4>
                            <?php } ?>
                            <?php if(isset($settings['experience_description']) && $settings['experience_description'] != ''){?>
                            <p><?php print wp_kses_post($settings['experience_description']); ?></p>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="about-bottom">
                        <?php if(isset($settings['link_button']) && $settings['link_button'] != ''){?>
                        <div class="about-btm-btn">
                            <a href="<?php print wp_kses_post($settings['link_button']); ?>" class="btn-1 btn-md mr-30">
                                <?php print wp_kses_post($settings['button']); ?>
                            </a>
                        </div>
                        <?php } ?>
                        <div class="about-btm-user">
                            <?php if(isset($settings['user_avatar']['url']) && $settings['user_avatar']['url'] != ''){?>
                            <img src="<?php echo esc_url($settings['user_avatar']['url']);?>" alt="no image">
                            <?php } ?>
                            <div class="about-btm-bio">
                                <?php if(isset($settings['user_name']) && $settings['user_name'] != ''){?>
                                <h6><?php print wp_kses_post($settings['user_name']); ?></h6>
                                <?php } ?>
                                <?php if(isset($settings['user_role']) && $settings['user_role'] != ''){?>
                                <span><?php print wp_kses_post($settings['user_role']); ?></span>
                                <?php } ?>
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



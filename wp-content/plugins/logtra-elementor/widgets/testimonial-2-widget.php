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
class BdevsTestimonial2 extends \Elementor\Widget_Base {

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
        return 'bdevs-testimonial-2';
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
        return __( 'Testimonial 2', 'bdevs-elementor' );
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
        return 'eicon-blockquote';
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
        return [ 'testimonial 2' ];
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
                'label' => esc_html__( 'Testimonial 2', 'bdevs-elementor' ),
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
            'subheading',
            [
                'label'       => __( 'Subheading:', 'bdevs-elementor' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your subheading', 'bdevs-elementor' ),
                'default'     => __( 'TESTIMONIALS', 'bdevs-elementor' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'heading',
            [
                'label'       => __( 'Heading:', 'bdevs-elementor' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your heading', 'bdevs-elementor' ),
                'default'     => __( 'What people say about our company', 'bdevs-elementor' ),
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
                        'name'    => 't_image',
                        'label'   => esc_html__( 'Image', 'bdevs-elementor' ),
                        'type'    => Controls_Manager::MEDIA,
                        'default'     => esc_html__( '' , 'bdevs-elementor' ),
                        'dynamic' => [ 'active' => true ],
                    ],
                    [
                        'name'        => 'text',
                        'label'       => esc_html__( 'Text:', 'bdevs-elementor' ),
                        'type'        => Controls_Manager::TEXTAREA,
                        'dynamic'     => [ 'active' => true ],
                        'default'     => esc_html__( 'This is text' , 'bdevs-elementor' ),
                        'label_block' => true,
                    ],
                    [
                        'name'        => 'stars_select',
                        'label'     => esc_html__( 'Star Ratings:', 'bdevs-elementor' ),
                        'type'      => Controls_Manager::SELECT,
                        'dynamic' => [ 'active' => true ],
                        'options'   => [
                        '1'  => esc_html__( '1 Star', 'bdevs-elementor' ),
                        '2'  => esc_html__( '2 Stars', 'bdevs-elementor' ),
                        '3'  => esc_html__( '3 Stars', 'bdevs-elementor' ),
                        '4'  => esc_html__( '4 Stars', 'bdevs-elementor' ),
                        '5'  => esc_html__( '5 Stars', 'bdevs-elementor' ),
                        ],
                        'default'   => '5',
                    ],
                    [
                        'name'        => 'name',
                        'label'       => esc_html__( 'Name:', 'bdevs-elementor' ),
                        'type'        => Controls_Manager::TEXT,
                        'dynamic'     => [ 'active' => true ],
                        'default'     => esc_html__( 'David Chapman' , 'bdevs-elementor' ),
                        'label_block' => true,
                    ],
                    [
                        'name'        => 'role',
                        'label'       => esc_html__( 'Role:', 'bdevs-elementor' ),
                        'type'        => Controls_Manager::TEXT,
                        'dynamic'     => [ 'active' => true ],
                        'default'     => esc_html__( 'Web Designer' , 'bdevs-elementor' ),
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
    extract($settings); 
    ?>
    <div class="testi-area bg-3 de-padding pos-rel">
        <?php if(isset($settings['background_image']['url']) && $settings['background_image']['url'] != ''){?>
        <img src="<?php echo esc_url($settings['background_image']['url']);?>" alt="no image" class="train-shape">
        <?php } ?>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2">
                    <div class="site-title text-center">
                        <?php if ( $settings['show_subheading'] ) : ?>
                        <span class="hero-sub-title mb-20">
                            <span class="hero-line"></span>
                            <?php print wp_kses_post($settings['subheading']); ?>
                        </span>
                        <?php endif; ?>
                        <?php if ( $settings['show_heading'] ) : ?>
                        <h2 class="heading-1 mb-0">
                            <?php print wp_kses_post($settings['heading']); ?>
                        </h2>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="testi-wpr">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3">
                        <div class="testi-up text-center">
                            <div thumbsSlider="" class="swiper testi-sldr">
                                <div class="swiper-wrapper">
                                    <?php  foreach ( $settings['tabs'] as $item ) : ?>
                                    <?php if(isset($item['t_image']['url']) && $item['t_image']['url'] != ''){?>
                                    <div class="swiper-slide">
                                        <img src="<?php echo wp_kses_post($item['t_image']['url']); ?>" alt="no image" />
                                    </div>
                                    <?php } ?>
                                    <?php endforeach; ?>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
                <div class="swiper testi-sldr-2">
                    <div class="swiper-wrapper">
                        <?php  foreach ( $settings['tabs'] as $item ) : ?>
                        <div class="swiper-slide">
                            <div class="testi-single">
                                <?php if(isset($item['text']) && $item['text'] != ''){?>
                                <p><?php print wp_kses_post($item['text']); ?></p>
                                <?php } ?>
                                <div class="testi-star-bio">
                                    <div class="testi-star">
                                        <?php if( wp_kses_post($item['stars_select']) == '1'): ?>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="un-rate fa-solid fa-star"></i>
                                        <i class="un-rate fa-solid fa-star"></i>
                                        <i class="un-rate fa-solid fa-star"></i>
                                        <i class="un-rate fa-solid fa-star"></i>
                                        <?php elseif( wp_kses_post($item['stars_select']) == '2'): ?>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="un-rate fa-solid fa-star"></i>
                                        <i class="un-rate fa-solid fa-star"></i>
                                        <i class="un-rate fa-solid fa-star"></i>
                                        <?php elseif( wp_kses_post($item['stars_select']) == '3'): ?>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="un-rate fa-solid fa-star"></i>
                                        <i class="un-rate fa-solid fa-star"></i>
                                        <?php elseif( wp_kses_post($item['stars_select']) == '4'): ?>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="un-rate fa-solid fa-star"></i>
                                        <?php elseif( wp_kses_post($item['stars_select']) == '5'): ?>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <?php endif; ?>
                                    </div>
                                    <div class="testi-bio">
                                        <?php if(isset($item['name']) && $item['name'] != ''){?>
                                        <h4 class="heading-4"><?php print wp_kses_post($item['name']); ?></h4>
                                        <?php } ?>
                                        <?php if(isset($item['role']) && $item['role'] != ''){?>
                                        <span><?php print wp_kses_post($item['role']); ?></span>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                 </div>
            </div>
        </div>
    </div>
    <?php if (is_admin()) { ?>
        <script type="text/javascript">
         var swiper = new Swiper(".testi-sldr", {
                initialSlide: 1,
                loop: true,
                spaceBetween: 10,
                slidesPerView: 5,
                freeMode: true,
                watchSlidesProgress: true,
            });
            var swiper2 = new Swiper(".testi-sldr-2", {
                slidesPerView: 1,
                loop: true,
                spaceBetween: 10,
                thumbs: {
                    swiper: swiper,
                },
        });
         
        </script>   
        <?php } ?>
    <?php
    }

}



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
class BdevsProject2 extends \Elementor\Widget_Base {

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
        return 'bdevs-project-2';
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
        return __( 'Project 2', 'bdevs-elementor' );
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
        return 'eicon-post-list';
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
        return [ 'project 2' ];
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
                'label' => esc_html__( 'Project 2', 'bdevs-elementor' ),
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
                'default'     => __( '0ur latest portfolio', 'bdevs-elementor' ),
                'label_block' => true,
            ]
        ); 
        $this->add_control(
            'heading',
            [
                'label'       => __( 'Heading:', 'bdevs-elementor' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your heading', 'bdevs-elementor' ),
                'default'     => __( 'Explore recent projects', 'bdevs-elementor' ),
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
            'arrow_right',
            [
                'label'       => __( 'Arrow Right Icon:', 'bdevs-elementor' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your arrow right icon', 'bdevs-elementor' ),
                'default'     => __( 'fa-solid fa-chevron-right', 'bdevs-elementor' ),
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
        extract($settings); 
        ?>
        <div class="gallery-area bg de-padding pos-rel">
            <img src="<?php echo esc_url($settings['background_image']['url']);?>" alt="no image" class="gallery-shape">
            <div class="container-fluid">
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
                <div class="gallery-wpr">
                    <div class="swiper port-sldr">
                        <div class="swiper-wrapper">
                            <?php
                            $post_number = $settings['post_number'];
                            $wp_query = new \WP_Query(array('posts_per_page' => $post_number,'post_type' => 'project',  'orderby' => 'ID', 'order' => $sortby));     
                            $args = new \WP_Query(array(   
                                        'post_type' => 'project', 
                                    ));  
                            while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
                            ?>
                            <?php $p_desc = get_post_meta(get_the_ID(),'_cmb_p_description', true); ?>
                            <?php $typs = get_the_terms(get_the_ID(),'type1');
                                $typ_name = '';
                                foreach((array)$typs as $typ){
                                    $typ_name .= $typ->name .' ';
                                    $typ_slug .= $typ->slug .' '; 
                                } 
                            ?> 
                            <div class="swiper-slide">
                                <div class="gallery-single">
                                    <div class="gallery-pic">
                                        <?php if ( has_post_thumbnail() ) { ?>
                                        <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="no image">
                                        <?php } ?>
                                        <div class="gallery-desc">
                                            <h3 class="heading-3"><?php the_title(); ?></h3>
                                            <p><?php echo esc_attr($p_desc);?></p>
                                            <a href="<?php the_permalink(); ?>" class="gallery-btn">
                                                <?php if(isset($settings['arrow_right']) && $settings['arrow_right'] != ''){?>
                                                <i class="<?php print wp_kses_post($settings['arrow_right']);?>"></i>
                                                <?php } ?>
                                                <?php if(isset($logtra_redux_demo['read_more'])){?>
                                                <?php echo wp_specialchars_decode(esc_attr($logtra_redux_demo['read_more']));?>
                                                <?php }else{?>
                                                <?php echo esc_html__( 'Read More', 'logtra' ); } ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php   
                            endwhile; 
                            wp_reset_postdata();
                            ?>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
        <?php if (is_admin()) { ?>
        <script type="text/javascript">
        var swiper = new Swiper('.port-sldr', {
            loop: true,
            centeredSlides: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: true
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 1,
                },
                1024: {
                    slidesPerView: 2,
                },
                4000: {
                    slidesPerView: 'auto',
                }
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            }
        });
        </script>   
        <?php } ?>
    <?php
    }

}



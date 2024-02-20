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
class BdevsBlog extends \Elementor\Widget_Base {

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
        return 'bdevs-blog';
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
        return __( 'Blog', 'bdevs-elementor' );
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
        return [ 'blog' ];
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
                'label' => esc_html__( 'Blog', 'bdevs-elementor' ),
            ]   
        ); 
        $this->add_control(
            'subheading',
            [
                'label'       => __( 'Subheading:', 'bdevs-elementor' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your subheading', 'bdevs-elementor' ),
                'default'     => __( 'NEWS &amp; UPDATES', 'bdevs-elementor' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'heading',
            [
                'label'       => __( 'Heading:', 'bdevs-elementor' ),
                'type'        => Controls_Manager::TEXTAREA,
                'placeholder' => __( 'Enter your heading', 'bdevs-elementor' ),
                'default'     => __( 'Latest from 
                            our popular 
                            blog post', 'bdevs-elementor' ),
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
                'default'     => __( 'Discover More', 'bdevs-elementor' ),
                'label_block' => true,
            ]
        );  
        $this->add_control(
            'posts_per_page',
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
    if ($settings['sortby']=='sortby_style_1') {
            $sortby = 'DESC';
        }
        if ($settings['sortby']=='sortby_style_2') {
            $sortby = 'ASC';
        }
    ?>
    <div class="blog-area de-padding">
        <div class="container">
            <div class="blog-wpr">
                <div class="row g-5">
                    <div class="col-xl-3">
                        <?php if ( $settings['show_subheading'] ) : ?>
                        <span class="hero-sub-title mb-20">
                            <span class="hero-line"></span>
                            <?php print wp_kses_post($settings['subheading']); ?>
                        </span>
                        <?php endif; ?>
                        <?php if ( $settings['show_heading'] ) : ?>
                        <h2 class="heading-1 mb-20">
                            <?php print wp_kses_post($settings['heading']); ?>
                        </h2>
                        <?php endif; ?>
                        <?php if(isset($settings['description']) && $settings['description'] != ''){?>
                        <p class="mb-30"><?php print wp_kses_post($settings['description']); ?></p>
                        <?php } ?>
                        <?php if(isset($settings['link_button']) && $settings['link_button'] != ''){?>
                        <a href="<?php print wp_kses_post($settings['link_button']); ?>" class="btn-1 btn-md"><?php print wp_kses_post($settings['button']); ?></a>
                        <?php } ?>
                    </div>
                    <div class="col-xl-9">
                        <div class="blog-content">
                            <div class="row g-5">
                                <div class="col-xl-4">
                                    <?php
                                    $posts_per_page = $settings['posts_per_page'];
                                    $wp_query = new \WP_Query(array('posts_per_page' => $posts_per_page,'post_type' => 'post',  'orderby' => 'ID', 'order' => $sortby));     
                                    $args = new \WP_Query(array(   
                                                'post_type' => 'post', 
                                            ));  
                                    $i=0;
                                    while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
                                    $i++;  
                                    ?>
                                    <?php $featured_image_3 = get_post_meta(get_the_ID(),'_cmb_featured_image_3', true); ?>
                                    <?php $title = get_post_meta(get_the_ID(),'_cmb_title_2', true); ?>
                                    <?php if ($i%3==1) { ?>
                                    <div class="blog-box">
                                        <?php if ( isset($featured_image_3) && $featured_image_3 != '' ) { ?>
                                        <div class="blog-pic">
                                            <img src="<?php echo wp_get_attachment_url($featured_image_3);?>" alt="no image">
                                        </div>
                                        <?php } ?>
                                        <div class="blog-desc mt-30">
                                            <a href="<?php the_permalink();?>">
                                                <h4><?php echo esc_attr($title);?></h4>
                                            </a>
                                            <p class="blog-text">
                                                <?php echo esc_attr(logtra_excerpt_3(10));?>
                                            </p>
                                            <div class="blog-meta">
                                                <div class="blog-admin">
                                                    <i class="ti-calendar"></i>
                                                    <span><?php the_time(get_option( 'date_format' ));?></span>
                                                </div>
                                                <div class="blog-like-com">
                                                    <div class="blog-com">
                                                        <i class="ti-comment"></i>
                                                        <span><?php comments_number( esc_html__('0 Comments', 'logtra'), esc_html__('1 Comment', 'logtra'), esc_html__('% Comments', 'logtra') ); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <?php endwhile; ?>
                                </div>
                                <div class="col-xl-8">
                                    <?php
                                    $posts_per_page = $settings['posts_per_page'];
                                    $wp_query = new \WP_Query(array('posts_per_page' => $posts_per_page,'post_type' => 'post',  'orderby' => 'ID', 'order' => $sortby));     
                                    $args = new \WP_Query(array(   
                                                'post_type' => 'post', 
                                            ));  
                                    $j=0;
                                    while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
                                    $j++;  
                                    ?>
                                    <?php $featured_image_3 = get_post_meta(get_the_ID(),'_cmb_featured_image_3', true); ?>
                                    <?php $title = get_post_meta(get_the_ID(),'_cmb_title_2', true); ?>
                                    <?php if (($j%3==2) || ($j%3==0)) { ?>
                                    <div class="blog-box blog-df">
                                        <?php if ( isset($featured_image_3) && $featured_image_3 != '' ) { ?>
                                        <div class="blog-pic">
                                            <img src="<?php echo wp_get_attachment_url($featured_image_3);?>" alt="no image">
                                        </div>
                                        <?php } ?>
                                        <div class="blog-desc">
                                            <a href="<?php the_permalink();?>">
                                                <h4><?php echo esc_attr($title);?></h4>
                                            </a>
                                            <p class="blog-text">
                                                <?php echo esc_attr(logtra_excerpt_3(10));?>
                                            </p>
                                            <div class="blog-meta">
                                                <div class="blog-admin">
                                                    <i class="ti-calendar"></i>
                                                    <span><?php the_time(get_option( 'date_format' ));?></span>
                                                </div>
                                                <div class="blog-like-com">
                                                    <div class="blog-com">
                                                        <i class="ti-comment"></i>
                                                        <span><?php comments_number( esc_html__('0 Comments', 'logtra'), esc_html__('1 Comment', 'logtra'), esc_html__('% Comments', 'logtra') ); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <?php endwhile; ?>
                                </div>
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



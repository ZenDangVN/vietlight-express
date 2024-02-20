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
class BdevsProject extends \Elementor\Widget_Base {

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
        return 'bdevs-project';
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
        return __( 'Project', 'bdevs-elementor' );
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
        return [ 'project' ];
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
                'label' => esc_html__( 'Project', 'bdevs-elementor' ),
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
                'default'     => __( '6', 'bdevs-elementor' ),
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
            'fullscreen_icon',
            [
                'label'       => __( 'Fullscreen Icon:', 'bdevs-elementor' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your fullscreen icon', 'bdevs-elementor' ),
                'default'     => __( 'ti ti-fullscreen', 'bdevs-elementor' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'arrow_right',
            [
                'label'       => __( 'Arrow Right Icon:', 'bdevs-elementor' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your arrow right icon', 'bdevs-elementor' ),
                'default'     => __( 'ti ti-angle-double-right', 'bdevs-elementor' ),
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
        <div class="project-area pos-rel de-pt">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2">
                        <div class="site-title text-center mb-20">
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
                <div class="sec-btn-area text-center">
                    <div class="filter-menu-style-1 filter-menu-active">
                        <button class="active" data-filter="*"><?php echo esc_html__( 'All', 'logtra' );?></button>
                        <?php 
                            $types = get_terms('type1');   
                            foreach( (array)$types as $type){
                                $type_name = $type->name;
                                $type_slug = $type->slug;
                        ?>
                        <button data-filter=".<?php echo esc_attr($type_slug);?>" class="pf_btn"><?php echo esc_attr($type_name);?></button>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row g-0 filter-active project-page magnific-mix-gallery">
                    <?php
                    $post_number = $settings['post_number'];
                    $wp_query = new \WP_Query(array('posts_per_page' => $post_number,'post_type' => 'project',  'orderby' => 'ID', 'order' => $sortby));     
                    $args = new \WP_Query(array(   
                                'post_type' => 'project', 
                            ));  
                    while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
                    ?>
                    <?php $featured_image_2 = get_post_meta(get_the_ID(),'_cmb_p_featured_image_2', true); ?>
                    <?php $p_desc = get_post_meta(get_the_ID(),'_cmb_p_description', true); ?>
                    <?php $typs = get_the_terms(get_the_ID(),'type1');
                        $typ_name = '';
                        foreach((array)$typs as $typ){
                            $typ_name .= $typ->name .' ';
                            $typ_slug .= $typ->slug .' '; 
                        } 
                    ?> 
                    <div class="col-md-6 col-lg-6 col-xl-3 filter-item <?php echo esc_attr($typ_slug);?>">
                        <div class="project-card image-scale-hover">
                            <div class="project-img">
                                <?php if (isset($featured_image_2) && $featured_image_2!='' ) { ?>
                                <img src="<?php echo wp_get_attachment_url($featured_image_2);?>" alt="project Image" class="pw">
                                <?php } ?>
                                <div class="port-overlay">
                                    <div class="port-desc">
                                        <div class="port-links">
                                            <a href="<?php echo wp_get_attachment_url($featured_image_2);?>" class="item popup-link port-link">
                                                <?php if(isset($settings['fullscreen_icon']) && $settings['fullscreen_icon'] != ''){?>
                                                <i class="<?php print wp_kses_post($settings['fullscreen_icon']);?>"></i>
                                                <?php } ?>
                                            </a>
                                            <a href="<?php the_permalink(); ?>" target="_blank" class="single-link port-link">
                                                <?php if(isset($settings['arrow_right']) && $settings['arrow_right'] != ''){?>
                                                <i class="<?php print wp_kses_post($settings['arrow_right']);?>"></i>
                                                <?php } ?>
                                            </a>
                                        </div>
                                        <div class="port-content">
                                            <h4><?php the_title(); ?></h4>
                                            <p class="mb-0"><?php echo esc_attr($p_desc);?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php   
                    endwhile; 
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
        <?php if (is_admin()) { ?>
        <script type="text/javascript">
        $('.filter-active').imagesLoaded(function () {
            var $filter = '.filter-active',
            $filterItem = '.filter-item',
            $filterMenu = '.filter-menu-active';

            if ($($filter).length > 0) {
                var $grid = $($filter).isotope({
                itemSelector: $filterItem,
                filter: '*',
                masonry: {
                        // use outer width of grid-sizer for columnWidth
                        columnWidth: '.filter-item'
                    }
                });
                // filter items on button click
                $($filterMenu).on('click', 'button', function () {
                    var filterValue = $(this).attr('data-filter');
                    $grid.isotope({
                        filter: filterValue
                    });
                });
                // Menu Active Class 
                $($filterMenu).on('click', 'button', function (event) {
                    event.preventDefault();
                    $(this).addClass('active');
                    $(this).siblings('.active').removeClass('active');
                });
            }
        });
        $('.magnific-mix-gallery').each(function() {
            var $container = $(this);
            var $imageLinks = $container.find('.item');

            var items = [];
            $imageLinks.each(function() {
                var $item = $(this);
                var type = 'image';
                if ($item.hasClass('magnific-iframe')) {
                    type = 'iframe';
                }
                var magItem = {
                    src: $item.attr('href'),
                    type: type
                };
                magItem.title = $item.data('title');
                items.push(magItem);
            });

            $imageLinks.magnificPopup({
                mainClass: 'mfp-fade',
                items: items,
                gallery: {
                    enabled: true,
                    tPrev: $(this).data('prev-text'),
                    tNext: $(this).data('next-text')
                },
                type: 'image',
                callbacks: {
                    beforeOpen: function() {
                        var index = $imageLinks.index(this.st.el);
                        if (-1 !== index) {
                            this.goTo(index);
                        }
                    }
                }
            });
        });
        </script>   
        <?php } ?>
    <?php
    }

}



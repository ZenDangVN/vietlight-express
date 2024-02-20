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
class BdevsTeam extends \Elementor\Widget_Base {

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
        return 'bdevs-team';
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
        return __( 'Team', 'bdevs-elementor' );
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
        return 'eicon-person';
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
        return [ 'team' ];
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
                'label' => esc_html__( 'Team', 'bdevs-elementor' ),
            ]   
        );
        $this->add_control(
            'choose_style',
            [
                'label'     => esc_html__( 'Choose Style', 'bdevs-elementor' ),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    't_style_1'  => esc_html__( 'Style 1', 'bdevs-elementor' ),
                    't_style_2'  => esc_html__( 'Style 2', 'bdevs-elementor' ),
                ],
                'default'   => 't_style_1',
            ]
        );
        $this->add_control(
            'subheading',
            [
                'label'       => __( 'Subheading:', 'bdevs-elementor' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your subheading', 'bdevs-elementor' ),
                'default'     => __( 'Our Team', 'bdevs-elementor' ),
                'label_block' => true,
            ]
        ); 
        $this->add_control(
            'heading',
            [
                'label'       => __( 'Heading:', 'bdevs-elementor' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your heading', 'bdevs-elementor' ),
                'default'     => __( 'Our experienced experts', 'bdevs-elementor' ),
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
            'tabs',
            [
                'label' => esc_html__( 'Items', 'bdevs-elementor' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name'    => 'team_image',
                        'label'   => esc_html__( 'Image', 'bdevs-elementor' ),
                        'type'    => Controls_Manager::MEDIA,
                        'default'     => esc_html__( '' , 'bdevs-elementor' ),
                        'dynamic' => [ 'active' => true ],
                    ],
                    [
                        'name'        => 'team_name',
                        'label'       => esc_html__( 'Name:', 'bdevs-elementor' ),
                        'type'        => Controls_Manager::TEXT,
                        'dynamic'     => [ 'active' => true ],
                        'default'     => esc_html__( 'Bessie Cooper' , 'bdevs-elementor' ),
                        'label_block' => true,
                    ],
                    [
                        'name'        => 'job',
                        'label'       => esc_html__( 'Job:', 'bdevs-elementor' ),
                        'type'        => Controls_Manager::TEXT,
                        'dynamic'     => [ 'active' => true ],
                        'default'     => esc_html__( 'Truck driver' , 'bdevs-elementor' ),
                        'label_block' => true,
                    ],
                    [
                        'name'        => 'link_social_1',
                        'label'       => esc_html__( 'Link Social 1:', 'bdevs-elementor' ),
                        'type'        => Controls_Manager::TEXT,
                        'dynamic'     => [ 'active' => true ],
                        'default'     => esc_html__( 'https://www.facebook.com/' , 'bdevs-elementor' ),
                        'label_block' => true,
                    ],
                    [
                        'name'        => 'social_1',
                        'label'       => esc_html__( 'Social 1:', 'bdevs-elementor' ),
                        'type'        => Controls_Manager::TEXT,
                        'dynamic'     => [ 'active' => true ],
                        'default'     => esc_html__( 'fab fa-facebook-f' , 'bdevs-elementor' ),
                        'label_block' => true,
                    ],
                    [
                        'name'        => 'link_social_2',
                        'label'       => esc_html__( 'Link Social 2:', 'bdevs-elementor' ),
                        'type'        => Controls_Manager::TEXT,
                        'dynamic'     => [ 'active' => true ],
                        'default'     => esc_html__( 'https://www.instagram.com/' , 'bdevs-elementor' ),
                        'label_block' => true,
                    ],
                    [
                        'name'        => 'social_2',
                        'label'       => esc_html__( 'Social 2:', 'bdevs-elementor' ),
                        'type'        => Controls_Manager::TEXT,
                        'dynamic'     => [ 'active' => true ],
                        'default'     => esc_html__( 'fab fa-instagram' , 'bdevs-elementor' ),
                        'label_block' => true,
                    ],
                    [
                        'name'        => 'link_social_3',
                        'label'       => esc_html__( 'Link Social 3:', 'bdevs-elementor' ),
                        'type'        => Controls_Manager::TEXT,
                        'dynamic'     => [ 'active' => true ],
                        'default'     => esc_html__( 'https://twitter.com/' , 'bdevs-elementor' ),
                        'label_block' => true,
                    ],
                    [
                        'name'        => 'social_3',
                        'label'       => esc_html__( 'Social 3:', 'bdevs-elementor' ),
                        'type'        => Controls_Manager::TEXT,
                        'dynamic'     => [ 'active' => true ],
                        'default'     => esc_html__( 'fab fa-twitter' , 'bdevs-elementor' ),
                        'label_block' => true,
                    ],
                    [
                        'name'        => 'link_social_4',
                        'label'       => esc_html__( 'Link Social 4:', 'bdevs-elementor' ),
                        'type'        => Controls_Manager::TEXT,
                        'dynamic'     => [ 'active' => true ],
                        'default'     => esc_html__( 'https://youtube.com' , 'bdevs-elementor' ),
                        'label_block' => true,
                    ],
                    [
                        'name'        => 'social_4',
                        'label'       => esc_html__( 'Social 4:', 'bdevs-elementor' ),
                        'type'        => Controls_Manager::TEXT,
                        'dynamic'     => [ 'active' => true ],
                        'default'     => esc_html__( 'fab fa-youtube' , 'bdevs-elementor' ),
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
        <?php $t_style = $settings['choose_style'];?>
        <?php if( $t_style == 't_style_1' ): ?> 
        <div class="team-area de-padding">
            <div class="container">
                <?php if ( $settings['show_heading'] ) : ?>
                <div class="row">
                    <div class="col-xl-8 offset-xl-2">
                        <div class="site-title text-center">
                            <?php if(isset($settings['subheading']) && $settings['subheading'] != ''){?>
                            <span class="hero-sub-title mb-20">
                                <span class="hero-line"></span>
                                <?php print wp_kses_post($settings['subheading']); ?>
                            </span>
                            <?php } ?>
                            <?php if(isset($settings['heading']) && $settings['heading'] != ''){?>
                            <h2 class="heading-1 mb-20">
                                <?php print wp_kses_post($settings['heading']); ?>
                            </h2>
                            <?php } ?>
                            <?php if(isset($settings['description']) && $settings['description'] != ''){?>
                            <p class="mb-0"><?php print wp_kses_post($settings['description']); ?></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <div class="team-wpr grid-3">
                    <?php foreach ( $settings['tabs'] as $item ) :  ?>
                    <div class="team-box">
                        <div class="team-bio"> 
                            <?php if(isset($item['team_name']) && $item['team_name'] != ''){?>
                            <h4><?php print wp_kses_post($item['team_name']); ?></h4>
                            <?php } ?>
                            <?php if(isset($item['job']) && $item['job'] != ''){?>
                            <span><?php print wp_kses_post($item['job']); ?></span>
                            <?php } ?>
                        </div>
                        <div class="team-pic">
                            <?php if(isset($item['team_image']['url']) && $item['team_image']['url'] != ''){?>
                            <img src="<?php echo wp_kses_post($item['team_image']['url']); ?>" class="team-main" alt="no image">
                            <?php } ?>
                            <?php if(isset($settings['shape_image_1']['url']) && $settings['shape_image_1']['url'] != ''){?>
                            <img src="<?php echo wp_kses_post($settings['shape_image_1']['url']); ?>" class="team-shape" alt="no image">
                            <?php } ?>
                            <?php if(isset($settings['shape_image_2']['url']) && $settings['shape_image_2']['url'] != ''){?>
                            <img src="<?php echo wp_kses_post($settings['shape_image_2']['url']); ?>" class="team-shape-2" alt="no image">
                            <?php } ?>
                            <ul class="team-social">
                                <?php if(isset($item['link_social_1']) && $item['link_social_1'] != ''){?>
                                <li><a href="<?php print wp_kses_post($item['link_social_1']); ?>"><i class="<?php print wp_kses_post($item['social_1']); ?>"></i></a></li>
                                <?php } ?>
                                <?php if(isset($item['link_social_2']) && $item['link_social_2'] != ''){?>
                                <li><a href="<?php print wp_kses_post($item['link_social_2']); ?>"><i class="<?php print wp_kses_post($item['social_2']); ?>"></i></a></li>
                                <?php } ?>
                                <?php if(isset($item['link_social_3']) && $item['link_social_3'] != ''){?>
                                <li><a href="<?php print wp_kses_post($item['link_social_3']); ?>"><i class="<?php print wp_kses_post($item['social_3']); ?>"></i></a></li>
                                <?php } ?>
                                <?php if(isset($item['link_social_4']) && $item['link_social_4'] != ''){?>
                                <li><a href="<?php print wp_kses_post($item['link_social_4']); ?>"><i class="<?php print wp_kses_post($item['social_4']); ?>"></i></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <?php elseif( $t_style == 't_style_2' ): ?>
        <div class="team-area de-padding">
            <div class="container">
                <?php if ( $settings['show_heading'] ) : ?>
                <div class="row">
                    <div class="col-xl-8 offset-xl-2">
                        <div class="site-title text-center">
                            <?php if(isset($settings['subheading']) && $settings['subheading'] != ''){?>
                            <span class="hero-sub-title mb-20">
                                <span class="hero-line"></span>
                                <?php print wp_kses_post($settings['subheading']); ?>
                            </span>
                            <?php } ?>
                            <?php if(isset($settings['heading']) && $settings['heading'] != ''){?>
                            <h2 class="heading-1 mb-20">
                                <?php print wp_kses_post($settings['heading']); ?>
                            </h2>
                            <?php } ?>
                            <?php if(isset($settings['description']) && $settings['description'] != ''){?>
                            <p class="mb-0"><?php print wp_kses_post($settings['description']); ?></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <div class="team-wpr grid-4">
                    <?php foreach ( $settings['tabs'] as $item ) :  ?>
                    <div class="team-box">
                        <div class="team-bio">
                            <?php if(isset($item['team_name']) && $item['team_name'] != ''){?>
                            <h4><?php print wp_kses_post($item['team_name']); ?></h4>
                            <?php } ?>
                            <?php if(isset($item['job']) && $item['job'] != ''){?>
                            <span><?php print wp_kses_post($item['job']); ?></span>
                            <?php } ?>
                        </div>
                        <div class="team-pic">
                            <?php if(isset($item['team_image']['url']) && $item['team_image']['url'] != ''){?>
                            <img src="<?php echo wp_kses_post($item['team_image']['url']); ?>" class="team-main" alt="no image">
                            <?php } ?>
                            <?php if(isset($settings['shape_image_1']['url']) && $settings['shape_image_1']['url'] != ''){?>
                            <img src="<?php echo wp_kses_post($settings['shape_image_1']['url']); ?>" class="team-shape" alt="no image">
                            <?php } ?>
                            <?php if(isset($settings['shape_image_2']['url']) && $settings['shape_image_2']['url'] != ''){?>
                            <img src="<?php echo wp_kses_post($settings['shape_image_2']['url']); ?>" class="team-shape-2" alt="no image">
                            <?php } ?>
                            <ul class="team-social">
                                <?php if(isset($item['link_social_1']) && $item['link_social_1'] != ''){?>
                                <li><a href="<?php print wp_kses_post($item['link_social_1']); ?>"><i class="<?php print wp_kses_post($item['social_1']); ?>"></i></a></li>
                                <?php } ?>
                                <?php if(isset($item['link_social_2']) && $item['link_social_2'] != ''){?>
                                <li><a href="<?php print wp_kses_post($item['link_social_2']); ?>"><i class="<?php print wp_kses_post($item['social_2']); ?>"></i></a></li>
                                <?php } ?>
                                <?php if(isset($item['link_social_3']) && $item['link_social_3'] != ''){?>
                                <li><a href="<?php print wp_kses_post($item['link_social_3']); ?>"><i class="<?php print wp_kses_post($item['social_3']); ?>"></i></a></li>
                                <?php } ?>
                                <?php if(isset($item['link_social_4']) && $item['link_social_4'] != ''){?>
                                <li><a href="<?php print wp_kses_post($item['link_social_4']); ?>"><i class="<?php print wp_kses_post($item['social_4']); ?>"></i></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <?php endif; ?>
    <?php
    }

}



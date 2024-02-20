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
class BdevsWorkProcess extends \Elementor\Widget_Base {

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
        return 'bdevs-work-process';
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
        return __( 'Work Process', 'bdevs-elementor' );
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
        return 'eicon-info-box';
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
        return [ 'work process' ];
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
                'label' => esc_html__( 'Work Process', 'bdevs-elementor' ),
            ]   
        ); 
        $this->add_control(
            'subheading',
            [
                'label'       => __( 'Subheading:', 'bdevs-elementor' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your subheading', 'bdevs-elementor' ),
                'default'     => __( 'How it work', 'bdevs-elementor' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'heading',
            [
                'label'       => __( 'Heading:', 'bdevs-elementor' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your heading', 'bdevs-elementor' ),
                'default'     => __( 'We follow great process', 'bdevs-elementor' ),
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
                'label' => esc_html__( 'Items', 'bdevs-elementor' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name'        => 'choose_style',
                        'label'     => esc_html__( 'Star Ratings:', 'bdevs-elementor' ),
                        'type'      => Controls_Manager::SELECT,
                        'dynamic' => [ 'active' => true ],
                        'options'   => [
                        '1'  => esc_html__( 'No Padding Top', 'bdevs-elementor' ),
                        '2'  => esc_html__( 'Have Padding Top', 'bdevs-elementor' ),
                        ],
                        'default'   => '1',
                    ],
                    [
                        'name'    => 'image_1',
                        'label'   => esc_html__( 'Feature Image', 'bdevs-elementor' ),
                        'type'    => Controls_Manager::MEDIA,
                        'default'     => esc_html__( '' , 'bdevs-elementor' ),
                        'dynamic' => [ 'active' => true ],
                    ],
                    [
                        'name'    => 'image_2',
                        'label'   => esc_html__( 'Feature Image', 'bdevs-elementor' ),
                        'type'    => Controls_Manager::MEDIA,
                        'default'     => esc_html__( '' , 'bdevs-elementor' ),
                        'dynamic' => [ 'active' => true ],
                    ],
                    [
                        'name'    => 'image_3',
                        'label'   => esc_html__( 'Feature Image', 'bdevs-elementor' ),
                        'type'    => Controls_Manager::MEDIA,
                        'default'     => esc_html__( '' , 'bdevs-elementor' ),
                        'dynamic' => [ 'active' => true ],
                    ],
                    [
                        'name'        => 'title',
                        'label'       => esc_html__( 'Title:', 'bdevs-elementor' ),
                        'type'        => Controls_Manager::TEXT,
                        'dynamic'     => [ 'active' => true ],
                        'default'     => esc_html__( 'This is title' , 'bdevs-elementor' ),
                        'label_block' => true,
                    ],
                    [
                        'name'        => 'content',
                        'label'       => esc_html__( 'Content:', 'bdevs-elementor' ),
                        'type'        => Controls_Manager::TEXTAREA,
                        'dynamic'     => [ 'active' => true ],
                        'default'     => esc_html__( 'This is content' , 'bdevs-elementor' ),
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
    extract($settings); ?>
    <div class="step-area de-padding">
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
                            <h2 class="heading-1">
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
            <div class="step-wpr grid-4">
                <?php 
                $i=0;
                foreach ( $settings['tabs'] as $item ) : 
                $i++;
                ?>
                <?php if( wp_kses_post($item['choose_style']) == '1'): ?>
                <div class="step-box">
                <?php elseif( wp_kses_post($item['choose_style']) == '2'): ?>
                <div class="step-box mt-50">
                <?php endif; ?>
                    <div class="step-icon">
                        <div class="step-elm">
                            <div class="step-elm-elm">
                                <?php if(isset($item['image_1']['url']) && $item['image_1']['url'] != ''){?>
                                <img src="<?php echo esc_url($item['image_1']['url']);?>" alt="no image">
                                <?php } ?>
                                <?php if(isset($item['image_2']['url']) && $item['image_2']['url'] != ''){?>
                                <img src="<?php echo esc_url($item['image_2']['url']);?>" class="step-note-icon" alt="no image">
                                <?php } ?>
                                <?php if($i<10) { ?>
                                <span class="step-num"><?php echo '0'.$i; ?></span>
                                <?php } elseif ($i>9) { ?>
                                <span class="step-num"><?php echo $i; ?></span>
                                <?php } ?> 
                            </div>
                            <?php if(isset($item['image_3']['url']) && $item['image_3']['url'] != ''){?>
                            <div class="step-wavy-arrow">
                                <img src="<?php echo esc_url($item['image_3']['url']);?>" alt="no image">
                            </div>
                            <?php } ?> 
                        </div>
                    </div>
                    <div class="step-desc">
                        <?php if(isset($item['title']) && $item['title'] != ''){?>
                        <h4 class="heading-4"><?php print wp_kses_post($item['title']); ?></h4>
                        <?php } ?>
                        <?php if(isset($item['content']) && $item['content'] != ''){?>
                        <p class="mb-0"><?php print wp_kses_post($item['content']); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php
    }
}



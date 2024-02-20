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
class BdevsServiceDetails extends \Elementor\Widget_Base {

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
        return 'bdevs-service-details';
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
        return __( 'Service Details', 'bdevs-elementor' );
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
        return [ 'Service details' ];
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
                'label' => esc_html__( 'Service Details', 'bdevs-elementor' ),
            ]   
        ); 
        $this->add_control(
            'text',
            [
                'label'       => __( 'Text:', 'bdevs-elementor' ),
                'type'        => Controls_Manager::TEXTAREA,
                'placeholder' => __( 'Enter your text', 'bdevs-elementor' ),
                'default'     => __( 'This is text', 'bdevs-elementor' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'detail_image',
            [
                'label'   => esc_html__( 'Image:', 'bdevs-elementor' ),
                'type'    => Controls_Manager::MEDIA,
                'dynamic' => [ 'active' => true ],
                'description' => esc_html__( 'Add image from here', 'bdevs-elementor' ),
            ]
        );
        $this->add_control(
            'right_title',
            [
                'label'       => __( 'Right Title:', 'bdevs-elementor' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your title', 'bdevs-elementor' ),
                'default'     => __( 'Freight Overview', 'bdevs-elementor' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'right_desc',
            [
                'label'       => __( 'Right Description:', 'bdevs-elementor' ),
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
                        'name'        => 'icon',
                        'label'       => esc_html__( 'Icon:', 'bdevs-elementor' ),
                        'type'        => Controls_Manager::TEXT,
                        'dynamic'     => [ 'active' => true ],
                        'default'     => esc_html__( 'ti ti-angle-right' , 'bdevs-elementor' ),
                        'label_block' => true,
                    ],
                    [
                        'name'        => 'text',
                        'label'       => esc_html__( 'Text:', 'bdevs-elementor' ),
                        'type'        => Controls_Manager::TEXT,
                        'dynamic'     => [ 'active' => true ],
                        'default'     => esc_html__( 'This is text' , 'bdevs-elementor' ),
                        'label_block' => true,
                    ],
                ],
            ]
        );
        $this->add_control(
            'title',
            [
                'label'       => __( 'Title:', 'bdevs-elementor' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your title', 'bdevs-elementor' ),
                'default'     => __( 'Our strengths and advantages', 'bdevs-elementor' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'content',
            [
                'label'       => __( 'Content:', 'bdevs-elementor' ),
                'type'        => Controls_Manager::TEXTAREA,
                'placeholder' => __( 'Enter your content', 'bdevs-elementor' ),
                'default'     => __( 'This is content', 'bdevs-elementor' ),
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
        $this->end_controls_section();

    }

    public function render() {
        $settings  = $this->get_settings_for_display();
        extract($settings); 
        ?>
        <?php if(isset($settings['text']) && $settings['text'] != ''){?>
        <div class="service-tx mb-40">
            <?php print wp_kses_post($settings['text']); ?>
        </div>
        <?php } ?>
        <div class="service-element grid-2 mb-40">
            <?php if(isset($settings['detail_image']['url']) && $settings['detail_image']['url'] != ''){?>
            <img src="<?php echo esc_url($settings['detail_image']['url']);?>" alt="no image">
            <?php } ?>
            <div class="service-element-desc">
                <?php if(isset($settings['right_title']) && $settings['right_title'] != ''){?>
                <h4 class="heading-4 mb-20"><?php print wp_kses_post($settings['right_title']); ?></h4>
                <?php } ?>
                <?php if(isset($settings['right_desc']) && $settings['right_desc'] != ''){?>
                <p><?php print wp_kses_post($settings['right_desc']); ?></p>
                <?php } ?>
                <ul class="service-single-list">
                    <?php foreach ( $settings['tabs'] as $item ) : ?>
                    <li>
                        <?php if(isset($item['icon']) && $item['icon'] != ''){?>
                        <i class="<?php print wp_kses_post($item['icon']); ?>"></i>
                        <?php } ?>
                        <?php print wp_kses_post($item['text']); ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <?php if(isset($settings['title']) && $settings['title'] != ''){?>
        <h2 class="heading-2 mb-20"><?php print wp_kses_post($settings['title']); ?></h2>
        <?php } ?>
        <?php if(isset($settings['content']) && $settings['content'] != ''){?>
        <p class="mb-0">
            <?php print wp_kses_post($settings['content']); ?>
        </p>
        <?php } ?>
    <?php
    }

}



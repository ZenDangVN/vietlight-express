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
class BdevsProjectDetails extends \Elementor\Widget_Base {

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
        return 'bdevs-project-details';
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
        return __( 'Project Details', 'bdevs-elementor' );
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
        return 'eicon-document-file';
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
        return [ 'project details' ];
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
                'label' => esc_html__( 'Project Details', 'bdevs-elementor' ),
            ]   
        );
        $this->add_control(
            'tabs',
            [
                'label' => esc_html__( 'Items', 'bdevs-elementor' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name'        => 'title',
                        'label'       => esc_html__( 'Title:', 'bdevs-elementor' ),
                        'type'        => Controls_Manager::TEXT,
                        'dynamic'     => [ 'active' => true ],
                        'default'     => esc_html__( 'Client' , 'bdevs-elementor' ),
                        'label_block' => true,
                    ],
                    [
                        'name'        => 'detail',
                        'label'       => esc_html__( 'Detail:', 'bdevs-elementor' ),
                        'type'        => Controls_Manager::TEXT,
                        'dynamic'     => [ 'active' => true ],
                        'default'     => esc_html__( 'Tech Company' , 'bdevs-elementor' ),
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
                'default'     => __( 'Web design for IT Company ', 'bdevs-elementor' ),
                'label_block' => true,
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
            'content_column1',
            [
                'label'       => __( 'Content Column 1:', 'bdevs-elementor' ),
                'type'        => Controls_Manager::WYSIWYG,
                'placeholder' => __( 'Enter your content', 'bdevs-elementor' ),
                'default'     => __( 'This is content', 'bdevs-elementor' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'content_column2',
            [
                'label'       => __( 'Content Column 2:', 'bdevs-elementor' ),
                'type'        => Controls_Manager::WYSIWYG,
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
        <div class="project-single-up grid-2 mb-30 mt-50">
            <div class="project-client-info grid-2">
                <?php foreach ( $settings['tabs'] as $item ) : ?>
                <div class="project-client-single">
                    <h5 class="heading-5"><?php print wp_kses_post($item['title']); ?></h5>
                    <p class="mb-0">
                        <?php print wp_kses_post($item['detail']); ?>
                    </p>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="project-single-text pl-50">
                <?php if(isset($settings['title']) && $settings['title'] != ''){?>
                <h4 class="heading-4"><?php print wp_kses_post($settings['title']); ?> </h4>
                <?php } ?>
                <?php if(isset($settings['text']) && $settings['text'] != ''){?>
                <p class="mb-0">
                    <?php print wp_kses_post($settings['text']); ?> 
                </p>
                <?php } ?>
            </div>
        </div>
        <div class="proj-proj grid-2 mb-30">
            <?php if(isset($settings['content_column1']) && $settings['content_column1'] != ''){?>
            <p class="mb-0">
                <?php print wp_kses_post($settings['content_column1']); ?>   
            </p>
            <?php } ?>
            <?php if(isset($settings['content_column2']) && $settings['content_column2'] != ''){?>
            <p class="mb-0 pl-50">
                <?php print wp_kses_post($settings['content_column2']); ?>  
            </p>
            <?php } ?>
        </div>
    <?php
    }

}



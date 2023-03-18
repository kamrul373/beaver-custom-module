<?php
class MyHeadingClass extends FLBuilderModule {

	public function __construct()
	{
	  parent::__construct(array(
		'name'            => __( 'Custom Heading', 'fl-builder' ),
		'description'     => __( 'A totally awesome module!', 'fl-builder' ),
		'category'        => __( 'Custom Module', 'fl-builder' ),
		'dir'             => MY_MODULES_DIR . 'my-module/',
		'url'             => MY_MODULES_URL . 'my-module/',
		'icon'            => 'button.svg',
		'editor_export'   => true, // Defaults to true and can be omitted.
		'enabled'         => true, // Defaults to true and can be omitted.
		'partial_refresh' => false, // Defaults to false and can be omitted.
	  ));
	}
  }
FLBuilder::register_module( 'MyHeadingClass', array(
	'general' => array(
		'title'    => __( 'General', 'fl-builder' ),
		'sections' => array(
			'general' => array(
				'title' => "",
				'fields'=> array (
					'heading' => array (
						'type' => 'text',
						'label' => __('Heading', 'fl-builder'),
						'default' => 'Heading',
						'preview'     => array(
							'type'     => 'text',
							'selector' => '.my-heading-text',
						),
						'connections' => array( 'string' ),
					),
					'tag'     => array(
						'type'    => 'select',
						'label'   => __( 'HTML Tag', 'fl-builder' ),
						'default' => 'h2',
						'options' => array(
							'h1' => 'h1',
							'h2' => 'h2',
							'h3' => 'h3',
							'h4' => 'h4',
							'h5' => 'h5',
							'h6' => 'h6',
						),
						'preview' => array(
							'type' => 'none',
						),
					),
					'description' => array (
						'type' => 'textarea',
						'label' => __('Description', 'f1-builder'),
						'connections' => array('string'),
						'default' => 'description',
					),
					
					'desctag'     => array(
						'type'    => 'select',
						'label'   => __( 'Description Tag', 'fl-builder' ),
						'default' => 'p',
						'options' => array(
							'h1' => 'h1',
							'h2' => 'h2',
							'h3' => 'h3',
							'h4' => 'h4',
							'h5' => 'h5',
							'h6' => 'h6',
							"p" => "p",
						),
						'preview' => array(
							'type' => 'none',
						),
					),
				)
			)
		)
	)
) );
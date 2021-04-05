<?php
// Site Logo using Cutomizer
add_action( 'customize_register', 'sp_customize_register' );
function sp_customize_register( $wp_customize ) {

    $wp_customize->add_section( 'sp_logo' , array(
        'title' => __( 'Site Logo', 'sp' ),
        'description' => 'Modify the site logo image',
        'priority'=> 99,
    ));
    $wp_customize->add_setting( 'site_logo' , array(
      'default' => ''
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize,
        'site_logo',
        array(
        'label' => __( 'Upload Site Logo', 'sp' ),
        'section' => 'sp_logo',
        'settings' => 'site_logo'
        )
    ));
}
//customizing homepage
add_action('customize_register','theme_customize_homepg');
function theme_customize_homepg($wp_customize){
	$wp_customize->add_panel('sp_default',array(
	    'title'=>'Default Settings',
	    'description'=> 'Default Settings',
	    'priority'=> 100,
    ));
    //  Company Name
	    $wp_customize->add_section('sp_company_section',array(
	     'title'=>'Company',
	     'description'=>__('Update Company Details'),
	     'panel'=>'sp_default',
	   ));
	   $wp_customize->add_setting('sp_company_name',array(
	        'default'=>_('Company Name '),
	   ));
	   $wp_customize->add_control('sp_company_name',array(
	        'label'=>'Company',
	        'section'=>__('sp_company_section'),
	        'priority'=>1,
	    ));
	    
	// Video 
	    $wp_customize->add_section('sp_video_section',array(
	    	'title'=>'Video',
	    	'description'=>__('Video Section'),
	    	'panel'=>'sp_homepage',
	    ));
	    $wp_customize->add_setting('sp_video_embed',array(
	    	 'default'=>_(' '),
	    ));
	     $wp_customize->add_control('sp_video_embed',array(
	     	'type' => 'textarea',
	        'label'=>'Youtube Embedd',
	        'section'=>__('sp_video_section'),
	        'priority'=>1,
	    ));
	    $wp_customize->add_setting('sp_video_sectionN',array(
	    	 'default'=>_(' About us'),
	    ));
	     $wp_customize->add_control('sp_video_sectionN',array(
	        'label'=>'Video Section Heading',
	        'section'=>__('sp_video_section'),
	        'priority'=>1,
	    ));
	 // our services 
	     $wp_customize->add_section('sp_service_section',array(
	     	'title'=>'Services',
	     	'description'=>__('Service Section'),
	     	'panel'=>'sp_homepage',
	     ));
	     $wp_customize->add_setting('sp_service_shortcode',array(
	    	 'default'=>_(' '),
	    ));
	    // $wp_customize->add_control('sp_service_shortcode',array(
	    //  	'type' => 'textarea',
	    //     'label'=>'Slider Shortcode',
	    //     'section'=>__('sp_service_section'),
	    //     'priority'=>1,
	    // ));
	     $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'sp_service_shortcode', array(
        'label' => 'Upload Image',
        //'settings'  => 'pdn_home_img_settings',
        'section'   => 'sp_service_section'
        ) ));
	    $wp_customize->add_setting('sp_service_sectionN',array(
	    	 'default'=>_(' Services'),
	    ));
	     $wp_customize->add_control('sp_service_sectionN',array(
	        'label'=>'Service Section Heading',
	        'section'=>__('sp_service_section'),
	        'priority'=>1,
	    ));
	    $wp_customize->add_setting('sp_service_link1',array(
	    	 'default'=>_(' Submission Guide'),
	    ));
	     $wp_customize->add_control('sp_service_link1',array(
	        'label'=>'Link1 Text',
	        'section'=>__('sp_service_section'),
	        'priority'=>1,
	    ));
	      $wp_customize->add_setting('sp_service_link1url',array(
	    	 'default'=>_(' #'),
	    ));
	     $wp_customize->add_control('sp_service_link1url',array(
	        'label'=>'Link 1 Url',
	        'section'=>__('sp_service_section'),
	        'priority'=>1,
	    ));

	    $wp_customize->add_setting('sp_service_link2',array(
	    	 'default'=>_('Legal Guide'),
	    ));
	     $wp_customize->add_control('sp_service_link2',array(
	        'label'=>'Link2 Text',
	        'section'=>__('sp_service_section'),
	        'priority'=>1,
	    ));
	      $wp_customize->add_setting('sp_service_link2url',array(
	    	 'default'=>_(' #'),
	    ));
	     $wp_customize->add_control('sp_service_link2url',array(
	        'label'=>'Link 2 Url',
	        'section'=>__('sp_service_section'),
	        'priority'=>1,
	    ));
  
}

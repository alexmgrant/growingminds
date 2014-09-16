<?php

add_action('init', 'of_options');
if (!function_exists('of_options')) {

    function of_options() {
        // VARIABLES
        $themename = get_theme_data(STYLESHEETPATH . '/style.css');
        $themename = $themename['Name'];
        $shortname = "of";
        // Populate OptionsFramework option in array for use in theme
        global $of_options;
        $of_options = inkthemes_get_option('of_options');
        // Background Defaults
        $background_defaults = array('color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll');
        //Stylesheet Reader
        $alt_stylesheets = array("default" => "default", "black" => "black", "blue" => "blue", "green" => "green", "brown" => "brown", "deeppink" => "deeppink", "orange" => "orange", "purple" => "purple", "red" => "red", "forrestgreen" => "forrestgreen", "yellow" => "yellow");
        // Pull all the categories into an array
        $options_categories = array();
        $options_categories_obj = get_categories();
        foreach ($options_categories_obj as $category) {
            $options_categories[$category->cat_ID] = $category->cat_name;
        }

        // Pull all the pages into an array
        $options_pages = array();
        $options_pages_obj = get_pages('sort_column=post_parent,menu_order');
        $options_pages[''] = 'Select a page:';
        foreach ($options_pages_obj as $page) {
            $options_pages[$page->ID] = $page->post_title;
        }

        // If using image radio buttons, define a directory path
        $imagepath = get_stylesheet_directory_uri() . '/images/';

        $options = array();
        $options[] = array("name" => "General Settings",
            "type" => "heading");

        $options[] = array("name" => "Custom Logo",
            "desc" => "Choose your own logo. Optimal Size: 300px Wide by 90px Height.",
            "id" => "inkthemes_logo",
            "type" => "upload");

        $options[] = array("name" => "Custom Favicon",
            "desc" => "Specify a 16px x 16px image that will represent your website's favicon.",
            "id" => "inkthemes_favicon",
            "type" => "upload");
			
		 $options[] = array("name" => "Body Background Image",
            "desc" => "Select image to change your website background",
            "id" => "inkthemes_bodybg",
            "std" => "",
            "type" => "upload");
        
        $options[] = array("name" => "Tracking Code",
            "desc" => "Paste your Google Analytics (or other) tracking code here.",
            "id" => "inkthemes_analytics",
            "std" => "",
            "type" => "textarea");

        //Home Page Slider Setting
        $options[] = array("name" => "Slider Settings",
            "type" => "heading");
         //First Slider
        $options[] = array("name" => "Slider Image1",
            "desc" => "Choose your image for first slider. Optimal size is 950px wide and 480px height.",
            "id" => "inkthemes_slideimage1",
            "std" => "",
            "type" => "upload");
         $options[] = array("name" => "Slide 1 Link",
            "desc" => "Enter yout link url for slide1",
            "id" => "inkthemes_slidelink1",
            "std" => "",
            "type" => "text");
        //Second Slider
        $options[] = array("name" => "Slider Image2",
            "desc" => "Choose your image for second slider. Optimal size is 950px wide and 480px height.",
            "id" => "inkthemes_slideimage2",
            "std" => "",
            "type" => "upload");
        $options[] = array("name" => "Slide 2 Link",
            "desc" => "Enter yout link url for slide2",
            "id" => "inkthemes_slidelink2",
            "std" => "",
            "type" => "text");
        $options[] = array("name" => "Slider Image3",
            "desc" => "Choose your image for third slider. Optimal size is 950px wide and 480px height.",
            "id" => "inkthemes_slideimage3",
            "std" => "",
            "type" => "upload");
        $options[] = array("name" => "Slide 3 Link",
            "desc" => "Enter yout link for url slide3",
            "id" => "inkthemes_slidelink3",
            "std" => "",
            "type" => "text");
        //Fourth Slider
        $options[] = array("name" => "Slider Image4",
            "desc" => "Choose your image for fourth slider. Optimal size is 950px wide and 480px height.",
            "id" => "inkthemes_slideimage4",
            "std" => "",
            "type" => "upload");
        $options[] = array("name" => "Slide 4 Link",
            "desc" => "Enter yout link url for slide4",
            "id" => "inkthemes_slidelink4",
            "std" => "",
            "type" => "text");
        //Fifth Slider
        $options[] = array("name" => "Slider Image5",
            "desc" => "Choose your image for sixth slider. Optimal size is 950px wide and 480px height.",
            "id" => "inkthemes_slideimage5",
            "std" => "",
            "type" => "upload");
        $options[] = array("name" => "Slide 5 Link",
            "desc" => "Enter yout link url for slide5",
            "id" => "inkthemes_slidelink5",
            "std" => "",
            "type" => "text");
        //Sixth Slider
        $options[] = array("name" => "Slider Image6",
            "desc" => "Choose your image for sixth slider. Optimal size is 950px wide and 480px height.",
            "id" => "inkthemes_slideimage6",
            "std" => "",
            "type" => "upload");
        $options[] = array("name" => "Slide 6 Link",
            "desc" => "Enter yout link url for slide6",
            "id" => "inkthemes_slidelink6",
            "std" => "",
            "type" => "text");
//Homepage Feature Area
        $options[] = array("name" => "Homepage Feature Area",
            "type" => "heading");
//Page Heading
        $options[] = array("name" => "Main Feature Heading",
            "desc" => "Enter your text for Page Heading.",
            "id" => "inkthemes_page_heading",
            "std" => "",
            "type" => "textarea");
		//Right Feature Separetor
        $options[] = array("name" => "Feature Section Starts From Here.",
            "type" => "saperate",
            "class" => "saperator");
        //Right Feature Area
        $options[] = array("name" => "Homepage Feature Area First Image",
            "desc" => "Choose your image for homepage feature area first image.",
            "id" => "inkthemes_featureimg1",
            "std" => "",
            "type" => "upload");
        $options[] = array("name" => "First Feature Heading",
            "desc" => "Enter your text for first col heading.",
            "id" => "inkthemes_firsthead",
            "std" => "",
            "type" => "textarea");
        $options[] = array("name" => "First Feature Description",
            "desc" => "Enter your text for first col description.",
            "id" => "inkthemes_firstdesc",
            "std" => "",
            "type" => "textarea");
			
		$options[] = array("name" => "First Feature Link URL",
            "desc" => "Enter your link url for fourth feature section.",
            "id" => "inkthemes_link1",
            "std" => "",
            "type" => "text");

        //Second Feature Separetor
        $options[] = array("name" => "Second Feature Starts From Here.",
            "type" => "saperate",
            "class" => "saperator");
        $options[] = array("name" => "Homepage Feature Area Second Image",
            "desc" => "Choose your image for homepage Feature area second image.",
            "id" => "inkthemes_featureimg2",
            "std" => "",
            "type" => "upload");
        $options[] = array("name" => "Second Feature Heading",
            "desc" => "Enter your text for second col heading.",
            "id" => "inkthemes_secondhead",
            "std" => "",
            "type" => "textarea");
        $options[] = array("name" => "Second Col Description",
            "desc" => "Enter your text for second col description.",
            "id" => "inkthemes_seconddesc",
            "std" => "",
            "type" => "textarea");
			
		$options[] = array("name" => "Second Feature Link URL",
            "desc" => "Enter your link url for fourth feature section.",
            "id" => "inkthemes_link2",
            "std" => "",
            "type" => "text");

        //Third Feature Separetor
        $options[] = array("name" => "Third Feature Starts From Here.",
            "type" => "saperate",
            "class" => "saperator");

        $options[] = array("name" => "Homepage Third Feature  Image",
            "desc" => "Choose your image for homepage Feature area third image.",
            "id" => "inkthemes_featureimg3",
            "std" => "",
            "type" => "upload");
        $options[] = array("name" => "Third Feature Heading",
            "desc" => "Enter your text for second col heading.",
            "id" => "inkthemes_thirdhead",
            "std" => "",
            "type" => "textarea");
        $options[] = array("name" => "Third Feature Description",
            "desc" => "Enter your text for Third Feature description.",
            "id" => "inkthemes_thirddesc",
            "std" => "",
            "type" => "textarea");
			
		$options[] = array("name" => "Third Feature Link URL",
            "desc" => "Enter your link url for fourth feature section.",
            "id" => "inkthemes_link3",
            "std" => "",
            "type" => "text");	

        //Fourth Feature Separetor
        $options[] = array("name" => "Fourth Feature Starts From Here.",
            "type" => "saperate",
            "class" => "saperator");
        $options[] = array("name" => "Homepage Fourth Feature Area",
            "desc" => "Choose your image for homepage Feature Area fourth image. ",
            "id" => "inkthemes_featureimg4",
            "std" => "",
            "type" => "upload");
        $options[] = array("name" => "Fourth Feature  Heading",
            "desc" => "Enter your text for Fourh Feature Area heading.",
            "id" => "inkthemes_fourthhead",
            "std" => "",
            "type" => "textarea");
		
        $options[] = array("name" => "Fourh Feature Area Description",
            "desc" => "Enter your text for first col description.",
            "id" => "inkthemes_fourthdesc",
            "std" => "",
            "type" => "textarea");
		
		$options[] = array("name" => "Fourth Feature Link URL",
            "desc" => "Enter your link url for fourth feature section.",
            "id" => "inkthemes_link4",
            "std" => "",
            "type" => "text");
		
        //Home Page Bottom Setting
        $options[] = array("name" => "Home Page Bottom Settings",
            "type" => "heading");
		$options[] = array("name" => "Tagline Text",
            "desc" => "Enter your text Tagline Section.",
            "id" => "inkthemes_tagline_text",
            "std" => "",
            "type" => "textarea");

		$options[] = array("name" => "Feature Button Text",
            "desc" => "Enter your link url for feature button section.",
            "id" => "inkthemes_tagline_button",
            "std" => "",
            "type" => "text");
			
		$options[] = array("name" => "Feature Button Link URL",
            "desc" => "Enter your link url for feature button section.",
            "id" => "inkthemes_tagline_button_link",
            "std" => "",
            "type" => "text");	
		 //Bottom Feature Separetor
        $options[] = array("name" => "Bottom Feature Start From Here.",
            "type" => "saperate",
            "class" => "saperator");

		$options[] = array("name" => "Bottom Left Heading",
            "desc" => "Enter your text bottom left Section.",
            "id" => "inkthemes_bottomleft_heading",
            "std" => "",
            "type" => "textarea");
			
		$options[] = array("name" => "Bottom Left Text",
            "desc" => "Enter your text bottom left Section.",
            "id" => "inkthemes_bottomleft_description",
            "std" => "",
            "type" => "textarea");
			
		$options[] = array("name" => "Enter Your Blog Heading",
            "desc" => "Enter your text for blog heading.",
            "id" => "inkthemes_bottom_blog",
            "std" => "",
            "type" => "textarea");
			
		$options[] = array("name" => "Testimonial Heading",
            "desc" => "Enter your text Testimonial Heading.",
            "id" => "inkthemes_testimonial",
            "std" => "",
            "type" => "textarea");
			
		$options[] = array("name" => "Testimonial Text",
            "desc" => "Enter your text or code",
            "id" => "inkthemes_testimonial_text",
            "std" => "",
            "type" => "textarea");	

//****=============================================================================****//
//****-----------This code is used for creating color styleshteet options----------****//							
//****=============================================================================****//				
        $options[] = array("name" => "Styling Options",
            "type" => "heading");
        $options[] = array("name" => "Theme Stylesheet",
            "desc" => "Select your themes alternative color scheme.",
            "id" => "inkthemes_altstylesheet",
            "std" => "black",
            "type" => "select",
            "options" => $alt_stylesheets);
        $options[] = array("name" => "Custom CSS",
            "desc" => "Quickly add some CSS to your theme by adding it to this block.",
            "id" => "inkthemes_customcss",
            "std" => "",
            "type" => "textarea");

//****=============================================================================****//
//****-------------This code is used for creating social logos options-------------****//					
//****=============================================================================****//
		$options[] = array("name" => "Social Logos",
            "type" => "heading");
		
        $options[] = array("name" => "Facebook URL",
            "desc" => "Enter your Facebook URL if you have one",
            "id" => "inkthemes_facebook",
            "std" => "",
            "type" => "text");   
			
        
        $options[] = array("name" => "Twitter URL",
            "desc" => "Enter your Twitter URL if you have one",
            "id" => "inkthemes_twitter",
            "std" => "",
            "type" => "text");
        
        $options[] = array("name" => "RSS Feed URL",
            "desc" => "Enter your RSS Feed URL if you have one",
            "id" => "inkthemes_rss",
            "std" => "",
            "type" => "text");
			
		 $options[] = array("name" => "Google+ URL",
            "desc" => "Enter your Google+ URL if you have one",
            "id" => "inkthemes_google",
            "std" => "",
            "type" => "text");

//****=============================================================================****//
//****-------------This code is used for creating Bottom Footer Setting options-------------****//					
//****=============================================================================****//			
        $options[] = array("name" => "Footer Settings",
            "type" => "heading");
        $options[] = array("name" => "Footer Text",
            "desc" => "Enter text you want to be displayed on Footer",
            "id" => "inkthemes_footertext",
            "std" => "",
            "type" => "textarea");
        //------------------------------------------------------------------//
//-------------This code is used for creating SEO description-------//							
//------------------------------------------------------------------//						
        $options[] = array("name" => "SEO Options",
            "type" => "heading");
        $options[] = array("name" => "Meta Keywords (comma separated)",
            "desc" => "Meta keywords provide search engines with additional information about topics that appear on your site. This only applies to your home page. Keyword Limit Maximum 8",
            "id" => "inkthemes_keyword",
            "std" => "",
            "type" => "textarea");
        $options[] = array("name" => "Meta Description",
            "desc" => "You should use meta descriptions to provide search engines with additional information about topics that appear on your site. This only applies to your home page.Optimal Length for Search Engines, Roughly 155 Characters",
            "id" => "inkthemes_description",
            "std" => "",
            "type" => "textarea");
        $options[] = array("name" => "Meta Author Name",
            "desc" => "You should write the full name of the author here. This only applies to your home page.",
            "id" => "inkthemes_author",
            "std" => "",
            "type" => "textarea");

        inkthemes_update_option('of_template', $options);
        inkthemes_update_option('of_themename', $themename);
        inkthemes_update_option('of_shortname', $shortname);
    }

}
?>

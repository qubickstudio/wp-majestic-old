<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
  <title>Majestic Organizer</title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Majestic Event Organizer is an Indonesia based event organizer which aims to turn your events into remarkable moments. Established in 2015, Majestic Event Organizer has helped to plan and execute 80 events including social, corporate, government events based in Bandung, Jakarta, and Bali.">
    <meta name="keywords" content="Event Organizer, Majestic Organizer, Event, Weeding, Ceremony, Birthday, Corporate, Indonesia">
    <meta name=”robots” content="index, follow">
    <meta name="author" content="Qubick">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
  </head>
  <body class="bg-black !overflow-x-hidden !w-screen !max-w-[100vw]" <?php body_class(); ?>>
    <div class="relative" style="z-index: 9999; text-align:center;" id="loading-screen">
        <div class="w-screen h-screen fixed bg-<?php if(is_front_page()){
        echo '[#222940]';
    }
    else{
        echo 'black';
    }?> text-center" >
            <video class="absolute w-screen h-screen lazyloaded" src="<?php echo get_stylesheet_directory_uri()?>/assets/videos/loading screen<?php if(!is_front_page()){
        echo '2';
    }?>.mp4" data-poster="" preload="none" muted="" loop="" playsinline="" autoplay=""></video>
        </div>
    </div>
    <header>
        
    </header><! – .site-header – >
    <div id="before-load" style="display: none;">
    <div>
        <style type="text/css">
            @media (max-width: 1024px){
                .custom-logo{
                    width: 2rem;
                }
            }

            #nav-wrapper nav li a {
              display: inline-block;
              position: relative;
            }

            #nav-wrapper nav li a:after {
              content: '';
              position: absolute;
              width: 100%;
              transform: scaleX(0);
              height: 2px;
              bottom: 0;
              left: 0;
              background-color: white;
              transform-origin: bottom right;
              transition: transform 0.25s ease-out;
            }

            #nav-wrapper nav li:not(.current-menu-item) a:hover:after {
              transform: scaleX(1);
              transform-origin: bottom left;
            }


            .underline-effect {
              display: inline-block;
              position: relative;
            }

            .underline-effect:after {
              content: '';
              position: absolute;
              width: 100%;
              transform: scaleX(0);
              height: 2px;
              bottom: 0;
              left: 0;
              background-color: white;
              transform-origin: bottom right;
              transition: transform 0.25s ease-out;
            }

            .underline-effect:hover:after {
              transform: scaleX(1);
              transform-origin: bottom left;
            }
        </style>
    <div class="pb-[20px] px-10 max-w-[100vw] overflow-x-hidden lg:px-[5rem] lg:flex transition-all ease-out duration-[700ms]" id="nav-wrapper">

       <div class="relative w-[100%] lg:flex">
           
            <?php
                function add_new_menu_item( $nav, $args ) {
                    $newmenuitem = "<li class='home-link w-8 h-8'><img src='".the_custom_logo()."'/></li>";
                    $nav = $newmenuitem.$nav;
                    return $nav;
                }

                
                function _namespace_menu_item_class( $classes, $item ) {       
                    $classes[] = "lg:inline-block  lg:m-0 lg:m-0 lg:pr-[5em] lg:mt-[2.5rem]"; 
                    $classes[] = "block mb-[1em] "; 
                    return $classes;
                } 

                add_filter( 'nav_menu_css_class' , '_namespace_menu_item_class' , 10, 2 );

                add_filter('wp_nav_menu_items','add_new_menu_item', 10, 2);
            ?>

            <button data-collapse-toggle="mobile-menu" type="button" 
                class="float-right mt-[.3rem] text-[1rem] open lg:hidden" 
                aria-controls="mobile-menu" aria-expanded="false" id="hamburger"  onclick="menuToggle()">
                menu
              <span class="sr-only">Open main menu</span>
            </button>   
                
            <?php
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'container' => 'nav',
                    'container_class' => 'h-0 custom-menu-class text-slate-200 w-[100%] lg:w-screen z-50 block lg:flex transition-all ease-out duration-[2000ms] max-h-[185px] overflow-y-hidden lg:h-auto',
                    'container_id' => 'menu',
                    'menu_class' => 'block bg-black py-[2rem] w-[100%] lg:flex lg:py-0 lg:bg-transparent',
                ]);
            ?>
       </div>
    </div>

    <script type="text/javascript">
        const menu = document.getElementById("menu");
        const nav_wrapper = document.getElementById("nav-wrapper");
        function menuToggle() {
            menu.classList.toggle('h-[155px]')
            // nav_wrapper.classList.toggle('bg-black')
            if($('#hamburger').hasClass('underline')){
                $('#hamburger').removeClass('underline')
            }
            else{
                $('#hamburger').addClass('underline')
            }

            hasTransparent = ($("#nav-wrapper").css('backgroun-color') || "").replace(/\s+/g, '').toLowerCase()
            if(hasTransparent == 'rgba(0,0,0,0)' || hasTransparent == '' || hasTransparent == 'transparent'){
                $('#menu-primary').removeClass('bg-black')
                $('#menu-primary').addClass('bg-transparent')
            }
        }

        $(document).ready(function(){
            var lastScrollTop; // This Varibale will store the top position
            
            navbar = document.getElementById('nav-wrapper'); // Get The NavBar

            window.addEventListener('scroll',function(){
                //on every scroll this funtion will be called
                
                var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                //This line will get the location on scroll
                
                if(scrollTop > lastScrollTop){ //if it will be greater than the previous
                    navbar.style.top='-120px';
                    menu.classList.remove('h-[155px]')
                    $('#hamburger').removeClass('underline')
                    //set the value to the negetive of height of navbar 
                    
                    if(scrollTop <= 1){
                        navbar.style.top='0';
                    }
                }
                else{
                    navbar.style.top='0';
                }
                console.log(scrollTop);
                lastScrollTop = scrollTop; //New Position Stored
            });
        })
    </script>

    <div class="hidden drag-cursor fixed z-40 pointer-events-none lg:hidden">
        <div class="relative h-[5rem] w-[5rem] rounded-full border-white border-2">
            <div class="flex items-center justify-center absolute top-1/4 left-1/4 bottom-1/4 right-1/4">
            DRAG
            </div>
        </div>
    </div>

    <main class="overflow-x-hidden site-content scroll__content" id="tes" style="animation-direction: alternate;">
        

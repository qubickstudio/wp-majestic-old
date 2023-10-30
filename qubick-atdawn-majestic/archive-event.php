<?php get_header();
$slick_event_social = "";
$slick_event_corp = "";
$args = array( 
    'posts_per_page'    	=> -1,
    'post_type'             => 'event'
    );

$query = new WP_Query($args);
    
foreach($query->posts as $post_item){
    // the_post();
	$post_id = $post_item->ID;
	$prefix = 'event_';

    $link_href = get_permalink($post_id);
	$event_title = get_post_meta($post_id, $prefix . 'event_title',true);
	$event_type = get_post_meta($post_id, $prefix . 'event_type',true);
	$event_year = get_post_meta($post_id, $prefix . 'event_year',true);
	$event_location = get_post_meta($post_id, $prefix . 'event_location',true);
	$event_description = get_post_meta($post_id, 'event_description',true);
	$urlThumbnail = get_post_meta($post_id, 'event_thubmnail', true);
	$term = get_the_terms($post_id, 'category');
	if(isset(wp_get_attachment_image_src($urlThumbnail)[0])){
        // echo '<pre>';
        // print_r($post_id);
        // echo '</pre>';
		if($term[0]->name == 'Social'){
			$slick_event_social .= '<a href="'.$link_href.'" class="cursor-none"><div class="w-full min-w-[300px] max-w-[400px] m-auto pb-3 relative lg:px-4 lg:center-events">
				<img src="'.wp_get_attachment_image_src($urlThumbnail, 'icon')[0].'" class="h-[36rem] w-full object-cover" alt="">
					<div class="absolute bottom-[10%] left-5 text-left w-[70%] lg:px-4 event-text">
					<div class="text-3xl font-[DarkerGrotesque-Bold] mb-8">'.strtoupper($event_title).'</div>
					<div class="font-[Lato-MediumItalic] underline">learn more</div>
				</div>
			</div></a>';
		}
		else{
			$slick_event_corp .= '<a href="'.$link_href.'" class="cursor-none"><div class="w-full min-w-[300px] max-w-[400px] m-auto pb-3 relative lg:px-4 lg:center-events">
                <img src="'.wp_get_attachment_image_src($urlThumbnail, 'icon')[0].'" class="h-[36rem] w-full object-cover" alt="">
                    <div class="absolute bottom-[10%] left-5 text-left w-[70%] lg:px-4 event-text">
                    <div class="text-3xl font-[DarkerGrotesque-Bold] mb-8">'.strtoupper($event_title).'</div>
                    <div class="font-[Lato-MediumItalic] underline">learn more</div>
                </div>
            </div></a>';
		}
	}
}
while ( have_posts() ) :
    
	the_post();
	// $args = array( 
    //     'posts_per_page'    	=> -1,
    //     'post_type'             => 'event'
    //     );

	// $query = new WP_Query($args);
		
	// foreach($query->posts as $post_item){
		
	// 	echo 'post dalam : '.$post_item->ID;
	// 	$terms = get_the_terms($post_item->ID, 'category');
	// 	$project_category = "";
	// 	foreach($terms as $term){
	// 		// echo $project_category.$term->name.'<br>';
	// 	}
	// 	$urlThumbnail = get_the_post_thumbnail_url($post_item->ID);
	// }
	
	// $data_work_terms = get_terms(array(
    //     'taxonomy'        => 'category',
    //     'hierarchical'    => false,
    //     'echo'            => false,
    //     'orderby'         => 'name',
    //     'order'           => 'ASC'
    // ));

    // if( !empty($data_work_terms) ) {
    //     $categoryLeft = "";
    //     $categoryTop = "";
    //     foreach ($data_work_terms as $data_work_term) {
    //         if($data_work_term->name == "Corporate & Goverment" || 
    //            $data_work_term->name == "Social"){
    //             $categoryTop .= '<div class="col-span-1">
	// 			<h3 class="tracking-wide text-base sm:text-2xl lg:text-3xl">'.$data_work_term->name.'</h3>
	// 		</div>';
	// 		}
	// 	}
	// }
endwhile;
?>
<!-- <?php echo $project_category ?> -->

<!-- <?php echo $event_title?>
<?php echo $event_type?>
<?php echo $event_year?>
<?php echo $event_location?>
<?php echo $event_description?> -->

        
		<div class="w-full pt-12 lg:min-h-[800px] lg:mb-20">
			<div class="w-full px-5 h-1/4 items-center flex justify-between lg:justify-center my-12 animate__animated animate__fadeInUp animate__delay-1s">
				<div class="lg:mx-8">
					<h3 class="underline-effect tracking-wide text-base sm:text-2xl lg:text-3xl "> <span class="hover:cursor-pointer category selected" id="social">SOCIAL</span></h3>
				</div>
				<div class="lg:mx-8">
					<h3 class=" underline-effect tracking-wide text-base sm:text-2xl lg:text-3xl text-right"><span class="hover:cursor-pointer category" id="corporate">CORPORATE & GOVERNMENT</span></h3>
				</div>
			</div>
			<div class="text-center h-3/4 cursor-none animate__animated animate__fadeInUp animate__delay-2s inline-block w-full">
				<div class="event-social -mt-10 w-full h-full social lg:m-0 animate__animated animate__fadeInUp animate__delay-1s" style="opacity:0">
					<?php echo $slick_event_social ?>
				</div>
                <div class="event-corp mt-[-145%] w-full h-full corporate invisible h-10 lg:m-0 lg:mt-[-37%]">
					<?php echo $slick_event_corp ?>
				</div>
				<div class="social-arrow mb-12 block lg:hidden">
					<button class="slide-prev-social prev bg-[url('<?php echo get_stylesheet_directory_uri()?>/assets/images/BUTTON/prev.png')] bg-left bg-contain w-1/5 bg-no-repeat h-[50px] mx-2 lg:hidden"></button>
					<button class="slide-next-social bg-[url('<?php echo get_stylesheet_directory_uri()?>/assets/images/BUTTON/next.png')] bg-right bg-contain w-1/5 bg-no-repeat h-[50px] mx-2 lg:hidden"></button>
                </div>
                <div class="hidden corporate-arrow mb-12 block lg:hidden">
					<button class="slide-prev-corp prev bg-[url('<?php echo get_stylesheet_directory_uri()?>/assets/images/BUTTON/prev.png')] bg-left bg-contain w-1/5 bg-no-repeat h-[50px] mx-2 lg:hidden"></button>
					<button class="slide-next-corp bg-[url('<?php echo get_stylesheet_directory_uri()?>/assets/images/BUTTON/next.png')] bg-right bg-contain w-1/5 bg-no-repeat h-[50px] mx-2 lg:hidden"></button>
				</div>
			</div>
		</div>
        <div class="h-screen relative lg:h-auto footer">
            <div class="footer-archive-events h-full w-full">
                <div class="w-full h-screen">
                    <img src="https://majesticorganizer.com/wp-content/uploads/2022/06/Copy-of-YAN_91432-scaled.jpg" alt=""  class="h-full object-cover w-full parallax opacity-70">
                </div>
                
            </div>
            <div class="lg:hidden">
                <div class="absolute top-20 px-10 lg:px-[5rem] w-full">
                    <a href="<?=get_site_url()?>/about-us">
                    <h2 class="font-[DarkerGrotesque-Bold] text-4xl my-10 md:text-6xl">LET'S CREATE TOGETHER</h2>
                    <h3 class="font-[Lato-MediumItalic] text-lg mb-3 md:text-xl underline-effect">reach us</h3>
                    </a>
                    <div>
                    </div>
                </div>
                <div class="absolute bottom-20 px-10 lg:px-[5rem] w-full">
                    <div class="flex w-full mb-8">
                            <div><a href="https://linktr.ee/kreasimuliaindonesia" target="_blank"><img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/BUTTON/instagram.png" alt="" class="w-[1.8rem] h-[1.8rem] mr-8 hover:scale-125"></a></div>
                            <div><a href="https://api.whatsapp.com/send?phone=6282128676780&text=Hallo%20Majestic" target="_blank"><img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/BUTTON/whatsapp.png" alt="" class="w-[1.8rem] h-[1.8rem] mr-8 hover:scale-125"></a></div>
                            <div><a href = "mailto: info@majesticorganizer.com"><img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/BUTTON/email.png" alt="" class="w-[2.2rem] h-[1.8rem] mr-8 hover:scale-125"></a></div>
                            <div><a href="https://www.linkedin.com/company/ptkreasimuliaindonesia/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/BUTTON/linkedin.png" alt="" class="w-[1.8rem] h-[1.8rem] mr-8 hover:scale-125"></a></div>
                    </div>
                    <h3 class="text-lg md:text-xl">&copy;2022 PT Kreasi Mulia Indonesia. <br> All Rights Reserved.</h3>
                    <div class="flex flex-col w-full mb-8">
                        <a href="https://ideas-atdawn.com/" target="_blank">
                            <h3 class="text-lg md:text-xl flex items-center">Design by <img src="https://majesticorganizer.com/wp-content/uploads/2023/04/atdawn-logo.png" style="float: right;" class="w-14 h-fit mt-1 ml-1"></h3>
                        </a>
                        
                        <a href="https://qubick.id/" target="_blank">
                            <div><h3 class="text-lg md:text-xl">Code by Qubick</h3></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="hidden lg:block">
                <div class="absolute top-1/4 bottom-1/4 px-10 lg:px-[5rem] w-full flex justify-center flex-col">
                    <div class="flex justify-items-center text-center justify-center">
                        <div>
                            <a href="<?=get_site_url()?>/about-us">
                            <h2 class="font-[DarkerGrotesque-Bold] text-4xl my-10 md:text-6xl">LET'S CREATE TOGETHER</h2>
                            <h3 class="font-[Lato-MediumItalic] text-lg mb-3 md:text-xl underline-effect">reach us</h3>
                            </a>
                        </div>
                    </div>
                    
                </div>
                <div class="absolute bottom-10 px-10 lg:px-[5rem] w-full">
                    <div class="flex justify-between items-center justify-items-center">
                        <div><h3 class="text-lg md:text-xl">&copy;2022 PT Kreasi Mulia Indonesia. All Rights Reserved.</h3></div>
                        <div class="grid grid-flow-col w-1/4 content-center">
                            <div><a href="https://linktr.ee/kreasimuliaindonesia" target="_blank"><img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/BUTTON/instagram.png" alt="" class="w-[1.6rem] h-[1.6rem] hover:scale-125"></a></div>
                            <div><a href="https://api.whatsapp.com/send?phone=6282128676780&text=Hallo%20Majestic" target="_blank"><img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/BUTTON/whatsapp.png" alt="" class="w-[1.6rem] h-[1.6rem] hover:scale-125"></a></div>
                            <div><a href = "mailto: info@majesticorganizer.com"><img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/BUTTON/email.png" alt="" class="w-[2rem] h-[1.6rem] hover:scale-125"></a></div>
                            <div><a href="https://www.linkedin.com/company/ptkreasimuliaindonesia/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/BUTTON/linkedin.png" alt="" class="w-[1.6rem] h-[1.6rem] hover:scale-125"></a></div>
                        </div>
                    </div>
                    <div class="flex justify-end mr-8 mt-4 items-center justify-items-center">
                        <a href="https://ideas-atdawn.com/" target="_blank">
                            <h3 class="text-lg md:text-xl flex items-center">Design by <img src="https://majesticorganizer.com/wp-content/uploads/2023/04/atdawn-logo.png" style="float: right;" class="w-14 h-fit mt-1 ml-1"></h3>
                        </a>
                        
                        <a class="ml-4" href="https://qubick.id/" target="_blank">
                            <div><h3 class="text-lg md:text-xl">Code by Qubick</h3></div>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
<script>
	
	$( document ).ready(function() {     
        $('.event-social').css("opacity", "1")
		$('.slide-prev-social').click(function(){
			$('.event-social').slick('slickPrev');
		})

		$('.slide-next-social').click(function(){
			$('.event-social').slick('slickNext');
		})
        $('.slide-prev-corp').click(function(){
			$('.event-corp').slick('slickPrev');
		})

		$('.slide-next-corp').click(function(){
			$('.event-corp').slick('slickNext');
		})
		$('.footer-prev').click(function(){
			$('.footer-archive-events').slick('slickPrev');
		})

		$('.footer-next').click(function(){
			$('.footer-archive-events').slick('slickNext');
		})
        
        $('.event-social').hover(function(){
            $('.drag-cursor').removeClass('lg:hidden')
            $('.drag-cursor').addClass('lg:block')
        }, function(){
            $('.drag-cursor').addClass('lg:hidden')
            $('.drag-cursor').removeClass('lg:block')
        })
        
        $('.event-corp').hover(function(){
            $('.drag-cursor').removeClass('lg:hidden')
            $('.drag-cursor').addClass('lg:block')
        }, function(){
            $('.drag-cursor').addClass('lg:hidden')
            $('.drag-cursor').removeClass('lg:block')
        })
        setTimeout(function () {
            $('.event-social').slick({
                infinite: true,
                centerMode: true,
                centerPadding: '100px',
                speed: 300,
                slidesToShow: 3,
                responsive: [
                    {
                    breakpoint: 1024,
                    settings: {
                        infinite: true,
                        centerMode: false,
                        speed: 300,
                        slidesToShow: 1,
                        // prevArrow: `<button class="slide-prev !bg-[url('<?php echo get_stylesheet_directory_uri()?>/assets/images/BUTTON/prev.png')] !bg-center w-1/6 !bg-no-repeat h-[50px] mx-2 hidden lg:block slick-prev z-10"></button>`,
                        // nextArrow: `<button class="slide-next !bg-[url('<?php echo get_stylesheet_directory_uri()?>/assets/images/BUTTON/next.png')] !bg-center w-1/6 !bg-no-repeat h-[50px] mx-2 hidden lg:block slick-next z-10"></button>`,
                        arrows: true
                    }
                    }
                ]
            });
            $('.event-corp').slick({
                infinite: true,
                centerMode: true,
                centerPadding: '100px',
                slidesToShow: 3,
                responsive: [
                    {
                    breakpoint: 1024,
                    settings: {
                        infinite: true,
                        centerMode: false,
                        speed: 300,
                        slidesToShow: 1,
                        // prevArrow: `<button class="slide-prev !bg-[url('<?php echo get_stylesheet_directory_uri()?>/assets/images/BUTTON/prev.png')] !bg-center w-1/6 !bg-no-repeat h-[50px] mx-2 hidden lg:block slick-prev z-10"></button>`,
                        // nextArrow: `<button class="slide-next !bg-[url('<?php echo get_stylesheet_directory_uri()?>/assets/images/BUTTON/next.png')] !bg-center w-1/6 !bg-no-repeat h-[50px] mx-2 hidden lg:block slick-next z-10"></button>`,
                        arrows: true
                    }
                    }
                ]
            });
        }, 1000);
	});
    
	$('.category').click(function(){
		let category = $(this).attr('id');
		
		if(category == 'social'){
            $('.social').removeClass('animate__animated animate__fadeOutLeft animate__delay-200ms')
            $('.corporate').addClass('animate__animated animate__fadeOutRight animate__delay-200ms')
            setTimeout(function() {
                $('.social').removeClass('invisible');
                $('.corporate').addClass('invisible');
                $('.social').removeClass('h-10');
                $('.social').addClass('h-0');
                $('.corporate').removeClass('h-0');
                $('.corporate').addClass('h-10');
                $('.social-arrow').removeClass('hidden');
                $('.corporate-arrow').addClass('hidden');
                $('#corporate').removeClass('selected');
                $('#social').addClass('selected');
                
                // $('.social').addClass('animate__animated animate__fadeInUp animate__delay-1s')
                $('.social').addClass('animate__animated animate__fadeInLeft animate__delay-200ms')
                $('.corporate').removeClass('animate__animated animate__fadeInRight animate__delay-200ms')
            }, 250);
		}
		else if(category == 'corporate'){
            $('.social').removeClass('animate__animated animate__fadeInUp animate__delay-1s')
            $('.corporate').removeClass('animate__animated animate__fadeOutRight animate__delay-200ms')
            $('.social').addClass('animate__animated animate__fadeOutLeft animate__delay-200ms')
            setTimeout(function() {
                $('.corporate').removeClass('invisible');
                $('.social').addClass('invisible');
                $('.corporate').removeClass('h-10');
                $('.corporate').addClass('h-0');
                $('.social').removeClass('h-0');
                $('.social').addClass('h-10');
                $('.corporate-arrow').removeClass('hidden');
                $('.social-arrow').addClass('hidden');
                $('#social').removeClass('selected');
                $('#corporate').addClass('selected');

                $('.social').removeClass('animate__animated animate__fadeInLeft animate__delay-200ms')
                $('.corporate').addClass('animate__animated animate__fadeInRight animate__delay-200ms')
            }, 250);
		}
	})

</script>
<?php get_footer();?>
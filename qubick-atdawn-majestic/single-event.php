<?php get_header();
$event_gallery = '';
$event_gallery_tes = '';
while ( have_posts() ) :
    the_post();
	$post_id = get_the_ID();
	$prefix = 'event_';
	$event_title = get_post_meta($post_id, $prefix . 'event_title',true);
	$event_type = get_post_meta($post_id, $prefix . 'event_type',true);
	$event_year = get_post_meta($post_id, $prefix . 'event_year',true);
	$event_location = get_post_meta($post_id, $prefix . 'event_location',true);
	$event_description = get_post_meta($post_id, 'event_description',true);
    $urlThumbnail = get_post_meta($post_id, 'event_thubmnail_landscape', true);
    $event_galleries = get_post_meta($post_id, 'event_gallery', false);

    foreach($event_galleries as $key=>$gallery){
        $event_gallery_tes .= ' <div class="masonry-item" style="animation-delay: 2.5s;" gallery-index="'.$key.'">
                                    <img src="'.wp_get_attachment_image_src($gallery, 'icon')[0].'" alt="" class="opacity-0" >
                                </div>';
    }


    
    $category_obj = get_the_category();
    $category = $category_obj[0]->slug;
    $post_type   = get_post_type();
    $IDs         = array();

    $args = array(
        'post_type'      => $post_type,
        'posts_per_page' => -1,
        'category'       => $category,
    );

    $query = new WP_Query( $args );
    // echo '<pre>';
    // print_r($query->posts );
    // echo '</pre>';
    // $currentTerms = get_the_terms( $post_id, 'category');
    // $postTerms = array();


    // foreach ($currentTerms as $theTerms) {
    //     array_push($postTerms,$theTerms->term_id);
    // }

    // wp_reset_postdata();
    $idTemp = array();
    foreach ($query->posts as $q){
        array_push($idTemp, $q->ID);
        
        
    }
    $current = array_search( get_the_ID(),$idTemp);
    if ( $current + 1 < sizeof( $idTemp ) ) {
        $nextID = $idTemp[$current + 1];
    }

    if ( ! isset( $nextID ) ) {
        $nextID = $idTemp[0];
    }
    $link_href_next_footer =  get_permalink( $nextID );
	$event_title_next_footer = get_post_meta($nextID, $prefix . 'event_title',true);
	$event_type_next_footer = get_post_meta($nextID, $prefix . 'event_type',true);
	$event_year_next_footer = get_post_meta($nextID, $prefix . 'event_year',true);
	$event_location_next_footer = get_post_meta($nextID, $prefix . 'event_location',true);
	$event_description_next_footer = get_post_meta($nextID, 'event_description',true);
    $urlThumbnail_next_footer = get_post_meta($nextID, 'event_thubmnail_landscape', true);
    $event_galleries_next_footer = get_post_meta($nextID, 'event_gallery', false);
    // echo $link_href_next_footer." + ".$event_type_next_footer." + ".wp_get_attachment_image_src($urlThumbnail_next_footer, 'icon')[0];
endwhile;



    ?>
    
    <style type="text/css">
        .masonry-with-columns {
          columns: 3 200px;
          column-gap: 1rem;
        }
        .masonry-with-columns div {
          margin: 0 1rem 1rem 0;
          display: inline-block;
          width: 100%;
        /* animation-name: fadeInTop!important;
        animation-iteration-count: 1!important; 
        animation-timing-function: ease-in !important; 
        animation-duration: 2s!important;  */
        }
        .masonryItem_changePosition{
            margin: 10rem 1rem 1rem 0;
        }

        #text_documentaries{
            color: #323232;
            right: 100vw;
            top: -4rem;
            z-index: -1;
        }

        #gallery_wrapper{
            position: relative;
        }
        .masonry-item{
            margin-top: 3rem;
        }
        .columnCount{
            column-count: 2;
        }
        @media (max-width: 1024px){
            .columnCount{
                column-count: 1;
            }
        }
        .href_animation {
            display: inline-block;
            position: relative;
        }

        .href_animation:after {
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

        .href_animation:hover:after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }
        #trigger1, #trigger2, #trigger3, #trigger4{
            /*display: none;*/
        }
    </style>

    <div class="h-auto min-h-screen mt-[10rem]">
        <div class="h-1/4 text-left px-10 lg:px-[5rem] relative"> 
            <div class="my-4 lg:flex justify-between items-center">
                <div class="text-lg animate__animated animate__fadeInUp animate__delay-1s">
                    <?= $event_type; ?>
                </div>
                <div class="hidden lg:block text-lg animate__animated animate__fadeInUp animate__delay-1s"><?= $event_year; ?></div>
            </div>
            <div class="mt-4 lg:flex justify-between items-end">
                <div class="text-3xl font-[DarkerGrotesque-Medium] md:text-4xl lg:text-8xl animate__animated animate__fadeInUp animate__delay-1s">
                    <?= strtoupper($event_title) ?>
                </div>

                <div class="hidden mr-[30px] -mb-[1rem] lg:block animate__animated animate__fadeInUp animate__delay-1s">
                    <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/GIF/scroll.gif" class="w-8 h-8" alt="">
                    <div class="text-center font-[Lora-MediumItalic] text-xs mt-[5px]">scroll</div>
                </div>

                <div class="hidden lg:block text-lg animate__animated animate__fadeInUp animate__delay-1s"><?= $event_location ?></div>
            </div>
            <div class="text-lg flex my-4 w-1/2 justify-between lg:hidden animate__animated animate__fadeInUp animate__delay-1s">
                <div><?= $event_year ?></div>
                <div><?= $event_location ?></div>
            </div>
        </div>

        <div class="h-3/4">
            <div class="w-full h-auto my-[3em] animate__animated animate__fadeInUp animate__delay-1s">
                <img src="<?= wp_get_attachment_image_src($urlThumbnail, 'icon')[0]?>" alt="" class=" h-full w-full object-cover">
            </div>
            <div class="h-2/3  px-10 lg:px-[5rem] my-[3em] columnCount animate__animated animate__fadeInUp animate__delay-2s"><?= $event_description?></div>
        </div>
    </div>

    <div id="gallery_wrapper">
        <div class="w-full">
            <span id="text_documentaries" 
                    class=" text_documentaries absolute w-[100%]
                            text-center
                            left-0 right-0
                            text-[3rem] font-[DarkerGrotesque-Bold] 
                            md:text-4xl lg:text-[10rem]  ">
                DOCUMENTARIES
            </span>
            
            <div class="masonry-with-columns mt-[10rem] mb-[5rem] px-10 lg:px-[5rem] ">
                <?= $event_gallery_tes ?>
            </div>
        </div>
    </div>
    <div class="h-screen relative lg:h-auto footer">
            <div class="footer-archive-events h-full w-full">
                <div class="w-full h-screen">
                    <img src="<?=wp_get_attachment_image_src($urlThumbnail_next_footer, 'icon')[0]?>" alt=""  class="h-full object-cover w-full parallax opacity-70">
                </div>
            </div>
            <div class="lg:hidden">
                <div class="absolute top-20 px-10 lg:px-[5rem] w-full flex justify-center flex-col">
                    <!-- <h3 class="font-[Lato-MediumItalic] text-lg  md:text-xl">2022</h3> -->
                        <a href="<?=$link_href_next_footer?>">
                        <h3 class="font-[Lato-MediumItalic] text-lg mb-3 md:text-xl href_animation animate__animated">next event</h3>
                        <h2 class="font-[DarkerGrotesque-Bold] text-4xl my-5 md:text-6xl" style="display: block"><?=$event_title_next_footer?></h2>
                        </a>
                    <div>
                        <!-- <button class="footer-prev prev bg-[url('<?php echo get_stylesheet_directory_uri()?>/assets/images/BUTTON/prev.png')] bg-left bg-contain w-1/5 bg-no-repeat h-[50px] mr-8 "></button>
                        <button class="footer-next bg-[url('<?php echo get_stylesheet_directory_uri()?>/assets/images/BUTTON/next.png')] bg-right bg-contain w-1/5 bg-no-repeat h-[50px] ml-8 "></button> -->
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
                    <div class="flex w-full mb-8">
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
                            <a href="<?=$link_href_next_footer?>">
                            <h3 class="font-[Lato-MediumItalic] text-lg mb-3 md:text-xl href_animation animate__animated">next event</h3>
                            <h2 class="font-[DarkerGrotesque-Bold] text-4xl my-10 md:text-6xl href_animation animate__animated" style="display: block"><?=$event_title_next_footer?></h2>
                            </a>
                        </div>
                        <!-- <div class="w-[15%]">
                            <button class="footer-prev prev bg-[url('<?php echo get_stylesheet_directory_uri()?>/assets/images/BUTTON/prev.png')] bg-left bg-contain w-1/5 bg-no-repeat h-[50px] mr-4 "></button>
                            <button class="footer-next bg-[url('<?php echo get_stylesheet_directory_uri()?>/assets/images/BUTTON/next.png')] bg-right bg-contain w-1/5 bg-no-repeat h-[50px] ml-4 "></button>
                        </div> -->
                    </div>
                    
                </div>
                <div class="absolute bottom-10 px-10 lg:px-[5rem] w-full">
                    <div class="flex justify-between items-center justify-items-center">
                        <div><h3 class="text-lg md:text-xl">&copy;2022 PT Kreasi Mulia Indonesia. All Rights Reserved.</h3></div>
                        <div class="grid grid-flow-col w-[15%] content-center">
                        <div><a href="https://linktr.ee/kreasimuliaindonesia" target="_blank"><img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/BUTTON/instagram.png" alt="" class="w-[1.6rem] h-[1.6rem] hover:scale-125"></a></div>
                        <div><a href="https://api.whatsapp.com/send?phone=6282128676780&text=Hallo%20Majestic" target="_blank"><img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/BUTTON/whatsapp.png" alt="" class="w-[1.6rem] h-[1.6rem] hover:scale-125"></a></div>
                        <div><a href = "mailto: info@majesticorganizer.com"><img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/BUTTON/email.png" alt="" class="w-[2rem] h-[1.6rem] hover:scale-125"></a></div>
                        <div><a href="https://www.linkedin.com/company/ptkreasimuliaindonesia/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/BUTTON/linkedin.png" alt="" class="w-[1.6rem] h-[1.6rem] hover:scale-125"></a></div>
                    </div>
                    </div>
                    <div class="flex justify-end mr-4 mt-4 items-center justify-items-center">
                        <a href="https://qubick.id/" target="_blank">
                            <div><h3 class="text-lg md:text-xl">Code by Qubick</h3></div>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>

        <script type="text/javascript">
            var reach_gallery = false;
            $(document).ready(function(){
                
            })
            window.addEventListener('scroll', function(){
                $('.masonry-item > img').each(function(){ 
                    var divOffsetTop = $(this).offset().top - window.innerHeight;
                    let scrollValue = window.pageYOffset;
                    console.log($(this).parent().attr('gallery-index')+' : '+divOffsetTop +' + '+scrollValue)
                    if (scrollValue >= divOffsetTop-50){
                        $(this).removeClass('opacity-0')
                        $(this).addClass('fadeInTop')
                    }
                
                });

                
            })
        </script>
<?php get_footer() ?>
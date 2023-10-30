<?php get_header();
$footer_div = "";
$footer_query = array(
    'post_type'      => 'event',
    'posts_per_page' => 5,
    'orderby'        => 'rand',
);

$footer_query = new WP_Query( $footer_query );
// print("<pre>".print_r($footer_query,true)."</pre>");
foreach ($footer_query->posts as $fq){
    $link_href = get_permalink($fq->ID);
    $event_title = get_post_meta($fq->ID, 'event_event_title',true);
    $event_type = get_post_meta($fq->ID, 'event_event_type',true);
    $event_year = get_post_meta($fq->ID, 'event_event_year',true);
    $event_location = get_post_meta($fq->ID, 'event_event_location',true);
    $urlThumbnail = get_post_meta($fq->ID, 'event_thubmnail_landscape', true);
    if(isset(wp_get_attachment_image_src($urlThumbnail, 'icon')[0])){
        $footer_div .= '<div class="w-full h-screen relative">
                            <img src="'.wp_get_attachment_image_src($urlThumbnail, 'icon')[0].'" alt=""  class="h-full object-cover w-full parallax opacity-70">
                            <div class="lg:hidden">
                                <div class="absolute top-20 px-10 lg:px-[5rem] w-full">
                                <a href="'.$link_href.'">
                                    <h3 class="font-[Lato-MediumItalic] text-lg  md:text-xl">'.$event_year.'</h3>
                                    <h2 class="font-[DarkerGrotesque-Bold] text-4xl my-10 w-3/4 md:text-6xl">'.$event_type.'</h2>
                                    <h3 class="font-[Lato-MediumItalic] text-lg mb-3 md:text-xl"><span class="underline-effect">learn more</span></h3>
                                </a>
                                </div>
                                
                            </div>
                            <div class="hidden lg:block">
                                <div class="absolute top-1/4 bottom-1/4 px-10 lg:px-[5rem] w-full" style="z-index: 10;">
                                <div class="flex justify-between justify-items-center">
                                    <div class="relative">
                                        <a class="absolute z-10" href="'.$link_href.'">
                                            <h3 class="font-[Lato-MediumItalic] text-lg  md:text-xl">'.$event_year.'</h3>
                                            <h2 class="font-[DarkerGrotesque-Bold] text-4xl my-10 w-3/4 md:text-6xl">'.$event_type.'</h2>
                                            <h3 class="font-[Lato-MediumItalic] text-lg mb-3 md:text-xl"><span class="underline-effect">learn more</span></h3>
                                        </a>
                                    </div>
                                    
                                </div>
                                </div>
                                
                            </div>
                        </div>';
    }
    
}

$headerImage = get_field('header_image_1', $post->ID)['url'];
$header_text_description = rwmb_meta('header_text_description');

$socialEvents_image = rwmb_meta('social_events_image')['full_url'];
$socialEvents_text_description = rwmb_meta('social_events_text_description');
$socialEvents_href = get_page_link(rwmb_meta('social_events_href'));




$corporateGovernment_image= rwmb_meta('corporate_goverment_image')['full_url'];
$corporateGovernment_text_description = rwmb_meta('corporate_goverment_text_description');

$corporateGovernment_href = get_page_link(rwmb_meta('corporate_goverment_href'));


$logoClient = rwmb_meta('client_logo');

$logoReturn = '';
foreach($logoClient as $logo){
    $logoReturn .='
        <div class="w-full p-3 lg:px-5">
                        <img src="'.$logo['full_url'].'" alt="">
                    </div>
    ';
}
?>
        <div>
        <div class="h-screen min-h-[800px] lg:h-auto lg:mb-24">
            <div class="relative h-1/3 content-end grid lg:block lg:h-auto lg:static">
                <img class="absolute -mt-[3.5rem] w-3/4 md:w-2/5 lg:w-[28%] xl:w-[26%]" src="<?php echo get_stylesheet_directory_uri()?>/assets/images/bg/Transparent Logo.png" alt="Create Your Own Significant Moment">
                <div class="pl-10 text-4xl tracking-wide sm:text-6xl md:text-7xl lg:text-[6rem] xl:text-[7.5rem] 2xl:text-[9rem] lg:pl-0 lg:m-auto title-home lg:relative ">
                    <h1 class="lg:text-center lg:pt-36 lg:z-20 lg:relative font-[DarkerGrotesque-Medium] leading-[1em] text-[90%]">
                        <span class="my-3 block lg:inline">
                            <span class="animate__animated animate__fadeInUp" style="animation-delay: 1s;">CREATE</span> 
                            <span class="animate__animated animate__fadeInUp" style="animation-delay: 1.5s;"> YOUR </span>
                        </span>

                        <span class="my-3 hidden lg:inline font-[Lora-MediumItalic] animate__animated animate__fadeInUp" style="animation-delay: 2s;">own </span>

                        <br class="hidden lg:block"> 
                        <span class="animate__animated animate__fadeInUp font-[Lora-MediumItalic]" style="animation-delay: 2.5s;">
                            <span class="my-3 inline-block lg:hidden font-[Lora-MediumItalic] animate__animated animate__fadeInUp" style="animation-delay: 2s;">own </span>
                            significant
                        </span>

                        <span class="my-3 block lg:inline animate__animated animate__fadeInUp" style="animation-delay: 2.5s;">MOMENT</span>
                        <svg height="150" width="150" class="absolute top-[35%] bottom-1/2 right-[13%] 3xl:right-[20%] hidden lg:block">
                            <circle cx="55" cy="55" r="55" stroke="white" stroke-width="1" fill-opacity="0"/>
                        </svg>
                        
                    </h1>
                    
                <div class="hidden bg-cover bg-center w-full lg:block lg:absolute lg:w-[40.5%] xl:w-[41%] lg:h-[90%] xl:h-full lg:right-0 lg:top-[90%] lg:z-10" style="background-attachment: scroll;">
                <img src="<?=$headerImage?>" alt="jubotron gif" class="parallax w-full"></div>
                </div>
            </div>
            <div class="pl-10 text-sm text-stone-300 h-1/3 content-center grid lg:pt-44
            lg:w-1/2 lg:h-auto lg:text-base lg:pl-2 xl:pt-62
            xl:text-lg">
                <h3 class="lg:m-auto animate__animated animate__fadeInUp animate__delay-3s w-[80%] lg:w-[50%] ">
                    WE ARE MAJESTIC<br>
                    <br>
                    <?=$header_text_description?>
                </h3>
                <div class="hidden lg:block relative">
                <div class="absolute right-0 -top-10 animate__animated animate__fadeInUp animate__delay-4s">
                    <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/GIF/scroll.gif" class="w-8 h-8" alt="">
                    
                    <div class="text-center font-[Lora-MediumItalic] text-xs mt-[5px]">scroll</div>
                </div>
                </div>
            </div>
            <div class="bg-[url('<?=$headerImage?>')] h-1/3 bg-cover bg-center w-full object-cover bg-fixed lg:hidden" style="background-attachment: scroll;" style="background-attachment: scroll;"></div>
        </div>

        
        <div class="h-screen relative min-h-[830px] lg:h-auto lg:min-h-auto lg:pt-10 lg:mb-24 container-01" id="container-01">
            <div id="one" class="float-right w-2/5 mt-[35%] opacity-0
                                md:mt-[22%] md:w-1/4
                                lg:mt-[4%] lg:w-[25%] lg:right-[21%] lg:pr-20 lg:relative lg:z-20  ">
                <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/bg/01.png" class="lg:relative lg:z-20" alt="01">
            </div>

            <div id="project-01" class="
                                absolute bg-cover bg-center object-cover project-01 opacity-0
                                w-3/4 h-[30%] m-auto left-0 right-0 top-1/4 z-20 
                                sm:w-1/2 
                                md:w-[85%] 
                                lg:z-10 lg:h-[35rem] lg:float-left lg:right-auto lg:left-auto lg:ml-24 lg:w-[44%] lg:top-[20%] 
                                xl:ml-28 " style="background-attachment: scroll;">
                <img src="<?=$socialEvents_image?>" alt="" class="parallax w-full h-full object-cover">
            </div>

            <div class='h-2/5 lg:hidden'></div>

            <div id="marble" class="bg-[url('<?php echo get_stylesheet_directory_uri()?>/assets/images/bg/Marble.png')] bg-cover bg-center 
                                    w-full h-1/2 object-cover relative z-1 min-h-[475px] 
                                    lg:w-[65%] lg:right-0 lg:absolute lg:h-[37rem] lg:bottom-0 opacity-0
                                    marble" >
                <div class="bg-black w-full h-full opacity-30"></div>
                <div class="top-[40%] text-base text-stone-300 h-1/2 content-center absolute left-0 right-0 m-auto w-3/4
                            sm:w-1/2 
                            md:w-[85%] md:text-lg 
                            lg:top-[20%] lg:w-[40%]">
                    <h3 class="mb-[15%] md:mb-[10%] lg:m-auto lg:mb-[3rem] ">
                        <div class="tracking-wide text-3xl pb-3 sm:text-4xl lg:pb-10 lg:text-5xl font-[DarkerGrotesque-Medium]" style="line-height: 1.3em"> 
                            <span class="lg:block"> SOCIAL </span> EVENTS 
                        </div>
                        <?=$socialEvents_text_description?>
                    </h3>
                    <a href="<?=$socialEvents_href?>" class="font-[Lato-MediumItalic] py-4 px-[1.5rem] rounded-[50%] border-white border-[1px] hover:bg-white hover:text-black duration-700">
                        learn more
                    </a>
                </div>
            </div>
        </div>

        <div class="h-[85vh] lg:h-screen relative lg:min-h-[800px] lg:h-auto lg:pt-10 lg:mb-24 lg:block" id="container-02">
            <div id="two" class="w-2/5 mt-[40%]  opacity-0
                                md:w-1/4  md:mt-[10%] md:mb-[-3%]
                                lg:w-[25%] lg:right-0 lg:mt-16 lg:pl-[5em]"  
                  style="transition:.5s">
                <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/bg/02.png" class="lg:relative lg:z-20" alt="02">
            </div>
                
            <div class="absolute w-full lg:flex lg:flex-row-reverse lg:-mt-10 lg:pb-24 lg:h-auto">
                <div class="bg-cover bg-center w-[85%] h-1/4 object-cover relative m-auto sm:h-1/3 lg:h-[30rem] lg:w-1/2 lg:m-0  opacity-0" id="project-02-image" style="background-attachment: scroll;">
                    <img src="<?=$corporateGovernment_image?>" alt="" class="parallax w-full h-full object-cover">
                </div>
                <div class="m-auto text-base h-3/5 w-[85%] mt-8
                            lg:h-auto lg:text-lg lg:w-1/4 lg:float-left lg:mt-0
                            xl:text-xl lg:mr-[4rem] opacity-0" id="cooperateTextContainer">
                    <h3 class="mb-[15%] md:mb-[10%]  lg:m-auto lg:mb-[3rem]">
                        <div class="tracking-wide text-3xl pb-3 sm:text-4xl lg:pb-10 lg:text-5xl font-[DarkerGrotesque-Medium]" style="line-height: 1.3em"> 
                            CORPORATE <span class="lg:block">  & GOVERNMENT</span>  EVENTS
                        </div>
                        <?=$corporateGovernment_text_description?>
                    </h3>
                    <a href="<?=$corporateGovernment_href?>" class="font-[Lato-MediumItalic] py-4 px-[1.5rem] rounded-[50%] border-white border-[1px] hover:bg-white hover:text-black duration-700">
                        learn more
                    </a>
                </div>
            </div> 
        </div>

        <div class="w-full lg:h-auto text-center mb-20">
                <h3 class="tracking-wide text-3xl sm:text-4xl lg:text-5xl font-[DarkerGrotesque-Medium]">OUR CLIENTS</h3>
                <div class="logo mt-[7%] mb-[7%] lg:m-5 lg:mt-[2rem] lg:mb-[8rem] flex">
                    <?=$logoReturn?>
                </div>
                <div class="mb-2">
                    <button class="slide-prev prev w-[15%] mr-[2rem] hover:scale-50
                                   lg:hidden">
                        <img src="<?=get_stylesheet_directory_uri()?>/assets/images/BUTTON/prev.png">
                    </button>

                    <button class="slide-next next w-[15%] ml-[2rem] 
                                    lg:hidden">
                        <img src="<?=get_stylesheet_directory_uri()?>/assets/images/BUTTON/next.png">
                    </button>
                </div>
            </div>
        </div>


        <div class="h-screen relative lg:h-auto lg:min-h-800 footer">
            <div class="footer-home h-full w-full relative">
                <?= $footer_div?>
            </div>
            <div class="lg:hidden">
                <div class="absolute top-20 px-10 lg:px-[5rem] w-full top-[18rem]" style="z-index: 10;">
                    <div class="pt-[1.2rem] w-1/2">
                        <button class="footer-prev prev bg-[url('<?=get_stylesheet_directory_uri()?>/assets/images/BUTTON/prev.png')] bg-left bg-contain w-1/5 bg-no-repeat h-[50px] mr-8 "></button>
                        <button class="footer-next bg-[url('<?=get_stylesheet_directory_uri()?>/assets/images/BUTTON/next.png')] bg-right bg-contain w-1/5 bg-no-repeat h-[50px] ml-8 "></button>
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
                    <div class="w-full mb-8">
                        <a href="https://ideas-atdawn.com/" target="_blank">
                            <h3 class="text-lg md:text-xl flex items-center">Design by <img src="https://majesticorganizer.com/wp-content/uploads/2023/04/atdawn-logo.png" style="float: right;" class="w-14 mt-1 ml-1"></h3>
                        </a>
                        
                        <a class="" href="https://qubick.id/" target="_blank">
                            <div><h3 class="text-lg md:text-xl">Code by Qubick</h3></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="hidden lg:block">
                <div class="absolute top-1/4 px-10 lg:px-[5rem] w-full">
                    <div class="flex justify-end justify-items-center">
                        <div class="w-[15%] text-right">
                            <button class="footer-prev prev bg-left bg-contain w-1/5 bg-no-repeat h-auto mr-4 ">
                            <img src="<?=get_stylesheet_directory_uri()?>/assets/images/BUTTON/prev.png" alt=""></button>
                            <button class="footer-next h-auto bg-right bg-contain w-1/5 bg-no-repeat h-auto ml-4 ">
                            <img src="<?=get_stylesheet_directory_uri()?>/assets/images/BUTTON/next.png" alt=""></button>
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
</div>
</div>

        <script>
        
        $( document ).ready(function() {        
                
            $('.slide-prev').click(function(){
                $('.logo').slick('slickPrev');
            })

            $('.slide-next').click(function(){
                $('.logo').slick('slickNext');
            })
            $('.footer-prev').click(function(){
                $('.footer-home').slick('slickPrev');
            })

            $('.footer-next').click(function(){
                $('.footer-home').slick('slickNext');
            })
            
            setTimeout(function () {
                $('.logo').slick({
                    infinite: true,
                    speed: 300,
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    prevArrow: `<button class="m-auto mr-0 slide-prev w-[4%] relative hidden lg:block slick-prev z-10 hover:scale-125 hover:translate-[50%] ease-in duration-300 " style="left: unset;"><img class="float-right w-full" src="<?php echo get_stylesheet_directory_uri()?>/assets/images/BUTTON/prev.png"></button>`,
                    nextArrow: `<button class="m-auto ml-0 slide-next w-[4%] relative hidden lg:block slick-next z-10 hover:scale-125 hover:translate-[50%] ease-in duration-300 " style="right: unset;"><img class="float-left w-full " src="<?php echo get_stylesheet_directory_uri()?>/assets/images/BUTTON/next.png"></button>`,
                    arrows: true,
                    autoplay: true,
                    autoplaySpeed: 2500,
                });
                $('.logo .slick-list').hover(function(){
                    $('.drag-cursor').removeClass('lg:hidden')
                    $('.drag-cursor').addClass('lg:block')
                }, function(){
                    $('.drag-cursor').addClass('lg:hidden')
                    $('.drag-cursor').removeClass('lg:block')
                })
                $('.logo .slick-list').addClass('cursor-none')
            }, 2000);
            var one = document.getElementById('one');
            var two = document.getElementById('two');
            var marble = document.getElementById('marble');
            var project1 = document.getElementById('project-01');

            var project2_image = document.getElementById('project-02-image');
            var project2_text = document.getElementById('cooperateTextContainer');


            window.addEventListener('scroll', function(){
                var divOffsetTop = $("#container-01").offset().top / 2;
                var divOffsetTop_2 = $("#container-02").offset().top / 2;
                let scrollValue = window.pageYOffset;

                if (scrollValue >= divOffsetTop-50){
                    if(marble.classList.contains('fadeInRight')){

                    }else{

                        anime({
                          targets: one,
                          right: '0',
                          opacity: [0,1],
                          duration: 1700,
                          easing: 'easeInOutQuad',

                        });

                        marble.classList.remove('opacity-0')
                        project1.classList.remove('opacity-0')

                        marble.classList.add('fadeInRight')
                        project1.classList.add('fadeInLeft')

                        
                    }
                }

                if (scrollValue >= divOffsetTop_2-50){
                    two.classList.remove('opacity-0')
                    project2_image.classList.remove('opacity-0')
                    project2_image.classList.add('fadeInRight')
                    project2_text.classList.add('fadeInLeft');
                    // if(project2_image.classList.contains('opacity-0')){

                    // }else{
                    //     console.log("else");
                    //     project2_image.classList.remove('opacity-0')
                    //     project2_image.classList.add('fadeInLeft')
                    // }
                }
                
            })
        });

        
        

        $('.footer-home').slick({
            slidesToScroll: 1,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            arrows:true,
            autoplay: true,
            autoplaySpeed: 2500,
        });
        
        
        // const observer = new IntersectionObserver(entries => {
        //     entries.forEach(entry => {
        //         if(entry.isIntersecting){
        //             document.querySelector(".project-01").classList.add("fadeInRight")
        //             document.querySelector(".marble").classList.add("fadeInLeft")
        //         }
        //     })
        // })
        // observer.observe(document.querySelector(".container-01"))
        </script>
        
<?php get_footer() ?>


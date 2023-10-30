<?php 
    get_header();

    $short_description = rwmb_meta('short_desc_text') ;
    $more_description = rwmb_meta('more_desc_text') ;
    $header_image = rwmb_meta('header_about_image')['full_url'];
        $footer_image = rwmb_meta('footer_image')['full_url'];
    
    $gallery = rwmb_meta('gallery');
    $galleryReturn = '';
    foreach($gallery as $gall){
        $galleryReturn .='
        <div class="slick-item" style="height: 80vh;background-size: cover; background-position: center;">
                        <img src="'.$gall['full_url'].'" class="h-full w-full object-cover" alt="">
                        </div>
        ';
    }

?>

    <style type="text/css">
        .about-slider div.slick-slide{
            padding: 0 1rem;
        }
    </style>

    <div>
        <div class="pl-10 pt-[8rem] pb-[3rem] lg:grid lg:grid-cols-2 lg:py-[5rem] lg:pt-[7rem] lg:px-[5rem]">
            <div>
                <h1 class="font-[DarkerGrotesque-Medium] text-[3rem] mb-[3rem] lg:mb-0 md:text-[5rem] lg:text-[6rem] xl:text-[8rem] lg:relative" style="line-height: 1;">
                    MAJESTIC ORGANIZER
                    <svg height="150" width="150" class="circle-about-us absolute top-[25%] xl:top-[32%] lg:left-[25.5rem] xl:left-[34rem] bottom-1/2 hidden lg:block">
                        <circle cx="55" cy="55" r="55" stroke="white" stroke-width="1" fill-opacity="0"/>
                    </svg>
                </h1>
            </div>
            <div class="relative flex">
                <div class="lg:w-[100%] lg:pl-[4rem]">
                    <p>
                        <?=$short_description?>
                    </p>
                </div>
                <div class="absolute hidden lg:block bottom-0 right-0">
                        <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/GIF/scroll.gif" class="w-8 h-8" alt="">
                        
                        <div class="text-center font-[Lora-MediumItalic] text-xs mt-[5px]">scroll</div>
                    
                </div>
            </div>
        </div>
        <div class="bg-[url('<?=$header_image?>')] bg-fixed
                    bg-no-repeat bg-center bg-cover
                    h-[55vh] mb-[3rem]" style="background-attachment: scroll;">

        </div>
        
        <!-- <div class="lg:w-[100%] lg:pl-[4rem]">
            <p style="columns:2;">
                <?=$short_description?>
            </p>
        </div> -->
    </div>

    <?php
        if (strlen($more_description)) {
    ?>
    <div class="pl-10 lg:py-[2rem] lg:px-[5rem]">
        <div>
            <p class="mb-[2rem]" style="column-count: 2;">
                <?=$more_description?>
            </p>
        </div>
    </div>
    <?php
    }
    ?>

    <div class="about-slick cursor-none">
        <div class="about-slider my-[5rem] lg:my-[14rem] lg:mx-0">
            <!-- <div style="background-image: url('<?=get_stylesheet_directory_uri()?>/assets/images/ABOUT/slider1.jpg'); height: 80vh;background-size: cover; background-position: center;"></div>
            <div style="background-image: url('<?=get_stylesheet_directory_uri()?>/assets/images/ABOUT/slider2.jpg'); height: 80vh;background-size: cover; background-position: center;"></div>
            <div style="background-image: url('<?=get_stylesheet_directory_uri()?>/assets/images/ABOUT/slider3.jpg'); height: 80vh;background-size: cover; background-position: center;"></div> -->
            <?=$galleryReturn?>
        </div>
    </div>


    <div class="h-screen relative lg:h-auto footer">
            <div class="footer-archive-events h-full w-full">
                <div class="w-full h-screen relative">
                    <img src="<?=$footer_image?>" alt=""  class="h-full object-cover w-full parallax opacity-70">
                </div>
            </div>
            <div class="lg:hidden">
                <div class="absolute top-20 px-10 lg:px-[5rem] w-full flex justify-center flex-col">
                    <!-- <h3 class="font-[Lato-MediumItalic] text-lg  md:text-xl">2022</h3> -->
                        <a href="<?=get_site_url()?>/about-us">
                        <h2 class="font-[DarkerGrotesque-Bold] text-4xl my-5 md:text-6xl">LET'S CREATE TOGETHER</h2>
                        <h3 class="font-[Lato-MediumItalic] text-lg mb-3 md:text-xl underline-effect">reach us</h3>
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

    <script type="text/javascript">
        // $('.centerSlider').slick({
        //     infinite: true,
        //     centerMode: true,
        //     centerPadding: '150px',
        //     slidesToShow: 1,
        //     responsive: [
        //         {
        //         breakpoint: 1024,
        //         settings: {
        //             infinite: true,
        //             centerMode: false,
        //             speed: 300,
        //             slidesToShow: 1,
        //             // prevArrow: `<button class="slide-prev !bg-[url('<?php echo get_stylesheet_directory_uri()?>/assets/images/BUTTON/prev.png')] !bg-center w-1/6 !bg-no-repeat h-[50px] mx-2 hidden lg:block slick-prev z-10"></button>`,
        //             // nextArrow: `<button class="slide-next !bg-[url('<?php echo get_stylesheet_directory_uri()?>/assets/images/BUTTON/next.png')] !bg-center w-1/6 !bg-no-repeat h-[50px] mx-2 hidden lg:block slick-next z-10"></button>`,
        //             // arrows: true
        //         }
        //         }
        //     ]
        // });
        
        $('.about-slider').slick({
            infinite: true,
            centerMode: true,
            centerPadding: '200px',
            slidesToShow: 1,
            responsive: [
                {
                breakpoint: 1024,
                settings: {
                    infinite: true,
                    centerMode: false,
                    speed: 300,
                    slidesToShow: 1
                }
                }
            ]
        });
        $('.about-slick').hover(function(){
            $('.drag-cursor').removeClass('lg:hidden')
            $('.drag-cursor').addClass('lg:block')
        }, function(){
            $('.drag-cursor').addClass('lg:hidden')
            $('.drag-cursor').removeClass('lg:block')
        })
    </script>

        
<?php get_footer() ?>


<?php 
    get_header();

    $email = rwmb_meta('email_text') ;
    $instagram_username = rwmb_meta('instagram_username_text') ;
    $instagram_link = rwmb_meta('instagram_link_text') ;
    $nomor_whats_app = rwmb_meta('whatsapp_text') ;
    $linkedin_name = rwmb_meta('linkedin_name_text') ;
    $linkedin_link = rwmb_meta('linkedin_link_text') ;
    $location = rwmb_meta('address_text_description') ;
    $address_city = rwmb_meta('city_text_description') ;
    $address_country = rwmb_meta('country_text_description') ;
    $see_events = rwmb_meta('see_event')['full_url'];

?>

<style type="text/css">
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



<div class="px-10 lg:px-[5rem] mt-[5rem]">
    <div class="pt-[5rem] pb-[3.5rem] text-4xl tracking-wide sm:text-6xl md:text-7xl">
        <h1 class="animate__animated animate__fadeInUp animate__delay-1s">FIND US</h1>
    </div>
    <div class="lg:hidden">
        <div class="pb-[3.5rem] animate__animated animate__fadeInUp animate__delay-2s">
            <h2 class="font-[Lato-MediumItalic] pb-[1rem]">Email</h2>
            <a href = "mailto: <?=$email?>"><h3 class="text-stone-300 hr"><?=$email?></h3></a>
        </div>
        <div class="pb-[3.5rem] animate__animated animate__fadeInUp animate__delay-2s">
            <h2 class="font-[Lato-MediumItalic] pb-[1rem]">Social Media</h2>
            <a href="<?=$instagram_link?>" target="_blank"><h3 class="text-stone-300 hr mb-4">Ig. <span class="ml-2">@<?=$instagram_username?></span></h3></a><br>
            <a href="https://api.whatsapp.com/send?phone=62<?=$nomor_whats_app?>&text=Hallo%20Majestic" target="_blank"><h3 class="text-stone-300 hr mb-4">Wa. <span class="ml-2">0<?=$nomor_whats_app?></span></h3></a><br>
            <a href="<?=$linkedin_link?>" target="_blank"><h3 class="text-stone-300 hr mb-4">Linked In. <span class="ml-2"><?=$linkedin_name?></span></h3></a><br>
        </div>
    </div>
    <div class="hidden lg:grid lg:grid-cols-2">
        <div class="pb-[3.5rem] animate__animated animate__fadeInUp animate__delay-2s">
            <h2 class="font-[Lato-MediumItalic] pb-[1rem]">Email</h2>
            <a href = "mailto: <?=$email?>"><h3 class="text-stone-300 hr"><?=$email?></h3></a>
        </div>
        <div class="pb-[3.5rem] animate__animated animate__fadeInUp animate__delay-2s">
            <h2 class="font-[Lato-MediumItalic] pb-[1rem]">Social Media</h2>
            <div class="flex flex-wrap">
            <a href="<?=$instagram_link?>" target="_blank"><h3 class="text-stone-300 hr mb-4 mr-5">Ig. <span class="ml-2">@<?=$instagram_username?></span></h3></a><br>
            <a href="https://api.whatsapp.com/send?phone=62<?=$nomor_whats_app?>&text=Hallo%20Majestic" target="_blank"><h3 class="text-stone-300 hr mb-4 mr-5">Wa. <span class="ml-2">0<?=$nomor_whats_app?></span></h3></a><br>
            <a href="<?=$linkedin_link?>" target="_blank"><h3 class="text-stone-300 hr mb-4">Linked In. <span class="ml-2"><?=$linkedin_name?></span></h3></a><br>
            </div>
        </div>
    </div>
</div>
<div class="w-full h-[15rem] lg:h-[25rem] animate__animated animate__fadeInUp animate__delay-3s" id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.700710071445!2d107.62477299999999!3d-6.926333700000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7eccc67d801%3A0x5f50aaf4d8913478!2sMajestic%20Event%20Organizer!5e0!3m2!1sen!2sus!4v1654455661768!5m2!1sen!2sus" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full h-full"></iframe></div>

<div class="px-10 lg:px-[5rem] py-[3.5rem] blmTrigger" id="location" style="opacity: 0;">
    <div class="lg:grid lg:grid-cols-7 lg:w-3/4">
        <div><h2 class="font-[Lato-MediumItalic] pb-[1rem]">Location</h2></div>
        <div class=" lg:col-span-2">
            <h3 class="text-stone-300">
                <?=$location?>
            </h3>
        </div><br>
            <div> <h3 class="text-stone-300"><?=$address_city?></h3></div><br>
            <div><h3 class="text-stone-300"><?=$address_country?></h3></div>
    </div>
</div>

    <div class="h-screen relative lg:h-auto blmTrigger footer" id="footerSection">
            <div class="footer-archive-events h-full w-full">
                <div class="w-full h-screen">
                    <img src="<?=$see_events?>" alt=""  class="h-full object-cover w-full parallax ml-[-15%] opacity-70">
                </div>
                
            </div>
            <div class="lg:hidden">
                <div class="absolute top-20 px-10 lg:px-[5rem] w-full flex justify-center flex-col">
                    <!-- <h3 class="font-[Lato-MediumItalic] text-lg  md:text-xl">2022</h3> -->
                        <h3 class="font-[Lato-MediumItalic] text-lg mb-3 md:text-xl animate__animated" id="trigger1">see our</h3>
                        <a href="<?=get_site_url()?>/event">
                            <h2 class="font-[DarkerGrotesque-Bold] text-4xl my-5 md:text-6xl animate__animated" id="trigger2">EVENTS</h2>
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
                            <h3 class="font-[Lato-MediumItalic] text-lg mb-3 md:text-xl animate__animated" id="trigger3">see our</h3>
                            <a href="<?=get_site_url()?>/event">                        
                                <h2 class="font-[DarkerGrotesque-Bold] text-4xl my-10 md:text-6xl href_animation animate__animated" id="trigger4">EVENTS</h2>
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
                    <div class="flex justify-end mr-3 mt-4 items-center justify-items-center">
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
            $( document ).ready(function() { 
                
                var location = document.getElementById('location');
                var footerSection1 = document.getElementById('trigger1');
                var footerSection2 = document.getElementById('trigger2');

                var footerSection3 = document.getElementById('trigger3');
                var footerSection4 = document.getElementById('trigger4');
                var divOffsetTop = $("#footerSection").offset().top / 2;
                

                window.addEventListener('scroll', function(){
                    let scrollValue = window.pageYOffset;


                    if(location.classList.contains('blmTrigger')){
                        $("#location").animate({ opacity: 1},500);
                        location.classList.remove('blmTrigger')
                        location.classList.add('animate__animated')
                        location.classList.add('animate__fadeInUp')
                    }

                    // if (scrollValue >= divOffsetTop-100){
                    //     $("#footerSection").removeClass('blmTrigger')
                    //     footerSection1.classList.add('animate__fadeInUp')
                    //     // footerSection1.classList.add('animate__delay-1s')

                    //     footerSection2.classList.add('animate__fadeInUp')
                    //     // footerSection2.classList.add('animate__delay-1s')

                    //     footerSection3.classList.add('animate__fadeInUp')
                    //     // footerSection3.classList.add('animate__delay-1s')

                    //     footerSection4.classList.add('animate__fadeInUp')
                    //     // footerSection4.classList.add('animate__delay-1s')
                    // }
                    
                })
            });
        </script>
<?php get_footer() ?>


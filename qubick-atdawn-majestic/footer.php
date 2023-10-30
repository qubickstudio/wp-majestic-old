    
    </main><! – .site-content – >
    </div>
    <script>
        $(document).ready(function(){
            
            $(window).scroll(function(){
                footerTop = $('.footer').offset().top - window.innerHeight + $('.footer').height() - 100
                // if($(window).scrollTop() > $(window).height()){
                //     $("#nav-wrapper").css({"background-color":"transparent"});   
                // }
                if($(window).scrollTop() == 0){
                    $("#nav-wrapper").css({"background-color":"transparent"});
                }
                else if($(window).scrollTop() > footerTop){
                    $("#nav-wrapper").css({"background-color":"transparent"});
                }
                else{
                    $("#nav-wrapper").css({"background-color":"black"});
                }
            })
            window.addEventListener('mousemove', function(e){
                $('.drag-cursor').css({
                    left:  e.pageX - 35,
                    top:   e.clientY - 35
                });
            })
            setInterval(function () {
                $('#loading-screen').addClass('hidden');
                $('#before-load').css("display","block");
                var imageParallax = document.getElementsByClassName('parallax');
                new simpleParallax(imageParallax, {
                    orientation: 'down',
                    scale: 1.5,
                    delay: 1,
                    // transition: 'linear 0s',
                    // overflow: false
                });
            }, 1000);
        })
        
    </script>
    <?php wp_footer(); ?>
	</body>
</html>
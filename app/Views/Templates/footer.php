<a href="#" id="toTop"><img src="https://img.icons8.com/fluent-systems-regular/24/000000/sort-up.png"
        style="margin-top:5px; height:40px;" /></a>
<footer id="footer">
    <div class="footer-top" id="foottop">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 footcontact">
                    <h3>Contact Us</h3>
                    <p class="iconfoot"> <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i></p>
                    <p>

                        Just Media Co., Ltd. , <br>
                        No.55 Seacon Square Building,<br>
                        G Floor, Room No.CW6, Srinakarin Road, <br>
                        Nong Bon Sub-District, Prawet District,<br>
                        Bangkok Province 10250 Thailand .<br>

                    </p>
                    <div class="row" style="">
                        <a class="nav-link" href="https://www.facebook.com/Justcarthailand/"
                            style="background-color:black;" target="_blank">
                            <img src="https://img.icons8.com/color/50/000000/facebook.png" style="height:40px;"
                                alt="Facebook">
                        </a>
                        <a class="nav-link" href="https://bit.ly/2M1U3kO"
                            style="background-color:black; padding-left:0;" target="_blank">
                            <img src="https://img.icons8.com/color/48/000000/line-me.png" style="height:40px;"
                                alt="Line">
                        </a>
                        <a class="nav-link" href="https://www.instagram.com/justcarthailand/?hl=en"
                            style="background-color:black; padding-left:0;" target="_blank">
                            <img src="https://img.icons8.com/fluent/48/000000/instagram-new.png" style="height:40px;"
                                alt="Instragram">
                        </a>
                        <a class="nav-link" href="https://www.youtube.com/channel/UC6H4jZhw7ZfJRSBsjqDIwGA"
                            style="background-color:black; padding-left:0;" target="_blank">
                            <img src="https://img.icons8.com/color/50/000000/youtube-play.png" style="height:40px;"
                                alt="Youtube">
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 footmail" style="">
                    <p class="iconfoot"> <i class="fa fa-envelope fa-2x" aria-hidden="true"></i></p>
                    <p>
                        info@justcar.co.th
                    </p>
                </div>
                <div class="col-lg-1 footphone" style="">
                    <p class="iconfoot"> <i class="fa fa-phone-square fa-2x" aria-hidden="true"></i></p>
                    <p>
                        02-821-5700
                    </p>
                </div>
                <div class="col-lg-1">
                </div>
                <div class="col-lg-1 footmenu">
                    <h3>Menu</h3>
                    <ul style="">
                        <li><a class="textwhite" href="">Home</a></li>
                        <li><a class="textwhite" href="">About Us</a></li>
                        <li> <a class="textwhite" href="">Services</a></li>
                        <li><a class="textwhite" href="">Blog</a></li>
                        <li> <a class="textwhite" href="">Contact Us</a></li>

                    </ul>
                    <a class="textwhite btn btn-warning" href="">JOIN US</a>
                </div>

                <div class="col-lg-3 footletter">
                    <h3>News Letter Post</h3>
                    <input type="text" placeholder="Your email" class="form-control">
                    <br>
                    <button type="button" class="btn btn-danger">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="container-fluid" id="footbot">
        <div class="site-footer__bottom-row">
            <div class="site-footer__copyright" id="footbotdet">
                © Copyright 2021 Just Car Co., Ltd.
            </div>
        </div>
    </div> -->
</footer>

<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="<?php echo base_url('assets/js/owl.carousel.min.js'); ?>" type="text/javascript"></script>
<script>
    var btn = $('#toTop');

    $(window).scroll(function () {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });

    btn.on('click', function (e) {
        $('html, body').animate({
            scrollTop: 0
        }, 'slow');
    });

    $('#aboutnewowl').owlCarousel({
        loop: true,
        margin: 10,
        items: 1,
        // animateOut: 'slideOutUp',
        // animateIn: 'slideInUp',
        // autoplay: true,
        autoHeight: true,
        autoplayHoverPause: true,
        dotsEach: 4,
        // nav: true,
        // navText : ['<i class="fa fa-caret-left" aria-hidden="true"></i>','<i class="fa fa-caret-right" aria-hidden="true"></i>']
        // responsive: {
        //     0: {
        //         items: 1
        //     },
        //     500: {
        //         items: 2
        //     },
        //     1000: {
        //         items: 3
        //     }
        // }
    })
    $('#aboutnewowltechno').owlCarousel({
        loop: true,
        margin: 10,
        items: 1,
        autoHeight: true,
        autoplayHoverPause: true,
        dotsEach: 4,
       
    })
    
    $("#owl-demo").owlCarousel({
        autoplay: true,
        lazyLoad: true,
        loop: true,
        margin: 20,
        responsiveClass: true,
        autoHeight: true,
        autoplayTimeout: 7000,
        smartSpeed: 800,
        responsive: {
            0: {
                items: 1
            },

            500: {
                items: 2
            },

            1000: {
                items: 3
            },

            1500: {
                items: 4
            }
        }
    });
    $("#soft").click(function () {
        $("#soft").addClass('activecol');
        $("#soft").removeClass('nonecol');
        // $("#soft").fadeIn(1000);
        $("#dev").addClass('nonecol');
        $("#dev").removeClass('activecol');
        $("#mark").addClass('nonecol');
        $("#mark").removeClass('activecol');
        $("#software").fadeIn(2000);
        $("#development").hide();
        $("#marketing").hide();
    });
    $("#dev").click(function () {
        $("#soft").addClass('nonecol');
        $("#soft").removeClass('activecol');
        $("#dev").addClass('activecol');
        $("#dev").removeClass('nonecol');
        // $("#dev").fadeIn(1000);
        $("#mark").addClass('nonecol');
        $("#mark").removeClass('activecol');
        $("#software").hide();
        $("#development").fadeIn(2000);
        $("#marketing").hide();
    });
    $("#mark").click(function () {
        $("#soft").addClass('nonecol');
        $("#soft").removeClass('activecol');
        $("#dev").addClass('nonecol');
        $("#dev").removeClass('activecol');
        $("#mark").addClass('activecol');
        $("#mark").removeClass('nonecol');
        $("#software").hide();
        $("#development").hide();
        $("#marketing").fadeIn(2000);
        // $("#mark").fadeIn(1000);
    });





    $('#owl-img').owlCarousel({
        // autoplay: true,
        // lazyLoad: true,
        loop: true,
        items: 1,
        responsiveClass: true,
        animateIn: 'fadeIn', // add this
        animateOut: 'fadeOut', // and this
        autoHeight: true,
        // autoHeight: true,
        // autoplayTimeout: 7000,
        // smartSpeed: 800,

    });
    ////////////////********///////////////////


    //     var current = location.pathname;
    //     $('#naav li a').each(function () {
    //         var $this = $(this);
    //         // if the current path is like this link, make it active
    //         if ($this.attr('href').indexOf(current) !== -1) {
    //             $this.addClass('textnavactive');
    //             $this.removeClass('textnavb');
    //         } else {
    //             $this.addClass('textnavb');
    //             $this.removeClass('textnavactive');
    //         }
    //     })

    const cur = location.href;
    const menuI = document.querySelectorAll('.statictext');
    const menuL = menuI.length;
    for (let i = 0; i < menuL; i++) {
        if (menuI[i].href === cur) {
            menuI[i].className = "textnavactive nav-link statictext"
        } else {
            menuI[i].className = "textnavb nav-link statictext"
        }
    }
    var selector = $('#aboutnewowl');

    $('.my-next-button').click(function () {
        selector.trigger('next.owl.carousel');
    });

    $('.my-prev-button').click(function () {
        selector.trigger('prev.owl.carousel');
    });
</script>
</body>

</html>
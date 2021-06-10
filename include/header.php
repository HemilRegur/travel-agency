</head>

<body>
    <!-- start -->
    <div id="banner" class="wrap-container">
        <!-- navbar-header -->

        <header id="header">
            <div class="container">
                <div class="header-wrap">
                    <div class="row">
                        <div class="col-6 col-lg-3">
                            <div class="logo-wrap">
                                <a href="">
                                    <img src="./svg/header-logo.svg" class="logo white">
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-lg-9 no-relative navbar-content">
                            <div class="header-menu-wrap">
                                <a href="#contact" class="get-quote pull-left">Get a Quote</a>
                                <a href="javascript:void(0)" class="mobile-menu-toggler d-lg-none">
                                    <img src="./svg/menu-icon-open.svg" class="menu-icon-open">
                                    <img src="./svg/menu-icon-close.svg" class="menu-icon-close">
                                </a>
                                <div class="header-menu">
                                    <div class="triangle d-lg-none">
                                        <div></div>
                                    </div>
                                    <ul class="navbar-menu">
                                        <li class="item"><a href="#" class="link">HOME</a></li>
                                        <li class="item"><a href="#about" class="link">ABOUT US</a></li>
                                        <li class="item"><a href="#services" class="link">SERVICES</a></li>
                                        <li class="item"><a href="#solutions" class="link">SOLUTIONS</a></li>
                                        <li class="item"><a href="#contact" class="link">CONTACT US</a></li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <script type="text/javascript">
            jQuery(document).ready(function() {
                //toggle mobile menu
                jQuery(".mobile-menu-toggler").click(function() {
                    jQuery(".menu-icon-open, .menu-icon-close").toggle();
                    jQuery(".header-menu").slideToggle();
                });

                jQuery("#header .header-menu .link").click(function() {
                    //slide up menu in mobile when link is clicked
                    if (jQuery(document).width() < 992) {
                        jQuery(".menu-icon-open, .menu-icon-close").toggle();
                        jQuery(".header-menu").slideUp();
                    }

                    //smooth scroll
                    smoothScroll(jQuery(this));
                });

                jQuery("#header .get-quote").click(function() {
                    smoothScroll(jQuery(this));
                });

                //smooth scroll
                function smoothScroll(_this) {
                    jQuery('html, body').stop().animate({
                        scrollTop: _this.attr('href') == '#' ? 0 : jQuery(_this.attr('href')).offset().top + 1
                    }, 1000, 'easeOutExpo');
                    return false;
                }
            });

            //scrolled header menu
            jQuery(window).scroll(function() {
                //add class 'scrolled' to header
                if (jQuery(this).scrollTop() > 50) {
                    jQuery("#header").addClass("scrolled");
                } else {
                    jQuery("#header").removeClass("scrolled");
                }

                //active menu item on scroll
                jQuery(".section").each(function() {
                    var windowTop = jQuery(window).scrollTop();
                    if (jQuery(this).position().top <= windowTop) {
                        jQuery("#header .header-menu .link").removeClass("active");
                        if (jQuery("#header .header-menu .link[href='#" + jQuery(this).attr("id") + "']").length)
                            jQuery("#header .header-menu .link[href='#" + jQuery(this).attr("id") + "']").addClass("active");
                        else
                            jQuery("#header .header-menu .link[href='#']").addClass("active");
                    }
                });
            });
            $('.get-quote').click(function() {
                $('body').animate({
                    scrollTop: eval($('#' + $(this).attr('target')).offset().top - 70)
                }, 1000);
            });
        </script>
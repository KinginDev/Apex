  <!-- start site main header -->
        <header class="main-header init-animation">

            <!-- start desktop logo -->
            <a href="index.html" class="logos matx-logo logo-initial init-animation">
                <img class="logo-dark" src="img/logo/57x57.png" alt="logo">
                <img class="logo-lite" src="img/logo/60x76.png" alt="logo">
            </a>
            <!-- end desktop logo -->

            <!-- start desktop nav -->
            <nav class="nav-typo main-nav">
                <ul>
                    <li class="menu-item-has-children">
                        <a href="/" class="menu-smooth-scroll">Home </a>
                    </li>
                    <li><a href="#about" data-target="#about" class="menu-smooth-scroll">About</a></li>
                    <li><a href="#service" data-target="#service" class="menu-smooth-scroll">Service</a></li>
                    <li><a href="#work" data-target="#work" class="menu-smooth-scroll">Work</a></li>
                    <li><a href="#blog" data-target="#blog" class="menu-smooth-scroll">Blog Pages</a>

                        <ul class="sub-menu">
                            <li><a href="#">Blog Manosry</a></li>
                            <li><a href="{{route('index.blog')}}">Blog </a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('quote')}}">Request For A Quote</a></li>
                    <li><a href="#contact" data-target="#contact" class="menu-smooth-scroll">contact</a></li>
                </ul>
            </nav>
            <!-- end desktop nav -->

            <!-- start mobile logo -->
            <a href="index.html" class="logo matx-logo mobile-logo">
                <img src="img/logo_lite.png" alt="logo">
            </a>
            <!-- end mobile logo -->

            <!-- toogle icons, which are responsible for display and hide menu in small layout -->
            <div class="mdl-layout__drawer-button mobile-menu-area">
                <i id="menu-back-btn" class="mobile-menu-ctrl zmdi zmdi-arrow-right"></i>
                <i id="menu-show-btn" class="mobile-menu-ctrl active zmdi zmdi-menu"></i>
            </div>

        </header>
        <!-- end site main header -->


        <!-- start mobile nav -->
        <nav class="nav-typo mobile-nav">
            <ul>
                <li class="menu-item-has-children">
                    <a href="/"  class="menu-smooth-scroll">Home </a>
                </li>
                <li><a href="#about" data-target="#about" class="menu-smooth-scroll">About</a></li>
                <li><a href="#service" data-target="#service" class="menu-smooth-scroll">Service</a></li>
                <li><a href="#work" data-target="#work" class="menu-smooth-scroll">Work</a></li>
                <li><a href="#team" data-target="#team" class="menu-smooth-scroll">Team</a></li>
                <li><a href="#blog" data-target="#blog" class="menu-smooth-scroll">Blog</a></li>
                <li><a href="#contact" data-target="#contact" class="menu-smooth-scroll">contact</a></li>
                <li><a href="{{route('quote')}}"  >Request For Quote</a></li>

             </ul>
             
        </nav>
        <!-- end mobile nav -->

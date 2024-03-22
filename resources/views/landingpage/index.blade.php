@include('landingpage.components.header')
    <!-- main container start -->
    <!-- sidebar -->
    <div class="main-container">
        <nav class="sticky-nav">
            <div class="nav-toggler" onclick="toggleMenu()">
                <span></span>
            </div>
        </nav>

        <!-- aside start -->
          
        <div class="aside">
            <div class="logo">
                <a href="#"><span>Z</span>apata</a>
            </div>
            

            <ul class="nav">
                <li><a href="#home"  class="active nav-link"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="#about" class="nav-link"><i class="fa fa-user"></i> About</a></li>
                <li><a href="#service" class="nav-link"><i class="fa fa-list"></i> Services</a></li>
                <li><a href="#work" class="nav-link"><i class="fa fa-briefcase"></i> Portfolio </a></li>
                <li><a href="#contact" class="nav-link"><i class="fa fa-comments"></i> Contacts</a></li>
            </ul>
        </div>
        <!-- aside end -->
        <!-- main content start -->
       
        <div class="main-content">
        
            <!-- home section -->
            @include('landingpage.section.home')
            <!-- about section -->
            @include('landingpage.section.about')
            <!-- services section -->
            @include('landingpage.section.service')
            <!-- portfolio section -->
            @include('landingpage.section.work')
            <!-- contact us -->
            @include('landingpage.section.contact')
               
        </div>
         <!-- main content end -->
    </div>
    
    <!-- main container end -->
    <!-- switcher start -->
    <div class="style-switcher">
        <div class="style-switcher-toggler s-icon">
        <i class="fas fa-cog fa-spin "></i>
        </div>
        <div class="day-night s-icon">
            <i class="fas "></i>
        </div>
        <h4>Theme Colors</h4>
        <div class="colors">
            <span class="color-1" onclick="setActiveStyle('color-1')"></span>
            <span class="color-2" onclick="setActiveStyle('color-2')"></span>
            <span class="color-3" onclick="setActiveStyle('color-3')"></span>
            <span class="color-4" onclick="setActiveStyle('color-4')"></span>
            <span class="color-5" onclick="setActiveStyle('color-5')"></span>
        </div>
    </div>
    <!-- switcher end -->

    @include('landingpage.components.footer')
  
<!-- Navbar
    ================================================== -->
 <div class="navbar navbar-fixed-top">
   <div class="navbar-inner">
     <div class="container">
       <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </a>
       <a class="brand" href="../">Bootswatch</a>
       <div class="nav-collapse" id="main-menu">
        <ul class="nav" id="main-menu-left">
            <li><a id="swatch-link" href="/">Home</a></li>  
          <li><a onclick="pageTracker._link(this.href); return false;" href="http://news.bootswatch.com">News</a></li>
          <li><a id="swatch-link" href="/#gallery">Gallery</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Preview <b class="caret"></b></a>
            <ul class="dropdown-menu" id="swatch-menu">
              <li><a href="../default">Default</a></li>
              <li class="divider"></li>
              <li><a href="../amelia">Amelia</a></li>
              <li><a href="../cerulean">Cerulean</a></li>
              <li><a href="../cosmo">Cosmo</a></li>
              <li><a href="../cyborg">Cyborg</a></li>
              <li><a href="../journal">Journal</a></li>
              <li><a href="../readable">Readable</a></li>
              <li><a href="../simplex">Simplex</a></li>
              <li><a href="../slate">Slate</a></li>
              <li><a href="../spacelab">Spacelab</a></li>
              <li><a href="../spruce">Spruce</a></li>
              <li><a href="../superhero">Superhero</a></li>
              <li><a href="../united">United</a></li>
            </ul>
          </li>
          <li class="dropdown" id="preview-menu">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Download <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a target="_blank" href="bootstrap.min.css">bootstrap.min.css</a></li>
              <li><a target="_blank" href="bootstrap.css">bootstrap.css</a></li>
              <li class="divider"></li>
              <li><a target="_blank" href="variables.less">variables.less</a></li>
              <li><a target="_blank" href="bootswatch.less">bootswatch.less</a></li>
            </ul>
          </li>
        </ul>
            <ul class="nav pull-right" id="main-menu-right">
        <?php if (!Auth::instance()->logged_in()):?>
                <li><a rel="tooltip" target="_self" href="<?php echo Route::get('auth')->uri(array('action'=>'register'))?>" >Sign Up<i class="icon-share-alt"></i></a></li>
                <li><a rel="tooltip" target="_self" href="<?php echo Route::get('auth')->uri(array('action'=>'login'))?>" >Sign In<i class="icon-share-alt"></i></a></li>
        <?php else:?>
            <li  class="dropdown" id="preview-menu">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Welcome, <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a target="_self" href="<?php echo Route::get('user')->uri(array('controller'=>'account'))?>"><i class="icon-cog"></i>account</a></li>
                  
                  <li class="divider"></li>
                  <li><a target="_self" href="<?php echo Route::get('auth')->uri(array('action'=>'logout'))?>"><i class="icon-share-alt"></i>logout</a></li>
                </ul>
            </li>
        <?php endif;?>
            </ul>
            
       </div>
     </div>
   </div>
 </div>
<!-- Navbar
    ================================================== -->

<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container" style="width: auto;">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="#">Admin pages</a>
        <div class="nav-collapse">
          <ul class="nav">
            <li class="active"><a href="/">Home</a></li>
            <li><a href="#">Galery</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-search pull-left" action="">
            <input type="text" class="search-query span2" placeholder="Search">
          </form>
         <ul class="nav pull-right" id="main-menu-right">
            <?php if (!Auth::instance()->logged_in()):?>
                <li><a rel="tooltip" data-toggle="modal" href="#loginModal" >Enter site<i class="icon-share-alt"></i></a></li>
           <?php else:?>
                <li  class="dropdown" >
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Welcome, <?php echo $username?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a target="_self" href="<?php echo Route::get('user')->uri(array('controller'=>'account'))?>"><i class="icon-cog"></i>account</a></li>
                      <li class="divider"></li>
                      <li><a target="_self" href="<?php echo Route::get('auth')->uri(array('action'=>'logout'))?>"><i class="icon-share-alt"></i>logout</a></li>
                    </ul>
                </li>
            <?php endif;?>
        </ul>  
        </div><!-- /.nav-collapse -->
      </div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->
 
<div class="modal hide" id="loginModal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">✕</button>
        <h3>Enter to Web-site</h3>
    </div>
        <div class="modal-body" style="text-align:center;">
        <div class="row-fluid">
            <div class="span10 offset1">
                <div id="modalTab">
                    <div class="tab-content">
                        <div class="tab-pane active" id="login">
                            <form method="post" action='' name="login_form">
                                <div id="error-on-modal" class="hide">
                                    <div class="alert alert-error">
                                        <a class="close">x</a>
                                        <strong>Error: </strong><span></span>
                                    </div>
                                </div>
                                <p><a href="#register" data-toggle="tab">First on the web-site?</a></p>
                                <p><input type="text" class="span10" name="email" id="email" placeholder="Email"></p>
                                <p><input type="password" class="span10" name="password" placeholder="Password"></p>
                                <p><button type="submit" class="btn btn-primary">Sign in</button>
                                <a href="#forgotpassword" data-toggle="tab">Forgot Password?</a>
                                </p>
                                
                            </form>
                        </div>
                        <div class="tab-pane fade" id="forgotpassword">
                            <form method="post" action='' name="forgot_password">
                                <p>Hey this stuff happens, send us your email and we'll reset it for you!</p>
                                <input type="text" class="span10" name="eid" id="email" placeholder="Email">
                                <p><button type="submit" class="btn btn-primary">Submit</button>
                                <a href="#login" data-toggle="tab">Wait, I remember it now!</a>
                                </p>
                                
                            </form>
                        </div>
                          <div class="tab-pane fade" id="register">
                            <form method="post" action='' name="register">
                                <div id="error-on-modal" class="hide">
                                    <div class="alert alert-error">
                                        <a class="close">x</a>
                                        <strong>Error: </strong><span></span>
                                    </div>
                                </div>
                                <p><input type="text" class="span10" name="username" id="email" placeholder="Username"></p>
                                <p><input type="text" class="span10" name="email" id="email" placeholder="Email"></p>
                                <p><input type="password" class="span10" name="password" placeholder="Password"></p>
                                <p><input type="password" class="span10" name="password_confirm" placeholder="Password Confirm"></p>
                                <p><button type="submit" class="btn btn-primary">Submit</button>
                                </p>
                                <p><a href="#login" data-toggle="tab">Back to Sign In</a></p>
                            </form>
                              
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
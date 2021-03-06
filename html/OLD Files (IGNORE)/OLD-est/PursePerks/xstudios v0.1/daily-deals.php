<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PursePerks.com</title>
        <meta name="description" content="">
        <meta name="viewport" content="user-scalable=0, initial-scale=0.5, width=device-width">
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/web.css">
        <link rel="stylesheet" href="css/customSelect.css">
    </head>
    <body>
    <nav class="navbar navbar-default" role="navigation">
      <div class="container container-fluid">
            <div id="welcome-back" class="pull-left">
                Welcome! <a href="#">Sign Up</a> <span>/</span> <a href="#">Sign In</a>
            </div>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#" class="icon star hidden-xs"></a><a href="#" class="secondary hidden-sm hidden-md hidden-lg">Daily Deals</a></li>
                <li><a href="#" class="icon dollar hidden-xs"></a><a href="#" class="secondary hidden-sm hidden-md hidden-lg">Stores</a></li>
                <li><a href="#" class="icon coupons hidden-xs"></a><a href="#" class="secondary hidden-sm hidden-md hidden-lg">Coupons</a></li>
                <li><a href="#" class="icon download hidden-xs"></a><a href="#" class="secondary hidden-sm hidden-md hidden-lg">Favorites</a></li>
                <li><a href="#" class="icon account hidden-xs"></a><a href="#" class="secondary hidden-sm hidden-md hidden-lg">Lists</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
        </div>
      </div><!-- /.container-fluid -->
    </nav>
    <header>
        <div class="container">
            <div id="logo">
                <a href="#"></a>
            </div>
            <form method="POST" action="?" class="pull-left col-xs-8 col-sm-5 col-md-6 col-lg-7" role="form"> 
                <input type="text" name="search" placeholder="Search 100's of Stores & Deals..." class="pull-left col-xs-5 col-sm-4 col-md-6 col-lg-7"/>
                <div id="search-icon" class="pull-left"></div>
                <select id="search-options" class="pull-left">
                    <option>All Categories</option>
                </select>
                <div class="clearfix"></div>
                <ul class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                    <li><a href="#">Daily Deals</a></li>
                    <li><a href="#">Stores</a></li>
                    <li><a href="#">Coupons</a></li>
                    <li><a href="#">Why Join</a></li>
                </ul>
            </form>
            <div id="join" class="pull-left col-xs-3 col-sm-2 col-md-2 col-lg-2">
                <button class="button blue col-xs-12 col-sm-12 col-md-12 col-lg-12" type="button">JOIN NOW</button>
                <p class="hidden-xs hidden-sm">Earn up to 8% cash back!</p>
            </div>
        </div>
    </header>
    <div id="inner">
        <div class="container">
            <h3>Popular Stores</h3>
            <ul id="popular-stores">
                <li>
                    <div class="valign"></div>
                    <div class="logo">
                        <img src="/img/temp-logo.png" class="img-responsive"/>
                    </div>
                    <span>Up to 8.0%</span>
                </li>
                <li>
                    <div class="valign"></div>
                    <div class="logo">
                        <img src="/img/logo-macys.png" class="img-responsive"/>
                    </div>
                    <span>Up to 8.0%</span>
                </li>
                <li >
                    <div class="valign"></div>
                    <div class="logo">
                        <img src="/img/the-vault.jpg" class="img-responsive"/>
                    </div>
                    <span>Up to 8.0%</span>
                </li>
                <li class="hidden-xs hidden-md">
                    <div class="valign"></div>
                    <div class="logo">
                        <img src="/img/lane-bryant.jpg" class="img-responsive"/>
                    </div>
                    <span>Up to 8.0%</span>
                </li>
                <li class="hidden-xs hidden-sm hidden-md">
                    <div class="valign"></div>
                    <div class="logo">
                        <img src="/img/blue-fly.jpg" class="img-responsive"/>
                    </div>
                    <span>Up to 8.0%</span>
                </li>
                <li id="download-app" class="hidden-xs hidden-sm">
                    <a href="#">
                        <div class="pull-left">
                            <img src="/img/icon-download.png" alt="" />
                        </div>
                        <div class="pull-right">
                            <span>Download Our App</span>
                            <p>It's Easy. It's Fast! Start<br/> earning today.</p>
                        </div>
                    </a>
                </li>
            </ul>
            <div id="cat-drop" class="hidden-md hidden-lg">
                <select>
                    <option value="">Popular Categories</option>
                    <option value="URL HERE">Baby & Kids</option>
                    <option value="URL HERE">Books & Magazines</option>
                    <option value="URL HERE">Cameras</option>
                    <option value="URL HERE">Cell Phones</option>
                    <option value="URL HERE">Clothing</option>
                    <option value="URL HERE">Computers</option>
                    <option value="URL HERE">Electronics</option>
                    <option value="URL HERE">Flowers & Gifts</option>
                    <option value="URL HERE">Grocery</option>
                    <option value="URL HERE">Health & Beauty</option>
                    <option value="URL HERE">Home & Garden</option>
                    <option value="URL HERE">Jewelry</option>
                    <option value="URL HERE">Laptops</option>
                    <option value="URL HERE">Music & Movies</option>
                    <option value="URL HERE">Office & School Supplies</option>
                </select>
            </div>
            <div id="categories" class="pull-left hidden-xs hidden-sm" >
                <div class="heading">Popular Categories</div>
                <ul>
                    <li><a href="#" title="">Baby & Kids</a></li>
                    <li><a href="#" title="">Books & Magazines</a></li>
                    <li><a href="#" title="">Cameras</a></li>
                    <li><a href="#" title="">Cell Phones</a></li>
                    <li><a href="#" title="">Clothing</a></li>
                    <li><a href="#" title="">Computers</a></li>
                    <li><a href="#" title="">Electronics</a></li>
                    <li><a href="#" title="">Flowers & Gifts</a></li>
                    <li><a href="#" title="">Grocery</a></li>
                    <li><a href="#" title="">Health & Beauty</a></li>
                    <li><a href="#" title="">Home & Garden</a></li>
                    <li><a href="#" title="">Jewelry</a></li>
                    <li><a href="#" title="">Laptops</a></li>
                    <li><a href="#" title="">Music & Movies</a></li>
                    <li><a href="#" title="">Office & School Supplies</a></li>
                    <li class="see-more"><a href="#" title="See More">See more <img src="/img/icon-plus.png" alt="" /></a></li>
                </ul>
                <div id="testimonials">
                    <h3>Testimonials</h3>
                    <div id="slides">
                        <div class="slides">
                            <p>I love this site, it’s so fun and my husband finally doesn’t complain about my shopping. I give my savings to buy his toys!</p>
                            <span>– Kaneesha W.</span>
                        </div>
                        <div class="slides">
                            <p>Filet mignon meatball ribeye, bresaola cow porchetta landjaeger strip steak ground round tri-tip pork chop capicola.</p>
                            <span>– Kaneesha W.</span>
                        </div>
                        <div class="slides">
                            <p>Short loin pork swine turducken beef ribs shankle pig, meatball ball tip porchetta</p>
                            <span>– Kaneesha W.</span>
                        </div>
                        <div class="slides">
                            <p>Meatloaf short loin landjaeger, biltong jowl salami tail prosciutto pastrami</p>
                            <span>– Kaneesha W.</span>
                        </div>
                        <div class="slides">
                            <p>Landjaeger swine corned beef ground round, strip steak jerky shoulder cow meatloaf boudin.</p>
                            <span>– Kaneesha W.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="shop" class="pull-left">
                <div class="heading">
                    <span>Shop by:</span>
                    <a href="#" title="Deals" class="current">Deals</a>
                    <a href="#" title="Stores">Stores</a>
                    <a href="#" title="Coupons">Coupons</a>
                </div>
                <div class="items">
                    <div class="item">
                        <div class="logo">
                            <img src="/img/logo-readers-digest.png" class="img-responsive" />
                        </div>
                        <div class="image">
                            <img src="/img/temp-image.png" class="img-responsive" />
                        </div>
                        <p>Save 65% off target clearance!!!!<br/> No coupons ...<a href="#" title="Cick to see more">more</a></p>
                        <a class="button" href="#" title="Shop Now">Shop Now</a>
                        <span>Up to 8.0%</span>
                    </div>
                    <div class="item">
                        <div class="logo">
                            <img src="/img/logo-readers-digest.png" class="img-responsive" />
                        </div>
                        <div class="image">
                            <img src="/img/temp-image.png" class="img-responsive" />
                        </div>
                        <p>Save 65% off target clearance!!!!<br/> No coupons ...<a href="#" title="Cick to see more">more</a></p>
                        <a class="button" href="#" title="Shop Now">Shop Now</a>
                        <span>Up to 8.0%</span>
                    </div>
                    <div class="item">
                        <div class="logo">
                            <img src="/img/logo-readers-digest.png" class="img-responsive" />
                        </div>
                        <div class="image">
                            <img src="/img/temp-image.png" class="img-responsive" />
                        </div>
                        <p>Save 65% off target clearance!!!!<br/> No coupons ...<a href="#" title="Cick to see more">more</a></p>
                        <a class="button" href="#" title="Shop Now">Shop Now</a>
                        <span>Up to 8.0%</span>
                    </div>
                    <div class="item">
                        <div class="logo">
                            <img src="/img/logo-readers-digest.png" class="img-responsive" />
                        </div>
                        <div class="image">
                            <img src="/img/temp-image.png" class="img-responsive" />
                        </div>
                        <p>Save 65% off target clearance!!!!<br/> No coupons ...<a href="#" title="Cick to see more">more</a></p>
                        <a class="button" href="#" title="Shop Now">Shop Now</a>
                        <span>Up to 8.0%</span>
                    </div>
                    <div class="item">
                        <div class="logo">
                            <img src="/img/logo-readers-digest.png" class="img-responsive" />
                        </div>
                        <div class="image">
                            <img src="/img/temp-image.png" class="img-responsive" />
                        </div>
                        <p>Save 65% off target clearance!!!!<br/> No coupons ...<a href="#" title="Cick to see more">more</a></p>
                        <a class="button" href="#" title="Shop Now">Shop Now</a>
                        <span>Up to 8.0%</span>
                    </div>
                    <div class="item">
                        <div class="logo">
                            <img src="/img/logo-readers-digest.png" class="img-responsive" />
                        </div>
                        <div class="image">
                            <img src="/img/temp-image.png" class="img-responsive" />
                        </div>
                        <p>Save 65% off target clearance!!!!<br/> No coupons ...<a href="#" title="Cick to see more">more</a></p>
                        <a class="button" href="#" title="Shop Now">Shop Now</a>
                        <span>Up to 8.0%</span>
                    </div>
                    <div class="item">
                        <div class="logo">
                            <img src="/img/logo-readers-digest.png" class="img-responsive" />
                        </div>
                        <div class="image">
                            <img src="/img/temp-image.png" class="img-responsive" />
                        </div>
                        <p>Save 65% off target clearance!!!!<br/> No coupons ...<a href="#" title="Cick to see more">more</a></p>
                        <a class="button" href="#" title="Shop Now">Shop Now</a>
                        <span>Up to 8.0%</span>
                    </div>
                    <div class="item">
                        <div class="logo">
                            <img src="/img/logo-readers-digest.png" class="img-responsive" />
                        </div>
                        <div class="image">
                            <img src="/img/temp-image.png" class="img-responsive" />
                        </div>
                        <p>Save 65% off target clearance!!!!<br/> No coupons ...<a href="#" title="Cick to see more">more</a></p>
                        <a class="button" href="#" title="Shop Now">Shop Now</a>
                        <span>Up to 8.0%</span>
                    </div>
                    <div class="item">
                        <div class="logo">
                            <img src="/img/logo-readers-digest.png" class="img-responsive" />
                        </div>
                        <div class="image">
                            <img src="/img/temp-image.png" class="img-responsive" />
                        </div>
                        <p>Save 65% off target clearance!!!!<br/> No coupons ...<a href="#" title="Cick to see more">more</a></p>
                        <a class="button" href="#" title="Shop Now">Shop Now</a>
                        <span>Up to 8.0%</span>
                    </div>
                    <div class="item">
                        <div class="logo">
                            <img src="/img/logo-readers-digest.png" class="img-responsive" />
                        </div>
                        <div class="image">
                            <img src="/img/temp-image.png" class="img-responsive" />
                        </div>
                        <p>Save 65% off target clearance!!!!<br/> No coupons ...<a href="#" title="Cick to see more">more</a></p>
                        <a class="button" href="#" title="Shop Now">Shop Now</a>
                        <span>Up to 8.0%</span>
                    </div>
                    <div class="item">
                        <div class="logo">
                            <img src="/img/logo-readers-digest.png" class="img-responsive" />
                        </div>
                        <div class="image">
                            <img src="/img/temp-image.png" class="img-responsive" />
                        </div>
                        <p>Save 65% off target clearance!!!!<br/> No coupons ...<a href="#" title="Cick to see more">more</a></p>
                        <a class="button" href="#" title="Shop Now">Shop Now</a>
                        <span>Up to 8.0%</span>
                    </div>
                    <div class="item">
                        <div class="logo">
                            <img src="/img/logo-readers-digest.png" class="img-responsive" />
                        </div>
                        <div class="image">
                            <img src="/img/temp-image.png" class="img-responsive" />
                        </div>
                        <p>Save 65% off target clearance!!!!<br/> No coupons ...<a href="#" title="Cick to see more">more</a></p>
                        <a class="button" href="#" title="Shop Now">Shop Now</a>
                        <span>Up to 8.0%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="subscribe">
        <div class="container">
            <div class="col-md-1 col-lg-1"></div>
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-6">
                    <p><em>Subscribe</em> <br/> to get offers right to your inbox!</p>
                </div>
                <div id="email" class="col-xs-12 col-sm-12 col-md-4 col-lg-6">
                    <form>
                        <input type="email" placeholder="Enter Your Email" />
                    </form>
                </div>
            </div>
            <div id="social" class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <img src="/img/temp-facebooktwitter.png" />
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <ul class="col-xs-12 col-sm-12 col-lg-9">
                <li><a href="#">FAQ's</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Advertising Partnerships</a></li>
                <li><a href="#">Customer Care</a></li> 
                <li><a href="#">Terms of Use</a></li>   
                <li><a href="#">Privacy Policy</a></li>  
                <li><a href="#">Unsubsribe</a></li>
            </ul>
            <p class="col-xs-12 col-sm-12 col-lg-3">Copyright © 2014 All Rights Reserved.</p>
        </div>
    </footer>

    <script src="/js/jquery-2.1.0.min.js"></script>
    <script src="/js/plugins/jquery.customSelect.min.js"></script>
    <script src="/js/plugins/jquery.cycle.all.js"></script>
    <script src="/js/bootstrap/bootstrap.min.js"></script>
    <script src="/js/purseperks/global.js"></script>
    <script src="/js/purseperks/inner.js"></script>
    <script>
        
    </script>
</body>
</html>
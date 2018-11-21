<!DOCTYPE html>

<html lang="en">

<head>

  <title>Welcome | Disenado Software Consulting - </title>

  <meta charset="utf-8">

  <meta name = "format-detection" content = "telephone=no" />

  <link rel="icon" href="{{asset('webdesign/images/favicon.jpg')}}" type="image/x-icon">

  <link rel="stylesheet" href="{{asset('webdesign/css/grid.css')}}">

  <link rel="stylesheet" href="{{asset('webdesign/css/style.css')}}">

  <script src="{{asset('webdesign/js/jquery.js')}}"></script>

  <script src="{{asset('webdesign/js/jquery-migrate-1.2.1.js')}}"></script>



  <!--[if lt IE 9]>

  <div id="ie6-alert" style="width: 100%; text-align:center;">

    <img src="http://beatie6.frontcube.com/images/ie6.jpg" alt="Upgrade IE 6" width="640" height="344" border="0" usemap="#Map" longdesc="http://die6.frontcube.com" />

      <map name="Map" id="Map"><area shape="rect" coords="496,201,604,329" href="http://www.microsoft.com/windows/internet-explorer/default.aspx" target="_blank" alt="Download Interent Explorer" /><area shape="rect" coords="380,201,488,329" href="http://www.apple.com/safari/download/" target="_blank" alt="Download Apple Safari" /><area shape="rect" coords="268,202,376,330" href="http://www.opera.com/download/" target="_blank" alt="Download Opera" /><area shape="rect" coords="155,202,263,330" href="http://www.mozilla.com/" target="_blank" alt="Download Firefox" />

        <area shape="rect" coords="35,201,143,329" href="http://www.google.com/chrome" target="_blank" alt="Download Google Chrome" />

      </map>

  </div>

  <![endif]-->

  <!--[if lt IE 9]>

  	<script src="js/html5shiv.js"></script>

  <![endif]-->

</head>



<body class="home">

  <div class="content-load-spinner"></div>



  <!--========================================================

                            HEADER 

  =========================================================-->

  



    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">

      <span class="icon-bar"></span>

      <span class="icon-bar"></span>

      <span class="icon-bar"></span>

    </button>

  



  <div class="aside-panel">

    <span class="fa fa-times-circle-o remove-panel"></span>

    <ul class="menu">

      <li><a href="#home">Home</a></li>

      <li><a href="#about">about us</a></li>

      <li><a href="#team">clients</a></li>

      <li><a href="#folio">works</a></li>

      <li><a href="#services">services</a></li>

      <li><a href="#news">news</a></li>

      <li><a href="#contacts">contact us</a></li>

    </ul>

  </div>



  <div class="menu-switcher-panel">

    <ul class="aside-menu">

      <li><a href="#home"></a></li>

      <li><a href="#about"></a></li>

      <li><a href="#team"></a></li>

      <li><a href="#folio"></a></li>

      <li><a href="#services"></a></li>

      <li><a href="#news"></a></li>

      <li><a href="#contacts"></a></li>

    </ul>

  </div>







  <!--========================================================

                            CONTENT 

  =========================================================-->

  <section id="content">    



    <section id="home" class="hashAncor">

      <div class="video-overlay"></div>

      <div class="container">

        <div class="row">

          <div class="grid_12">

            <div class="logo"><img src="{{asset('webdesign/images/logo.jpg')}}" alt="" width="120" height="120"></div>

            <div class="slogan wow fadeInUp">

              <h2>Software Consulting</h2>

              <span><strong>PROMO!!</strong> Get an elegant responsive website for your brand, business, event or personals today for <s>&#8358;100,000</s> <strong>&#8358;30,000</strong>.. Over 70% OFF!!<br> <span style="color:red;font-style:oblique;">Offer lasts until December 31st 2018</span></span>
                          
            </div>
            
            <a href="#contacts" class="btn-default wow fadeIn" style="position:relative;z-index:99999 !important;">contact us</a>
          </div>

        </div>

      </div>

    </section>



    <section id="about" class="hashAncor">

      <div class="container">

        <div class="row">

          <div class="grid_12">

            <h2 class="heading__color wow fadeInUp">about us</h2>

            <h3 class=" wow fadeInLeft">Creating really user-friendly</h3>

            <h4 class=" wow fadeInRight">websites that work for your benefit</h4>

            <div class="about-indent wow fadeInDown">

              <em>Disenado Software Consulting</em> is the software branch of <a href="http://www.disenado.com.ng">Disenado Nigeria Stores</a>. We are a 10+ years old software service provider with a portfolio of over 100+ projects. <br><br>
              We offer a wide range of web, desktop and mobile solutions for your brands, businesses and/or events. We have been developing numerous solutions for our many clients and would like to offer our services in developing a robust user-friendly website for your business or personal needs! 
            </div>

            <a href="#team" class="btn-default wow fadeIn">Our clients</a>

          </div>

        </div>

      </div>

    </section>



    <section id="team" class="hashAncor">

      <div class="container">

        <div class="row">

          <div class="grid_12">

            <h2 class="heading__color wow fadeInUp">Our Clients</h2>            

          </div>

        </div>

      </div>

      <div class="team-list owl">

<?php
foreach($clients as $c){
	$image = "images/".$c["image"];
	$link = "http://".$c["link"];
	$name = "http://".$c["name"];
?>
        <div class="thumbnail wow fadeInDown item" data-wow-delay="0.6s">

          <img src="<?=$image?>" alt="" >

          <div class="thumb-text">

            <a href="<?=$link?>" target="_blank" class="team-link"><?=$name?></a>

            <span class="member-text"></span> 

          </div>

          <div class="member-description">

            <ul class="social-contact">

              <li><a href="#" class="fa fa-facebook"></a></li>

              <li><a href="#" class="fa fa-twitter"></a></li>

              <li><a href="#" class="fa fa-google-plus"></a></li>

            </ul>

            <div class="clearfix"></div>

          </div>

        </div>
<?php
}
?>




      </div>

    </section>



    <section id="testimonials"> 

      <div class="container">

        <div class="testimonials-indent">

          <div class="row">

            <div class="grid_12">

              <div class="blockquote-img wow fadeInDown">

                <img src="{{asset('webdesign/images/blockquote-img.png')}}" alt="">

              </div>

              <div id="owl" class="owl-carousel wow fadeInLeft">                

                <div class="blockquote item grid_6">

                  <img src="{{asset('webdesign/images/test-3.jpg')}}" width="200" height="200" alt="" class="testimonial-img tits">

                  <blockquote>

                    I love my new website, very user friendly and with the latest tech. Thanks a lot guys

                    <span>Olamide </span>

                  </blockquote>

                </div>

                <div class="blockquote item grid_6">

                  <img src="{{asset('webdesign/images/test-4.jpg')}}" alt="" width="200" height="200" class="testimonial-img tits">

                  <blockquote>

                    Everyone loves my wedding site, thank you so much its so beautiful 

                    <span>Anna</span>

                  </blockquote>

                </div>

                <div class="blockquote item grid_6">

                  <img src="{{asset('webdesign/images/safebets.png')}}" alt="" width="200" height="200"  class="testimonial-img tits">

                  <blockquote>

                    Good work redesigning our web portal. We really appreciate you guys

                    <span>SafeBets NG</span>

                  </blockquote>

                </div>

                <div class="blockquote item grid_6">

                  <img src="{{asset('webdesign/images/test-2.jpg')}}" width="200" height="200" -alt="" class="testimonial-img tits">

                  <blockquote>

                    Their websites are very professional 

                    <span>Chima</span>

                  </blockquote>

                </div>

              </div>

              

            </div>

          </div>

        </div>

      </div>

    </section> 



    <section id="folio"  class="hashAncor"  data-stellar-background-ratio="-0.1">

      <div class="folio-indent">

        <div class="container">

          <div class="row">

            <div class="grid_12">

              <h2 class="wow fadeInDown">folio</h2>

              <ul class="isotope-list wow fadeInUp" id="filters" data-option-key="filter">

                <li><a href="#" class="active" data-filter="*">All</a></li>

                <li><a href="#" data-filter=".filter-video">Businesses</a></li>

                <li><a href="#" data-filter=".filter-branding">Brands</a></li>

                <li><a href="#" data-filter=".filter-logo">Events</a></li>

                <li><a href="#" data-filter=".filter-photo">Personal</a></li>

              </ul>

              <div class="folio-block">

                <div class="folio-thumb filter-video anim">

                  <img src="{{asset('webdesign/images/portfolio-1.jpg')}}" alt="" >

                  <div class="folio-description">

                    <a href="#" class="folio-link">Amet conse ctetur</a>

                    <span class="folio-text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incidi</span> 

                    <p><a href="{{asset('webdesign/images/portfolio-1.jpg')}}" class="fa fa-search-plus zoom"></a></p>

                  </div>

                </div>

                <div class="folio-thumb filter-photo anim">

                  <img src="{{asset('webdesign/images/portfolio-2.jpg')}}" alt="" >

                  <div class="folio-description">

                    <a href="#" class="folio-link">Amet conse ctetur</a>

                    <span class="folio-text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incidi</span> 

                    <p><a href="{{asset('webdesign/images/portfolio-2.jpg')}}" class="fa fa-search-plus zoom"></a></p>

                  </div>

                </div>

                <div class="folio-thumb filter-logo anim">

                  <img src="{{asset('webdesign/images/portfolio-3.jpg')}}" alt="" >

                  <div class="folio-description">

                    <a href="#" class="folio-link">Amet conse ctetur</a>

                    <span class="folio-text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incidi</span> 

                    <p><a href="{{asset('webdesign/images/portfolio-3.jpg')}}" class="fa fa-search-plus zoom"></a></p>

                  </div>

                </div>

                <div class="folio-thumb filter-branding anim">

                  <img src="{{asset('webdesign/images/portfolio-4.jpg')}}" alt="" >

                  <div class="folio-description">

                    <a href="#" class="folio-link">Amet conse ctetur</a>

                    <span class="folio-text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incidi</span> 

                    <p><a href="{{asset('webdesign/images/portfolio-4.jpg')}}" class="fa fa-search-plus zoom"></a></p>

                  </div>

                </div>

                <div class="folio-thumb filter-logo anim">

                  <img src="{{asset('webdesign/images/portfolio-5.jpg')}}" alt="" >

                  <div class="folio-description">

                    <a href="#" class="folio-link">Amet conse ctetur</a>

                    <span class="folio-text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incidi</span> 

                    <p><a href="{{asset('webdesign/images/portfolio-5.jpg')}}" class="fa fa-search-plus zoom"></a></p>

                  </div>

                </div>

                <div class="folio-thumb filter-photo anim">

                  <img src="{{asset('webdesign/images/portfolio-6.jpg')}}" alt="" >

                  <div class="folio-description">

                    <a href="#" class="folio-link">Amet conse ctetur</a>

                    <span class="folio-text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incidi</span> 

                    <p><a href="{{asset('webdesign/images/portfolio-6.jpg')}}" class="fa fa-search-plus zoom"></a></p>

                  </div>

                </div>

                <div class="folio-thumb filter-branding anim">

                  <img src="{{asset('webdesign/images/portfolio-7.jpg')}}" alt="" >

                  <div class="folio-description">

                    <a href="#" class="folio-link">Amet conse ctetur</a>

                    <span class="folio-text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incidi</span> 

                    <p><a href="{{asset('webdesign/images/portfolio-7.jpg')}}" class="fa fa-search-plus zoom"></a></p>

                  </div>

                </div>

                <div class="folio-thumb filter-video anim">

                  <img src="{{asset('webdesign/images/portfolio-8.jpg')}}" alt="" >

                  <div class="folio-description">

                    <a href="#" class="folio-link">Amet conse ctetur</a>

                    <span class="folio-text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incidi</span> 

                    <p><a href="{{asset('webdesign/images/portfolio-8.jpg')}}" class="fa fa-search-plus zoom"></a></p>

                  </div>

                </div>

                <div class="folio-thumb filter-photo anim">

                  <img src="{{asset('webdesign/images/portfolio-9.jpg')}}" alt="" >

                  <div class="folio-description">

                    <a href="#" class="folio-link">Amet conse ctetur</a>

                    <span class="folio-text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incidi</span> 

                    <p><a href="{{asset('webdesign/images/portfolio-9.jpg')}}" class="fa fa-search-plus zoom"></a></p>

                  </div>

                </div>                

              </div>

              <div class="center">

                <a href="#contacts" class="btn-primary wow zoomInUp">See more</a>

              </div>

            </div>

          </div>

        </div>

        



      </div>

    </section>



    <section id="services" class="hashAncor">

      <div class="services-indent">

        <div class="container">

          <div class="row">

            <div class="grid_12">

              <h2 class="heading__color wow zoomInUp">Services</h2>

              <div class="indent-1 wow zoomInDown">

                Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 

              </div>

              <div class="services-list">

                <a href="#" class="service-box service-1 wow zoomInLeft">

                  <div class="fa fa-clock-o service-icon"></div>

                  <div class="service-box-indent">

                    <div class="service-title">

                      Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod

                    </div>

                    <div class="service-description">

                      Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incidi

                    </div>

                  </div>

                </a>

                <a href="#" class="service-box service-2 wow zoomInUp">

                  <div class="fa fa-thumbs-o-up service-icon"></div>

                  <div class="service-box-indent">

                    <div class="service-title">

                      Excepteur sint occaecat cupidatat non proident, sunt in culpa

                    </div>

                    <div class="service-description">

                      Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incidi

                    </div>

                  </div>

                </a>

                <a href="#" class="service-box service-3 wow zoomInDown">

                  <div class="fa fa-weixin service-icon"></div>

                  <div class="service-box-indent">

                    <div class="service-title">

                      Voluptate velit esse cillum dolore eu fugiat nulla pariatur

                    </div>

                    <div class="service-description">

                      Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incidi

                    </div>

                  </div>

                </a>

                <a href="#" class="service-box service-4 wow zoomInUp">

                  <div class="fa fa-coffee service-icon"></div>

                  <div class="service-box-indent">

                    <div class="service-title">

                      proident, sunt in culpa qui officia deserunt mollit anim

                    </div>

                    <div class="service-description">

                      Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incidi

                    </div>

                  </div>

                </a>

                <a href="#" class="service-box service-5 wow zoomInRight">

                  <div class="fa fa-paper-plane service-icon"></div>

                  <div class="service-box-indent">

                    <div class="service-title">

                      ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod

                    </div>

                    <div class="service-description">

                      Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incidi

                    </div>

                  </div>

                </a>

                <a href="#" class="service-box service-6 wow zoomInLeft">

                  <div class="fa fa-laptop service-icon"></div>

                  <div class="service-box-indent">

                    <div class="service-title">

                      reprehenderit in voluptat velit esse cillum dolore eu fugiat nulla pariatur

                    </div>

                    <div class="service-description">

                      Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incidi

                    </div>

                  </div>

                </a>

              </div>

            </div>

          </div>

        </div>

      </div>

    </section>



    <section id="news" data-stellar-background-ratio="-0.1" class="hashAncor">

      <div class="news-indent">

        <div class="container">

          <div class="row">

            <div class="grid_12">

              <h2 class=" wow zoomInDown">News</h2>

              <div class="news-box">

                <time datetime="2015-05-20 19:00" class="wow fadeInLeft"><span>20th</span> February 2015</time>

                <div class="news-content wow fadeInRight">

                  <h5><a href="#" class="news-title">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod</a></h5>

                  Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.&nbsp; &nbsp;<a href="#" class="news-link fa fa-angle-double-right"></a>

                  <ul class="news-links-list">

                    <li><span class="fa fa-user"></span><a href="#">Admin</a></li>

                    <li><span class="fa fa-clock-o"></span><a href="#">25/04</a></li>

                    <li><span class="fa fa-comment-o"></span><a href="#">125</a></li>

                  </ul>

                </div>

                <div class="clearfix"></div>

              </div>

              <div class="news-box box-w-image">

                <time datetime="2015-05-20 19:00" class="wow fadeInLeft"><span>20th</span> February 2015</time>

                <div class="news-content hovered_content wow fadeInRight">

                  <img src="images/news-img.jpg" alt="" class="news-image">

                  <div class="news-content-indent">

                    <h5><a href="#" class="news-title">amet conse ctetur adipisicing elit, sed do eiusmod</a></h5>

                    Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&nbsp; &nbsp;<a href="#" class="news-link fa fa-angle-double-right"></a>

                    <ul class="news-links-list">

                      <li><span class="fa fa-user"></span><a href="#">Admin</a></li>

                      <li><span class="fa fa-clock-o"></span><a href="#">25/04</a></li>

                      <li><span class="fa fa-comment-o"></span><a href="#">125</a></li>

                    </ul>

                  </div>

                  <div class="clearfix"></div>

                </div>

                <div class="clearfix"></div>

              </div>

              <div class="news-box">

                <time datetime="2015-05-20 19:00" class="wow fadeInLeft"><span>20th</span> February 2015</time>

                <div class="news-content wow fadeInRight">

                  <h5><a href="#" class="news-title">reprehenderit in voluptate velit esse cillum dolore eu fugiat</a></h5>

                  Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.&nbsp; &nbsp;<a href="#" class="news-link fa fa-angle-double-right"></a>

                  <ul class="news-links-list">

                    <li><span class="fa fa-user"></span><a href="#">Admin</a></li>

                    <li><span class="fa fa-clock-o"></span><a href="#">25/04</a></li>

                    <li><span class="fa fa-comment-o"></span><a href="#">125</a></li>

                  </ul>

                </div>

                <div class="clearfix"></div>

              </div>

              <div class="align">

                <a href="#" class="btn-primary  wow zoomInLeft">See all</a>

              </div>

            </div>

          </div>

        </div>

      </div>

    </section>



    <section id="contacts" data-stellar-background-ratio="-0.1" class="hashAncor"> 

      <div class="container">

        <div class="contacts-indent">

          <div class="row">

            <div class="grid_12">

              <h2 class="align wow zoomInUp">Contacts</h2>

              <div id="owl-contact" class="owl-carousel">                

                <div class="address item">

                  <div class="address-title">

                    Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod

                  </div>

                  <address>Address:  4578 Marmora Road, Glasgow D04 89GR</address>

                  <ul class="contact-phone">

                    <li>

                      <span class="fa fa-phone"></span>800 2345-6789

                    </li>

                    <li>

                      <span class="fa fa-fax"></span>800 2345-6789

                    </li>

                  </ul>



                  <ul class="social-contact">

                    <li><a href="#" class="fa fa-facebook"></a></li>

                    <li><a href="#" class="fa fa-twitter"></a></li>

                    <li><a href="#" class="fa fa-google-plus"></a></li>

                  </ul>



                </div>

                <div class=" item">

                  <form id="contact-form">

                    <div class="contact-form-loader"></div>

                    <fieldset>

                      <label class="name">

                        <input type="text" name="name" placeholder="Name:" value="" data-constraints="@Required @JustLetters"  />

                        <span class="empty-message">This field is required.</span>

                        <span class="error-message">This is not a valid name.</span>

                      </label>

                      <label class="email">

                        <input type="text" name="email" placeholder="E-mail:" value="" data-constraints="@Required @Email" />

                        <span class="empty-message">This field is required.</span>

                        <span class="error-message">This is not a valid email.</span>

                      </label>

                      <label class="phone last">

                        <input type="text" name="phone" placeholder="Phone:" value="" data-constraints="@Required @JustNumbers" />

                        <span class="empty-message">This field is required.</span>

                        <span class="error-message">This is not a valid phone.</span>

                      </label>

                      <label class="message">

                        <textarea name="message" placeholder="Message:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>

                        <span class="empty-message">This field is required.</span>

                        <span class="error-message">The message is too short.</span>

                      </label>

                      <div class="buttons">

                        <a href="#" data-type="reset" class="btn-default" >clear</a> 

                        <a href="#" data-type="submit" class="btn-default">send</a>

                      </div>

                    </fieldset> 

                    <div class="modal fade response-message">

                      <div class="modal-dialog">

                        <div class="modal-content">

                          <div class="modal-header">

                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                            <h4 class="modal-title">Modal title</h4>

                          </div>

                          <div class="modal-body">

                            You message has been sent! We will be in touch soon.

                          </div>      

                        </div>

                      </div>

                    </div>

                  </form>



                </div>

              </div>              

            </div>

          </div>

        </div>

      </div>

    </section>     



  </section>







  <!--========================================================

                            FOOTER 

  =========================================================-->

  <footer id="footer">

    <div class="container">

      <div class="row">

        <div class="grid_12">

          Sun &copy;<span id="copyright-year"></span>&nbsp; &nbsp;|&nbsp; &nbsp;<a href="privacy.html">Privacy Policy</a>

       

        </div>

      </div>

    </div>

  </footer>



<script src="{{asset('webdesign/js/script.js')}}"></script>

<script type="text/javascript">

/*

  var _gaq = _gaq || [];

  _gaq.push(['_setAccount', 'UA-7078796-5']);

  _gaq.push(['_trackPageview']);



  (function() {

    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;

    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);

  })();

*/

</script>

</body>
</html>

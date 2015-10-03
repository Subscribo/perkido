!!!
%html{:lang => "#{$locale_lang}"}
  %head
    %meta{:charset => "utf-8"}
    %meta{:content => "IE=edge", "http-equiv" => "X-UA-Compatible"}
    %meta{:content => "width=device-width, initial-scale=1", :name => "viewport"}

    %title @yield('title', 'Perkido')

    -# Import Theme & Components
    %link{:href => "css/theme.css", :rel => "stylesheet"}
    %link{:href => "css/components.css", :rel => "stylesheet"}

    -# Load the fonts
    %link{:href => "fonts/outlined-icon-set/outlined.css", :rel => "stylesheet"}
    %link{:href => "http://fonts.googleapis.com/css?family=Montserrat", :rel => "stylesheet", :type => "text/css"}
    %link{:href => "http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,700,300,600,400", :rel => "stylesheet", :type => "text/css"}

    -# FontAwesome
    %link{:href => "//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css", :rel => "stylesheet"}

    -# Flickity
    %link{:href => "https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.2/flickity.min.css", :rel => "stylesheet"}

    -# Google Analytics
    :javascript
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      =s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-52649085-3', 'auto');
      ga('send', 'pageview');

    -# HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
    -# WARNING: Respond.js does not work if you view the page via file://
    /[if lt IE 9]
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

  %body

    @yield('content')

    -# jQuery (necessary for Bootstrap's JavaScript plugins)
    %script{:src => "https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"}

    -# Latest compiled and minified JavaScript
    %script{:src => "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"}

    -# Load main js
    %script{:src => "js/main.min.js"}

    -# Load custom shuffle for Perks filter
    %script{:src => "js/portfolio-shuffle.min.js"}

    -# Flickity
    %script{:src => "https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.2/flickity.pkgd.min.js"}

    -# Load custom Flickity
    %script{:src => "js/flickity-settings.min.js"}

    -# Change transparent header on scroll
    :javascript
      //jQuery to collapse the navbar on scroll
      $(window).scroll(function() {
          if ($(".navbar-fixed-top-transparent").offset().top > 50) {
              $(".navbar-fixed-top").removeClass("-transparent-nav");
              $("#logo").attr('src','img/perkido-logo-purple.png');
          } else {
              $(".navbar-fixed-top").addClass("-transparent-nav");
              $("#logo").attr('src','img/perkido-logo-white.png');
          }
      });

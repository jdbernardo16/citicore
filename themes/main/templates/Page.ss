<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <% base_tag %>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><% if $MetaTitle %>$MetaTitle<% else %>$Title<% end_if %> | $SiteConfig.Title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <meta name="description" content="$MetaDescription">
        <% loop HeaderFooter %>
        <link rel="shortcut icon" href="$Favicon.Url" type="image/x-icon" />
        <% end_loop %>
        <% loop HeaderFooter %>
        <meta property="og:image" content="$HeaderLogo.Url">
        <% end_loop %>
        <meta property="og:title" content="$Title">
        <meta property="og:description" content="$MetaDescription">
        <meta property="og:url" content="{$AbsoluteBaseURL}">
        <meta property="og:site_name" content="$SiteConfig.Title">
        <meta property="og:type" content="website">

        <% loop HeaderFooter %>
        <meta name="keywords" content="$SEO">
        <meta name="description" content="$Description">
        <% end_loop %>

        <% if $ExtraMeta %>
            $ExtraMeta
        <% end_if %>

        <%-- Font --%>
        <link rel="stylesheet" href="$ThemeDir/fonts/flamaBasic/stylesheet.css">
        <link rel="stylesheet" href="$ThemeDir/fonts/flamaBasicItalic/stylesheet.css">
        <link rel="stylesheet" href="$ThemeDir/fonts/flamaBold/stylesheet.css">
        <link rel="stylesheet" href="$ThemeDir/fonts/flamaBoldItalic/stylesheet.css">
        <link rel="stylesheet" href="$ThemeDir/fonts/flamaLight/stylesheet.css">
        <link rel="stylesheet" href="$ThemeDir/fonts/flamaLightItalic/stylesheet.css">
        
        <!-- Ionicon -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css">
        <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Slick -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/jquery.slick/1.3.15/slick.css"/>

        <!-- Remodal -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/remodal/1.0.6/remodal.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/remodal/1.0.6/remodal-default-theme.min.css">

        <!-- Light Gallery -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.4/css/lightgallery.min.css">
        
        <!-- SweetAlert -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
        
        
        <!--[if lt IE 9]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>
    <body class="">
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <% if ClassName != 'Stylesheet' %>
        <% include Header %>
        <% end_if %>

        <div class="main">
            <% if ClassName == 'Page' %>
            <div class="frm-bckgrnds size-cover" style="background: #f9f9f9"></div>
            <% end_if %>

            $Layout

            <% if $Form %>
            <div class="page-loginCon">
                <div class="vertical-parent">
                    <div class="vertical-align">
                        <div class="login-frm__col">
                            <div class="login-frm__text">
                                <p>Login</p>
                            </div>
                            $Form
                        </div>
                    </div>
                </div>
            </div>
            <% end_if %>

            <% if ClassName == 'SilverStripe\ErrorPage\ErrorPage' %>
            <% if $Content %>
            <div class="page-errorCon align-c">
                <div class="vertical-parent">
                    <div class="vertical-align frm-desc">
                        $Content
                    </div>
                </div>
            </div>
            <% end_if %>
            <% end_if %>

        </div>

        <% if ClassName != 'Stylesheet' %>
        <% include Footer %>
        <% end_if %>

        <!-- !!! -->
        <script type="text/javascript">
            var pageID = '$ClassName',
            baseHref = '$BaseHref',
            themeDir = '$ThemeDir';
        </script>


        <!--Start of Tawk.to Script-->
        <%--  --%>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <%--  --%>

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

        <!-- Script -->
        <script type="text/javascript" src="$ThemeDir/assets/vendor.js"></script>
        <script type="text/javascript" src="$ThemeDir/assets/app.js"></script>
        <script type="text/javascript" src="$ThemeDir/assets/script.js"></script>

        <!-- Vue -->
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>

        <!-- Validate -->
        <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

        <!-- StickyFloat -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/stickyfloat/7.5.0/stickyfloat.js"></script>
        
        <!-- Slick -->
        <script src="//cdn.jsdelivr.net/jquery.slick/1.4.1/slick.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        
        <!-- Remodal -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/remodal/1.0.6/remodal.min.js"></script>
        
        <!-- SweetAlert -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

        <!-- Scrollify -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollify/1.0.5/jquery.scrollify.min.js"></script>    
        <!-- TweenMax -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenLite.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/plugins/ModifiersPlugin.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/plugins/ScrollToPlugin.min.js"></script>

        <!-- ScrollMagic -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>

        <!-- HoverIntent -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.hoverintent/1.8.1/jquery.hoverIntent.min.js"></script>
        
        <% if ClassName = 'ContactUs' %>
        <!-- Storelocator -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKese9Nxt27v9smmicyvJ037PwXfGbe3E"></script>
        <script type="text/javascript" src="$ThemeDir/js/vendor/chosen/chosen.jquery.min.js"></script>
        <script type="text/javascript" src="$ThemeDir/js/storelocator.js"></script>
        <% end_if %>
        
        <!-- Light Gallery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.4/js/lightgallery.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lg-video@1.2.2/dist/lg-video.min.js"></script>
  

        <!-- Script -->
        <script type="text/javascript" src="$ThemeDir/js/animation.js"></script>
        <script type="text/javascript" src="$ThemeDir/js/script.js"></script>
        


    </body>
</html>

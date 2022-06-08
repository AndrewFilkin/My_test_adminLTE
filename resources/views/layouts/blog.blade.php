<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Clean Blog Template</title>
    <meta name="keywords" content="clean blog template, html css layout"/>
    <meta name="description" content="Clean Blog Template is provided by templatemo.com"/>
    <link href="{{asset('css_blog/templatemo_style.css')}}" rel="stylesheet" type="text/css"/>

    <link href="{{asset('css_blog/s3slider.css')}}" rel="stylesheet" type="text/css"/>
    <!-- JavaScripts-->
    <script type="text/javascript" src="{{asset('js_blog/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('js_blog/s3Slider.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#slider').s3Slider({
                timeOut: 1600
            });
        });
    </script>

</head>
<body>

<div id="templatemo_wrapper">

    <div id="templatemo_menu">

        <ul>
            <li><a href="index.html" class="current">Blog</a></li>
            <li><a href="portfolio.html">Portfolio</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>

    </div> <!-- end of templatemo_menu -->

    <div id="templatemo_left_column">

        <div id="templatemo_header">

            <div id="site_title">
                <h1><a href="http://www.templatemo.com" target="_parent">Clean <strong>Blog</strong><span>Free HTML-CSS Template</span></a>
                </h1>
            </div><!-- end of site_title -->

        </div> <!-- end of header -->

        <div id="templatemo_sidebar">

            <div id="templatemo_rss">

                <a href="#">SUBSCRIBE NOW <br/><span>to our rss feed</span></a>

            </div>

            <h4>Categories</h4>
            <ul class="templatemo_list">
                <li><a href="http://www.templatemo.com/page/1" target="_parent">Curabitur sed</a></li>
                <li><a href="http://www.templatemo.com/page/2" target="_parent">Praesent adipiscing</a></li>
                <li><a href="http://www.templatemo.com/page/3" target="_parent">Duis sed justo</a></li>
                <li><a href="http://www.templatemo.com/page/4" target="_parent">Mauris vulputate</a></li>
                <li><a href="#">Nam auctor</a></li>
                <li><a href="#">Aliquam quam</a></li>
            </ul>

            <div class="cleaner_h40"></div>

            <h4>Friends</h4>
            <ul class="templatemo_list">
                <li><a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a></li>
                <li><a href="http://www.flashmo.com" target="_parent">Flash Templates</a></li>
                <li><a href="http://www.flashmo.com/store" target="_parent">Premium Themes</a></li>
                <li><a href="http://www.webdesignmo.com/blog" target="_parent">Web Design Blog</a></li>
                <li><a href="http://www.koflash.com" target="_parent">Flash Web Gallery</a></li>
                <li><a href="#">Curabitur sed lacinia</a></li>
                <li><a href="#">Vestibulum laoreet tincidunt</a></li>
                <li><a href="#">Nullam nec mi enim</a></li>
                <li><a href="#">Aliquam quam nulla</a></li>
                <li><a href="#">Curabitur non felis massa</a></li>
            </ul>

        </div> <!-- end of templatemo_sidebar -->

    </div> <!-- end of templatemo_left_column -->

    <div id="templatemo_right_column">

        <div id="featured_project">
            <div id="slider">
                <ul id="sliderContent">
                    <li class="sliderImage">
                        <a href=""><img src="{{asset('img/blog/slider/1.jpg')}}" alt="1"/></a>
                        <span class="top"><strong>Project 1</strong><br/>Suspendisse turpis arcu, dignissim ac laoreet a, condimentum in massa.</span>
                    </li>
                    <li class="sliderImage">
                        <a href=""><img src="{{asset('img/blog/slider/2.jpg')}}" alt="2"/></a>
                        <span class="bottom"><strong>Project 2</strong><br/>uisque eget elit quis augue pharetra feugiat.</span>
                    </li>
                    <li class="sliderImage">
                        <img src="{{asset('img/blog/slider/3.jpg')}}" alt="3"/>
                        <span class="left"><strong>Project 3</strong><br/>Sed et quam vitae ipsum vulputate varius vitae semper nunc.</span>
                    </li>
                    <li class="sliderImage">
                        <img src="{{asset('img/blog/slider/4.jpg')}}" alt="4"/>
                        <span class="right"><strong>Project 4</strong><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                    </li>
                    <li class="clear sliderImage"></li>
                </ul>
            </div>
        </div>

        <div id="templatemo_main">

          @yield('content_blog')

        </div>

        <div class="cleaner"></div>
    </div>
    <!-- end of templatemo_main -->
    <div class="cleaner_h20"></div>

    <div id="templatemo_footer">

        Copyright © 2048 <a href="#">Your Company Name</a> |
        <a href="http://www.iwebsitetemplate.com" target="_parent">Website Templates</a> by <a
            href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>

    </div>

    <div class="cleaner"></div>
</div> <!-- end of warpper -->

</body>
</html>

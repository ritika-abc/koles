<style>
        @media (max-width: 991.98px) {
            #cssmenu ul {
                border: 1px solid rgba(128, 128, 128, 0.5);
                z-index: 999999;
                position: absolute;
                background: white;
                padding: 0px 10px;
            }
        }
    </style>
    <header>
        <style>
            .head-top {
                background-image: url(image/banner/gold.jpg);
                /* background-color: #fff; */
                padding: 5px 0;
                background-size: cover;
            }

            .head-bttm {
                padding: 0px 0;
                margin-bottom: 5px;
            }
        </style>
        <div class="head-top">
            <div class="container-fluid d-flex align-items-center justify-content-between">
                <ul class="top-social">
                    <li><a href="" target="_blank"><i class="fa fa-facebook" style="color:white;"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-instagram" style="color:white;"></i></a></li>
                    <li><a href="" target="_blank"><i class="fa fa-linkedin" style="color:white;"></i></a></li>
                </ul>
                
            </div>
        </div>
        <div class="head-bttm">
            <div class="container-fluid d-flex align-items-center justify-content-between">
                <div class="logo py-3">
                    <a href="index.html"><img class="img- rounded " height="70px" width="150px" src="image/logo.jpg" alt="" /></a>
                    <!-- <a href="index.php"><h5 class="text-dark fw-bold">Koles </h5></a> -->
                </div>
                <div id="cssmenu">
                    <ul>
                        <li><a href="index.php">Home </a>
                        </li>
                        <li><a href="">About Us </a>
                        </li>
                        <!-- <li><a href="product.html">Product <i class="fa fa-angle-down"></i> </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item"
                                        href="https://bappl.in/product?cat=kaima-rice&amp;pci=1">Kaima Products</a></li>
                                <li><a class="dropdown-item"
                                        href="https://bappl.in/product?cat=basmati-rice&amp;pci=2">Basmati Products</a>
                                </li>
                                <li><a class="dropdown-item" href="product.html">View All Products</a></li>
                            </ul>
                        </li> -->
                        <li><a href="">Our Products </a>
                        </li>
                        <li><a href="">Gallery </a>
                        </li>
                        

                        <li><a href="">Contact Us </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <style>
        .owl-carousel .owl-nav.disabled {
            display: block;
        }

        .comp-bx {
            margin-bottom: 8px;
        }
    </style>
    <script src="../code.jquery.com/jquery-2.0.0.js"></script>
    <style>
        .heart {
            position: relative;
            /* width: 150px;
            height: 150px; */
            margin: 10px;

            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            -moz-transform: scale(1);
            transform: scale(1);
            -webkit-transform-origin: center center;
            -moz-transform-origin: center center;
            -ms-transform-origin: center center;
            -o-transform-origin: center center;
            transition: all 1s;
        }

        .heart.css {
            -webkit-animation-delay: 1s;
            -moz-animation-delay: 1s;
            -ms-animation-delay: 1s;
            -o-animation-delay: 1s;
            animation-dely: 1s;
        }

        .heart.animated {
            -webkit-animation: 1600ms pulsate infinite alternate ease-in-out;
            -moz-animation: 1600ms pulsate infinite alternate ease-in-out;
            -ms-animation: 1600ms pulsate infinite alternate ease-in-out;
            -o-animation: 1600ms pulsate infinite alternate ease-in-out;
            animation: 1600ms pulsate infinite alternate ease-in-out;
        }

        .heart2.animated {
            -webkit-animation: 2100ms pulsate infinite alternate ease-in-out;
            -moz-animation: 2100ms pulsate infinite alternate ease-in-out;
            -ms-animation: 2100ms pulsate infinite alternate ease-in-out;
            -o-animation: 2100ms pulsate infinite alternate ease-in-out;
            animation: 2100ms pulsate infinite alternate ease-in-out;
        }

        .heart3.animated {
            -webkit-animation: 2600ms pulsate infinite alternate ease-in-out;
            -moz-animation: 2600ms pulsate infinite alternate ease-in-out;
            -ms-animation: 2600ms pulsate infinite alternate ease-in-out;
            -o-animation: 2600ms pulsate infinite alternate ease-in-out;
            animation: 2600ms pulsate infinite alternate ease-in-out;
        }

        .heart:after {
            left: 0;
            -webkit-transform: rotate(45deg);
            -moz-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            -o-transform: rotate(45deg);
            transform: rotate(45deg);
            -webkit-transform-origin: 100% 100%;
            -moz-transform-origin: 100% 100%;
            -ms-transform-origin: 100% 100%;
            -o-transform-origin: 100% 100%;
            transform-origin: 100% 100%;
        }

        /* .heart.css:hover {
  -webkit-transform: scale(2);
  -moz-transform: scale(2);
  -ms-transform: scale(2);
  -o-transform: scale(2);
  transform: scale(2);
  -webkit-animation:'';
  -moz-animation:none;
  -ms-animation:'';
  -o-animation:'';
  animation:'';
} */
        .abt-img::before {
            right: -50px;
        }

        .director-wrap::before {
            background: none;
        }

        .process-title {
            font-size: 50px;
            font-weight: 700;
            color: #242424;
            margin: 0;
            padding: 0 0 15px;
            position: relative;
            text-align: center;
            padding-bottom: 40px;
        }

        .slider {
            padding: 0px 0;
            margin-top: 50px;
        }

        .w3layouts_work_grid_left_pos img {
            height: 314px;
            border: none;
        }

        .testi-bx {
            padding: 0 22px 35px;
        }

        @keyframes pulsate {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.3);
            }

            100% {
                transform: scale(1);
            }
        }

        @-webkit-keyframes pulsate {
            0% {
                -webkit-transform: scale(1);
            }

            50% {
                -webkit-transform: scale(1.3);
            }

            100% {
                -webkit-transform: scale(1);
            }
        }

        @-moz-keyframes pulsate {
            0% {
                -moz-transform: scale(1);
            }

            50% {
                -moz-transform: scale(1.3);
            }

            100% {
                -moz-transform: scale(1);
            }
        }

        @-ms-keyframes pulsate {
            0% {
                -ms-transform: scale(1);
            }

            50% {
                -ms-transform: scale(1.3);
            }

            100% {
                -ms-transform: scale(1);
            }
        }

        @-o-keyframes pulsate {
            0% {
                -o-transform: scale(1);
            }

            50% {
                -o-transform: scale(1.3);
            }

            100% {
                -o-transform: scale(1);
            }
        }

        .shape {
            animation: a 12s infinite linear;
        }

        @keyframes a {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);

            }
        }
    </style>
